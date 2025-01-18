<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    //
    protected $fillable = ['name', 'email', 'referral_code', 'students_referred'];
}
