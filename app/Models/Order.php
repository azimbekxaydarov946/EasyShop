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
        'address',
        'pay_type',
        'sequence_number',
        'user_id',
        'payme_history_id'
    ];

    public function order_detail()
    {
        return $this->hasOne(OrderDetail::class, 'order_detail_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function payme_history()
    {
        return $this->belongsTo(Payme_history::class, 'payme_history_id', 'id');
    }
}
