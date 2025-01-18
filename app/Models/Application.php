<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $guarded = [];

    public function marketer()
    {
        return $this->belongsTo(Marketer::class, 'referral_code', 'referral_code');
    }

}
