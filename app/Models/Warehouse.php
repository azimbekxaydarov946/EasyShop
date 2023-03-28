<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
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

    public function product()
    {
        return $this->hasOne(Product::class, 'warehouse_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
