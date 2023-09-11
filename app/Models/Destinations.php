<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'image', 'ordernumber'];

    public function hotels()
{
    return $this->hasMany(Hotels::class, 'destination_id');
}

}
