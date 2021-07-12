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

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content modal-lg" style="background:linear-gradient(180deg, #F9EBCD 0%, #FFFFFF 100%);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FDCD5E" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,234.7C384,235,480,181,576,176C672,171,768,213,864,229.3C960,245,1056,235,1152,218.7C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            {{-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> --}}
            <div class="modal-body">
             <h4 class="modal-title" style="text-align:center;">SELAMAT DATANG</h4>
             <p style="text-align:center;">Unpaders adalah portal komunitas untuk alumni Universitas Padjadaran yang bertujuan untuk mewadahi keberagaman IKA Unpad</p>
                <p><img src="/img/logo unpaders.png" class="center" width="150" height="40" style="position:center;" ></p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9FCEE5"  d="M0,96L48,106.7C96,117,192,139,288,133.3C384,128,480,96,576,106.7C672,117,768,171,864,186.7C960,203,1056,181,1152,149.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

</div>
        </div>
    </div>
</div>
<script>
$('#myModal').modal('show');
</script>
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
                        <th><button class="btn btn-styleyellow">EDIT</button></th>
                        <th><button class="btn btn-stylered">HAPUS</button></th>
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



