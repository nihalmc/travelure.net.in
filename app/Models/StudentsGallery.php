<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsGallery extends Model
{
    use HasFactory;
    protected $fillable = ['package_id','image','ordernumber','text'];

    public function findpackage()
    {
        return $this->belongsTo(Studentspackages::class, 'package_id');
    }
}
