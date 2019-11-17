<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomeSlide;
use Session;

class HomeSlideController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function homeSlideCreate() {
    	return view('admin.homeSlide.slide-create');
    }


       public function homeSlideInsert(Request $request){
    	//return $request->all();
		//HomeSlide model class hear........... 
		$messageData = new HomeSlide;
            //file empty cheaking
        if (!empty($request->file('slide_image'))) {
            //profile picture storing
            $photoFile = $request->file('slide_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'assets/slider/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            $messageData->slide_image =$filename;
          }
    	   // saving  and checking  
    	  $messageInfo = $messageData->save(); 
          Session::flash('message','Slider Posted Successfully');
          return redirect()->back();

    }

    //list all home slider
    public function homeSlideList() {
    	$homeSliders =HomeSlide::all();
    	return view('admin.homeSlide.slide-list' , compact('homeSliders'));
    }

    //edit home slider
    public function homeSlideEdit($id) {
    	$homeSlider=HomeSlide::where('id',$id)->first();
    	return view('admin.homeSlide.slide-edit', compact('homeSlider'));

    }

    //home slider update
    public function homeSlideUpdate(Request $request) {
	    $slideId = $request->input('id');
	        if(!empty($slideId)) {

	    if(!empty($request->file('slide_image'))) {
	        //Teacher Image updateing
	        $photoFile = $request->file('slide_image');
	        $fileExtension = $photoFile->getClientOriginalExtension();
	        $filename = str_random(20).".".$fileExtension;
	        $destinationPath = 'assets/slider/';
	        $uploaded = $photoFile->move($destinationPath, $filename);
	        //include model class HomeSlide
	        $slideData = HomeSlide::findOrFail($slideId);
	        $slideData->slide_image =$filename;
	        $slideData->update();

	    }

	        Session::flash('message', 'Slider updated successfully');
	        return redirect()->back();
	        }
    }

    public function homeSlideDelete($id) {
    	$deleteSlide =HomeSlide::find($id)->delete();
    	Session::flash('message', 'Data delete successfully');
	    return redirect()->back();

    }




}
