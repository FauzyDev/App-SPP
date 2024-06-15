<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\spp;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.spp.dataspp', [
            'dataspp' => spp::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.spp.addspp');
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
            'tahun'     => 'required',
            'nominal'   =>  'required',
            'semester'  =>  'required'
        ]);
        $dataspp = [
            'tahun'         => $request->tahun,
            'nominal'       => $request->nominal,
            'semester'      => $request->semester,
            'keterangan'    => $request->keterangan
        ];
        spp::create($dataspp);
        return redirect('/dataspp')->with('informasi','Data SPP Berhasil Ditambahkan!');
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
        return view('admin.spp.editspp',[
            'dataspp' => spp::where('id',$id)->first()
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
        $dataspp = [
            'tahun'         => $request->tahun,
            'nominal'       => $request->nominal,
            'semester'      => $request->semester,
            'keterangan'    => $request->keterangan
        ];
        spp::where('id',$id)->update($dataspp);
        return redirect('/dataspp')->with('informasi','Data SPP Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        spp::where('id', $id)->delete();
        return redirect('/dataspp')->with('informasi','Data berhasil dihapus!');
    }
}
