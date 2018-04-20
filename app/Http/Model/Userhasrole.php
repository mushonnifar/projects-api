<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Userhasrole extends Model {

    protected $table = 'userhasrole';
    protected $fillable = ['user_id', 'role_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'user_id' => 'required|numeric',
            'role_id' => 'required|numeric'
        ];
    }

    static public function search() {

        $query = app('db')->table('userhasrole')
                ->join('users', 'users.id', '=', 'userhasrole.user_id')
                ->join('roles', 'roles.id', '=', 'userhasrole.role_id')
                ->select('userhasrole.id', 'userhasrole.user_id', 'users.name as nama_user', 'userhasrole.role_id', 'roles.name as nama_role');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('userhasrole')
                ->join('users', 'users.id', '=', 'userhasrole.user_id')
                ->join('roles', 'roles.id', '=', 'userhasrole.role_id')
                ->select('userhasrole.id', 'userhasrole.user_id', 'users.name as nama_user', 'userhasrole.role_id', 'roles.name as nama_role')
                ->where('userhasrole.id', $id)
                ->get();

        return $data;
    }
    
    static public function getByIdFirst($id) {
        $data = app('db')->table('userhasrole')
                ->join('users', 'users.id', '=', 'userhasrole.user_id')
                ->join('roles', 'roles.id', '=', 'userhasrole.role_id')
                ->select('userhasrole.id', 'userhasrole.user_id', 'users.name as nama_user', 'userhasrole.role_id', 'roles.name as nama_role')
                ->where('userhasrole.id', $id)
                ->first();

        return $data;
    }
    
    static public function getByUser($id) {
        $data = app('db')->table('userhasrole')
                ->join('users', 'users.id', '=', 'userhasrole.user_id')
                ->join('roles', 'roles.id', '=', 'userhasrole.role_id')
                ->select('userhasrole.id', 'userhasrole.user_id', 'users.name as nama_user', 'userhasrole.role_id', 'roles.name as nama_role')
                ->where('userhasrole.user_id', $id)
                ->get();

        return $data;
    }
}
