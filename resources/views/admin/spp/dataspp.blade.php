@extends('layouts.kerangkaadmin')
<title>Data SPP</title>
@section('container')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="h3 text-dark text-bold"><i class="fa-sharp fa-solid fa-money-bill"></i> Data SPP</h3>
                @if (session()->has('informasi'))
                    <div class="alert alert-success">
                        {{ session('informasi') }}
                    </div>
                @endif
                <a href="/dataspp/create"><button class="btn btn-primary mt-3 mb-4" type="submit"><i class="fa-sharp fa-solid fa-plus"></i> Tambah Data</button></a>
                <table class="table table-responsiv table-bordered">
                    <tr class="table-primary">
                        <th class="text-center" width="50px">NO</th>
                        <th class="text-center">TAHUN</th>
                        <th class="text-center">TAGIHAN SPP</th>
                        <th class="text-center">KETERANGAN</th>
                        <th class="text-center">SEMESTER</th>
                        <th class="text-center">OPTION</th>
                    <tr>
                        @foreach ($dataspp as $spp)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $spp->tahun }}</td>
                        <td class="text-center">Rp.{{ number_format($spp->nominal,0, '.', '.') }}</td>
                        <td class="text-center">{{ $spp->keterangan }}</td>
                        <td class="text-center">{{ $spp->semester }}</td>
                        <td class="text-center">
                            <a href="/dataspp/{{ $spp->id }}/edit" class="btn btn-primary btn-sm mx-2"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
