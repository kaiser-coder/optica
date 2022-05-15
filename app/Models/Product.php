<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref',
        'name',
        'description',
        'price',
        'category',
        'made_in',
        'benchmark',
        'production_date'
    ];
}
