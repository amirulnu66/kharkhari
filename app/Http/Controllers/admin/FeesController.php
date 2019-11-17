<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FeesModel;
use Session;
use Validator;

class FeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
    	return view('admin.fees.create-fees');
    }
    //fees data insert database
     public function feesInsert(Request $request){
        //validation empty check
        $validator = Validator::make($request->all(), [
           'class_name' => 'required',
           'month_fees' => 'required',
           'session_fees' => 'required',
           'admission_fees' => 'required',
           'form_fees' => 'required',
       ]);
        //validation check
        if($validator->passes()){
        	$className=$request->input('class_name');
            $monthFees=$request->input('month_fees');
        	$sessionFees=$request->input('session_fees');
            $admisionFees=$request->input('admission_fees');
            $formFees=$request->input('form_fees');
            //FeesModel model class object hear........... 
            $feesData = new FeesModel();
       		// input FeesModel deatails  
       		$feesData->class_name = $className;
       		$feesData->month_fees = $monthFees;
       		$feesData->session_fees = $sessionFees;
       		$feesData->admission_fees = $admisionFees;
       		$feesData->form_fees = $formFees;
       // saving  and checking  
        if($feesData->save()){
            Session::flash('success', 'Thanks for New Data Create');
            return redirect()->back();
        }else{
            Session::flash('failed', 'Unable to perfrom the Action');
            return redirect()->back();
            }
        }
    
    }
    //list
    public function feesList() {
    	$feesInfo = FeesModel::all();
    	return view('admin.fees.fees-list', compact('feesInfo'));
    }

    public function feesEdit($id) {
    	$fees = FeesModel::where('id', $id)->first();
    	return view('admin.fees.fees-edit', compact('fees'));
    }
    //student fees data update & post
  	public function feesUpdate(Request $request){   
        	//return $request->all();
          $feesId = $request->input('id');
        if(!empty($feesId)) {
            //class model include
            $stdFeesData = FeesModel::findOrFail($feesId);
            $stdFeesData->class_name =$request->input('class_name');
            $stdFeesData->month_fees =$request->input('month_fees');
            $stdFeesData->session_fees =$request->input('session_fees');        
            $stdFeesData->admission_fees =$request->input('admission_fees');        
            $stdFeesData->form_fees =$request->input('form_fees');        
            // insert check & success message
        if($stdFeesData->update()){
            Session::flash('success', 'Data updated successfully');
            return redirect()->back();
        }else{
            Session::flash('failed', 'Unable to perfrom the Action');
            return redirect()->back();
            } 
        }             
            
    }

    public function feesDelete($id) {
    	FeesModel::find($id)->delete();
    	Session::flash('success', 'Data deleted successfully');
        return redirect()->back();
    }



}
