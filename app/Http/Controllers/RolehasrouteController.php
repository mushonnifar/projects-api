<?php

namespace App\Http\Controllers;

use App\Http\Model\Rolehasroute;
use Illuminate\Http\Request;

class RolehasrouteController extends Controller {
    private $request;

    public function __construct(Request $request) {
        $this->middleware('authentication');
        
        $this->request = $request;
    }

    public function create(Request $request) {
        $this->validate($request, Rolehasroute::rules());

        $identity = $this->getIdentity($request);

        $attributes = $request->all();
        $attributes['created_by'] = $identity['user_id'];
        $model = Rolehasroute::create($attributes);

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
            'status' => 'status',
            'data' => $model,
            'token' => $this->getToken($this->request)
        ];
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function update(Request $request, $id) {
        $model = $this->findModelUpdate($id);

        $this->validate($request, Rolehasroute::rules($id));

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

    public function delete($id) {
        $this->findModel($id);
        
        $model = Rolehasroute::find($id);
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
        $models = Rolehasroute::search();

        $response = $models;
        $response['token'] = $this->getToken($this->request);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function findModel($id) {

        $model = Rolehasroute::getById($id);
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

    public function findModelUpdate($id){
        $model = Rolehasroute::find($id);
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
}
