<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Keralapackages extends Model
{
    use HasFactory;
 protected $fillable = [ 'name','image','destination','Itenarary','days','class','includes','packagetype_id','hotel_id','showinhomepage','ordernumber'];



 public function accomodation()
    {
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }


    public function Package_types()
        {
            return $this->belongsTo(Package_type::class, 'packagetype_id');
      }



}
