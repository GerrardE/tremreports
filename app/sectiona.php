<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectiona extends Model
{
   protected $fillable = [
       'user_id', 'month', 'branch', 'year', 'adults', 'children', 'total',
    ];
}
