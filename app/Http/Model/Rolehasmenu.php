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
                ->select('std_rolehasmenu.id', 'std_rolehasmenu.role_id', 'std_roles.name as role_name', 'std_rolehasmenu.menu_id', 'std_menus.name as menu_name');
        $data = $query->get();

        return [
            'status' => 1,
            'status_txt' => 'success',
            'message' => 'Get data successfully',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('std_rolehasmenu')
                ->join('std_menus', 'std_menus.id', '=', 'std_rolehasmenu.menu_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_rolehasmenu.role_id')
                ->select('std_rolehasmenu.id', 'std_rolehasmenu.menu_id', 'std_menus.name as menu_name', 'std_rolehasmenu.role_id', 'std_roles.name as role_name')
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
        $data = app('db')->table('std_rolehasmenu')
                ->join('std_menus', 'std_menus.id', '=', 'std_rolehasmenu.menu_id')
                ->join('std_rolemenuhasaction', 'std_rolemenuhasaction.rolemenu_id', '=', 'std_rolehasmenu.id')
                ->join('std_actions', 'std_actions.id', '=', 'std_rolemenuhasaction.action_id')
                ->select('std_rolemenuhasaction.id', 'std_rolehasmenu.menu_id', 'std_menus.name as menu_name', 'std_rolemenuhasaction.action_id', 'std_actions.name as action_name')
                ->where('std_rolehasmenu.role_id', $id)
                ->get();

        return $data;
    }
    
    static public function getAction($menu_id, $role_id){
        $data = app('db')->table('std_rolehasmenu')
                ->join('std_rolemenuhasaction', 'std_rolemenuhasaction.rolemenu_id', '=', 'std_rolehasmenu.id')
                ->join('std_actions', 'std_actions.id', '=', 'std_rolemenuhasaction.action_id')
                ->select('std_rolemenuhasaction.id', 'std_rolehasmenu.menu_id', 'std_rolemenuhasaction.action_id', 'std_actions.name as action_name')
                ->where('std_rolehasmenu.role_id', $role_id)
                ->where('std_rolehasmenu.menu_id', $menu_id)
                ->get();

        return $data;
    }
}
