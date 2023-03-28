<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
    [
        'name',
        'slug',
        'parent_id',
        'image',
        'icon'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    public function ware_house()
    {
        return $this->hasMany(Warehouse::class, 'category_id', 'id');
    }
}
