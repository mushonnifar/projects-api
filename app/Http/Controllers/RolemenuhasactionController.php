<?php

namespace App\Http\Controllers;

use App\Http\Model\Rolehasmenu;
use App\Http\Model\Rolemenuhasaction;
use App\Http\Model\Userhasrole;
use Illuminate\Http\Request;

class RolemenuhasactionController extends Controller {

    private $request;

    public function __construct(Request $request) {
        $this->middleware('authentication');
        $this->request = $request;
    }

    public function create(Request $request) {
        $this->validate($request, Rolemenuhasaction::rules());

        $identity = $this->getIdentity($request);

        $attributes = $request->all();
        $attributes['created_by'] = $identity['user_id'];
        $model = Rolemenuhasaction::create($attributes);

        $response = [
            'status' => 'success',
            'data' => $model
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function view($id) {
        $model = $this->findModel($id);
        $response = [
            'status' => 'success',
            'data' => $model
        ];
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function update(Request $request, $id) {
        $model = $this->findModelUpdate($id);

        $this->validate($request, Rolemenuhasaction::rules($id));

        $identity = $this->getIdentity($request);

        $attributes = $request->all();
        $attributes['updated_by'] = $identity['user_id'];
        $model->update($attributes);

        $response = [
            'status' => 'success',
            'data' => $attributes
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function delete($id) {
        $this->findModel($id);

        $model = Rolemenuhasaction::find($id);
        $model->delete();

        $response = [
            'status' => 'success',
            'data' => $model,
            'message' => 'Removed successfully.'
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function index() {
        $models = Rolemenuhasaction::search($this->request);

        $response = $models;

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function getByRoleMenu($menu_id) {
        $identity = $this->getIdentity($this->request);
        $user = Userhasrole::getByIdFirst($identity->user_id);
        $model = $this->findModelByMenu($menu_id, $user->role_id);

        $response = [
            'status' => 'success',
            'data' => $model
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function findModel($id) {

        $model = Rolemenuhasaction::getById($id);
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
        $model = Rolemenuhasaction::find($id);
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

    public function findModelByMenu($menu_id, $role_id) {
        $model = Rolehasmenu::getAction($menu_id, $role_id);
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
