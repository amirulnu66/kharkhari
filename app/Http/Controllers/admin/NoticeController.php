<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
use Validator;
use Session;

class NoticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function NoticeCreate() {
    	return view('admin.notice.notice-create');
    }
    	//Notice data all insert & save database
    public function NoticeInsert(Request $request){
			//validation empty check
		$validator = Validator::make($request->all(), [
           'notice_title' => 'required',
           'notice_file' => 'mimes:doc,pdf,docx',
       ]);

  		if($validator->passes()){
    		$noticeTitle = $request->input('notice_title');
    		//Notice model class object hear........... 
    		$noticeData = new Notice();
        	//file empty cheaking
    	if(!empty($request->file('notice_file'))) {
	        //PDF,DOC file storing
	        $photoFile = $request->file('notice_file');
	        $fileExtension = $photoFile->getClientOriginalExtension();
	        $filename = str_random(20).".".$fileExtension;
	        $destinationPath = 'assets/notices/';
	        $uploaded = $photoFile->move($destinationPath, $filename);
	        $noticeData->notice_file = $filename;
      }
       		// input Notice deatails  
       		$noticeData->notice_title = $noticeTitle;
	   		// saving  and checking  
	    if($noticeData->save()){
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

	//notice list
	public function NoticeList() {
		$notices = Notice::all();
		return view('admin.notice.notices-list', compact('notices'));
	}

	public function NoticeEdit($id) {
		$noticeInfo = Notice::where('id', $id)->first();
		return view('admin.notice.notice-edit', compact('noticeInfo'));
	}

	  //Notice data update & post
  public function NoticeUpdate(Request $request){   
            $noticeId = $request->input('id');
        if(!empty($noticeId)) {
          //file check in update
        	$validator = Validator::make($request->all(), [
           'notice_title' => 'required',
           'notice_file' => 'mimes:doc,pdf,docx',
       		]);
       	if($validator->passes()){	
          if(!empty($request->file('notice_file'))) {
              //Teacher Image updateing
              $photoFile = $request->file('notice_file');
              $fileExtension = $photoFile->getClientOriginalExtension();
              $filename = str_random(20).".".$fileExtension;
              $destinationPath = 'assets/notices/';
              $uploaded = $photoFile->move($destinationPath, $filename);
              //include model class Notice
              $noticesData = Notice::findOrFail($noticeId);
              $noticesData->notice_file =$filename;
              $noticesData->update();
            }
              //class model include
              $noticesData = Notice::findOrFail($noticeId);
              $noticesData->notice_title =$request->input('notice_title');        
            // insert check & success message
            if($noticesData->update()){
                Session::flash('success', 'Notice updated successfully');
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
            
    }
    //notice delete method
    public function noticeDelete($id) {
    	Notice::find($id)->delete();
    	Session::flash('success', 'Notice deleted successfully');
        return redirect()->back();
    }

    
}
