<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Rolemenuhasaction extends Model {

    protected $table = 'rolemenuhasaction';
    protected $fillable = ['rolemenu_id', 'action_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'rolemenu_id' => 'required|numeric',
            'action_id' => 'required|numeric'
        ];
    }

    static public function search() {
        $query = app('db')->table('rolemenuhasaction')
                ->join('rolehasmenu', 'rolehasmenu.id', '=', 'rolemenuhasaction.rolemenu_id')
                ->join('roles', 'roles.id', '=', 'rolehasmenu.role_id')
                ->join('menus', 'menus.id', '=', 'rolehasmenu.menu_id')
                ->join('actions', 'actions.id', '=', 'rolemenuhasaction.action_id')
                ->select('rolemenuhasaction.id', 'rolehasmenu.role_id', 'roles.name as nama_role', 'rolehasmenu.menu_id', 'menus.name as nama_menu', 'rolemenuhasaction.action_id', 'actions.name as nama_action');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('rolemenuhasaction')
                ->join('rolehasmenu', 'rolehasmenu.id', '=', 'rolemenuhasaction.rolemenu_id')
                ->join('roles', 'roles.id', '=', 'rolehasmenu.role_id')
                ->join('menus', 'menus.id', '=', 'rolehasmenu.menu_id')
                ->join('actions', 'actions.id', '=', 'rolemenuhasaction.action_id')
                ->select('rolemenuhasaction.id', 'rolehasmenu.role_id', 'roles.name as nama_role', 'rolehasmenu.menu_id', 'menus.name as nama_menu', 'rolemenuhasaction.action_id', 'actions.name as nama_action')
                ->where('rolemenuhasaction.id', $id)
                ->get();

        return $data;
    }

    static public function updateData($data, $id) {
        $update = app('db')->table('rolemenuhasaction')
                ->where('id', $id)
                ->update($data);

        return $update;
    }

}
