<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topper;
use Session;
use Validator;

class ClassTopperController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
    	return view('admin.classToppers.class-topper-create');
    }

    public function classToppersInsert(Request $request){
		//return $request->all();
		//validation empty check
		$validator = Validator::make($request->all(), [
           'student_name' => 'required',
           'student_roll' => 'required',
           'student_class' => 'required',
           'student_position' => 'required',
       ]);

  		if($validator->passes()){

        $studentName=$request->input('student_name');
    		$studentRoll=$request->input('student_roll');
        $studentClass=$request->input('student_class');
    		$studentSection=$request->input('student_section');
    		$studentPosition=$request->input('student_position');
    		//Topper model class object hear........... 
    		$topperData = new Topper;
          //file empty cheaking
    	if (!empty($request->file('student_image'))) {
        //profile picture storing
        $photoFile = $request->file('student_image');
        $fileExtension = $photoFile->getClientOriginalExtension();
        $filename = str_random(20).".".$fileExtension;
        $destinationPath = 'assets/toppers/';
        $uploaded = $photoFile->move($destinationPath, $filename);
        $topperData->student_image =$filename;
      }
       // input Topper deatails  
       $topperData->student_name = $studentName;
       $topperData->student_roll = $studentRoll;
       $topperData->student_class = $studentClass;
       $topperData->student_section = $studentSection;
       $topperData->student_position = $studentPosition;
	   // saving  and checking  
	    if($topperData->save()){
		    Session::flash('success', 'Thanks for New Data Create');
			return redirect()->back();
		}else{
			Session::flash('failed', 'Unable to perfrom the Action');
			return redirect()->back();
		    }
	    }else{
			Session::flash('error', 'Invalid Information');
			return redirect()->back()->withErrors($validator)->withInput();
	    }

    
	}

  public function classToppersList() {
    $toppers = Topper::orderBy('student_class', 'ASC')->orderBy('student_section', 'ASC')->get();
    return view('admin.classToppers.class-topper-list', compact('toppers'));
  }

  public function classToppersEdit($id) {
    $topperInfo = Topper::where('id' ,$id)->first();
    return view('admin.classToppers.class-topper-edit', compact('topperInfo'));
  }

    //class topper student data update & post
  public function classToppersUpdate(Request $request){   
        //return $request->all();
          $topperId = $request->input('id');
        if(!empty($topperId)) {
          //image check in update
          if(!empty($request->file('student_image'))) {
              //Teacher Image updateing
              $photoFile = $request->file('student_image');
              $fileExtension = $photoFile->getClientOriginalExtension();
              $filename = str_random(20).".".$fileExtension;
              $destinationPath = 'assets/toppers/';
              $uploaded = $photoFile->move($destinationPath, $filename);
              //include model class Topper
              $topperData = Topper::findOrFail($topperId);
              $topperData->student_image =$filename;
              $topperData->update();
            }
              //class model include
              $topperData = Topper::findOrFail($topperId);
              $topperData->student_name =$request->input('student_name');
              $topperData->student_roll =$request->input('student_roll');
              $topperData->student_class =$request->input('student_class');        
              $topperData->student_section =$request->input('student_section');        
              $topperData->student_position =$request->input('student_position');        
            // insert check & success message
            if($topperData->update()){
                Session::flash('success', 'Data updated successfully');
                return redirect()->back();
              }else{
                Session::flash('failed', 'Unable to perfrom the Action');
                return redirect()->back();
            } 
        }             
            
    }

    //class topper delete method
     public function toppersDelete($id) {
        $delete = Topper::find($id)->delete();
      if($delete){
        Session::flash('message', 'Data deleted successfully');
        return redirect()->back();
      }else{
        Session::flash('failed', 'Unable to perfrom the Action');
        return redirect()->back();
      }
    }

}
