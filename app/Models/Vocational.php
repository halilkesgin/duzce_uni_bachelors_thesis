<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocational extends Model
{
    use HasFactory;

    public function rDepartment()
    {
        return $this->hasMany(VocDepartment::class)->orderBy('created_at','asc');
    }

    public function rVocational()
    {
        return $this->belongsTo(Vocational::class, 'department_id');
    }
}
