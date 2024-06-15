<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

 class AuthController extends Controller
 {
    public function index()
    {
        return view('login.loginadmin');
    }
    public function login(Request $request)
     {
         $data = $request->validate([
             'username' => 'required',
             'password' => 'required'
         ]);
         if(Auth::attempt($data)){
             $request->session()->regenerate();
             $level = auth()->user()->level;
             if($level == 'Admin')
             return redirect('/dashboard');
         } else {
             return back()->with('loginerror', 'Username atau Password Salah!');
         }
     }

    //  menampilkan dashboard
    public function dashboard()
    {
        $useraktif=auth()->user()->id;
        return view('dashboard',[
            'datapetugas' => User::where('id', $useraktif)->first()
        ]);
    }

    public function logout()
    {
        Auth::logout();
 
    request()->session()->invalidate();
 
    request()->session()->regenerateToken();
 
    return redirect('/');
    }
     
 }
