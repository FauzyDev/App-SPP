<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\spp;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siswa.datasiswa', [
            'datasiswa' => siswa::all()
        ]);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.addsiswa', [
            'datakelas' => kelas::all(),
            'dataspp'   => spp::all()

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
            'nisn'             => 'required|unique:siswas,nisn',
            'nis'              => 'required|unique:siswas,nis', 
            'nama_siswa'       => 'required', 
            'spp_id'           => 'required', 
            'kelas_id'         => 'required', 
            'alamat'           => 'required', 
            'no_telp'          => 'required', 
            'tahun_masuk'      => 'required', 
            'gender'           => 'required', 
            'password'         => 'required',
        ]);
    $datasiswa = [
        'nisn'          => $request->nisn,
        'nis'           => $request->nis,
        'nama_siswa'    => $request->nama_siswa,
        'spp_id'        => $request->spp_id,
        'kelas_id'      => $request->kelas_id,
        'alamat'        => $request->alamat,
        'no_telp'       => $request->no_telp,
        'gender'        => $request->gender,
        'tahun_masuk'   => $request->tahun_masuk,
        'password'      => bcrypt($request->password)
        ];
        // ddd($input);
        siswa::create($datasiswa);
        return redirect('/datasiswa')->with('informasi','Data Siswa Berhasil Ditambahkan!');
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
        return view('admin.siswa.editsiswa', [
            'datasiswa' => siswa::where('nisn', $id)->first(),
            'datakelas' => kelas::all(),
            'dataspp'   => spp::all()
            
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
        $datasiswa = [
            'nisn'          => $request->nisn,
            'nis'           => $request->nis,
            'nama_siswa'    => $request->nama_siswa,
            'spp_id'        => $request->spp_id,
            'kelas_id'      => $request->kelas_id,
            'alamat'        => $request->alamat,
            'no_telp'       => $request->no_telp,
            'gender'        => $request->gender,
            'tahun_masuk'   => $request->tahun_masuk,
            'password'      => bcrypt($request->password)
            ];
            // ddd($input);
            siswa::where('nisn',$id)->update($datasiswa);
            return redirect('/datasiswa')->with('informasi','Data Siswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::where('nisn', $id)->delete();
        return redirect('/datasiswa')->with('informasi','Data berhasil dihapus!');
    }
}
