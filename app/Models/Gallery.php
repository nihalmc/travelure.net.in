<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['hotels_id', 'image', 'ordernumber'];

    public function hotel()
    {
        return $this->belongsTo(Hotels::class, 'hotels_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destinations::class, 'destination_id');
    }
}
