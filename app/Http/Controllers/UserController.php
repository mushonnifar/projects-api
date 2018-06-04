<?php

namespace App\Http\Controllers;

use App\Http\Model\User;
use App\Http\Model\AccessTokens;
use App\Http\Model\Userhasrole;
use App\Http\Model\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    private $request;

    public function __construct(Request $request) {
        /*
         * midleware authentication berikut bertujuan untuk memberi batasan akses user
         * elemen di 'except' merupakan method/function yang tidak diberikan autentikasi
         */
        $this->middleware(
                'authentication', ['except' => ['login']]
        );
        $this->request = $request;
    }

    public function login(Request $request) {
        $this->validate($request, User::authorizeRules());

        if ($model = User::authorize($request->all())) {

            $messageLogin = $this->findUserLogin($model->id);

            $token = $this->createAccesstoken($model->id, $request->ip());

            $response = [
                'status' => "success",
                'message' => $messageLogin,
                'token' => $token->token,
                'expires_at' => date('l jS \of F Y h:i:s A', $token->expires_at + (3600 * 7))
            ];

            return response()->json($response, 200, [], JSON_PRETTY_PRINT);
        } else {

            $response = [
                'status' => "errors",
                'message' => "Username or Password is wrong"
            ];

            return response()->json($response, 400, [], JSON_PRETTY_PRINT);
        }
    }

    public function create(Request $request) {
        $this->validate($request, User::rules());

        $attributes = $request->all();
        $identity = $this->getIdentity($request);

        $attributes['password'] = Hash::make($attributes['password']);
        $attributes['created_by'] = $identity->user_id;

        $model = User::create($attributes);

        if (isset($attributes['role_id'])) {
            $attributeUser = ["user_id" => $model->id, "role_id" => $attributes['role_id']];
            Userhasrole::create($attributeUser);
        }

        $response = [
            'status' => "success",
            'message' => "data has been added",
            'data' => $model,
            'token' => $this->getToken($request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function logout(Request $request) {
        $token = $this->getAccessToken($request);

        $model = AccessTokens::where(['token' => $token])->first();

        if ($model->delete()) {
            $response = [
                'status' => "success",
                'message' => "Logged Out Successfully"
            ];
            return response()->json($response, 200, [], JSON_PRETTY_PRINT);
        } else {
            $response = [
                'status' => "errors",
                'message' => "Invalid request"
            ];
            return response()->json($response, 400, [], JSON_PRETTY_PRINT);
        }
    }

    public function view($id) {
        $model = $this->findModel($id);
        $response = [
            'status' => 'success',
            'data' => $model,
            'token' => $this->getToken($this->request)
        ];
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function update(Request $request, $id) {
        $identity = $this->getIdentity($request);

        $model = $this->findModel($id);
        $this->validate($request, User::updateRules($id));

        $model->username = $request->input('username');
        $new_password = $request->input('password');

        $response = [
            'status' => 'success',
        ];

        if (!empty($new_password)) {
            $model->password = Hash::make($new_password);
        }
        $name = $request->input('name');
        $email = $request->input('email');
        if (!empty($name)) {
            $model->name = $name;
        }
        if (!empty($email)) {
            $model->email = $email;
        }

        $model->updated_by = $identity->user_id;
        $model->save();

        $response['data'] = $model;
        $response['token'] = $this->getToken($request);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function delete($id) {
        $model = $this->findModel($id);
        $model->delete();

        $response = [
            'status' => 'success',
            'message' => 'Removed successfully.',
            'data' => $model,
            'token' => $this->getToken($this->request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function index() {
        $response = User::search();
        $response['token'] = $this->getToken($this->request);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function me() {
        $identity = $this->getIdentity($this->request);
        $data = Userhasrole::getById($identity->user_id);

        unset($data['password']);

        $response = [
            'status' => 'success',
            'data' => $data
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    private function findModel($id) {

        $model = User::find($id);
        if (!$model) {
            $response = [
                'status' => 'errors',
                'message' => "Invalid Record"
            ];

            response()->json($response, 400, [], JSON_PRETTY_PRINT)->send();
            die;
        }
        return $model;
    }

    private function createAccesstoken($user_id, $ipaddress) {
        $token_timeout = Token::where('id', 1)->first();

        $model = new AccessTokens();

        $model->token = Hash::make(uniqid());

        $model->expires_at = time() + (60 * $token_timeout->valid_time);

        $model->user_id = $user_id;

        $model->ipaddress = $ipaddress;

        $model->created_at = time();

        $model->updated_at = time();

        $model->save();

        return ($model);
    }

    private function getAccessToken($request) {
        $headers = $request->headers->all();
        $token = false;
        if (!empty($headers['x-access-token'][0])) {
            $token = $headers['x-access-token'][0];
        } else if ($request->input('access_token')) {
            $token = $request->input('access_token');
        }

        return $token;
    }

    private function findUserLogin($id) {
        $model = AccessTokens::where(['user_id' => $id])->latest()->first();
        $message = "login successfully";

        if ($model) {
            if ($model->expires_at > time()) {
                $message = "you're still logged in";
            }
        }
        return $message;
    }

}
