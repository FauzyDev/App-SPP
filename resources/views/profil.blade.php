@extends('dashboardsiswa')
<title>Profil</title>
@section('container')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center">
                    <div class="container-xl px-4 mt-4">
                        <div class="row">
                            <div class="col-xl-4">
                                <!-- Profile picture card-->
                                <div class="card mb-4 mb-xl-0 shadow-sm" style="border-radius: 20px">
                                    {{-- <div class="card-header">Profile Picture</div> --}}
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        {{-- @foreach ($datagambar as $img)
                                        <img src="/images/{{ $img->url }}" width="150px" height="150px" class="rounded-circle" alt="">
                                    @endforeach --}}
                                        {{-- <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt=""> --}}
                                        <!-- Profile picture help block-->
                                        <div class=" mt-3">
                                          <a href="/admin/dashboard/profile/{{ auth()->user()->id }}/edit">
                                        <button class="btn text-dark" type="button">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg></div>
                                      </button>
                                    </a>
                                        <h5><div class=" mt-2 mb-2"></div></h4>
                                        <div class=" mt-2 mb-1"></div>
                                        <!-- Profile picture upload button-->
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <!-- Account details card-->
                                <div class="card mb-3 shadow-sm" style="border-radius: 20px">
                                    <div class="card-header" style="border-radius: 20px 20px 0 0">Detail Akun</div>
                                    <div class="card-body" >
                                        <form>
                                            <div class="mb-2">
                                                {{-- <div class="card mb-3">
                                                  <div class="card-body"> --}}
                                                    <div class="row">
                                                      <div class="col-sm-3">
                                                        <h6 class="mb-0"> Nama <small style="visibility: hidden">--.</small> :</h6>
                                                      </div>
                                                      <div class="col-sm-9 text-secondary">
                                                         
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-sm-3">
                                                        <h6 class="mb-0">Email <small style="visibility: hidden">---</small> :</h6>
                                                      </div>
                                                      <div class="col-sm-9 text-secondary">
                                                         
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-sm-3">
                                                        <h6 class="mb-0">Role   <small style="visibility: hidden">----.</small> : </h6>
                                                      </div>
                                                      <div class="col-sm-9 text-secondary">
                                                         
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-sm-3">
                                                        <h6 class="mb-0">No Hp <small style="visibility: hidden">--</small> :</h6>
                                                      </div>
                                                      <div class="col-sm-9 text-secondary">
                                                         
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-sm-3">
                                                        <h6 class="mb-0">Alamat <small style="visibility: hidden">-</small> :</h6>
                                                      </div>
                                                      <div class="col-sm-9 text-secondary">
                                                         
                                                      </div>
                                                    </div>
                                                    <hr>
                                        </form>
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
