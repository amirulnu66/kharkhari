<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicResult extends Model
{
    //
    protected $table="public_results";

 	protected $fillable = [
        'pass_year', 'total_std','gread_aplus','gread_a','pass_presen','exam_type','total_pass','scholarship'
    ];
}
