<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class PetugasLoginController extends Controller
{
    public function loginptgs()
    {
        return view('login.loginpetugas');
    }
    public function loginpetugas(Request $request)
     {
         $data = $request->validate([
             'name' => 'required',
             'password' => 'required'
         ]);
         if(Auth::attempt($data)){
             $request->session()->regenerate();
             $level = auth()->user()->level;
             if($level == 'Petugas')
             return redirect('/dashboardpetugas');
         } else {
             return back()->with('loginerror', 'Username atau Password Salah!');
         }
     }

    //  menampilkan dashboard
    public function dashboardpetugas()
    {
        $useraktif=auth()->user()->id;
        return view('dashboardpetugas',[
            'datapetugas' => User::where('id', $useraktif)->first()
        ]);
    }
}
