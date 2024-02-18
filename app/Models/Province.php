<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customers()
    {
        return $this->hasMany(Customer::class, 'province_id');
    }
}
