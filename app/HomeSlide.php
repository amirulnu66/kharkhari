<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeSlide extends Model
{
    //
    protected $table="home_sliders";

 	protected $fillable = [
        'slide_image'
    ];
}
