<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function reg()
    {
        return view('register');
    }
    public function reg_data(Request $request)
    {
        User::create(
            [
                'name'=> $request->name,
                'password'=> Hash::make($request->password),
                'email'=> $request->email,
            ]
            );

        return redirect('login');

    }
    public function log()
    {
        return view('login');
    }
    public function valid_log(Request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);
        $credential = $request->only('email','password');

        if(Auth::attempt($credential))
        {
            if(Auth::user()->role_as === '1')
            {
                return redirect('/lawyerhome');
            }
            else if(Auth::user()->role_as === '2')
            {
                return redirect('/bankerhome');
            }
            else if(Auth::user()->role_as === '0')
            {
                return redirect('/home');
            }
        }
        else
        {
            return redirect('/login');
        }
    }
}
