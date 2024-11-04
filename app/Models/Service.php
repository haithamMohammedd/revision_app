<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

     function user()  {
        return $this->belongsTo(User::class)->withDefault();
    }

     function category()  {
        return $this->belongsTo(Category::class)->withDefault();
    }

    function carts()  {
        return $this->hasMany(Cart::class);
    }

    function order_items() {
        return $this->hasMany(OrderItem::class);
    }
}
