<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherMessage;
use Session;

class TeacherMessageController extends Controller
{
    //
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
    	return view('admin.teacherMessage.teacher-message-create');
    }

    //Teacher's message store here in database
    public function teacherMessageInsert(Request $request){
    	//return $request->all();
    	$teacher_name=$request->input('teacher_name');
		$teacher_desc=$request->input('teacher_desc');
		$teacher_type=$request->input('teacher_type');

		//Page model object hear........... 
		$messageData = new TeacherMessage;
            //file empty cheaking
        if (!empty($request->file('teacher_image'))) {
            //profile picture storing
            $photoFile = $request->file('teacher_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'assets/speech/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            $messageData->teacher_image =$filename;
          }
           // input teacher deatails  
           $messageData->teacher_name = $teacher_name;
           $messageData->teacher_desc = $teacher_desc;
           $messageData->teacher_type = $teacher_type;
    	   // saving  and checking  
    	   $messageInfo = $messageData->save(); 

          Session::flash('message','Teacher Messages Posted Successfully');
          return redirect()->back();

    }

    //teachers message show list
    public function teacherMessageList() {
    	$teachersMessage=TeacherMessage::all();
    	return view('admin.teacherMessage.message-list' ,compact('teachersMessage'));
    }

    //teachers message edit
    public function teachersMessageEdit($id) {
        $teachMessageInfo= TeacherMessage::where('id',$id)->first();
        return view('admin.teacherMessage.message-edit' ,compact('teachMessageInfo'));
    }


    //message update here
    public function teachersMessageUpdate(Request $request) {
        $messageId = $request->input('id');
            if(!empty($messageId)) {

        if(!empty($request->file('teacher_image'))) {
            //Teacher Image updateing
            $photoFile = $request->file('teacher_image');
            $fileExtension = $photoFile->getClientOriginalExtension();
            $filename = str_random(20).".".$fileExtension;
            $destinationPath = 'assets/speech/';
            $uploaded = $photoFile->move($destinationPath, $filename);
            //include model class TeacherMessage
            $messageData = TeacherMessage::findOrFail($messageId);
            $messageData->teacher_image =$filename;
            $messageData->update();

        }

            $messageData = TeacherMessage::findOrFail($messageId);
            $messageData->teacher_name =$request->input('teacher_name');
            $messageData->teacher_desc =$request->input('teacher_desc');        
            $messageData->update();

            Session::flash('message', 'Messages Updated Successfully');
            return redirect()->back();
            }
    }


    public function MessagesDelete($id) {
        $deleteMsg =TeacherMessage::find($id)->delete();
        
        Session::flash('message', 'Message deleted successfully');
        return redirect()->back();
    }

}
