<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PublicResult;
use Session;
use Validator; 

class PublicExamResultController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	return view('admin.publicExamResult.public-exam-result-create');
    }

	//last3 Year Result Insert store data in database
    public function publicResultInsert(Request $request){
		// validator
       $validator = Validator::make($request->all(), [
           'pass_year' => 'required',
           'total_std' => 'required',
           'pass_presen' => 'required',
           'exam_type' => 'required',
       ]);

       // checking
       if ($validator->passes()) {

			$pass_year =$request->input('pass_year');
			$total_std =$request->input('total_std');
			$total_pass =$request->input('total_pass');
			$gread_aplus =$request->input('gread_aplus');
			$gread_a =$request->input('gread_a');
			$pass_presen =$request->input('pass_presen');
			$exam_type =$request->input('exam_type');
			//Page model object hear........... 
			$resultInfo = new PublicResult;
			// input user Faqs  
			$resultInfo->pass_year =$pass_year;
			$resultInfo->total_std =$total_std;
			$resultInfo->total_pass =$total_pass;
			$resultInfo->gread_aplus =$gread_aplus;
			$resultInfo->gread_a =$gread_a;
			$resultInfo->pass_presen =$pass_presen;
			$resultInfo->exam_type =$exam_type;
		    // saving user new data
		    // checking
			if($resultInfo->save()){
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

	//SSC public exam result list show
	public function sscPublicResultList() {
		$resultList = PublicResult::where('exam_type','0')->get();
		return view('admin.publicExamResult.ssc-exam-result-list', compact('resultList'));
	}
		//SSC Vocational public exam result list show
	public function vocationalResultList() {
		$resultList = PublicResult::where('exam_type','2')->get();
		return view('admin.publicExamResult.vocational-ssc-result-list', compact('resultList'));
	}
		//SSC Vocational public exam result edit
	public function vocationalResultEdit($id) {
		$resultInfo = PublicResult::where('id', $id)->first();	
		return view('admin.publicExamResult.vocational-ssc-result-edit', compact('resultInfo'));
	}

	//JSC public exam result list show
	public function JscpublicResultList() {
		$resultList = PublicResult::where('exam_type','1')->get();
		return view('admin.publicExamResult.jsc-exam-result-list', compact('resultList'));
	}

	//SSC public exam result edit
	public function sscResultEdit($id) {
		// $resultInfo = PublicResult::where('id', $id)->get();
		$sscResultInfo = PublicResult::where('id', $id)->first();	
		return view('admin.publicExamResult.public-ssc-result-edit', compact('sscResultInfo'));
	}

	//JSC public exam result edit
	public function jsclicResultEdit($id) {
		$jscResultInfo = PublicResult::where('id', $id)->first();
		return view('admin.publicExamResult.public-jsc-result-edit', compact('jscResultInfo'));
	}

	//public exam result data update & post
	public function publicExamUpdate(Request $request){   
        //return $request->all();
        $publicExamId = $request->input('id');
          //checking
        if(!empty($publicExamId)) {
        $publicExamData =PublicResult::findOrFail($publicExamId);
        $publicExamData->pass_year =$request->input('pass_year');
        $publicExamData->total_std =$request->input('total_std');
        $publicExamData->total_pass =$request->input('total_pass');
        $publicExamData->gread_aplus =$request->input('gread_aplus');
        $publicExamData->gread_a =$request->input('gread_a');
        $publicExamData->pass_presen =$request->input('pass_presen');

        if($publicExamData->update()){
	       		Session::flash('success', 'Data updated successfully');
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

    public function dateDelete($id) {
    	$delete = PublicResult::find($id)->delete();
    	if($delete){
	       	Session::flash('message', 'Data updated successfully');
			return redirect()->back();
		}else{
		    Session::flash('failed', 'Unable to perfrom the Action');
			return redirect()->back();
	    }
    }



}
