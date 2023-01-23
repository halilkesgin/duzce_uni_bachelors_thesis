<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocPost extends Model
{
    use HasFactory;
    public function rDepartment()
    {
        return $this->belongsTo(VocDepartment::class, 'department_id');
    }
}
