<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    protected $fillable = [
        'nama', 'no_telp', 'alamat', 
    ];

    protected $guard = [];
}
