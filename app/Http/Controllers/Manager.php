<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class Manager extends Controller
{
    //
    function login(){
        if (Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }

    //
    function registration(){
        if (Auth::check()){
            return redirect(route('home'));
        }
        
        return view('registration');
    }
    function applicationform(){
        if (Auth::check()){
            return redirect()->route('applicationform');
        
        }
        
        return view('applicationform');
    }
    function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Please enter your email address.',
            'password.required' => 'Please enter your password.',
        ]);

        $credentials =$request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('home');

          //  return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", 'login details are not valid');

    }

    function registrationPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique::users',
            'password'=>'required'
        ]);
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user =User::create($data);

        if(!$user){
            return redirect(route('registration'))->with("error", 'registration faild try again');
        }
        return redirect(route('login'))->with("Success", 'Registartion successful login to open the app');
    }

    function logout(){
        session()->flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
  