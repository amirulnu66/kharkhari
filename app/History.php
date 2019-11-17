<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    
    protected $table="institute_histories";

 	protected $fillable = [
        'history_title','history_desc','image'
    ];
}
