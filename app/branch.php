<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $fillable = [
       'user_id', 'country', 'state', 'city', 'address', 'name'
    ];
}

