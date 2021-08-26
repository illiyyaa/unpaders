@extends ('layouts.sidebar')


@section ('content')
  <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
             <a class="navbar-brand" href="{{ url('/home') }}"><img src="/img/logo unpaders.png" width="150" height="40" style="margin-left:30px;"></a>
             
            </div>

            <ul class="list-unstyled components"  style="text-align: center"> <!-- menghapus components yg ada di class-->
                <li>
                    <a href="{{url('/artikel')}}">Artikel</a>
                </li>
                <li class="active">
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

            <button type="button" id="sidebarCollapse" class="btn">
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
   
    
    <br>
    <div class="card">
     <div class="card-header" style="background-color: #FFFFFF">PESANAN SAYA</div>
        <div class="card-body">
            <table class="table table-bordered" style="padding: 10px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Produk</th>
                    <th>Kuantitas</th>
                    <th>Alamat</th>
                    <th>Catatan</th>
                    <th>Status</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>01/05/2021</td>
                    <td>Kaos Unpaders</td>
                    <td>1</td>
                    <td>Bandung</td>
                    <td>Lengan Pendek</td>
                    <td>Dikirim</td>
                    <td><button class="btn btn-stylered">HAPUS</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>21/06/2021</td>
                    <td>Scuba Mask</td>
                    <td>10</td>
                    <td>Bandung</td>
                    <td>-</td>
                    <td>Dikemas</td>
                    <td><button class="btn btn-stylered">HAPUS</button></td>
                </tr>
                    <tr>
                    <td>3</td>
                    <td>10/07/2021</td>
                    <td>Kaos Unpaders</td>
                    <td>2</td>
                    <td>Bekasi</td>
                    <td>Lengan Pendek</td>
                    <td>Dikemas</td>
                    <td><button class="btn btn-stylered">HAPUS</button></td>
                </tr>
               
            </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>
{{-- <footer class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: #222222; height:100px;" >
   
    {{-- <div class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: #000000; height:100px;" >
    {{-- <div class="container-fluid">
    </div> --}}
   

    
@endsection
