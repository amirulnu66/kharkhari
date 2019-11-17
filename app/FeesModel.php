<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeesModel extends Model
{
    protected $table="admission_fees";

 	protected $fillable = [
        'class_name','month_fees','session_fees','admission_fees','form_fees'
    ];
}
