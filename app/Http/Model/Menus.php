<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model {

    protected $table = 'menus';
    protected $fillable = ['parent', 'name', 'description', 'link', 'order', 'icon', 'isactive', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'name' => 'required'
        ];
    }

    static public function search() {
        $query = Menus::select(['id', 'parent', 'name', 'description', 'link', 'icon', 'order', 'isactive', 'created_by', 'updated_by', 'created_at', 'updated_at']);
        $query->orderBy('id', 'desc');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getParentByRole($id) {
        $data = app('db')->table('users')
                ->join('userhasrole', 'userhasrole.user_id', '=', 'users.id')
                ->join('roles', 'roles.id', '=', 'userhasrole.role_id')
                ->join('rolehasmenu', 'rolehasmenu.role_id', '=', 'roles.id')
                ->join('menus', 'menus.id', '=', 'rolehasmenu.menu_id')
                ->join('rolemenuhasaction', 'rolemenuhasaction.rolemenu_id', '=', 'rolehasmenu.id')
                ->select('menus.id', 'menus.name', 'menus.description', 'menus.link', 'menus.icon', 'menus.order')
                ->where('users.id', $id)
                ->where('rolemenuhasaction.action_id', 2)
                ->where('menus.parent', 0)
                ->orderBy('order', 'asc')
                ->get();

        return $data;
    }

    static public function getChildByRole($id) {
        $data = app('db')->table('users')
                ->join('userhasrole', 'userhasrole.user_id', '=', 'users.id')
                ->join('roles', 'roles.id', '=', 'userhasrole.role_id')
                ->join('rolehasmenu', 'rolehasmenu.role_id', '=', 'roles.id')
                ->join('menus', 'menus.id', '=', 'rolehasmenu.menu_id')
                ->join('rolemenuhasaction', 'rolemenuhasaction.rolemenu_id', '=', 'rolehasmenu.id')
                ->select('menus.id', 'menus.parent', 'menus.name', 'menus.description', 'menus.link', 'menus.icon', 'menus.order')
                ->where('users.id', $id)
                ->where('rolemenuhasaction.action_id', 2)
                ->where('menus.parent', '!=', 0)
                ->orderBy('order', 'asc')
                ->get();

        return $data;
    }

}
