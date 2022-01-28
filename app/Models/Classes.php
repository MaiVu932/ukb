<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    public function academicDepartment()
    {
        return $this->belongsTo('App\Models\AcademicDeparment', 'academic_department_id', 'id');
    }
}
