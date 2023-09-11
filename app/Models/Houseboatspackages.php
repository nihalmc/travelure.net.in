<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houseboatspackages extends Model
{
    use HasFactory;

    protected $fillable = [ 'hotelname','image','destination','packagedetails','days','class','roomdetails','facilities','excludes','packagetype_id','hotel_id','showinhomepage','ordernumber'];

    public function package_type()
    {
        return $this->belongsTo(Houseboatspackagestypes::class, 'packagetype_id');
    }
    public function accomodation()
    {
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }
}
