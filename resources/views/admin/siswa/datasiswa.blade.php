@extends('layouts.kerangkaadmin')
<title>Data Siswa</title>
@section('container')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="h3 text-dark text-bold"><i class="fa-sharp fa-solid fa-graduation-cap"></i> Data Siswa</h3>
                @if (session()->has('informasi'))
                    <div class="alert alert-success">
                        {{ session('informasi') }}
                    </div>
                @endif
                <a href="/datasiswa/create"><button class="btn btn-primary mt-3 mb-4" type="submit"><i class="fa-sharp fa-solid fa-plus"></i> Tambah Data</button></a>
                <table class="table table-responsiv table-bordered">
                    <tr class="table-primary">
                        <th class="text-center" width="50px">NO</th>
                        <th class="text-center">NISN</th>
                        <th class="text-center">NIS</th>
                        <th class="text-center">NAMA SISWA</th>
                        <th class="text-center">KELAS</th>
                        <th class="text-center">JENIS KELAMIN</th>
                        <th class="text-center">ALAMAT</th>
                        <th class="text-center">TAHUN MASUK</th>
                        <th class="text-center">OPTION</th>
                    <tr>
                        @foreach ($datasiswa as $siswa)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $siswa->nisn }}</td>
                        <td class="text-center">{{ $siswa->nis }}</td>
                        <td class="text-center">{{ $siswa->nama_siswa }}</td>
                        <td class="text-center">{{ $siswa->kelas->nama_kelas }}</td>
                        <td class="text-center">{{ $siswa->gender }}</td>
                        <td class="text-center">{{ $siswa->alamat }}</td>
                        <td class="text-center">{{ $siswa->tahun_masuk }}</td>
                        <td class="text-center">
                            <a href="/datasiswa/{{ $siswa->nisn }}/edit" class="btn btn-primary btn-sm mx-2"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                            <form action="/datasiswa/{{ $siswa->nisn }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm mx-2"
                                    onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
