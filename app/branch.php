<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $fillable = [
       'user_id', 'country', 'zone', 'state', 'city', 'address', 'name'
    ];
}

