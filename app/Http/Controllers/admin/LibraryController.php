<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library;
use Validator;
use Session;

class LibraryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function libraryCreate() {
    	return view('admin.libraries.library-create');
    }

     //school Library information Insert store data in database
    public function libraryInfoInsert(Request $request){
    	//return $request->all();
		// validator
       $validator = Validator::make($request->all(), [
           'library_name' => 'required',
           'quenty' => 'required',
       ]);
       // checking
       if ($validator->passes()) {
			$libraryName =$request->input('library_name');
      		$libraryQuenty =$request->input('quenty');
			$libraryDesc =$request->input('library_desc');
			//Library model object hear........... 
			$libraryInfo = new Library();
			// input user Faqs  
      		$libraryInfo->library_name =$libraryName;
			$libraryInfo->quenty =$libraryQuenty;
			$libraryInfo->library_desc =$libraryDesc;
		    // saving user new data
		    // checking
			if($libraryInfo->save()){
	       		Session::flash('success', 'Thanks for New Data Create');
				return redirect()->back();
		    }else{
		    	Session::flash('failed', 'Unable to perfrom the Action');
				return redirect()->back();
	    	} 
       }
	}
	//library Instrument list
	public function libraryList() {
		$libraries = Library::all();
		return view('admin.libraries.library-list', compact('libraries'));
	}
	//library Instrument update
	public function libraryEdit($id) {
		$singleInstrument = Library::where('id',$id)->first();
		return view('admin.libraries.library-edit', compact('singleInstrument'));
	}

	   //library Instrument data update & post
  	public function libraryUpdate(Request $request){   
          $libraryId = $request->input('id');
        if(!empty($libraryId)) {
          //class model include
          $libraryData = Library::findOrFail($libraryId);
          $libraryData->library_name = $request->input('library_name');        
          $libraryData->quenty = $request->input('quenty');        
          $libraryData->library_desc = $request->input('library_desc');               
          // insert check & success message
        if($libraryData->update()){
            Session::flash('success', 'Data updated successfully');
            return redirect()->back();
          }else{
            Session::flash('failed', 'Unable to perfrom the Action');
            return redirect()->back();
        } 
        }             
            
    }

    public function libraryDelete($id) {
    	$delete = Library::find($id)->delete();
    	 if($delete){
            Session::flash('success', 'Data deleted successfully');
            return redirect()->back();
          }else{
            Session::flash('failed', 'Unable to perfrom the Action');
            return redirect()->back();
        }
    }

}
