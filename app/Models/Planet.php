<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    protected $table = 'planets';

    protected $fillable = [
        'name',
        'description',
        'size_km',
        'solar_system',
        'image_url'
    ];

    protected $casts = [
        'size_km' => 'integer'
    ];
}
