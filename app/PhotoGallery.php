<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    //
    protected $table="photo_galleries";

 	protected $fillable = [
        'photo_title', 'gallery_image','gallery_position',
    ];
}
