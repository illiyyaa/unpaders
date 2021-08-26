@extends ('layouts.sidebar')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
</style>
<body>
<div class="wrapper" id="artikel">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
        <a class="navbar-brand" href="{{ url('/home') }}"><img src="/img/logo unpaders.png" width="150" height="40" style="margin-left:30px;"></a>
        </div>

        <ul class="list-unstyled components" style="text-align: center">
            <li class="active">
                <a href="{{url('/artikel')}}">Artikel</a>
            </li>
            <li>
                <a href="{{url('/belanja')}}">Belanja</a>
            </li>
            <li>
                <a href="{{url('/')}}">Logout</a>
            </li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn ">
                    <i class="fa fa-align-justify"></i>
                   
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/profil')}}"><img src="/img/user.png"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="card">
            <div class="card-header" style="background-color: #FFFFFF;">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        ARTIKEL SAYA
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-style"><a href={{url('/tambahArtikel')}}>TAMBAH</a></button> 
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>View</th>
                        <th>Status</th>
                        <th>Foto Tambahan</th>
                        <th>EDIT</th>
                        <th>HAPUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01/05/2021</td>
                        <td>Menkes BGS: Target Vaksinasi 15 Bulan 70 Persen Populasi</td>
                        <td>AKTUAL</td>
                        <td>70</td>
                        <td>DIUNGGAH</td>
                        <td><img src="/img/aktual/bgs.jpg" width="100%;"></td>
                        <td><button class="btn btn-styleyellow"><a href="{{url('/tambahArtikel')}}">EDIT</a></button></td>
                        <td><button class="btn btn-stylered">HAPUS</button></td>
                    </tr>
                    <tr>
                        <td>23/07/2021</td>
                        <td>Irawati Hermawan: Penanganan Covid-19 Perlu Kolaborasi</td>
                        <td>AKTUAL</td>
                        <td>0</td>
                        <td>DIREVIEW</td>
                        <td><img src="/img/gambar4.jpg" width="100%;"></td>
                        <td><button class="btn btn-styleyellow"><a href="{{url('/tambahArtikel')}}">EDIT</a></button></td>
                        <td><button class="btn btn-stylered">HAPUS</button></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>    
    </div>
</div>
</body>
</html>



