<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function loginPage(){
        return view('welcome');
    }
    public function RegisterUser(Request $request){

        $this->validate($request,[
            'fname'=>'required|max:20',
            'lname'=>'required|max:20',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);
        $table = new User();

        $table->first_name = $request -> input('fname');
        $table->last_name = $request -> input('lname');
        $table->email = $request -> input('email');
        $table->password = bcrypt($request -> input('password'));

        $table->save();
        return redirect()->back()->with('message','User Registered Succesfully');
    }


    public function LoginUser(Request $request){
        $data = $request->only('email','password');
        if(Auth::attempt($data)){
            return redirect()->route('home');
        }
        return redirect()->back()->with('message','INVALID Login');
    }

    public function getHome(){
        return view('home');
    }

    public function logOut(){

        Auth::logout();
        Session::flush();


        return redirect('/')->with('message','Logged Out');
    }
}
