<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectionb extends Model
{
    protected $fillable = [
        'user_id', 'month', 'branch','year', 'tithers', 'newmembers',
    ];
}
