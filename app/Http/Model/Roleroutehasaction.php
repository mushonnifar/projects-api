<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Roleroutehasaction extends Model {

    protected $table = 'roleroutehasaction';
    protected $fillable = ['roleroute_id', 'action_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'roleroute_id' => 'required|numeric',
            'action_id' => 'required|numeric'
        ];
    }

    static public function search() {
        $query = app('db')->table('roleroutehasaction')
                ->join('rolehasroute', 'rolehasroute.id', '=', 'roleroutehasaction.roleroute_id')
                ->join('roles', 'roles.id', '=', 'rolehasroute.role_id')
                ->join('routes', 'routes.id', '=', 'rolehasroute.route_id')
                ->join('actions', 'actions.id', '=', 'roleroutehasaction.action_id')
                ->select('roleroutehasaction.id', 'rolehasroute.role_id', 'roles.name as nama_role', 'rolehasroute.route_id', 'routes.name as nama_route', 'roleroutehasaction.action_id', 'actions.name as nama_action');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('roleroutehasaction')
                ->join('rolehasroute', 'rolehasroute.id', '=', 'roleroutehasaction.roleroute_id')
                ->join('roles','roles.id','=','rolehasroute.role_id')
                ->join('routes', 'routes.id', '=', 'rolehasroute.route_id')
                ->join('actions', 'actions.id', '=', 'roleroutehasaction.action_id')
                ->select('roleroutehasaction.id', 'rolehasroute.role_id', 'roles.name as nama_role', 'rolehasroute.route_id', 'routes.name as nama_route', 'roleroutehasaction.action_id', 'actions.name as nama_action')
                ->where('roleroutehasaction.id', $id)
                ->get();

        return $data;
    }

    static public function updateData($data, $id) {
        $update = app('db')->table('roleroutehasaction')
                ->where('id', $id)
                ->update($data);

        return $update;
    }

}
