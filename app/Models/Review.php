<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'rating',
        'comment',
        'order_detail_id',
        'product_id',
        'user_id'
    ];

    public function order_detail()
    {
        return $this->belongsTo(OrderDetail::class, 'order_detail_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
