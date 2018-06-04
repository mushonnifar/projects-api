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
        'username', 'email', 'password', 'name', 'created_by', 'updated_by'
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
            'email' => 'required|email|unique:std_users,email,' . $id
        ];
    }

    static public function updateRules($id = NULL) {
        return [
            'username' => 'required|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
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
        $query = User::select(['std_users.id', 'std_users.name', 'std_users.username', 'std_users.email', 'std_users.created_at', 'std_users.updated_at']);

        $data = $query->get();

        return [
            'status' => 'success',
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
                ->select('std_userhasrole.id', 'std_userhasrole.user_id', 'std_users.name as nama_user', 'std_userhasrole.role_id', 'std_roles.name as nama_role')
                ->where('std_userhasrole.id', $id)
                ->get();

        return $data;
    }
}
