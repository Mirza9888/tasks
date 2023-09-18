<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{

    public function create(Request $request): View
    {
        return view('users.create',);

    }

    public function save(Request $request){
        $this -> validate($request,[

            'name'=>'required',
             'email' =>'required|email|unique:users,email',
            'password'=> 'required|min:6',

        ]);
        User::create([

            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),


        ]);
        return redirect()->route('dashboard')->with('success','User is added');


    }


    //
}
