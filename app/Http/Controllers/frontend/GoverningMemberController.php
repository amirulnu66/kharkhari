<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoverningBody;
use App\GovBodyTitle;

class GoverningMemberController extends Controller
{
    //
    public function index() {
    	$govMembers= GoverningBody::all();
    	$pageTitle=GovBodyTitle::first();
    	return view('frontend.pages.managing-commettie', compact('govMembers','pageTitle'));
    }
}
