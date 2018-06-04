<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class AccessTokens extends Model {

    protected $table = 'std_access_tokens';
    protected $fillable = ['token', 'auth_code', 'expires_at', 'user_id', 'app_id'];

    static public function rules($id = NULL) {
        return [
            'user_id' => 'required',
            'token' => 'required|unique:access_tokens,token,' . $id
        ];
    }

    static public function cekAkses($id, $route, $action) {
        settype($action, "string");
        $query = app('db')->table('std_users')
                ->join('std_userhasrole', 'std_userhasrole.user_id', '=', 'std_users.id')
                ->join('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->join('std_rolehasroute', 'std_rolehasroute.role_id', '=', 'std_roles.id')
                ->join('std_routes', 'std_routes.id', '=', 'std_rolehasroute.route_id')
                ->join('std_roleroutehasaction', 'std_roleroutehasaction.roleroute_id', '=', 'std_rolehasroute.id')
                ->join('std_actions', 'std_actions.id', '=', 'std_roleroutehasaction.action_id')
                ->select('std_roleroutehasaction.id', 'std_users.id AS user_id', 'std_users.name AS nama_user', 'std_userhasrole.role_id', 'std_roles.name AS nama_role', 'std_rolehasroute.route_id', 'std_routes.name AS nama_route', 'std_roleroutehasaction.action_id', 'std_actions.name AS nama_action')
                ->where('std_users.isactive', 'y')
                ->where('std_users.id', $id)
                ->where('std_routes.name', $route)
                ->where('std_actions.name', $action)
                ->count();
        return $query;
    }
}
