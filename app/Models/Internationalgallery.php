<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internationalgallery extends Model
{
    use HasFactory;
    protected $fillable = ['package_id','image','ordernumber','text'];

    public function interpackage()
    {
        return $this->belongsTo(Internationalpackages::class, 'package_id');
    }
}
