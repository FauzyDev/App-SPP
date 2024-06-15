@extends('layouts.kerangkaadmin')
<title>Generate Laporan</title>
@section('container')
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="h3"><i class="fas fa-download"></i> Generate Laporan</h3>
            <div class="col-md-6">
                <div class="card border-dark">
                    <div class="card-body">
                            <div class="form-group">
                                <h6><label for="">Dari tanggal</label></h6>
                                <input type="date" name="tgl_awal" class="form-control" placeholder="Tanggal Pembayaran"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <h6><label for="">Sampai tanggal</label></h6>
                                <input type="date" name="tgl_akhir" class="form-control" placeholder="Tanggal Pembayaran"
                                    autocomplete="off">
                            </div>
                            <div class="form-group mt-1">
                                <a href="" onclick="this.href='/admin/dashboard/laporan/cetak/'+ document.getElementById('tgl_awal').value + '/'
                                + document.getElementById('tgl_akhir').value " target="_blank">
                                
                                <button class="btn btn-primary rounded-pill pull-right"><i class="fas fa-print"></i> Cetak</button>
                                </a>    
                            </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection