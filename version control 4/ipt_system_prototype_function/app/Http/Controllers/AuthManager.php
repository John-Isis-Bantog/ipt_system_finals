<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

// use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
      // if(auth::check()){
      //   return redirect(Route('home'));
      // }
        return view('login');
      
    }

    function registration(){
      // if(auth::check()){
      //   return redirect(Route('home'));
      // }
        return view('register');
    }
     function loginPost(Request $request){
      $request->validate([
        'email'=> 'required',
        'password'=> 'required',
      ]);

      $credentials = $request->only('email', 'password');

      if(Auth::attempt($credentials)){
        return redirect()->intended(route('home'));
      }return redirect(route('login'))->with("error", "email or password is incorrect");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
          ]);
          $data['name']= $request->name;
          $data['email']= $request->email;
          $data['password']= Hash::make($request->password);

          $user = User::create($data);

          if(!$user){
            return redirect(Route('registration'))->with("error", "registration failed. Please try again");
          }
          return redirect(route('login'))->with("success", "registration succesfull");

    }

    function logout(){
        Session::flush();
        Auth::Logout();
        return redirect(route('login'));
    }
}
