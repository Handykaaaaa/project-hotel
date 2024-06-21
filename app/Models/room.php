<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'total_rooms',
        'total_beds',
        'total_bathrooms',
        'total_guests',
        'featured_photo',
    ];

}
