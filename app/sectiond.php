<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectiond extends Model
{
    protected $fillable = [
       'user_id', 'month', 'branch', 'year', 'cmf', 'cyf', 'cwf', 'rcd',
    ];
}
