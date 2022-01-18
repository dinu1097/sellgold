<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
class phoneauthcontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function setlogin(Request $request)
    {
      if(\Session::get('value') == null)
      {
        session([ 'value' => Request::get('userID')   ]);
      }
      // dd(\Session::get('value'));
    }
    public function register(Request $request)
    {
      // $OTP->sendOTP(' enter number');
      // $isTrue = $OTP->checkOTP();
      $isTrue = True;
      if($isTrue == true)
      {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->number = $request->number;
        $users->password = $request->password;
        $users->save(); 
        dd('user saved successfully');
      }

    }
    public function login(Request $request)
    {
      $this->validate($request, [
        'email'           => 'required|max:255|email',
        'password'           => 'required',
    ]);


        $user = DB::table('users')
            ->where('email','=',$request->email)
            ->where('password','=',$request->password)
            ->first();
        // dd($user);    
        if($user !=  null)
        {

          session(['user_id' => $user->id]);
          // dd(session('user_id'));
          // dd('user logged in');
        }
        else
        {
          dd('invalid user');
        }    
    }
  
}
