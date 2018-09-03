<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Hash;


class UserController extends Controller
{

    public function index()
    {
      $data['users'] = User::all();
      return view('users', $data);
    }
    public function create()
    {
        return view('createusers');
    }
    public function store(Request $request)
    {
      $user = [
        'name' =>$request ->name,
        'email'=>$request ->email,
        'password'=> Hash::make($request->name),
      ];
      $save = User::insert($user);
      if($save)
       return redirect('users');
      else
          return redirect()->back()->withInput();
    }

    public function edit($id)
    {
      $data['users'] = User::find($id);
      return view('create', $data);
    }
    public function update(Request $request, $id)
    {
      if($request->hash('password')){
      $password = $request->password;
      $user = [
        'name' =>$request ->name,
        'email'=>$request ->email,
        'password' =>$password,
      ];
    }
      else{
        $user = [
          'name' =>$request ->name,
          'email'=>$request ->email,
        ];
      }
      $update = User::find($id)->update($user);
      if($update)
       return redirect('users');
      else
          return redirect()->back()->withInput();
    }
    public function destory($id)
    {
      $user = User::find($id);
      if($user){
        $user->destroy();
        $msg = 'Delete User Successfully';
     }
     else{
        $msg = 'Fail to Delete User';
      }
      return redirect()
      ->back()
      ->withSuccess($msg);
    }
  }
