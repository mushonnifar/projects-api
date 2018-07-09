<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Rolehasroute extends Model {

    protected $table = 'std_rolehasroute';
    protected $fillable = ['route_id', 'role_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'route_id' => 'required|numeric',
            'role_id' => 'required|numeric'
        ];
    }

    static public function search() {
        $query = app('db')->table('std_rolehasroute')
                ->join('std_roles', 'std_roles.id', '=', 'std_rolehasroute.role_id')
                ->join('std_routes', 'std_routes.id', '=', 'std_rolehasroute.route_id')
                ->select('std_rolehasroute.id', 'std_rolehasroute.role_id', 'std_roles.name as role_name', 'std_rolehasroute.route_id', 'std_routes.name as route_name');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('std_rolehasroute')
                ->join('std_routes', 'std_routes.id', '=', 'std_rolehasroute.route_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_rolehasroute.role_id')
                ->select('std_rolehasroute.id', 'std_rolehasroute.route_id', 'std_routes.name as route_name', 'std_rolehasroute.role_id', 'std_roles.name as role_name')
                ->where('std_rolehasroute.id', $id)
                ->get();

        return $data;
    }

    static public function updateData($data, $id) {
        $update = app('db')->table('std_rolehasroute')
                ->where('id', $id)
                ->update($data);

        return $update;
    }
    
    static public function getRoleRouteActione($role_id){
        $data = app('db')->table('std_rolehasroute')
                ->join('std_roleroutehasaction', 'std_roleroutehasaction.roleroute_id');
    }
    
    static public function getPrivilegeByRole($id) {
        $data = app('db')->table('std_rolehasroute')
                ->join('std_routes', 'std_routes.id', '=', 'std_rolehasroute.route_id')
                ->join('std_roleroutehasaction', 'std_roleroutehasaction.roleroute_id', '=', 'std_rolehasroute.id')
                ->join('std_actions', 'std_actions.id', '=', 'std_roleroutehasaction.action_id')
                ->select('std_roleroutehasaction.id', 'std_rolehasroute.route_id', 'std_routes.name as route_name', 'std_roleroutehasaction.action_id', 'std_actions.name as action_name')
                ->where('std_rolehasroute.role_id', $id)
                ->get();

        return $data;
    }

}
