@extends('layoutssiswa.kerangkasiswa')
<title>Pembayaran</title>
@section('container')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="h3"><i class="fa-sharp fa-solid fa-credit-card"></i> Pembayaran</h3>
                <div class="col-md-6">
                    <div class="card border-dark">
                        <div class="card-body">
                            <form action="/siswa" method="POST">
                                @csrf
                                <div class="form-group">
                                    <h6><label for="nama_siswa">Nama Siswa</label></h6>
                                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="nisn">Nisn</label></h6>
                                    <input type="text" name="nisn" class="form-control" placeholder="Nisn"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="tanggal_bayar">Tanggal Bayar</label></h6>
                                    <input type="date" name="Tanggal_Bayar" class="form-control"
                                        placeholder="Tanggal bayar" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="bulan_bayar">Bulan Bayar</label></h6>
                                    <input type="text" name="bulan_Bayar" class="form-control" placeholder="Bulan Bayar"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="tahun_bayar">tahun Bayar</label></h6>
                                    <input type="text" name="tahun_Bayar" class="form-control" placeholder="Tahun Bayar"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="pembayaran_untuk">SPP</label></h6>
                                    <input type="text" name="pembayaran_untuk" class="form-control" placeholder=""
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="jumlah">Nominal Bayar</label></h6>
                                    <input type="text" name="jumlah" class="form-control" placeholder="Nominal Bayar"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <h6><label for="mwtode_pembayaran">Metode Pembayaran</label></h6>
                                    <input type="text" name="metode_pembayaran" class="form-control" placeholder=""
                                        autocomplete="off">
                                </div>
                                <div class="form-group mt-1">
                                    <button class="btn btn-primary mt-3">Bayar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
