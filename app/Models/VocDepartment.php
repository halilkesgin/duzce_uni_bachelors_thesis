<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocDepartment extends Model
{
    use HasFactory;

    public function rVocational()
    {
        return $this->belongsTo(Vocational::class, 'vocational_id');
    }

    public function rDepartment()
    {
        return $this->belongsTo(VocDepartment::class, 'department_id');
    }

    public function rVocPost()
    {
        return $this->hasMany(VocationalPost::class)->orderBy('id','desc');
    }
}
