<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VideoGallery;

class PhotoGalleryController extends Controller
{
    
    //HistoryWebForm
 	public function photoGallery(){
 		return view('frontend.pages.photo-gallery');
 	}

     	//videoGallery
 	public function videoGallery(){
 		$galleryVideos = VideoGallery::orderBy('id', 'DESC')->get();
 		return view('frontend.pages.video-gallery', compact('galleryVideos'));
 	}
 	
}
