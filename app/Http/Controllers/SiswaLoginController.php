<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaLoginController extends Controller
{
    public function loginini()
    {
        return view('login.loginsiswa');
    }
    public function loginsiswa(Request $request)
     {
         $data = $request->validate([
             'nisn' => 'required',
             'password' => 'required'
         ]);
         if(Auth::guard('siswas')->attempt($data)){
             $request->session()->regenerate();
             return redirect('/dashboardsiswa');
         } else {
             return back()->with('loginerror', 'Username atau Password Salah!');
         }
     }

    //  menampilkan dashboard
    public function dashboardsiswa()
    {
        // $siswaaktif=auth()->user()->nisn;
        return view('dashboardsiswa',[
            // 'datasiswa' => siswa::where('nisn', $siswaaktif)->first()
        ]);
    }
}
