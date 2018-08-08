<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectione extends Model
{
    protected $fillable = [
        'user_id', 'month', 'branch', 'year', 'newcells', 'totalnc',
    ];
}
