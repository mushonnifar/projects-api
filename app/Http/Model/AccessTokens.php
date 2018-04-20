<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class AccessTokens extends Model {

    protected $fillable = ['token', 'auth_code', 'expires_at', 'user_id', 'app_id'];

    static public function rules($id = NULL) {
        return [
            'user_id' => 'required',
            'token' => 'required|unique:access_tokens,token,' . $id
        ];
    }

    static public function cekAkses($id, $route, $action) {
        settype($action, "string");
        $query = app('db')->table('users')
                ->join('userhasrole', 'userhasrole.user_id', '=', 'users.id')
                ->join('roles', 'roles.id', '=', 'userhasrole.role_id')
                ->join('rolehasroute', 'rolehasroute.role_id', '=', 'roles.id')
                ->join('routes', 'routes.id', '=', 'rolehasroute.route_id')
                ->join('roleroutehasaction', 'roleroutehasaction.roleroute_id', '=', 'rolehasroute.id')
                ->join('actions', 'actions.id', '=', 'roleroutehasaction.action_id')
                ->select('roleroutehasaction.id', 'users.id AS user_id', 'users.name AS nama_user', 'userhasrole.role_id', 'roles.name AS nama_role', 'rolehasroute.route_id', 'routes.name AS nama_route', 'roleroutehasaction.action_id', 'actions.name AS nama_action')
                ->where('users.isactive', 'y')
                ->where('users.id', $id)
                ->where('routes.name', $route)
                ->where('actions.name', $action)
                ->count();
        return $query;
    }
}
