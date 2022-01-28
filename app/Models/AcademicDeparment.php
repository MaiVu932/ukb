<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Class;

class AcademicDeparment extends Model
{
    use HasFactory;

    public function academic() {
        return $this->hasOne(Academic::class);
    }

    public function classes()
    {
        $this->hasMany('App\Models\Class', 'academic_department_id', 'id');
    }

}
