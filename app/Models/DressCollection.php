<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DressCollection extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'name',
        'price',
        'rating',
    ];

}
