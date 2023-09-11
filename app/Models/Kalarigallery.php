<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalarigallery extends Model
{
    use HasFactory;
    protected $fillable = ['package_id','image','ordernumber','text'];

    public function findpackage()
    {
        return $this->belongsTo(Kalaripackages::class, 'package_id');
    }

}
