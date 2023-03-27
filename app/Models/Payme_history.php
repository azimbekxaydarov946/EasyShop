<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payme_history extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'token',
        'number',
        'expire',
        'paymet_id',
        'status'
    ];
}
