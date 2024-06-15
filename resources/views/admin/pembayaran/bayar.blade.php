@extends('layouts.kerangkaadmin')
<title>Menambah Data Pembayaran</title>
@section('container')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="h3"><i class="fa-sharp fa-solid fa-money-bill-transfer"></i> Pembayaran</h3>
                <div class="col-md-6">
                    <div class="card border-dark">
                        <div class="card-body">
                            <form action="/pembayaran" method="POST">
                                @csrf
                                <div class="form-group">
                                    <h6><label for="">Masukkan</label></h6>
                                    <input type="text" name="nisn" class="form-control" placeholder="Nisn Siswa"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="">Nama Petugas</label></h6>
                                    <input type="text" name="user_id" class="form-control" placeholder="Nama Petugas"
                                        autocomplete="off" value="{{ auth()->user()->id }}">
                                </div>
                                <div class="mt-2">
                                    <h6><label for="">SPP</label></h6>
                                    <select name="spp_id" class="form-control">
                                        <option value="">-- Pilih SPP --</option>
                                        @foreach ($dataspp as $spp)
                                            <option value="{{ $spp->id }}">{{ $spp->keterangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h6><label for="tgl_bayar">Tanggal Bayar</label></h6>
                                    <input type="date" name="tgl_bayar" class="form-control" placeholder="Tanggal Bayar"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="bln_bayar">Bulan Bayar</label></h6>
                                    <input type="text" name="bln_bayar" class="form-control" placeholder="Bulan Bayar"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="thn_bayar">Tahun bayar</label></h6>
                                    <input type="text" name="thn_bayar" class="form-control" placeholder="Tahun Bayar"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="jumlah_bayar">Jumlah bayar</label></h6>
                                    <input type="text" name="jumlah_bayar" class="form-control" placeholder="Nominal"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="level">Status Pembayaran</label></h6>
                                    <select name="status" id="status" class="form-control">
                                        <option value="">-- Pilih Status Pembayaran --</option>
                                        <option value="Lunas">Lunas</option>
                                        <option value="CiCil">Cicil</option>
                                    </select>
                                </div>
                                <div class="form-group mt-1">
                                    <a href="/pembayaran" class="btn btn-danger mt-3"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                            <path fill-rule="evenodd"
                                                d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                        </svg> Kembali</a>
                                    <button class="btn btn-primary mt-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-journal-check"
                                            viewBox="0 0 16 16">
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
