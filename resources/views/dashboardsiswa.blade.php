@extends('layoutssiswa.kerangkasiswa')
<Title>Dashboard Siswa</Title>
@section('container')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-body">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard </h1>
                </div>
                <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">RIWAYAT
                                            PEMBAYARAN
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">500</div>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-sharp fa-solid fa-money-check-dollar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
