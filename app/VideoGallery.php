<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    protected $table="video_galleries";

 	protected $fillable = [
        'video_title', 'video_image','video_url','video_position',
    ];
}
