<?php

namespace App\Http\Controllers;

use App\Http\Model\Rolehasmenu;
use App\Http\Model\Rolemenuhasaction;
use Illuminate\Http\Request;

class RolehasmenuController extends Controller {

    private $request;

    public function __construct(Request $request) {
        $this->middleware('authentication');

        $this->request = $request;
    }

    public function action(Request $request) {
        $this->validate($request, Rolehasmenu::rules());
        $identity = $this->getIdentity($request);
        $attributes = $request->all();

        $cekRoleMenu = $this->findRoleMenu($attributes['role_id'], $attributes['menu_id']);
        $roleMenu = $cekRoleMenu;
        if (!$cekRoleMenu) {
            $attributeRoleMenu = array(
                'role_id' => $attributes['role_id'],
                'menu_id' => $attributes['menu_id'],
                'created_by' => $identity['user_id']
            );
            $roleMenu = Rolehasmenu::create($attributeRoleMenu);
        }

        $attributeRoleMenuAction = array(
            'rolemenu_id' => $roleMenu->id,
            'action_id' => $attributes['action_id'],
            'created_by' => $identity['user_id']
        );

        $roleMenuAction = Rolemenuhasaction::create($attributeRoleMenuAction);

        $model = array(
            'id' => $roleMenu->id,
            'role_id' => $roleMenu->role_id,
            'menu_id' => $roleMenu->menu_id,
            'action_id' => $roleMenuAction->action_id,
            'created_by' => $roleMenu->user_id,
            'created_at' => $roleMenuAction->created_at,
            'updated_at' => $roleMenuAction->updated_at,
        );

        $response = [
            'status' => 1,
            'status_txt' => 'success',
            'message' => "Data has been added",
            'data' => $model,
            'token' => $this->getToken($request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function getAction($id) {
        $models = $this->findPrivilegeRole($id);

        $response = [
            'status' => 1,
            'status_txt' => 'success',
            'message' => 'Get data successfully',
            'data' => $models,
            'token' => $this->getToken($this->request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function deleteAction($id) {
        $this->findModelAction($id);

        $model = Rolemenuhasaction::find($id);
        $model->delete();

        $response = [
            'status' => 'success',
            'data' => $model,
            'message' => 'Removed successfully',
            'token' => $this->getToken($this->request)
        ];

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function findModel($id) {

        $model = Rolehasmenu::getById($id);
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

    public function findModelAction($id) {

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
    public function findModelUpdate($id) {
        $model = Rolehasmenu::find($id);
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

    public function findRoleMenu($role_id, $menu_id) {
        $model = Rolehasmenu::where('role_id', $role_id)->where('menu_id', $menu_id)->first();

        return $model;
    }

    public function findPrivilegeRole($id) {
        $model = Rolehasmenu::getPrivilegeByRole($id);
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
