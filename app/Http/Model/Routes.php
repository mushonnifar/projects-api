<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Routes extends Model {

    protected $table = 'std_routes';
    protected $fillable = ['name', 'description', 'isactive', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'name' => 'required'
        ];
    }

    static public function search() {

        $query = Routes::select(['id', 'name', 'description', 'isactive', 'created_by', 'updated_by', 'created_at', 'updated_at']);

        $data = $query->get();

        return [
            'status' => 'success',
            'data' => $data
        ];
    }

}
