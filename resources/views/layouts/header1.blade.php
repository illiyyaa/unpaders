    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Poppins', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 40vh;
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

    .input-group{
        width: 250px;
        height: 40px;
        margin-right: 100px;
        margin-top: 110px;
    }
            
     .bg-none{
                margin-bottom:200px;
                background: none;
                bottom: 5px;
            }
    .top-right {
        position: absolute;
        right: 10px;
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

    .links > a {
        color: #8A8A8A;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .container-fluid.main{
    position: relative; /* To make the navbar positions relative to this container */
    padding: 0;
    }

    
    .navbar-default {
    background-image: none;
    background-color: #FFF; /* Make the menu become transparent */
    border-radius: 0px;
    border: 0;
    box-shadow:1px 1px 3px #8A8A8A; 
    padding: 10px;
    position: absolute; /* Make the menu out of the document flow so it can placed anywhere without disturbing other widgets */
    top: 0;
    left: 0;
    right: 0;
    z-index: 10; /* If you delete this line, your menu link won't be clicked because it is behind the background. Applying this code bring the menu in front of the background */
    }

    /*.navbar-default .navbar-brand {
    font-family: Poppins;
    color: #ffffff;
    font-size: 20px;
    
    }*/


    .navbar-default .navbar-nav > li > a {
    color: #8A8A8A;
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
    float: right;
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

.page-item .page-link{
    color: #18B5FC;
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
 .btn-styleyellow{
    background-color: #FDB000;
    color: #FFFFFF;
    width:90px;
    border-radius: 20px;
}

.btn-styleyellow > a{
    color: #FFFFFF;
    text-decoration: none;
}

.container-1{
  width: 250px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}

.container-1 input#search{
  width: 250px;
  height: 40px;
  background: transparent;
  font-size: 10pt;
  float: left;
  color: #8A8A8A;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 20px;
  border: 1px solid #18B5FC;
}
.container-1 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-1 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-1 input#search:-ms-input-placeholder {  
   color: #65737e;  
}

.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
}
.container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
    outline:none;
    background: transparent;
  }


</style>
<body>
<div class="container-fluid main">
    <nav class="navbar navbar-default ">
        <div class="container-fluid ">
            <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/logo unpaders.png"  width="150" height="40"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: transparent; border:none; color:#8A8A8A">BAHASA
                </button>
                   <div class="collapse" id="myNavbar"> 
                <ul class="nav navbar-nav" style=  "position: absolute;
                right: 20px;
                top: 50px;">          
                <li><img src="/img/en.png"><a href="#"> English</a></li>
                <li><img src="/img/fr.png"><a href="#"> French</a></li>
                <li><img src="/img/sp.png"><a href="#"> Spanish</a></li>
                <li><img src="/img/cn.png"><a href="#"> Chinese</a></li>
                <li><img src="/img/ko.png"><a href="#"> Korean</a></li>
                <li><img src="/img/ar.png"><a href="#"> Arabic</a></li>
                </ul>
                </div>
            <div>
         
            <div class="content">
                <div class="topnav" id="myTopnav" style="margin-left: 250px;">
                    <a href="{{url('/')}}" class="active">HOME</a>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{url('/aktual')}}">AKTUAL</a> 
                        </button>
                        <div class="dropdown-content">
                        <a href="{{url('/aktual/acara')}}">ACARA</a>
                        <a href="{{url('/aktual/berita')}}">BERITA</a>
                        <a href="{{url('/aktual/opini')}}">OPINI</a>
                        </div>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{url('/alumni')}}">ALUMNI</a>  
                        {{-- <i class="fa fa-caret-down"></i> --}}
                        </button>
                        <div class="dropdown-content">
                        <a href="{{url('/alumni/berkabar')}}">BERKABAR</a>
                        <a href="{{url('/alumni/kenangan')}}">KENANGAN</a>
                        <a href="{{url('/alumni/wikialumni')}}">WIKIALUMNI</a>
                        </div>
                    </div> 
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{url('/lapak')}}">LAPAK</a>  
                        </button>
                        <div class="dropdown-content">
                        <a href="{{url('/lapak/kuliner')}}">KULINER</a>
                        <a href="{{url('/lapak/kiatbisnis')}}">KIAT BISNIS</a>
                        <a href="{{url('/lapak/merchandise')}}">MERCHANDISE</a>
                        <a href="{{url('/lapak/preloved')}}">PRELOVED</a>
                        <a href="{{url('/lapak/umkmcenter')}}">UMKM CENTER</a>
                        </div>
                    </div> 
                    <a href="{{url('/loker')}}">LOKER</a>
                    <a href="{{url('/unpaders')}}">UNPADERS</a>
                    <a>
                    <div class="box">
                    <div class="container-1">
                        <input type="search" id="search" placeholder="Search..." />
                        <span class="icon"><i class="fa fa-search" style="color: #18B5FC;"></i></span>
                    </div>
                    </div>
                    </a>
                    <div>
                    {{-- <div class="input-group mb-4 border rounded-pill p-1 top-right" >
                        <input type="search" placeholder="Type here..." aria-describedby="button-addon3" class="form-control bg-none border-0">
                        <div class="input-group-append border-0">
                        <button id="button-addon3" type="button" class="btn btn-link text-success"><i class="fa fa-search" style="color: #18B5FC;"></i></button>
                    </div> --}}

                    </div>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                    </div>
                    {{-- <div class="input-group mb-4 border rounded-pill p-1 topnav" >
                        <input type="search" placeholder="Type here..." aria-describedby="button-addon3" class="form-control bg-none border-0">
                        <div class="input-group-append border-0">
                        <button id="button-addon3" type="button" class="btn btn-link text-success"><i class="fa fa-search" style="color: #18B5FC;"></i></button>
                    </div> --}}
                </div>
            </div>
        </div>
    </nav>            
    <div>
        <div class="flex-center position-ref full-height">
         
        </div>    
    </div>
</div>

</body>

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
@yield('con')
@yield ('content')