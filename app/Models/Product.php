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
        'price',
        'quentity',
        'image',
        'images',
        'status',
        'description',
        'category_id',
        'warehouse_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id');
    }
    public function cart()
    {
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
    public function review()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'product_id', 'id');
    }
}
