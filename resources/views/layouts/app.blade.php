<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil @yield('profil')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
            .jumbotron{
                height : 500px
            }
        </style>
    </head>
    <body>
        <div class="container">
            {{-- header --}}
            <div class="row my-auto">
                <div class="col-11 font-weight-bolder">
                    <h3>Profil @yield('profil')</h3>
                </div>
                <div class="col-1 font-weight-bolder">
                    <i class="fa fa-sign-out fa-2x"></i>
                </div>
            </div>
            <hr/>
            {{-- body --}}
            <div class="row">
                <div class="col-3">
                    <div class="jumbotron">
                        <div class="h4 mb-3"><b>Perkuliahan</b></div>
                        <div class="jumbotron-body">
                            @section('leftbar')
                                <div class="row">
                                    <div class="col"><i class="fa fa-home"></i> Beranda</div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col"><i class="fa fa-gear"></i> Ubah Data</div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col"><i class="fa fa-key"></i> Ubah Password</div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col"><i class="fa fa-calendar"></i> Kalender Akademik</div>
                                </div>
                                <hr/>
                            @show
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="jumbotron">
                        <div class="jumbotron-body">
                            <div class="row">
                                <div class="col-5">
                                    <img src="@yield('img')" class="img-responsive rounded m-auto h-100 w-100">
                                </div>
                                <div class="col-1" style="border-left: 1px dotted black"></div>
                                <div class="col-6">
                                    <div class="font-weight-bolder h4 m-0">Data @yield('profil')</div>
                                    <hr/>
                                    <div class="form-group row my-0">
                                        <label class="col-4 col-form-label">Nama</label>
                                        <label class="col col-form-label">: @yield('nama')</label>
                                    </div>
                                    <div class="form-group row my-0">
                                        <label class="col-4 col-form-label">Umur</label>
                                        <label class="col col-form-label">: @yield('umur') Tahun</label>
                                    </div>
                                    <div class="form-group row my-0">
                                        <label class="col-4 col-form-label">Jenis Kelamin</label>
                                        <label class="col col-form-label">: @yield('jk')</label>
                                    </div>
                                    <div class="form-group row my-0">
                                        <label class="col-4 col-form-label">Tempat Lahir</label>
                                        <label class="col col-form-label">: @yield('tempat')</label>
                                    </div>
                                    <div class="form-group row my-0">
                                        <label class="col-4 col-form-label">Tanggal Lahir</label>
                                        <label class="col col-form-label">: @yield('tanggal')</label>
                                    </div>
                                    @yield('data')
                                    <div class="font-weight-bolder h4 my-2">Kontak</div>
                                    <hr/>
                                    <div class="form-group row my-0">
                                        <label class="col-4 col-form-label">No Hp</label>
                                        <label class="col col-form-label">: @yield("no")</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- footer --}}
            <div class="row h2 text-dark bg-light">
                <div class="col-10">
                    Zicola Vladimir - 1822250087
                </div>
                <div class="col-2">
                    &copy; 2020
                </div>
            </div>
        </div>
    </body>
</html>