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
                ->leftJoin('m_unit_kerja', 'm_unit_kerja.id', '=', 'std_users.unit_kerja_id')
                ->select('std_userhasrole.id', 'std_users.nip', 'std_userhasrole.user_id', 'std_users.name as user_name', 'std_userhasrole.role_id', 'std_roles.name as role_name', 'std_users.unit_kerja_id','m_unit_kerja.name as unit_kerja_name', 'std_users.isemployee',app('db')->raw("(CASE WHEN (std_users.isemployee = 1) THEN 'yes' ELSE 'no' END) as isemployee_name"))
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

    static public function deleteByUser($id) {
        $data = app('db')->table('std_userhasrole')->where('user_id', $id)->delete();
        return $data;
    }
    
    static public function updateByUser($user_id, $role_id) {
        $data = app('db')->table('std_userhasrole')->where('user_id', $user_id)->update(["role_id" => $role_id]);
        return $data;
    }
    

}
