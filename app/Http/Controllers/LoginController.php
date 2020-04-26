<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Hash;

use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login_page');
    }

    public function register()
    {
        return view('register_page');
    }

    public function createAccount(Request $request)
    {
       $validateDate = $request->validate([
         'name' => 'min:3|required',
         'email' => 'required|email|unique:users',
         'password' => 'required|min:6|max:10|confirmed'
       ]);

       $user = new User();
       $user->name = $request['name'];
       $user->email = $request['email'];
       $user->password = Hash::make($request['email']);
       $user->save();

       return redirect(route('register'))->with('success','Account Created Successfully');

    }

    public function loginAccount(Request $request)
    {
      $credentials = $request->only('email', 'password');

      return $credentials;

        if (Auth::attempt($credentials)) {
            return "Authneticated";
        }
        return Auth::user();
      if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {
        return redirect()->intended(route('index'));
      }
        else {
          return "invalid credentials";
        }

    }
}
