<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoverningBody extends Model
{
    //
    protected $table="governing_members";

 	protected $fillable = [
        'member_name','member_desi','member_image','member_position','phone'
    ];
}
