<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topper extends Model
{
    //
     protected $table="class_toppers";

 	protected $fillable = [
        'student_name', 'student_class','student_section','student_image','student_position','student_roll'
    ];
}
