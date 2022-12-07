<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginForm()
    {
        if(Auth::guard('admin')->check())
        {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>'email|required',
            'password'=> 'required'
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('admin.dashboard');
        }else
        {
            return  redirect()->back()->with(['message'=>'wrong information','type'=>'danger']);
        }
    }

    //logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
