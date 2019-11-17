<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VideoGallery;
use Session;

class VideoGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createVideo() {
    	return view('admin.video-gallery.create-video-gallery');
    }

     //video Gallery Insert store data in database
    public function videoGalleryInsert(Request $request){
	    //return $request->all();
  	    $videoTitle= $request->input('video_title');
  		$videoUrl = $request->input('video_url');
  		$videoPosition = $request->input('video_position');
  		//VideoGallery model object hear........... 
  		$videosData = new VideoGallery();
        //file empty cheaking
    if (!empty($request->file('video_image'))) {
        //video picture storing
        $photoFile = $request->file('video_image');
        $fileExtension = $photoFile->getClientOriginalExtension();
        $filename = str_random(20).".".$fileExtension;
        $destinationPath = 'assets/videos/';
        $uploaded = $photoFile->move($destinationPath, $filename);
        $videosData->video_image = $filename;
      }
       // input video data save  
       $videosData->video_title = $videoTitle;
       $videosData->video_url = $videoUrl;
       $videosData->video_position = $videoPosition;
       // saving  and checking  
      if($videosData->save()){
          Session::flash('success', 'Thanks for New Data Create');
          return redirect()->back();
        }else{
          Session::flash('failed', 'Unable to perfrom the Action');
          return redirect()->back();
        }

  	}

  	// video Gallery list
  	public function videoGalleryList() {
  		$videos = VideoGallery::all();
  		return view('admin.video-gallery.video-gallery-list', compact('videos'));
  	}

  	//video gallery edit
  	public function videoGalleryEdit($id) {
  		$galleryVideo = VideoGallery::where('id', $id)->first();
  		return view('admin.video-gallery.video-gallery-edit', compact('galleryVideo'));
  	}

  	//video information update
  	public function galleryVideoUpdate(Request $request){   
        $videoId = $request->input('id');
        if(!empty($videoId)) {
          //image check in update
          if(!empty($request->file('video_image'))) {
              //video background updateing
              $photoFile = $request->file('video_image');
              $fileExtension = $photoFile->getClientOriginalExtension();
              $filename = str_random(20).".".$fileExtension;
              $destinationPath = 'assets/videos/';
              $uploaded = $photoFile->move($destinationPath, $filename);
              //include model class VideoGallery
              $videoData = VideoGallery::findOrFail($videoId);
              $videoData->video_image =$filename;
              $videoData->update();
            }
	          //class model include
	          $videoData = VideoGallery::findOrFail($videoId);
	          $videoData->video_title =$request->input('video_title');
	          $videoData->video_url =$request->input('video_url');        
	          $videoData->video_position =$request->input('video_position');                                
	          // insert check & success message
            if($videoData->update()){
                Session::flash('success', 'Data updated successfully');
                return redirect()->back();
            }else{
                Session::flash('failed', 'Unable to perfrom the Action');
                return redirect()->back();
            } 
        }             
            
    }

    public function galleryVideoDelete($id) {
    	VideoGallery::find($id)->delete();
    	Session::flash('success', 'Data deleted successfully');
        return redirect()->back();
    }
}
