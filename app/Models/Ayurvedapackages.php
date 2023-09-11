<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayurvedapackages extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','packagetype_id','PackageDetails','Treatment','days','class','destination','includes','excludes','ordernumber','showinhomepage'];

    public function package_type()
    {
        return $this->belongsTo(Ayurvedapackagetype::class, 'packagetype_id');
    }
}
