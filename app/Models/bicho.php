<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bicho extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

}
