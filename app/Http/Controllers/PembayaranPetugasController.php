<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pembayaran;
use App\Models\spp;

class PembayaranPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembayaranpetugas.datahistorypetugas', [
            'datapembayaran' => pembayaran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // $id=auth()->user()->id;
         return view('pembayaranpetugas.petugasbayar', [
            'datapetugas'     => User::all(),
            'dataspp'       => spp::all(),
            // 'datapetugas'  => User::where('id',$id)->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn'      => 'required',
            'spp_id'    =>  'required',
            'user_id'   =>  'required',
            'tgl_bayar' =>  'required',
            'bln_bayar' =>  'required',
            'thn_bayar' =>  'required',
            'jumlah_bayar'  =>  'required'
        ]);
        $isidata = [
            'nisn'          =>  $request->nisn,
            'spp_id'        =>  $request->spp_id,
            'user_id'       =>  $request->user_id,
            'tgl_bayar'     =>  $request->tgl_bayar,
            'bln_bayar'     =>  $request->bln_bayar,
            'thn_bayar'     =>  $request->thn_bayar,
            'jumlah_bayar'  =>  $request->jumlah_bayar,
            'status'        =>  $request->status
        ];
        pembayaran::create($isidata);
        return redirect('/pembayaranpetugas')->with('informasi','Pembayaran Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pembayaranpetugas.editbayarpetugas',[
            'datapembayaran' => pembayaran::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $isidata = [
            'tgl_bayar'     =>  $request->tgl_bayar,
            'bln_bayar'     =>  $request->bln_bayar,
            'thn_bayar'     =>  $request->thn_bayar,
            'jumlah_bayar'  =>  $request->jumlah_bayar,
            'status'        =>  $request->status
        ];
        pembayaran::where('id',$id)->update($isidata);
        return redirect('/pembayaranpetugas')->with('informasi','Pembayaran Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
