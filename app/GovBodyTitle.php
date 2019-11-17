<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GovBodyTitle extends Model
{
    //
     protected $table="managing_titles";

 	protected $fillable = [
        'managing_title','memberin_date','memberout_date'
    ];
}
