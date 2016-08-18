<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\RequestLogin;
use Illuminate\Routing\Controller;
use App\User;
use Auth;
use Hash;

class AuthController extends Controller
{
  public function index() {
      return view('admin.user.login');
  }

  public function login(RequestLogin $request){
    $user = User::where('username', $request->username)->first();
    if ($user) {
      if (Hash::check($request->password , $user->password) ) {
        Auth::login($user);
        return redirect('/masterAdmin/post');
      }
    }
    $message['authorize']="Invalid username or password .!";
    return redirect('/masterAdmin')->withErrors($message);
  }

  public function logout(){
   Auth::logout();
   return redirect('/admin');
  }
}
