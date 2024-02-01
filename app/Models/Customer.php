<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'province_id', 'city_id', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}