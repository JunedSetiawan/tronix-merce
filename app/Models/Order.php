<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'buyer_id',
        'order_date',
        'total_price',
        'status',
    ];

    protected $casts = [
        'order_date' => 'date',
        'total_price' => 'integer',
    ];

    protected $attributes = [
        'status' => 'pending',
    ];

    protected static function booted()
    {
        static::creating(function ($order) {
            $order->order_number();
        });
    }

    public function order_number()
    {
        $this->attributes['order_number'] = 'TRX-' . date('Ymd') . Str::random(5);
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
