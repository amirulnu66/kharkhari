<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PublicJob;
use Session;

class PublicJobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
    	return view('admin.jobApplicantResult.applicant-create-result');
    }
    
    // job Result Insert Insert store data in database
    public function jobResultInsert(Request $request){
  	   $applicantName= $request->input('applicant_name');
  	   $applicantRoll = $request->input('applicant_roll');
  	   $date = $request->input('last_date');
  	   $position = $request->input('position');
  	   //PublicJob model object hear........... 
  	   $applicantData = new PublicJob();
       // input job result list data save  
       $applicantData->applicant_name = $applicantName;
       $applicantData->applicant_roll = $applicantRoll;
       $applicantData->last_date = $date;
       $applicantData->position = $position;
       // saving  and checking  
      if($applicantData->save()){
          Session::flash('success', 'Thanks for New Data Create');
          return redirect()->back();
        }else{
          Session::flash('failed', 'Unable to perfrom the Action');
          return redirect()->back();
        }

  	}

  	//job application result list
  	public function applicationMeritList() {
  		$applicantInfo = PublicJob::where('position', 0)->get();
  		return view('admin.jobApplicantResult.applicant-merit-list', compact('applicantInfo'));
  	}
  	//job application result list
  	public function applicationWaitingList() {
  		$applicantInfo = PublicJob::where('position', 1)->get();
  		return view('admin.jobApplicantResult.applicant-waiting-list', compact('applicantInfo'));
  	}

  	//application result edit
  	public function applicationResultEdit($id) {
  		$applicantResult = PublicJob::where('id',$id)->first();
  		return view('admin.jobApplicantResult.applicant-result-edit', compact('applicantResult'));
  	}

  	//application result data update & post
  	public function applicationResultUpdate(Request $request){   
        $applicantId = $request->input('id');
        if(!empty($applicantId)) {
	          //class model include
	          $resultData = PublicJob::findOrFail($applicantId);
	          $resultData->applicant_name =$request->input('applicant_name');
	          $resultData->applicant_roll =$request->input('applicant_roll');        
	          $resultData->last_date =$request->input('last_date');                               
	          // insert check & success message
            if($resultData->update()){
                Session::flash('success', 'Data updated successfully');
                return redirect()->back();
            }else{
                Session::flash('failed', 'Unable to perfrom the Action');
                return redirect()->back();
            } 
        }             
            
    }
    //data delete
    public function applicantResultDelete($id) {
    	PublicJob::find($id)->delete();
    	Session::flash('success', 'Data deleted successfully');
        return redirect()->back();
    }

}
