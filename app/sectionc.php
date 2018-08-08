<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectionc extends Model
{
   protected $fillable = [
       'user_id', 'month', 'year', 'branch', 'councilm', 'speciala', 'branchp','cspeciala', 'cbranchp',
    ];
}
