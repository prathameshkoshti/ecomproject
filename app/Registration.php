<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = ['name', 'date', 'occassion', 'check_in', 'check_out', 'phone_no', 'email', 'address',];
    public $timestamps = false;
}

