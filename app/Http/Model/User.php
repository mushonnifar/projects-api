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

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'name', 'created_by', 'updated_by', 'unit_id'
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
            'username' => 'required|unique:users,username,' . $id,
            'password' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'unit_id' => 'required|numeric'
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
        $query = User::select(['users.id', 'users.name', 'users.username', 'users.email', 'users.unit_id', 'units.name as unit_name', 'users.created_at', 'users.updated_at'])
                ->leftjoin('units', 'units.id', '=', 'users.unit_id');

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
        $data = app('db')->table('userhasrole')
                ->join('users', 'users.id', '=', 'userhasrole.user_id')
                ->join('roles', 'roles.id', '=', 'userhasrole.role_id')
                ->select('userhasrole.id', 'userhasrole.user_id', 'users.name as nama_user', 'userhasrole.role_id', 'roles.name as nama_role')
                ->where('userhasrole.id', $id)
                ->get();

        return $data;
    }
}
