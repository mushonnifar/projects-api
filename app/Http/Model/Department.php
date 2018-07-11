<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

    protected $table = 'm_departement';
    protected $fillable = ['name', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'name' => 'required'
        ];
    }

    static public function search() {

        $query = app('db')->table('m_departement')
                ->select('*');
        
        $data = $query->get();

        return [
            'status' => 1,
            'status_txt' => 'success',
            'message' => 'Get data successfully',
            'data' => $data
        ];
    }

}
