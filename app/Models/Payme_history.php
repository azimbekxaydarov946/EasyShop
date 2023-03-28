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
        'status',
        'paymet_id'
    ];

    public function order()
    {
        return $this->hasMany(Order::class, 'payme_history_id', 'id');
    }
}
