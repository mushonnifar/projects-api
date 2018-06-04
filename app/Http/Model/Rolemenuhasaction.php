<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Rolemenuhasaction extends Model {

    protected $table = 'std_rolemenuhasaction';
    protected $fillable = ['rolemenu_id', 'action_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'rolemenu_id' => 'required|numeric',
            'action_id' => 'required|numeric'
        ];
    }

    static public function search() {
        $query = app('db')->table('std_rolemenuhasaction')
                ->join('std_rolehasmenu', 'std_rolehasmenu.id', '=', 'std_rolemenuhasaction.rolemenu_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_rolehasmenu.role_id')
                ->join('std_menus', 'std_menus.id', '=', 'std_rolehasmenu.menu_id')
                ->join('std_actions', 'std_actions.id', '=', 'std_rolemenuhasaction.action_id')
                ->select('std_rolemenuhasaction.id', 'std_rolehasmenu.role_id', 'std_roles.name as nama_role', 'std_rolehasmenu.menu_id', 'std_menus.name as nama_menu', 'std_rolemenuhasaction.action_id', 'std_actions.name as nama_action');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('std_rolemenuhasaction')
                ->join('std_rolehasmenu', 'std_rolehasmenu.id', '=', 'std_rolemenuhasaction.rolemenu_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_rolehasmenu.role_id')
                ->join('std_menus', 'std_menus.id', '=', 'std_rolehasmenu.menu_id')
                ->join('std_actions', 'std_actions.id', '=', 'std_rolemenuhasaction.action_id')
                ->select('std_rolemenuhasaction.id', 'std_rolehasmenu.role_id', 'std_roles.name as nama_role', 'std_rolehasmenu.menu_id', 'std_menus.name as nama_menu', 'std_rolemenuhasaction.action_id', 'std_actions.name as nama_action')
                ->where('std_rolemenuhasaction.id', $id)
                ->get();

        return $data;
    }

    static public function updateData($data, $id) {
        $update = app('db')->table('std_rolemenuhasaction')
                ->where('id', $id)
                ->update($data);

        return $update;
    }

}
