<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable=[
        'plate',
        'make_id',
        'model_id',
        'price',
        'seats',
        'transmission',
        'fuel',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6'
    ];
}
