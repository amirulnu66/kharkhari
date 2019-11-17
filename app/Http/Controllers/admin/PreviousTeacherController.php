<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PreviousTeachers;
use Session;

class PreviousTeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Previous Teacher create
    public function teachersCreate() {
    	return view('admin.previousTeachers.priveous-teachers-create');
    }

    //Previous Teachers Insert store data in database
    public function teachersInsert(Request $request){
	    //return $request->all();
  	    $teacherName = $request->input('teacher_name');
  		$teacherDesi = $request->input('teacher_desi');
  		$phoneNumber = $request->input('phone_number');
  		//Page model object hear........... 
  		$teachersData = new PreviousTeachers();
        //file empty cheaking
    if (!empty($request->file('teacher_image'))) {
        //profile picture storing
        $photoFile = $request->file('teacher_image');
        $fileExtension = $photoFile->getClientOriginalExtension();
        $filename = str_random(20).".".$fileExtension;
        $destinationPath = 'assets/teachers/';
        $uploaded = $photoFile->move($destinationPath, $filename);
        $teachersData->teacher_image = $filename;
      }
       // input teachers data save  
       $teachersData->teacher_name = $teacherName;
       $teachersData->teacher_desi = $teacherDesi;
       $teachersData->phone_number = $phoneNumber;
       // saving  and checking  
      if($teachersData->save()){
          Session::flash('success', 'Thanks for New Data Create');
          return redirect()->back();
        }else{
          Session::flash('failed', 'Unable to perfrom the Action');
          return redirect()->back();
        }

  	}
  	//previous teachers list show
    public function previousTeachersList() {
      $allTeachers = PreviousTeachers::orderBy('id','ASC')->get();
      return view('admin.previousTeachers.priveous-teachers-list', compact('allTeachers'));
    }

    //previous teachers edit
    public function teachersEdit($id) {
    	$teachersInfo = PreviousTeachers::where('id', $id)->first();
    	return view('admin.previousTeachers.priveous-teachers-edit', compact('teachersInfo'));
    }
    
     //previous teachers data update & post
  	public function teachersInfoUpdate(Request $request){   
        $teacherId = $request->input('id');
        if(!empty($teacherId)) {
          //image check in update
          if(!empty($request->file('teacher_image'))) {
              //Teacher Image updateing
              $photoFile = $request->file('teacher_image');
              $fileExtension = $photoFile->getClientOriginalExtension();
              $filename = str_random(20).".".$fileExtension;
              $destinationPath = 'assets/teachers/';
              $uploaded = $photoFile->move($destinationPath, $filename);
              //include model class PreviousTeachers
              $teacherData = PreviousTeachers::findOrFail($teacherId);
              $teacherData->teacher_image =$filename;
              $teacherData->update();
            }
	          //class model include
	          $teacherData = PreviousTeachers::findOrFail($teacherId);
	          $teacherData->teacher_name =$request->input('teacher_name');
	          $teacherData->teacher_desi =$request->input('teacher_desi');        
	          $teacherData->phone_number =$request->input('phone_number');                
	          // insert check & success message
            if($teacherData->update()){
                Session::flash('success', 'Data updated successfully');
                return redirect()->back();
            }else{
                Session::flash('failed', 'Unable to perfrom the Action');
                return redirect()->back();
            } 
        }             
            
    }
    //teachers information delete method
    public function teachersDelete($id) {
    	$delete = PreviousTeachers::find($id)->delete();
    	if($delete){
            Session::flash('success', 'Data deleted successfully');
            return redirect()->back();
        }else{
            Session::flash('failed', 'Unable to perfrom the Action');
            return redirect()->back();
        } 
    }
}
