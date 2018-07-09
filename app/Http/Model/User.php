<?php

namespace App\Http\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract {

    use Authenticatable,
        Authorizable;

    protected $table = "std_users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'name', 'unit_kerja_id', 'nip', 'isemployee', 'created_by', 'updated_by'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    static public function rules($id = NULL) {
        return [
            'username' => 'required|unique:std_users,username,' . $id,
            'password' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:std_users,email,' . $id,
            'unit_kerja_id' => 'required',
            'isemployee' => 'required',
            'role_id' => 'required'
        ];
    }

    static public function updateRules($id = NULL) {
        return [
            'username' => 'unique:std_users,username,' . $id,
            'email' => 'email|unique:std_users,email,' . $id,
        ];
    }

    static public function authorizeRules() {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }

    static public function accessTokenRules() {
        return [
            'authorization_code' => 'required',
        ];
    }

    static public function search() {
        $query = app('db')->table('std_users')
                ->leftJoin('std_userhasrole', 'std_users.id', '=', 'std_userhasrole.user_id')
                ->leftJoin('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->leftJoin('m_unit_kerja', 'm_unit_kerja.id', '=', 'std_users.unit_kerja_id')
                ->select('std_users.id','std_users.nip', 'std_users.name', 'std_users.username', 'std_users.email','std_users.isemployee', app('db')->raw("(CASE WHEN (std_users.isemployee = 1) THEN 'yes' ELSE 'no' END) as isemployee_txt"), 'std_users.unit_kerja_id', 'm_unit_kerja.name as unit_kerja_name', 'std_users.updated_at', 'std_users.created_at', 'std_roles.name as role_name', 'std_roles.id as role_id')
                ->where('std_users.isactive', 'y');
//        $query = User::select(['std_users.id', 'std_users.name', 'std_users.username', 'std_users.email', 'std_users.created_at', 'std_users.updated_at']);

        $data = $query->get();

        return [
            'status' => 1,
            'status_txt' => 'success',
            'message' => 'Get data successfully',
            'data' => $data
        ];
    }

    public static function authorize($attributes) {

        $model = User::where(['username' => $attributes['username']])->select(['id', 'username', 'password'])->first();
        if (!$model) {
            return false;
        }

        if (Hash::check($attributes['password'], $model->password)) {
            return $model;
            // Right password
        } else {
            // Wrong one
        }

        return false;
    }

    public static function getById($id){
        $data = app('db')->table('std_userhasrole')
                ->join('std_users', 'std_users.id', '=', 'std_userhasrole.user_id')
                ->join('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->select('std_userhasrole.id', 'std_userhasrole.user_id', 'std_users.name', 'std_userhasrole.role_id', 'std_roles.name as role_name')
                ->where('std_userhasrole.id', $id)
                ->get();

        return $data;
    }
    
    public static function getUserById($id){
        $data = app('db')->table('std_users')
                ->leftJoin('std_userhasrole', 'std_users.id', '=', 'std_userhasrole.user_id')
                ->leftJoin('std_roles', 'std_roles.id', '=', 'std_userhasrole.role_id')
                ->leftJoin('m_unit_kerja', 'm_unit_kerja.id', '=', 'std_users.unit_kerja_id')
                ->select('std_users.id', 'std_users.username', 'std_users.nip', 'std_users.name', 'std_users.email', 'std_userhasrole.role_id', 'std_roles.name as role_name', 'std_users.unit_kerja_id','m_unit_kerja.name as unit_kerja_name', 'std_users.isemployee',app('db')->raw("(CASE WHEN (std_users.isemployee = 1) THEN 'yes' ELSE 'no' END) as isemployee_txt"))
                ->where('std_users.id', $id)
                ->where('std_users.isactive', 'y')
                ->first();

        return $data;
    }
    
    static public function deleteById($id) {
        $data = app('db')->table('std_users')->where('id', $id)->delete();
        return $data;
    }
}
