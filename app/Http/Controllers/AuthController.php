<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash,Auth;

class AuthController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){

        $isExist = User::where('email',$request->email)->first();

        if($isExist){
            return redirect()->back()->with('error','User Already Registerd');
        }

        User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success','Registerion Successfully');
    }

    public function login(){
        return view('login');
    }

    public function userLogin(Request $request){
        $auth = $request->only('email','password');

        if(Auth::attempt($auth)){
            return redirect('/dashboard');

        }

        return redirect()->back()->with('error','User name or password are nor exist');
    }

    public function dashboard(){
        return view('dashboard');
    }
}
