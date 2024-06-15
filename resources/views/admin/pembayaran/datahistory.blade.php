@extends('layouts.kerangkaadmin')
<title>Data Pembayaran</title>
@section('container')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                @if (session()->has('informasi'))
                    <div class="alert alert-success">
                        {{ session('informasi') }}
                    </div>
                @endif
                <h3 class="h3 text-dark"><i class="fa-sharp fa-solid fa-money-check-dollar"></i> History Pembayaran</h3>
                <table class="table table-responsiv table-bordered">
                    <tr class="table-primary">
                        <th class="text-center" width="50px">No</th>
                        <th class="text-center">NISN SISWA</th>
                        <th class="text-center">TAGIHAN SPP</th>
                        <th class="text-center">NAMA PETUGAS</th>
                        <th class="text-center">TANGGAL</th>
                        <th class="text-center">BULAN</th>
                        <th class="text-center">TAHUN</th>
                        <th class="text-center">JUMLAH BAYAR</th>
                        <th class="text-center">STATUS</th>
                        <th class="text-center">OPTION</th>
                    <tr>
                        @foreach ($datapembayaran as $pembayaran)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $pembayaran->nisn }}</td>
                        <td class="text-center">Rp.{{ number_format($pembayaran->spp->nominal, 0, '.', '.') }}</td>
                        <td class="text-center">{{ $pembayaran->user->name }}</td>
                        <td class="text-center">{{ $pembayaran->tgl_bayar }}</td>
                        <td class="text-center">{{ $pembayaran->bln_bayar }}</td>
                        <td class="text-center">{{ $pembayaran->thn_bayar }}</td>
                        <td class="text-center">Rp.{{ number_format($pembayaran->jumlah_bayar, 0, '.', '.') }}</td>
                        <td class="text-center">{{ $pembayaran->status }}</td>
                        <td class="text-center">
                            <a href="/pembayaran/{{ $pembayaran->id }}/edit" class="btn btn-primary btn-sm mx-2"><i
                                    class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
