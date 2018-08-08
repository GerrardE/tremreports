<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cg12 extends Model
{
    protected $fillable = [
       'user_id', 'country', 'state', 'city', 'address', 'branch', 'name'
    ];
}
