<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function  create(){
       return view('admin.users.create_users');
    }

    public function store(Request $request){
        //return $request->all();
        $name= $request->input('name');
        $email = $request->input('email');
        $userRoll = $request->input('user_role');
        $password = bcrypt($request->Input('password'));
        //User model object hear........... 
        $users = new User();
        //file empty cheaking
    if (!empty($request->file('user_image'))) {
        //profile picture storing
        $photoFile = $request->file('user_image');
        $fileExtension = $photoFile->getClientOriginalExtension();
        $filename = str_random(20).".".$fileExtension;
        $destinationPath = 'assets/users';
        $uploaded = $photoFile->move($destinationPath, $filename);
        $users->user_image = $filename;
      }
       // input teachers data save  
       $users->name = $name;
       $users->email = $email;
       $users->user_role = $userRoll;
       $users->password = $password;
       // saving  and checking  
      if($users->save()){
          Session::flash('success', 'Thanks for New Data Create');
          return redirect()->back();
        }else{
          Session::flash('failed', 'Unable to perfrom the Action');
          return redirect()->back();
        }

    }

    //admin user list
    public function userList(){
        $users = User::all()->sortByDesc("id");;
        return view('admin.users.user_list',compact('users'));
    }
    //admin user edit
    public function userById($id){
        $user=User::find($id);
        return view('admin.users.user_update',compact('user'));
    }

        //previous teachers data update & post
    public function UserUpdate(Request $request){   
        $userId = $request->input('id');
        if(!empty($userId)) {
          //image check in update
          if(!empty($request->file('user_image'))) {
              //Teacher Image updateing
              $photoFile = $request->file('user_image');
              $fileExtension = $photoFile->getClientOriginalExtension();
              $filename = str_random(20).".".$fileExtension;
              $destinationPath = 'assets/users/';
              $uploaded = $photoFile->move($destinationPath, $filename);
              //include model class PreviousTeachers
              $userData = User::findOrFail($userId);
              $userData->user_image =$filename;
              $userData->update();
            }
              //class model include
              $userData = User::findOrFail($userId);
              $userData->name =$request->input('name');
              $userData->email =$request->input('email');        
              $userData->user_role =$request->input('user_role');                               
              // insert check & success message
            if($userData->update()){
                Session::flash('success', 'Data updated successfully');
                return redirect()->back();
            }else{
                Session::flash('failed', 'Unable to perfrom the Action');
                return redirect()->back();
            } 
        }             
            
    }


    public function delete($id) {
        User::find($id)->delete();
        Session::flash('success', 'Data updated successfully');
        return redirect()->back();
    }


}
