<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Rolehasmenu extends Model {

    protected $table = 'rolehasmenu';
    protected $fillable = ['menu_id', 'role_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'menu_id' => 'required|numeric',
            'role_id' => 'required|numeric'
        ];
    }

    static public function search() {

        $query = app('db')->table('rolehasmenu')
                ->join('roles', 'roles.id', '=', 'rolehasmenu.role_id')
                ->join('menus', 'menus.id', '=', 'rolehasmenu.menu_id')
                ->select('rolehasmenu.id', 'rolehasmenu.role_id', 'roles.name as nama_role', 'rolehasmenu.menu_id', 'menus.name as nama_menu');
        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('rolehasmenu')
                ->join('menus', 'menus.id', '=', 'rolehasmenu.menu_id')
                ->join('roles', 'roles.id', '=', 'rolehasmenu.role_id')
                ->select('rolehasmenu.id', 'rolehasmenu.menu_id', 'menus.name as nama_menu', 'rolehasmenu.role_id', 'roles.name as nama_role')
                ->where('rolehasmenu.id', $id)
                ->get();

        return $data;
    }

    static public function updateData($data, $id) {
        $update = app('db')->table('rolehasmenu')
                ->where('id', $id)
                ->update($data);

        return $update;
    }

    static public function getPrivilegeByRole($id) {
        $data = app('db')->table('rolehasmenu')
                ->join('menus', 'menus.id', '=', 'rolehasmenu.menu_id')
                ->join('rolemenuhasaction', 'rolemenuhasaction.rolemenu_id', '=', 'rolehasmenu.id')
                ->join('actions', 'actions.id', '=', 'rolemenuhasaction.action_id')
                ->select('rolemenuhasaction.id', 'rolehasmenu.menu_id', 'menus.name as nama_menu', 'rolemenuhasaction.action_id', 'actions.name as nama_action')
                ->where('rolehasmenu.role_id', $id)
                ->get();

        return $data;
    }
    
    static public function getAction($menu_id, $role_id){
        $data = app('db')->table('rolehasmenu')
                ->join('rolemenuhasaction', 'rolemenuhasaction.rolemenu_id', '=', 'rolehasmenu.id')
                ->join('actions', 'actions.id', '=', 'rolemenuhasaction.action_id')
                ->select('rolemenuhasaction.id', 'rolehasmenu.menu_id', 'rolemenuhasaction.action_id', 'actions.name as nama_action')
                ->where('rolehasmenu.role_id', $role_id)
                ->where('rolehasmenu.menu_id', $menu_id)
                ->get();

        return $data;
    }
}
