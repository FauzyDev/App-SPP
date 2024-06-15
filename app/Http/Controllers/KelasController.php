<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelas.datakelas', [
            'datakelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.addkelas',[
            'datakelas'
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
            'nama_kelas'    => 'required',
            'tingkatan'     =>  'required',
            'kompetensi_keahlian'   => 'required'
        ]);
        $datakelas = [
            'nama_kelas' => $request->nama_kelas,
            'tingkatan'  => $request->tingkatan,
            'kompetensi_keahlian' => $request->kompetensi_keahlian
        ];
        Kelas::create($datakelas);
        return redirect('/datakelas')->with('informasi','Data Kelas Berhasil Ditambahkan!');
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
        return view('admin.kelas.editkelas',[
            'datakelas' => kelas::where('id',$id)->first()
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
        $datakelas = [
            'nama_kelas' => $request->nama_kelas,
            'tingkatan'  => $request->tingkatan,
            'kompetensi_keahlian' => $request->kompetensi_keahlian
        ];
        Kelas::where('id',$id)->update($datakelas);
        return redirect('/datakelas')->with('informasi','Data Kelas Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kelas::where('id', $id)->delete();
        return redirect('/datakelas')->with('informasi','Data berhasil dihapus!');
    }

    public function search(){
        
    }
}
