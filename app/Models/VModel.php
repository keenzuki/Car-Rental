<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'make_id',
        'name'
    ];
}
