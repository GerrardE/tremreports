<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cdownloads extends Model
{
      protected $fillable = [
       'user_id', 'category', 'month', 'year', 'name', 'description', 'url', 
    ];
}