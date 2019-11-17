<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table="school_libraries";

 	protected $fillable = [
        'library_name', 'quenty','library_desc',
    ];
}
