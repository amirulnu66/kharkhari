<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PhotoGallery;
use Session;
use Validator;

class PhotoGalleryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function albumCreate() {
    	return view('admin.photoGallery.gallery-create');
    }
    //gallery photo Insert store data in database
    public function photosInsert(Request $request){
	    	//return $request->all();
  	    $photoTitle = $request->input('photo_title');
  			$galleryPosition = $request->input('gallery_position');
  			//Page model object hear........... 
  			$photoData = new PhotoGallery();
        //file empty cheaking
    if (!empty($request->file('gallery_image'))) {
        //profile picture storing
        $photoFile = $request->file('gallery_image');
        $fileExtension = $photoFile->getClientOriginalExtension();
        $filename = str_random(20).".".$fileExtension;
        $destinationPath = 'assets/galleries/';
        $uploaded = $photoFile->move($destinationPath, $filename);
        $photoData->gallery_image = $filename;
      }
       // input gallery data save  
       $photoData->photo_title = $photoTitle;
       $photoData->gallery_position = $galleryPosition;
       // saving  and checking  
      if($photoData->save()){
          Session::flash('success', 'Thanks for New Data Create');
          return redirect()->back();
        }else{
          Session::flash('failed', 'Unable to perfrom the Action');
          return redirect()->back();
        }

  	}
    //photo gallery list show
    public function galleryPhotosList() {
      $galleries = PhotoGallery::orderBy('id','DESC')->get();
      return view('admin.photoGallery.gallery-list', compact('galleries'));
    }

    public function galleryPhotosEdit($id) {
      $photoInfo = PhotoGallery::where('id', $id)->first();
      return view('admin.photoGallery.gallery-edit', compact('photoInfo'));
    }

       //class topper student data update & post
    public function PhotoGalleryUpdate(Request $request){   
        //return $request->all();
          $galleryId = $request->input('id');
        if(!empty($galleryId)) {
        //image check in update
        if(!empty($request->file('gallery_image'))) {
            //Teacher Image updateing
            $photoFile = $request->file('gallery_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'assets/galleries/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            //include model class PhotoGallery
            $galleyData = PhotoGallery::findOrFail($galleryId);
            $galleyData->gallery_image =$filename;
            $galleyData->update();
          }
          //class model include
          $galleyData = PhotoGallery::findOrFail($galleryId);
          $galleyData->photo_title = $request->input('photo_title');
          $galleyData->gallery_position = $request->input('gallery_position');               
          // insert check & success message
        if($galleyData->update()){
            Session::flash('success', 'Data updated successfully');
            return redirect()->back();
          }else{
            Session::flash('failed', 'Unable to perfrom the Action');
            return redirect()->back();
        } 
        }             
            
    }

      public function photoGalleryDelete($id) {
          $delete = PhotoGallery::find($id)->delete();
        if($delete){
          Session::flash('success', 'Data delete successfully');
          return redirect()->back();
        }else{
          Session::flash('failed', 'Unable to perfrom the Action');
          return redirect()->back();
        }
    }





}
