<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Hotels extends Model
{
    use HasFactory;

    protected $fillable = ['destination_id','title', 'image', 'text','plaintext','facilities','roomtype','photo_service','rooms','webpage','reservation','showinhomepage','ordernumber','rooms_details','link','popularplaces','excludes'];

    public function destination()
    {
        return $this->belongsTo(Destinations::class, 'destination_id');
    }


}
