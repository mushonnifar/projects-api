<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model {

    protected $table = 'm_unit_kerja';
    protected $fillable = ['name', 'department_id', 'created_by', 'updated_by'];

    static public function rules() {
        return [
            'name' => 'required',
            'department_id' => 'required|integer',
        ];
    }

    static public function search() {

        $query = app('db')->table('m_unit_kerja')
                ->leftJoin('m_department', 'm_unit_kerja.department_id', '=', 'm_department.id')
                ->select('m_unit_kerja.id', 'm_unit_kerja.name', 'm_unit_kerja.department_id', 'm_department.name as department_name', 'm_unit_kerja.created_by', 'm_unit_kerja.updated_by', 'm_unit_kerja.created_at', 'm_unit_kerja.updated_at');

        $data = $query->get();

        return [
            'status' => 1,
            'status_txt' => 'success',
            'message' => 'Get data successfully',
            'data' => $data
        ];
    }

}
