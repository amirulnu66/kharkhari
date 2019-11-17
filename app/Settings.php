<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table="institute_settings";

 	protected $fillable = [
        'institute_name', 'institute_logo','institute_address','phone_number','email','holiday_list','notice','english_name'
    ];
}
