<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houseboatspackagegallery extends Model
{
    use HasFactory;
    protected $fillable = ['package_id','image','ordernumber','text'];

    public function housepackage()
    {
        return $this->belongsTo(Houseboatspackages::class, 'package_id');
    }
}
