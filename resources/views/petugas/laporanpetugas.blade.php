@extends('layouts.kerangkaadmin')
<title>Laporan</title>
@section('container')
    <div class="container">
        <h3 class="h3">Laporan</h3>
        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-body">
                    <form action="/user" method="POST">
                        @csrf
                        <div class="form-group">
                            <h6><label for="nama_siswa">Nama Siswa</label></h6>
                            <input type="text" name="nama_siswa" class="form-control" placeholder="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <h6><label for="nisn">Nisn</label></h6>
                            <input type="text" name="nisn" class="form-control" placeholder="" autocomplete="off">
                        </div>
                        <div class="form-group mt-1">
                            <button style="background-color:rgb(9, 205, 9); mt-3">Excel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
