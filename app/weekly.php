<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weekly extends Model
{
    protected $fillable = [
       'user_id', 'week','month', 'branch','year', 'event', 'women', 'men', 'children', 'preacher', 'total',
    ];
}
