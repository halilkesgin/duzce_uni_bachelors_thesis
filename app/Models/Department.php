<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function rFaculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }

    public function rDepartment()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function rFacultyPost()
    {
        return $this->hasMany(FacultyPost::class)->orderBy('id','desc');
    }


}
