<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;
use Session;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function settingsCreate() {
    	return view('admin.settings.create-settings');
    }

    //institute settings Insert store data in database
    public function settingsInfoInsert(Request $request){
	    //return $request->all();
      $instituteName= $request->input('institute_name');
  	  $instituteEng= $request->input('english_name');
  		$instituteAddress = $request->input('institute_address');
  		$phoneNumber = $request->input('phone_number');
  		$email = $request->input('email');
  		//Settings model object hear........... 
  		$settingsData = new Settings();
        //file empty cheaking
    if (!empty($request->file('institute_logo'))) {
        //profile picture storing
        $photoFile = $request->file('institute_logo');
        $fileExtension = $photoFile->getClientOriginalExtension();
        $filename = str_random(20).".".$fileExtension;
        $destinationPath = 'assets/settings/';
        $uploaded = $photoFile->move($destinationPath, $filename);
        $settingsData->institute_logo = $filename;
      }
       // input teachers data save  
       $settingsData->institute_name = $instituteName;
       $settingsData->english_name = $instituteEng;
       $settingsData->institute_address = $instituteAddress;
       $settingsData->phone_number = $phoneNumber;
       $settingsData->email = $email;
       // saving  and checking  
      if($settingsData->save()){
          Session::flash('success', 'Thanks for New Data Create');
          return redirect()->back();
        }else{
          Session::flash('failed', 'Unable to perfrom the Action');
          return redirect()->back();
        }

  	}

  	public function settingsInfoedit() {
  		$settingsInfo = Settings::first();
  		if(!empty($settingsInfo))
  			return view('admin.settings.settings-update', compact('settingsInfo'));
  		else
  			return view('admin.settings.create-settings');
  	}

  	//previous teachers data update & post
  	public function settingsInfoUpdate(Request $request){   
        $settingsId = $request->input('id');
        if(!empty($settingsId)) {
          //Logo check in update
          if(!empty($request->file('institute_logo'))) {
              //logo Image updateing
              $photoFile = $request->file('institute_logo');
              $fileExtension = $photoFile->getClientOriginalExtension();
              $filename = str_random(20).".".$fileExtension;
              $destinationPath = 'assets/settings/';
              $uploaded = $photoFile->move($destinationPath, $filename);
              //include model class PreviousTeachers
              $settingData = Settings::findOrFail($settingsId);
              $settingData->institute_logo =$filename;
              $settingData->update();
            }
            // public holiday list file
            if(!empty($request->file('holiday_list'))) {
              //holiday file updateing
              $photoFile = $request->file('holiday_list');
              $fileExtension = $photoFile->getClientOriginalExtension();
              $filename = str_random(20).".".$fileExtension;
              $destinationPath = 'assets/settings/';
              $uploaded = $photoFile->move($destinationPath, $filename);
              //include model class PreviousTeachers
              $settingData = Settings::findOrFail($settingsId);
              $settingData->holiday_list =$filename;
              $settingData->update();
            }
	          //class model include
	          $settingData = Settings::findOrFail($settingsId);
            $settingData->institute_name =$request->input('institute_name');
	          $settingData->english_name =$request->input('english_name');
	          $settingData->institute_address =$request->input('institute_address');        
	          $settingData->phone_number =$request->input('phone_number');                
            $settingData->email =$request->input('email');                
	          $settingData->notice =$request->input('notice');                
	          // insert check & success message
            if($settingData->update()){
                Session::flash('success', 'Settings updated successfully');
                return redirect()->back();
            }else{
                Session::flash('failed', 'Unable to perfrom the Action');
                return redirect()->back();
            } 
        }             
            
    }


}
