<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentspackages extends Model

{
    protected $fillable = ['name','image','Itenarary', 'destination','days','class','includes','excludes', 'packagetype_id','hotel_id','showinhomepage','ordernumber'];

    use HasFactory;
    public function accomodation()
    {
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }

    public function packagetype()
    {
        return $this->belongsTo(Studentspackagestype::class,'packagetype_id');
    }
}
