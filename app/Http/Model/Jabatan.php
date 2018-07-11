<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model {

    protected $table = 'm_jabatan';
    protected $fillable = ['name', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'name' => 'required'
        ];
    }

    static public function search() {

        $query = Jabatan::select(['id', 'name', 'created_by', 'updated_by', 'created_at', 'updated_at']);

        $data = $query->get();

        return [
            'status' => 1,
            'status_txt' => 'success',
            'message' => 'Get data successfully',
            'data' => $data
        ];
    }

}
