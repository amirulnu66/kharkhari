<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstituteHistoryController extends Controller
{
    //
    public function index() {
//    	return view('frontend.pages.school-history');
    	return view('frontend.pages.history');
    }
}
