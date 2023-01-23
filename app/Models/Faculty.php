<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function rDepartment()
    {
        return $this->hasMany(Department::class)->orderBy('created_at','asc');
    }

    public function rFaculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
}
