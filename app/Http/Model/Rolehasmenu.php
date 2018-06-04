<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Rolehasmenu extends Model {

    protected $table = 'std_rolehasmenu';
    protected $fillable = ['menu_id', 'role_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'menu_id' => 'required|numeric',
            'role_id' => 'required|numeric'
        ];
    }

    static public function search() {

        $query = app('db')->table('std_rolehasmenu')
                ->join('std_roles', 'std_roles.id', '=', 'std_rolehasmenu.role_id')
                ->join('std_menus', 'std_menus.id', '=', 'std_rolehasmenu.menu_id')
                ->select('std_rolehasmenu.id', 'std_rolehasmenu.role_id', 'std_roles.name as nama_role', 'std_rolehasmenu.menu_id', 'std_menus.name as nama_menu');
        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('std_rolehasmenu')
                ->join('std_menus', 'std_menus.id', '=', 'std_rolehasmenu.menu_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_rolehasmenu.role_id')
                ->select('std_rolehasmenu.id', 'std_rolehasmenu.menu_id', 'std_menus.name as nama_menu', 'std_rolehasmenu.role_id', 'std_roles.name as nama_role')
                ->where('std_rolehasmenu.id', $id)
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
