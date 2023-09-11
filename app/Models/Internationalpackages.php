<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internationalpackages extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','image','destination','Itenarary','days','class','includes','packagetype_id','hotel_id','showinhomepage','ordernumber'];



    public function accomodation()
       {
           return $this->belongsTo(Hotels::class, 'hotel_id');
       }

       public function packagetype()
       {
           return $this->belongsTo(Internationalpackagestype::class, 'packagetype_id');
     }
}
