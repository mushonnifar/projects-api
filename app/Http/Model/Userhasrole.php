<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Userhasrole extends Model {

    protected $table = 'std_userhasrole';
    protected $fillable = ['user_id', 'role_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'user_id' => 'required|numeric',
            'role_id' => 'required|numeric'
        ];
    }

    static public function search() {

        $query = app('db')->table('std_userhasrole')
                ->join('std_users', 'std_users.id', '=', 'std_userhasrole.user_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->select('std_userhasrole.id', 'std_userhasrole.user_id', 'std_users.name as nama_user', 'std_userhasrole.role_id', 'std_roles.name as nama_role');

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    static public function getById($id) {
        $data = app('db')->table('std_userhasrole')
                ->join('std_users', 'std_users.id', '=', 'std_userhasrole.user_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->select('std_userhasrole.id', 'std_userhasrole.user_id', 'std_users.name as nama_user', 'std_userhasrole.role_id', 'std_roles.name as nama_role')
                ->where('std_userhasrole.id', $id)
                ->get();

        return $data;
    }
    
    static public function getByIdFirst($id) {
        $data = app('db')->table('std_userhasrole')
                ->join('std_users', 'std_users.id', '=', 'std_userhasrole.user_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->select('std_userhasrole.id', 'std_userhasrole.user_id', 'std_users.name as nama_user', 'std_userhasrole.role_id', 'std_roles.name as nama_role')
                ->where('std_userhasrole.id', $id)
                ->first();

        return $data;
    }
    
    static public function getByUser($id) {
        $data = app('db')->table('std_userhasrole')
                ->join('std_users', 'std_users.id', '=', 'std_userhasrole.user_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->select('std_userhasrole.id', 'std_userhasrole.user_id', 'std_users.name as nama_user', 'std_userhasrole.role_id', 'std_roles.name as nama_role')
                ->where('std_userhasrole.user_id', $id)
                ->get();

        return $data;
    }
}
