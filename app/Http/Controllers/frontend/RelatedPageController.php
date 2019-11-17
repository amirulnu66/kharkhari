<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RelatedPage;

class RelatedPageController extends Controller
{
    //
    //vission & mission
    public function allRelatedPages($slug) {
    	$pageInfo = RelatedPage::where('page_slug',$slug)->first();
    	return view('frontend.pages.raletedpage', compact('pageInfo'));

    }
    
    public function classLeactureDocument() {
    	return view('frontend.pages.ClassLeactureDocument');

    }
    //gov holy day list page
    public function holydayList(){
    	return view('frontend.pages.holyday-list');
    }

    //mission-vision method
    public function missionVision(){
        return view('frontend.pages.mission-vision');
    }

    //book list syllabus
    public function bookListSyllabus(){
    	return view('frontend.pages.syllabus-book-list');
    }





}
