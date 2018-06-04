<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Actions extends Model {

    protected $table = 'std_actions';
    protected $fillable = ['name', 'description', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'name' => 'required'
        ];
    }

    static public function search() {
        $query = Actions::select(['id', 'name', 'description', 'created_by', 'updated_by', 'created_at', 'updated_at']);

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

}
