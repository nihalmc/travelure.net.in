<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packagegallery extends Model
{
    use HasFactory;
    protected $fillable = ['package_id','image','ordernumber','text'];

    public function keralapackage()
    {
        return $this->belongsTo(Keralapackages::class, 'package_id');
    }
}
