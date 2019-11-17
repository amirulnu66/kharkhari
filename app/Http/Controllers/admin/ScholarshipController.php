<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scholarship;
use Session;

class ScholarshipController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
    	return view('admin.scholarships.scholarship-student-create');
    }

    //institute settings Insert store data in database
    public function studentScholarshipInsert(Request $request){
	    //return $request->all();
  	    $studentName= $request->input('student_name');
  		$studentRoll = $request->input('student_roll');
  		$studentClass = $request->input('std_class');
  		$year = $request->input('std_year');
  		//Scholarship model object hear........... 
  		$studentData = new Scholarship();
        //file empty cheaking
    if (!empty($request->file('std_image'))) {
        //profile picture storing
        $photoFile = $request->file('std_image');
        $fileExtension = $photoFile->getClientOriginalExtension();
        $filename = str_random(20).".".$fileExtension;
        $destinationPath = 'assets/scholarships/';
        $uploaded = $photoFile->move($destinationPath, $filename);
        $studentData->std_image = $filename;
      }
       // input teachers data save  
       $studentData->student_name = $studentName;
       $studentData->student_roll = $studentRoll;
       $studentData->std_class = $studentClass;
       $studentData->std_year = $year;
       // saving  and checking  
      if($studentData->save()){
          Session::flash('success', 'Thanks for New Data Create');
          return redirect()->back();
        }else{
          Session::flash('failed', 'Unable to perfrom the Action');
          return redirect()->back();
        }

  	}

  	public function studentScholarshipList() {
  		$scholarships = Scholarship::all();
  		return view('admin.scholarships.scholarship-student-list', compact('scholarships'));
  	}
  	//student scholarship edtt
  	public function studentScholarshipEdit($id) {
  		$scholarshipInfo = Scholarship::where('id', $id)->first();
  		return view('admin.scholarships.scholarship-student-edit', compact('scholarshipInfo'));
  	}

  	//scholarship student data update & post
  	public function studentScholarshipUpdate(Request $request){   
        $studentId = $request->input('id');
        if(!empty($studentId)) {
          //image check in update
          if(!empty($request->file('std_image'))) {
              //Teacher Image updateing
              $photoFile = $request->file('std_image');
              $fileExtension = $photoFile->getClientOriginalExtension();
              $filename = str_random(20).".".$fileExtension;
              $destinationPath = 'assets/scholarships/';
              $uploaded = $photoFile->move($destinationPath, $filename);
              //include model class scholarship student
              $studentData = Scholarship::findOrFail($studentId);
              $studentData->std_image = $filename;
              $studentData->update();
            }
	          //class model include
	          $studentData = Scholarship::findOrFail($studentId);
	          $studentData->student_name = $request->input('student_name');
	          $studentData->student_roll = $request->input('student_roll');        
	          $studentData->std_class = $request->input('std_class');                
	          $studentData->std_year = $request->input('std_year');                
	          // insert check & success message
            if($studentData->update()){
                Session::flash('success', 'Date updated successfully');
                return redirect()->back();
            }else{
                Session::flash('failed', 'Unable to perfrom the Action');
                return redirect()->back();
            } 
        }             
            
    }

    public function delete($id) {
    	Scholarship::find($id)->delete();
    	Session::flash('success', 'Date deleted successfully');
        return redirect()->back();
    }



}
