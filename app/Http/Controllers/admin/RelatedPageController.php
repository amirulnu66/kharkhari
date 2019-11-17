<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RelatedPage;
use Validator;
use Session;

class RelatedPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pageCreate() {
    	return view('admin.relatedPages.related-page-create');
    }

    //relate pages information Insert store data in database
    public function pageInfoInsert(Request $request){
    	//return $request->all();
		// validator
       $validator = Validator::make($request->all(), [
           'page_slug' => 'required',
           'menu_name' => 'required',
           'page_title' => 'required',
       ]);
       // checking
       if ($validator->passes()) {
      $pageSlug =$request->input('page_slug');
			$pageName =$request->input('menu_name');
      $pageTitle =$request->input('page_title');
			$subTitle =$request->input('sub_title');
			$pageDesc =$request->input('page_desc');
			//RelatedPage model object hear........... 
			$resultInfo = new RelatedPage();
			// input user Faqs  
      $resultInfo->page_slug =$pageSlug;
			$resultInfo->menu_name =$pageName;
      $resultInfo->page_title =$pageTitle;
			$resultInfo->sub_title =$subTitle;
			$resultInfo->page_desc =$pageDesc;
		    // saving user new data
		    // checking
			if($resultInfo->save()){
	       		Session::flash('success', 'Thanks for New Data Create');
				return redirect()->back();
		    }else{
		    	Session::flash('failed', 'Unable to perfrom the Action');
				return redirect()->back();
	    	} 
       }
	}
	//page list
	public function relatedPageList() {
		$pagesInfo = RelatedPage::all();
		return view('admin.relatedPages.related-page-list', compact('pagesInfo'));
	}
	// page information edit
	public function relatedPageEdit($id) {
		$insglePage = RelatedPage::where('id', $id)->first();
		return view('admin.relatedPages.related-page-edit', compact('insglePage'));
	}

	   //related pages data update & post
  public function relatedPageUpdate(Request $request){   
          //return $request->all();
          $pageId = $request->input('id');
        if(!empty($pageId)) {
          //class model include
          $pagesData = RelatedPage::findOrFail($pageId);
          $pagesData->page_title = $request->input('page_title');        
          $pagesData->menu_name = $request->input('menu_name');        
          $pagesData->sub_title = $request->input('sub_title');        
          $pagesData->page_desc = $request->input('page_desc');               
          // insert check & success message
        if($pagesData->update()){
            Session::flash('success', 'Data updated successfully');
            return redirect()->back();
          }else{
            Session::flash('failed', 'Unable to perfrom the Action');
            return redirect()->back();
        } 
        }             
            
    }

    public function relatedPageDelete($id) {
    	RelatedPage::find($id)->delete();

    	Session::flash('success', 'Data deleted successfully');
        return redirect()->back();
    }




}
