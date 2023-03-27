<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
    [
        'name',
        'slug',
        'category_id',
        'price',
        'quentity',
        'image',
        'images',
        'status',
        'description',
        'werehouse_id'
    ];
}
