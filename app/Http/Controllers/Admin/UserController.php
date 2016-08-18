<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestRegister;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('admin.user.index')->with('users',$users);
  }

  public function create()
  {
    return view('admin.user.create');
  }

  public function store(RequestRegister $request)
  {
    $user = new User;
    $user->username = $request->username;
    $user->password = bcrypt($request->password);
    $user->save();
    $message['message']="new user has been added";
    $message['status'] = 1;
    return redirect('/masterAdmin/user')->withErrors($message);
  }

  public function edit($id)
  {
    $user = User::findOrFail($id);
    if ($user) {
      return view('admin.user.update')->with('user',$user);
    }
    abort(404);
  }

  public function update(RequestRegister $request, $id)
  {
    $user = User::findOrFail($id);
    if ($user) {
      $user->password = bcrypt($request->password);
      $user->username = $request->username;
      $user->save();
      $message['message']="user has updated";
      $message['status'] = 1;
      return redirect('/masterAdmin/user')->withErrors($message);
    }
    abort(404);
  }

  public function destroy($id)
  {
    $user = User::findOrFail($id);
    if ($user) {
    $user->delete();
    $message['message'] = "user has deleted";
    $message['status'] = 1;
    return back()->withErrors($message);
    }
    abort(404);
  }
}
