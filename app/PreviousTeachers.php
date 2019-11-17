<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreviousTeachers extends Model
{
    //
    protected $table="previous_teachers";

 	protected $fillable = [
        'teacher_name', 'teacher_image','teacher_desi','phone_number',
    ];
}
