<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicJob extends Model
{
	//
    protected $table ="job_results";

 	protected $fillable = [
        'applicant_name', 'applicant_roll','last_date','position'
    ];

}
