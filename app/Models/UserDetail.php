<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
    [
        'user_id',
        'first_name',
        'last_name',
        'birthday',
        'address',
        'profile_photo_path'
    ];
}
