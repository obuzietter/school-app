<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MpesaMessage extends Model
{
    //
    protected $fillable = [
        'transaction_code',
        'amount',
        'customer_name',
        'customer_number',
        'address',
        'body',
        'date'
    ];
}
