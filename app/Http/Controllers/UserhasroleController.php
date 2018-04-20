<?php

namespace App\Http\Controllers;

use App\Http\Model\Userhasrole;
use Illuminate\Http\Request;

class UserhasroleController extends Controller {

    private $request;

    public function __construct(Request $request) {
        $this->middleware('authentication');
        $this->request = $request;
    }

    public function create(Request $request) {
        $this->validate($request, Userhasrole::rules());

        $identity = $this->getIdentity($request);

        $attributes = $request->all();
        $attributes['created_by'] = $identity['user_id'];
        $model = Userhasrole::create($attributes);

        $response = [
            'status' => 'success',
            'data' => $model,
            'token' => $this->getToken($request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
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
        $model = $this->findModelUpdate($id);

        $this->validate($request, Userhasrole::rules($id));

        $identity = $this->getIdentity($request);

        $attributes = $request->all();
        $attributes['updated_by'] = $identity['user_id'];
        $model->update($attributes);

        $response = [
            'status' => 'success',
            'data' => $model,
            'token' => $this->getToken($request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function deleteRecord($id) {
        $model = $this->findModelUpdate($id);
        $model->delete();

        $response = [
            'status' => 'success',
            'data' => $model,
            'message' => 'Removed successfully.',
            'token' => $this->getToken($this->request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function index() {
        $models = Userhasrole::search();

        $response = $models;
        $response['token'] = $this->getToken($this->request);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function getByUser($id) {
        $model = $this->findByUser($id);
        $response = [
            'status' => 'success',
            'data' => $model,
            'token' => $this->getToken($this->request)
        ];
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function findModel($id) {

        $model = Userhasrole::getById($id);
        if (count($model) < 1) {
            $response = [
                'status' => 'errors',
                'message' => "Invalid Record"
            ];

            response()->json($response, 400, [], JSON_PRETTY_PRINT)->send();
            die;
        }
        return $model;
    }

    public function findModelUpdate($id) {
        $model = Userhasrole::find($id);
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

    public function findByUser($id) {

        $model = Userhasrole::getByUser($id);
        if (count($model) < 1) {
            $response = [
                'status' => 'errors',
                'message' => "Invalid Record"
            ];

            response()->json($response, 400, [], JSON_PRETTY_PRINT)->send();
            die;
        }
        return $model;
    }

}
