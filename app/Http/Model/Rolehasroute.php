<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Rolehasroute extends Model {

    protected $table = 'rolehasroute';
    protected $fillable = ['route_id', 'role_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'route_id' => 'required|numeric',
            'role_id' => 'required|numeric'
        ];
    }

    static public function search() {
        $query = app('db')->table('rolehasroute')
                ->join('roles', 'roles.id', '=', 'rolehasroute.role_id')
                ->join('routes', 'routes.id', '=', 'rolehasroute.route_id')
                ->select('rolehasroute.id', 'rolehasroute.role_id', 'roles.name as nama_role', 'rolehasroute.route_id', 'routes.name as nama_route');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('rolehasroute')
                ->join('routes', 'routes.id', '=', 'rolehasroute.route_id')
                ->join('roles', 'roles.id', '=', 'rolehasroute.role_id')
                ->select('rolehasroute.id', 'rolehasroute.route_id', 'routes.name as nama_route', 'rolehasroute.role_id', 'roles.name as nama_role')
                ->where('rolehasroute.id', $id)
                ->get();

        return $data;
    }

    static public function updateData($data, $id) {
        $update = app('db')->table('rolehasroute')
                ->where('id', $id)
                ->update($data);

        return $update;
    }

}
