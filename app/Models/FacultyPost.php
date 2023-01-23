<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyPost extends Model
{
    use HasFactory;

    public function rDepartment()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

}
