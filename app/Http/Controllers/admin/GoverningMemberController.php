<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoverningBody;
use App\GovBodyTitle;
use Session;

class GoverningMemberController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function governingBodyCreate() {
    	return view('admin.governingBody.governing-members-create');
    }

    public function governingBodyInsert(Request $request){
    	//return $request->all();
    	$member_name=$request->input('member_name');
        $phone=$request->input('phone');
        $member_desi=$request->input('member_desi');
		$member_position=$request->input('member_position');

		//GoverningBody model class object hear........... 
		$memberData = new GoverningBody;
            //file empty cheaking
        if (!empty($request->file('member_image'))) {
            //profile picture storing
            $photoFile = $request->file('member_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'assets/members/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            $memberData->member_image =$filename;
          }
           // input GoverningBody deatails  
           $memberData->member_name = $member_name;
           $memberData->phone = $phone;
           $memberData->member_desi = $member_desi;
           $memberData->member_position = $member_position;
    	   // saving  and checking  
    	   $membersInfo = $memberData->save(); 

          Session::flash('message','Member data posted successfully');
          return redirect()->back();

    }

    //Governing Members show list
    public function govMembersList(){
    	$govMembersInfo= GoverningBody::all();
    	return view('admin.governingBody.governing-members-list', compact('govMembersInfo'));
    }

    public function govMembersedit($id) {
    	$govMember= GoverningBody::where('id', $id)->first();
    	return view('admin.governingBody.governing-members-edit', compact('govMember'));
    }


    //Governing Members Info update here
    public function govMembersUpdate(Request $request) {
        $govMemberId = $request->input('id');
            if(!empty($govMemberId)) {

        if(!empty($request->file('member_image'))) {
            //Teacher Image updateing
            $photoFile = $request->file('member_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'assets/members/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            //include model class GoverningBody
            $govMemberData = GoverningBody::findOrFail($govMemberId);
            $govMemberData->member_image =$filename;
            $govMemberData->update();

        }

            $govMemberData = GoverningBody::findOrFail($govMemberId);
            $govMemberData->member_name =$request->input('member_name');
            $govMemberData->phone =$request->input('phone');
            $govMemberData->member_desi =$request->input('member_desi');        
            $govMemberData->member_position =$request->input('member_position');        
            $govMemberData->update();

            Session::flash('message', 'Data Updated Successfully');
            return redirect()->back();
            }
    }

    
    //Governing members info delete
    public function govMembersDelete($id) {
    	$govMember=GoverningBody::find($id)->delete();

    	Session::flash('message', 'Data deleted successfully');
        return redirect()->back();
    }


    //Governing member Page title create
    public function governingPagetitle() {
        return view('admin.governingBody.gov-page-title');
    }

    // insert data ajex request here
    //Governing member Page title store data in database
       public function governingTitleInsert(Request $request){       
        $managing_title =$request->input('managing_title');
        $memberin_date =$request->input('memberin_date');
        $memberout_date =$request->input('memberout_date');

        //Page model object hear........... 
        $pageData = new GovBodyTitle;
        // input user Faqs  
        $pageData->managing_title =$managing_title;
        $pageData->memberin_date =$memberin_date;
        $pageData->memberout_date =$memberout_date;
        // saving user message
        $govPageData = $pageData->save(); 
           // checking
        if($govPageData){
            return  ['status'=>'success', 'msg'=>'Data posted successfully'];
        }else{
            return  ['status'=>'failed', 'msg'=>'Unable to perfrom the Action'];
        } 
    } 

    public function governingTitleShow() {
        $pageTitle=GovBodyTitle::first();
        if(!empty($pageTitle))
            return view('admin.governingBody.gov-page-title-edit', compact('pageTitle'));
        else
            return view('admin.governingBody.gov-page-title');
        
    }

    // Update data ajex request here
    //Managing committee page title Update data in database
    public function governingTitleUpdate(Request $request){   
        //return $request->all();
        $pagetitleId = $request->input('id');
            //checking
        if(!empty($pagetitleId)) {
        $titleData =GovBodyTitle::findOrFail($pagetitleId);
        $titleData->managing_title =$request->input('managing_title');
        $titleData->memberin_date =$request->input('memberin_date');
        $titleData->memberout_date =$request->input('memberout_date');

        }

        if(!empty($titleData->update())){
            return  ['status'=>'success', 'msg'=>'Updated Successfully'];
        }else{
            return  ['status'=>'failed', 'msg'=>'Unable to perfrom the Action'];
        }             
            
    }



}
