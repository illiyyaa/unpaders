@extends ('layouts.footer')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>       
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Poppins', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            label{
                color: #000000;
                font-weight: bold;
            }

            h6 > a{
                color: #000000;
            }

            h5{
                color: #000000;
            }

            .form-control:focus {
            box-shadow: none;
            }

            .form-control::placeholder {
            font-size: 0.95rem;
            color: #aaa;
            font-style: italic;
            }

            .time{
                font-size: 14px;
                color: #8A8A8A;
            }
            .input-group{
                width: 250px;
                height: 40px;
                margin-right: 220px;
            }

            .bg-none{
                margin-bottom:200px;
                background: none;
                bottom: 5px;
            }
            .wave-container {
        
            background: #09F;
         
            }

            .btn-link{
                bottom: 5px;
            }
            .card:hover .clip-path {
                clip-path: circle(320px at center 0)
            }

            .clip-path {
                position: relative;
                width: 100%;
                height: 100%;
                clip-path: circle(120px at center 0);
                background: linear-gradient(180deg, #FDCD5E 0%, rgba(253, 176, 0, 0) 100%);;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: all 0.3s
            }

            .clip-path h2 {
                color: #fff;
                font-size: 30px
            }


            .list-group-item > a{
            text-decoration: none;
            color: #000000;
            }

            .list-group a:hover{
            background-color: none;
            color: #18B5FC;
            }
            
            .topnav {
            overflow: hidden;
            background: none;
            }

            .topnav a {
            float: left;
            display: block;
            color: #8A8A8A;
            text-align: center;
            padding: 0px 14px 0px 5px;
            text-decoration: none;
            font-size: 17px;
            }

            .active {
            background-color: none;
            color: #18B5FC;
            min-width:100px;
            
            }

            .topnav .icon {
            display: none;
            }

            .dropdown {
            float: left;
            overflow: hidden;
            }

            .dropdown .dropbtn {
            font-size: 17px;    
            border: none;
            outline: none;
            color: #8A8A8A;
            background-color: inherit;
            font-family: Poppins;
            margin: 0;
            }

            .dropdown-content {
            display: none;
            position: relative;
            background-color: #FFFFFF;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            float: none;
            color: #8A8A8A;
            padding: 2px 6px;
            text-decoration: none;
            display: block;
            text-align: left;
            }

            .topnav a:hover, .dropdown:hover .dropbtn {
            background-color: none;
            color: #18B5FC;
            }

            .dropdown-content a:hover {
            background-color: none;
            color:  #18B5FC;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }

            @media screen and (max-width: 600px) {
            .topnav a:not(:first-child), .dropdown .dropbtn {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
            }

            @media screen and (max-width: 600px) {
                .topnav.responsive {position: relative;}
                .topnav.responsive .icon {
                    position: absolute;
                    right: 0;
                    top: 0;
                }
                .topnav.responsive a {
                    float: none;
                    display: block;
                    text-align: left;
                }
                .topnav.responsive .dropdown {float: none;}
                .topnav.responsive .dropdown-content {position: relative;}
                .topnav.responsive .dropdown .dropbtn {
                    display: block;
                    width: 100%;
                    text-align: left;
                }
            }

            .full-height {
                height: 20vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-content {
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 5px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .content > 

            .title {
                font-size: 84px;
            }
            
            .btn-style{
                background-color: #18B5FC;
                color: #FFFFFF;
                width:90px;
                border-radius: 20px;
            }

            .btn-style > a{
                color: #FFFFFF;
                text-decoration: none;
            }

            .btn-styleda{
                background-color: #18B5FC;
                color: #FFFFFF;
                width:120px;
                border-radius: 20px;
            }

            .btn-styleda > a{
                color: #FFFFFF;
                text-decoration: none;
            }    


            .tag{
                color: #FDB000;
            }

            .taag a:hover{
            text-decoration: none;
            color: #18B5FC;
            }

            .links > a {
                color: #8A8A8A;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .boldtitle {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }


            .m-b-md {
                margin-bottom: 30px;
            }

            .car-height{
                height: 50vh;
            }
            .container-fluid.main{
            position: relative; /* To make the navbar positions relative to this container */
            padding: 0;
            }
            
            .navbar-default {
            background-image: none;
            background-color: transparent; /* Make the menu become transparent */
            border-radius: 0px;
            border: 0;
            box-shadow: none;
            padding: 10px;
            position: absolute; /* Make the menu out of the document flow so it can placed anywhere without disturbing other widgets */
            top: 0;
            left: 0;
            right: 0;
            z-index: 10; /* If you delete this line, your menu link won't be clicked because it is behind the background. Applying this code bring the menu in front of the background */
            }

            .navbar-default .navbar-brand {
            font-family: Poppins;
            color: #ffffff;
            font-size: 20px;
            
            }

            .navbar-default .navbar-nav > li > a {
            color: #ffffff;
            background-color: transparent;
               
            }

          
            .navbar-default .navbar-nav > li > a:focus {
            color: #ffffff;
            background-color: transparent;
            position: absolute;
                right: 10px;
                top: 18px;
            }

            .navbar-default .navbar-toggle {
            border-color: transparent;
            position: absolute;
                right: 20px;
                top: 18px;
            }

            .navbar-default .navbar-toggle:hover {
            background-color: transparent;
            position: absolute;
                right: 20px;
                top: 18px;
            }

            .navbar-default .navbar-toggle:focus {
            background-color: transparent;
            position: absolute;
                right: 20px;
                top: 18px;
            }

            .navbar-default .navbar-toggle .icon-bar {

            position: absolute;
                right: 20px;
                top: 18px;
            }
           
        </style>
    </head>
    <body>
        <div class="container-fluid main">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/logo unpaders.png" width="150" height="40"></a>
                    <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: transparent; border:0; color:#ffffff">BAHASA
                    
                    </button>
                <div>
                    <div class="collapse" id="myNavbar"> 
                        <ul class="nav navbar-nav" style="position: absolute; right: 20px; top: 50px;">          
                        <li><img src="/img/en.png" width="20px;" height="20px;"><a href="#"> English</a></li>
                        <li><img src="/img/fr.png" width="20px;" height="20px;"><a href="#"> French</a></li>
                        <li><img src="/img/sp.png" width="20px;" height="20px;"><a href="#"> Spanish</a></li>
                        <li><img src="/img/cn.png" width="20px;" height="20px;"><a href="#"> Chinese</a></li>
                        <li><img src="/img/ko.png" width="20px;" height="20px;"><a href="#"> Korean</a></li>
                        <li><img src="/img/ar.png" width="20px;" height="20px;"><a href="#"> Arabic</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                <div class="carousel-item active car-height">  
                    <img src="/img/gambar1.jpg" class="d-block w-100 h-100" alt="gambar">
                    <div class="carousel-caption d-none d-md-block">
                    <h4>IKA UNPAD DI PUNCAK SIBAYAK</h4>
                    <p>TIM UNPADERS</p>
                    </div>
                </div>
                <div class="carousel-item car-height">
                    <img src="/img/gambar2.jpg" class="d-block w-100  h-100" alt="gambar">
                    <div class="carousel-caption d-none d-md-block">
                    <h4>Ini Tiga Rekomendasi Konferensi Covid-19 IKA Unpad</h4>
                    <p>TIM UNPADERS</p>
                    </div>
                </div>
                <div class="carousel-item car-height">
                    <img src="/img/gambar3.jpg" class="d-block w-100  h-100" alt="gambar">
                    <div class="carousel-caption d-none d-md-block">
                    <h4>Ketua ICCIA: Hadapi Pandemi Covid-19, Tak Ada Ruang untuk Pesimisd</h4>
                    <p>TIM UNPADERS</p>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
               <div class="container">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="top-left">
                    <div class="topnav" id="myTopnav">
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ url('/home')}}">HOME 
                        </button>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ url('/aktual')}}">AKTUAL</a> 
                        </button>
                        <div class="dropdown-content">
                        <a href="{{ url('/aktual/acara')}}">ACARA</a>
                        <a href="{{ url('/aktual/berita')}}">BERITA</a>
                        <a href="{{ url('/aktual/opini')}}">OPINI</a>
                        </div>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ url('/alumni')}}">ALUMNI 
                        {{-- <i class="fa fa-caret-down"></i> --}}
                        </button>
                        <div class="dropdown-content">
                        <a href="{{ url('/alumni/berkabar')}}">BERKABAR</a>
                        <a href="{{ url('/alumni/kenangan')}}">KENANGAN</a>
                        <a href="{{ url('/alumni/wikialumni')}}">WIKIALUMNI</a>
                        </div>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ url('/lapak')}}">LAPAK 
                        </button>
                        <div class="dropdown-content">
                        <a href="{{ url('/lapak/kuliner')}}">KULINER</a>
                        <a href="{{ url('/lapak/kiatbisnis')}}">KIAT BISNIS</a>
                        <a href="{{ url('/lapak/merchandise')}}">MERCHANDISE</a>
                        <a href="{{ url('/lapak/preloved')}}">PRELOVED</a>
                        <a href="{{ url('/lapak/umkmcenter')}}">UMKM CENTER</a>
                        </div>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ url('/loker')}}">LOKER 
                        </button>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ url('/unpaders')}}">UNPADERS 
                        </button>
                    </div> 

                     <!-- End -->
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                    </div>
                    </div>
                    <div class="input-group mb-4 border rounded-pill p-1 top-right" style="width: 200px;">
                        <input type="search" placeholder="Type here..." aria-describedby="button-addon3" class="form-control bg-none border-0">
                        <div class="input-group-append border-0">
                        <button id="button-addon3" type="button" class="btn btn-link text-success"><i class="fa fa-search" style="color: #18B5FC;"></i></button>
                        </div>
                    </div>
                    <div class="top-right">
                        <button class="btn btn-styleda"><a href="{{url('/artikel')}}">DASHBOARD</a></button>           
                    </div>
                </div>
            </div>

              
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 ">
                        <h5 class="container">TERKINI</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">IKA Unpad di Puncak Sibayak</a></li>
                            <li class="list-group-item"><a href="#">Ketua ICCIA: Hadapi Pandemi Covid-19, Tak Ada Ruang untuk Pesimis</a></li>
                            <li class="list-group-item"><a href="#">Ini Tiga Rekomendasi Konferensi Covid-19 IKA Unpad</a></li>
                            <li class="list-group-item"><a href="#">Irawati Hermawan: Penanganan Covid-19 Perlu Kolaborasi</a></li>
                            <li class="list-group-item"><a href="#">Selamat Jalan Bung Candra</a></li>
                            <li class="list-group-item"><a href="#">Temui Menko Airlangga Hartarto, IKA Unpad Tawarkan Game Changer</a></li>
                        </ul>
                        <br>
                        <div class=" height-100 d-flex justify-content-center align-items-center">
                            <div class="card" style="background:linear-gradient(180deg, #F9EBCD 0%, #FFFFFF 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FDCD5E" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,234.7C384,235,480,181,576,176C672,171,768,213,864,229.3C960,245,1056,235,1152,218.7C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
                                <h5 style="text-align:center;">SPORT CENTER KEWIRAUSAHAAN</h5>
                                <div class="card-body">
                                Kamu punya UMKM? Ingin memasarkan usaha kamu di website Unpaders? Bisa banget! Unpaders menyediakan tempat untuk kamu yang ingin memasarkan usaha kamu di website ini. Klik banner di atas untuk info lebih lanjut ya!
                                </div>
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9FCEE5"  d="M0,96L48,106.7C96,117,192,139,288,133.3C384,128,480,96,576,106.7C672,117,768,171,864,186.7C960,203,1056,181,1152,149.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                                </div>
                            </div>
                            <br>
                            <div class="card" style="background:linear-gradient(180deg, #F9EBCD 0%, #FFFFFF 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FDCD5E" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,234.7C384,235,480,181,576,176C672,171,768,213,864,229.3C960,245,1056,235,1152,218.7C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
                                <div class="card-body">                                
                                <h5 style="text-align:center;">VISITOR</h5>
                                <br>
                                <ul class="list-unstyled" style="text-align:center;">
                                <li>Korea = 100</li>
                                    <li>Spain = 250</li>
                                    <li>China = 230</li>
                                    <li>French = 95</li>
                                    <li>Saudi Arabia = 10</li>
                                </ul>
                                </div>
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9FCEE5"  d="M0,96L48,106.7C96,117,192,139,288,133.3C384,128,480,96,576,106.7C672,117,768,171,864,186.7C960,203,1056,181,1152,149.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

                            </div>
                        <br>
                        <br>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-9 ">
                    <ul class="list-unstyled mb-0">
                        <li>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                                <a href="#!" class=""><img src="img/gambar2.jpg" ></a>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                                <a href="{{url('/aktual')}}" class="tag">AKTUAL</a> 
                                <h6><a href="{{url('/detail')}}">Ini Tiga Rekomendasi Konferensi Covid-19 IKA Unpad</a></h6>
                                <p>UNPADERS. Konferensi internasional mengenai pandemi Covid-19 yang diselengagrakan Ikatan Keluarga Alumni Universitas Padjajaran (IKA Unpad) bekerja sama dengan Kamar Dagang Indonesia (Kadin), dan Isla ...</p>  
                                <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                            </div>
                        </li>
                        <hr>
                        <li>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                                <a href="#!" class=""><img src="img/gambar4.jpg" ></a>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                                <a href="{{url('/aktual')}}" class="tag">AKTUAL</a>
                                <h6><a href="{{url('/detail')}}">Irawati Hermawan: Penanganan Covid-19 Perlu Kolaborasi</a></h6> 
                                <p>UNPADERS. Ikatan Alumni Universitas Padjadjaran (IKA Unpad) akan menyelenggarakan Konferensi Internasional untuk mengatasi pandemi Covid-19 dari aspek kesehatan, ekonomi, serta perspektif sosial. Konf ...</p>  
                                <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                            </div>
                        </li>
                        <hr>
                        <li>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                                <a href="#!" class=""><img src="img/gambar3.jpg" ></a>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                                <a href="{{url('/aktual')}}" class="tag">AKTUAL</a>
                                <h6><a href="{{url('/detail')}}">Ketua ICCIA: Hadapi Pandemi Covid-19, Tak Ada Ruang untuk Pesimisd</a></h6> 
                                <p>UNPADERS. Bangsa-bangsa di dunia perlu memperkuat solidaritas  untuk mencari cara menciptakan dunia yang lebih baik. Salah satu yang sangat krusial adalah memikirkan cara untuk menghidupkan kemba ...</p>  
                                <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                            </div>
                        </li>
                        <hr>
                        <li>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                                <a href="#!" class=""><img src="img/gambar 5.jpg" ></a>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                                <a href="{{url('/alumni')}}" class="tag">ALUMNI</a> 
                                <h6><a href="{{url('/detail')}}">Selamat Jalan Bung Candra</a></h6>
                                <p>Usep Setiawan, Alumni Antropologi Unpad 1991, mantan Ketua Human Unpad 1995-1996 DALAM salah satu aksi mahasiswa Unpad di Kampus, Jl. Dipatiukur, Bandung, tahun 1994-an, saya orasi membuka aksi ...</p>  
                                <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                            </div>
                        </li>
                        <hr>
                        <li>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                                <a href="#!" class=""><img src="img/gambar6.jpg" ></a>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                                <a href="{{url('/aktual')}}" class="tag">AKTUAL</a> 
                                <h6><a href="{{url('/detail')}}">Temui Menko Airlangga Hartarto, IKA Unpad Tawarkan Game Changer</a></h6>
                                <p>UNPADERS. Diharapkan 1.000 peserta dari 70 negara akan menghadiri konferensi internasional mengenai penanganan pandemi Covid-19 yang akan diselenggarakan Ikatan Keluarga Alumni Universitas Padjadjaran ...</p>  
                                <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                            </div>
                        </li>
                        <br>
                    </ul>
                    </div>
                </div>
                <!--Grid row-->
                </div>
                <!-- Grid container -->         
    
        <script>
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
        }
        </script>
    </body>
</html>

    
