<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    protected $fillable = [
        'name', 'no_telp', 'alamat', 
    ];

    protected $guard = [];
}
