<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    function user()  {
        return $this->belongsTo(User::class)->withDefault();
    }

    function order_items() {
        return $this->hasMany(OrderItem::class);
    }

    function payments() {
        return $this->hasMany(Payment::class);
    }
}
