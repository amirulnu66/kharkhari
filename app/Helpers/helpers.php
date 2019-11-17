<?php

use App\TeacherMessage;
use App\PublicResult;
use App\PhotoGallery;
use App\History;
use App\Settings;
use App\Topper;
use App\Notice;
 
   //Head master method  helper function
   function hteacherMsgInfo() 
   {     
      return TeacherMessage::where('teacher_type',2)->first();

   }

 	//Director method  helper function
   function directorMsgInfo() 
   {     
   	return TeacherMessage::where('teacher_type',1)->first();

   }
   //
   function instituteHistory() {
      return History::first();
   }

   // SSC public exam result
function sscPublicexamResult()
{
   return PublicResult::where('exam_type', '0')->orderBy('id', 'DESC')->limit(3)->get();
}
   // SSC public exam result
function vocationalExamResult()
{
   return PublicResult::where('exam_type', '2')->orderBy('id', 'DESC')->limit(3)->get();
}

// JSC public exam result
function jscPublicexamResult()
{
   return PublicResult::where('exam_type', '1')->orderBy('id', 'DESC')->limit(3)->get();
}

   // earn & success // SSC public exam result
   function sscPublicexamResultSuccess()
{
   return PublicResult::where('exam_type', '0')->orderBy('id', 'asc')->get();
}

// earn & success // JSC public exam result
function jscPublicexamResultSuccess()
{
   return PublicResult::where('exam_type', '1')->orderBy('id', 'asc')->get();
}



//photo gallery
function photoGallery() {
   return PhotoGallery::orderBy('id', 'DESC')->paginate(12);
}
//photo gallery
function homePhotoGallery() {
   return PhotoGallery::orderBy('gallery_position', 'DESC')->limit(3)->get();
}

// institute settings
function settingsInfo() {
   return Settings::first();
}

// academic notice
function AcademicNotices() {
   return Notice::orderBy('id', 'DESC')->limit(5)->get();
}
// academic notice
function notice() {
   return Notice::orderBy('id', 'DESC')->get();
}

//class topper
function classTopper() {
   return Topper::orderBy('student_roll', 'ASC')->orderBy('student_class','ASC')->orderBy('student_section', 'ASC')->get();
}


// current date english to bangla 
function getBanglaMonth($banglaDate){
      $engDATE = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", ":", ",");
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', ":", ",");
      $convertedDATE = str_replace($engDATE, $bangDATE, $banglaDate);
      return $convertedDATE;
}
