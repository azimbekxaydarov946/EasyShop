<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
    [
        'start_date',
        'end_date',
        'late_date',
        'status',
        'all_price',
        'delivery_price',
        'user_id',
        'address',
        'pay_type',
        'sequence_number',
        'payme_history_id'
    ];
}
