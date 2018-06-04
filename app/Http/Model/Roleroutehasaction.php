<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Roleroutehasaction extends Model {

    protected $table = 'std_roleroutehasaction';
    protected $fillable = ['roleroute_id', 'action_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'roleroute_id' => 'required|numeric',
            'action_id' => 'required|numeric'
        ];
    }

    static public function search() {
        $query = app('db')->table('std_roleroutehasaction')
                ->join('std_rolehasroute', 'std_rolehasroute.id', '=', 'std_roleroutehasaction.roleroute_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_rolehasroute.role_id')
                ->join('std_routes', 'std_routes.id', '=', 'std_rolehasroute.route_id')
                ->join('std_actions', 'std_actions.id', '=', 'std_roleroutehasaction.action_id')
                ->select('std_roleroutehasaction.id', 'std_rolehasroute.role_id', 'std_roles.name as nama_role', 'std_rolehasroute.route_id', 'std_routes.name as nama_route', 'std_roleroutehasaction.action_id', 'std_actions.name as nama_action');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('std_roleroutehasaction')
                ->join('std_rolehasroute', 'std_rolehasroute.id', '=', 'std_roleroutehasaction.roleroute_id')
                ->join('std_roles','std_roles.id','=','std_rolehasroute.role_id')
                ->join('std_routes', 'std_routes.id', '=', 'std_rolehasroute.route_id')
                ->join('std_actions', 'std_actions.id', '=', 'std_roleroutehasaction.action_id')
                ->select('std_roleroutehasaction.id', 'std_rolehasroute.role_id', 'std_roles.name as nama_role', 'std_rolehasroute.route_id', 'std_routes.name as nama_route', 'std_roleroutehasaction.action_id', 'std_actions.name as nama_action')
                ->where('std_roleroutehasaction.id', $id)
                ->get();

        return $data;
    }

    static public function updateData($data, $id) {
        $update = app('db')->table('std_roleroutehasaction')
                ->where('id', $id)
                ->update($data);

        return $update;
    }

}
