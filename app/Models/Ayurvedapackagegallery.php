<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayurvedapackagegallery extends Model
{
    use HasFactory;
    protected $fillable = ['package_id','image','ordernumber','text'];

    public function ayurvedapackage()
    {
        return $this->belongsTo(Ayurvedapackages::class,'package_id');
    }
}
