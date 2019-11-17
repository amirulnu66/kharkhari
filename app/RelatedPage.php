<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelatedPage extends Model
{
   protected $table="related_pages";

 	protected $fillable = [
        'page_slug', 'page_title','page_desc', 'sub_title',
    ];
}
