<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherMessage extends Model
{
    //
     protected $table="teacher_messages";

 	protected $fillable = [
        'teacher_name', 'teacher_image','teacher_desc','teacher_type'
    ];
}
