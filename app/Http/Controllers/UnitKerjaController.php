<?php

namespace App\Http\Controllers;

use App\Http\Model\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller {

    private $request;

    public function __construct(Request $request) {
        $this->middleware('authentication');
        $this->request = $request;
    }

    public function create(Request $request) {
        $this->validate($request, UnitKerja::rules());

        $identity = $this->getIdentity($request);

        $attributes = $request->all();
        $attributes['created_by'] = $identity['user_id'];
        $model = UnitKerja::create($attributes);

        $response = [
            'status' => 1,
            'status_txt' => "success",
            'message' => "Data has been added",
            'data' => $model,
            'token' => $this->getToken($request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function view($id) {
        $model = $this->findModel($id);
        $response = [
            'status' => 1,
            'status_txt' => "success",
            'message' => "Get data successfully",
            'data' => $model,
            'token' => $this->getToken($this->request)
        ];
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function update(Request $request, $id) {
        $model = $this->findModel($id);

        $this->validate($request, UnitKerja::rules($id));

        $identity = $this->getIdentity($request);

        $attributes = $request->all();
        $attributes['updated_by'] = $identity['user_id'];
        $model->update($attributes);

        $response = [
            'status' => 1,
            'status_txt' => "success",
            'message' => "Data has been updated",
            'data' => $model,
            'token' => $this->getToken($request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function delete($id) {
        $model = $this->findModel($id);
        $model->delete();

        $response = [
            'status' => 1,
            'status_txt' => "success",
            'message' => 'Removed successfully',
            'data' => $model,
            'token' => $this->getToken($this->request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function index() {
        $models = UnitKerja::search();
        
        $response = $models;
        $response['token'] = $this->getToken($this->request);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function findModel($id) {

        $model = UnitKerja::find($id);
        if (!$model) {
            $response = [
                'status' => 0,
                'status_txt' => 'errors',
                'message' => "Invalid Record"
            ];

            response()->json($response, 400, [], JSON_PRETTY_PRINT)->send();
            die;
        }
        return $model;
    }

}
