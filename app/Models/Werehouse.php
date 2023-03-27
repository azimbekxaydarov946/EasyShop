<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Werehouse extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
    [
        'name',
        'price',
        'quentity',
        'current_date',
        'start_date',
        'end_date',
        'status',
        'category_id'
    ];
}
