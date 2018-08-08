<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class g12 extends Model
{
    protected $fillable = [
       'user_id', 'month', 'branch','year', 'week', 'attendance'
    ];
}
