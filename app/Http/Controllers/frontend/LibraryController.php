<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library;

class LibraryController extends Controller
{
    //

    //LibraryWebForm
 	public function libraryInstrument(){
 		$libraries = Library::orderBy('id', 'DESC')->get();
 		return view('frontend.pages.library-page', compact('libraries'));

 	}
}
