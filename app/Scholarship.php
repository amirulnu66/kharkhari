<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
     protected $table="student_scholarships";

 	protected $fillable = [
        'student_name', 'student_roll','std_image','std_class','std_year'
    ];
}
