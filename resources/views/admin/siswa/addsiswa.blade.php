@extends('layouts.kerangkaadmin')
<title>Menambah Data Siswa</title>
@section('container')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="h3"><i class="fa-sharp fa-solid fa-graduation-cap"></i> Tamabah Data Siswa</h3>
                <div class="col-md-6">
                    <div class="card border-dark">
                        <div class="card-body">
                            <form action="/datasiswa" method="POST">
                                @csrf
                                <div class="form-group">
                                    <h6><label for="nisn">Masukkan</label></h6>
                                    <input type="text" name="nisn" class="form-control" placeholder="Nisn"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="nis">Masukkan</label></h6>
                                    <input type="text" name="nis" class="form-control" placeholder="Nis"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="nama_siswa">Masukkan</label></h6>
                                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa"
                                        autocomplete="off">
                                </div>
                                <div class="mt-2">
                                    <h6><label for="">Kelas</label></h6>
                                    <select name="kelas_id" id="kelas_id" class="form-control">
                                        <option value="">-- Pilih Kelas --</option>
                                        @foreach ($datakelas as $kelas)
                                            <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h6><label for="gender">Jenis Kelamin</label></h6>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h6><label for="alamat">Masukkan</label></h6>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="password">Masukkan</label></h6>
                                    <input type="text" name="password" class="form-control" placeholder="Password"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="no_telp">Masukkan</label></h6>
                                    <input type="text" name="no_telp" class="form-control" placeholder="No Telpon"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="tahun_masuk">Masukkan</label></h6>
                                    <input type="text" name="tahun_masuk" class="form-control" placeholder="Tahun Masuk"
                                        autocomplete="off">
                                </div>
                                <div class="mt-2">
                                    <h6><label for="">SPP</label></h6>
                                    <select name="spp_id" class="form-control">
                                        <option value="">-- Pilih SPP --</option>
                                        @foreach ($dataspp as $spp)
                                            <option value="{{ $spp->id }}">{{ $spp->nominal }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-1">
                                    <a href="/datasiswa" class="btn btn-danger mt-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                            <path fill-rule="evenodd"
                                                d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                        </svg> Kembali</a>
                                    <button class="btn btn-primary mt-3" type="submit"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path
                                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                            <path
                                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                        </svg> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
