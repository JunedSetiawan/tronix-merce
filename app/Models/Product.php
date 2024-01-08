<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected  $fillable = ['name', 'description', 'price', 'image', 'stock', 'category_id', 'brand_id', 'production_date'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }


    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query->where('name', 'like', '%' . $val . '%');
    }

    public function scopeFilter($query, $val)
    {
        return $query->where('category_id', $val);
    }

    public function scopeSort($query, $val)
    {
        if ($val == 'asc') {
            return $query->orderBy('price', 'asc');
        } else {
            return $query->orderBy('price', 'desc');
        }
    }

    public function scopeBrand($query, $val)
    {
        return $query->where('brand_id', $val);
    }
}
