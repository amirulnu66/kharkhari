<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\History;
use Session;

class InstituteHistoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function historyCreate() {
    	return view('admin.history.institute-history-create');
    }

    // insert data ajex request here
	//Institute History store data in database
       public function historyInsert(Request $request){       
    	$history_title = $request->input('history_title');
        $history_desc = $request->input('history_desc');
		

		//Page model object hear........... 
		$histories = new History;
    	// input user Faqs  
    	$histories->history_title = $history_title;
        $histories->history_desc = $history_desc;
        // saving user message
        // checking
    	if($histories->save()){
	    	return  ['status'=>'success', 'msg'=>'Thanks for Message'];
	    }else{
	    	return  ['status'=>'failed', 'msg'=>'Unable to perfrom the Action'];
	    } 
    }

    public function historyShow() {
        $historyInfo= History::first();  
        if(!empty($historyInfo))
        return view('admin.history.institute-history-edit' ,compact('historyInfo'));
        else
        return view('admin.history.institute-history-create');

    }


    // Update data ajex request here
    //Institute History Update data in database
    public function historyUpdate(Request $request){   
           // return $request->all();
        $historyId = $request->input('id');
        if(!empty($historyId)) {

        if(!empty($request->file('image'))) {
            //Teacher Image updateing
            $photoFile = $request->file('image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'assets/histori/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            //include model class GoverningBody
            $historiData = History::findOrFail($historyId);
            $historiData->image =$filename;
            $historiData->update();

        }

            $historiData = History::findOrFail($historyId);
            $historiData->history_title =$request->input('history_title');
            $historiData->history_desc =$request->input('history_desc');     
            if($historiData->update())  {
                Session::flash('success', 'Data Updated Successfully');
            }else{
                Session::flash('feiled', 'Data not Inserts'); 
            }
            return redirect()->back();
            
        }             
            
    }

}
