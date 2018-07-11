<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model {

    protected $table = 'std_menus';
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
            'status' => 1,
            'status_txt' => 'success',
            'message' => 'Get data successfully',
            'data' => $data
        ];
    }

    static public function getParentByRole($id) {
        $data = app('db')->table('std_users')
                ->join('std_userhasrole', 'std_userhasrole.user_id', '=', 'std_users.id')
                ->join('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->join('std_rolehasmenu', 'std_rolehasmenu.role_id', '=', 'std_roles.id')
                ->join('std_menus', 'std_menus.id', '=', 'std_rolehasmenu.menu_id')
                ->join('std_rolemenuhasaction', 'std_rolemenuhasaction.rolemenu_id', '=', 'std_rolehasmenu.id')
                ->select('std_menus.id', 'std_menus.name', 'std_menus.description', 'std_menus.link', 'std_menus.icon', 'std_menus.order')
                ->where('std_users.id', $id)
                ->where('std_rolemenuhasaction.action_id', 2)
                ->where('std_menus.parent', 0)
                ->orderBy('order', 'asc')
                ->get();

        return $data;
    }

    static public function getChildByRole($id) {
        $data = app('db')->table('std_users')
                ->join('std_userhasrole', 'std_userhasrole.user_id', '=', 'std_users.id')
                ->join('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->join('std_rolehasmenu', 'std_rolehasmenu.role_id', '=', 'std_roles.id')
                ->join('std_menus', 'std_menus.id', '=', 'std_rolehasmenu.menu_id')
                ->join('std_rolemenuhasaction', 'std_rolemenuhasaction.rolemenu_id', '=', 'std_rolehasmenu.id')
                ->select('std_menus.id', 'std_menus.parent', 'std_menus.name', 'std_menus.description', 'std_menus.link', 'std_menus.icon', 'std_menus.order')
                ->where('std_users.id', $id)
                ->where('std_rolemenuhasaction.action_id', 2)
                ->where('std_menus.parent', '!=', 0)
                ->orderBy('order', 'asc')
                ->get();

        return $data;
    }

}
