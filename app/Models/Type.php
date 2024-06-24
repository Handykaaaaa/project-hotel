<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'room_type',
        'room_description',
        'featured_photo',
        'price_per_night',
        'capacity',
        'facility',
    ];
}
