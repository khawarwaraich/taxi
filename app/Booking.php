<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'customer_id', 'category_id', 'from_location', 'to_location','full_name', 'email', 'phone', 'country', 'note', 'order_total',
        'payment_status'

    ];
}
