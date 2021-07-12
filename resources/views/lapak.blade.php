@extends ('layouts.default')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>
$(document).ready(function(){
    $('.count').prop('disabled', true);
    $(document).on('click','.plus',function(){
        $('.count').val(parseInt($('.count').val()) + 1 );
    });
    $(document).on('click','.minus',function(){
        $('.count').val(parseInt($('.count').val()) - 1 );
            if ($('.count').val() == 0) {
                $('.count').val(1);
            }
    });
});
</script>

<style>

.card-title > a {
    text-decoration:none;
    color: #000;
}
.card-title > a:hover {
    text-decoration:none;
    color: #8A8A8A;
}

.card-text{
    color: #000;
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

.qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 25px;
    font-weight: 700;
    line-height: 30px;
    padding: 0 2px;
    min-width: 35px;
    text-align: center;
}
.qty .plus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-color: #18B5FC;
    }
.qty .minus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
    background-color: #8A8A8A;
}
.qty {
    text-align: left;
}
.minus:hover{
    background-color: #8A8A8A !important;
}
.plus:hover{
    background-color: #18B5FC !important;
}
/*Prevent text selection*/
span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 2%;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}

h5 > a{
    color: #000;
}
</style>

@section ('content')
<div class="container">

<h5><a href="{{url('/lapak/kuliner')}}"> KULINER </a></h5>
<div class="card-deck" style="padding:50px; width:70rem; ">
        <div class="card">
        <img src="/img/lapak/kebuli.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Nasi Goreng Kebuli</a></h5>
            <p class="card-text">Nama Alumni: Okky Paramitha Jurusan/Angkatan: Administrasi Bisnis – FISIP / 2011 Kategori Usaha: Nasi Goreng Kebuli Nomor Kontak: 081312384584....</p>
        </div>
        </div>
        <div class="card">
        <img src="/img/lapak/cireng.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Cireng Galin Nyinden</a></h5>
            <p class="card-text">Nama Alumni: Hari Koswara Jurusan/Angkatan: PAA FISIP LOGISTIK / 1997 Kategori Usaha: Cireng, Cilok, Es Lahang Nomor Kontak: 089631329925 Lokasi ...</p>
        </div>
        </div>
        <div class="card">
        <img src="/img/lapak/cumi.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Cumi Bakar Squidmore</a></h5>
            <p class="card-text">Nama Alumni: Vina Jurusan/Angkatan: PAAP Unpad / 2000 Kategori Usaha: Cumi bakar dan olahan seafood Nomor Kontak: 085691480620 Lokasi...</p>
        </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<h5><a href="{{url('/lapak/kiatbisnis')}}">  KIAT BISNIS </a></h5>
<div class="card-deck" style="padding:50px; width:70rem; ">
    <div class="card">
        <img src="/img/lapak/kebuli.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Nasi Goreng Kebuli</a></h5>
            <p class="card-text">Nama Alumni: Okky Paramitha Jurusan/Angkatan: Administrasi Bisnis – FISIP / 2011 Kategori Usaha: Nasi Goreng Kebuli Nomor Kontak: 081312384584....</p>
        </div>
        </div>
        <div class="card">
        <img src="/img/lapak/cireng.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Cireng Galin Nyinden</a></h5>
            <p class="card-text">Nama Alumni: Hari Koswara Jurusan/Angkatan: PAA FISIP LOGISTIK / 1997 Kategori Usaha: Cireng, Cilok, Es Lahang Nomor Kontak: 089631329925 Lokasi ...</p>
        </div>
        </div>
        <div class="card">
        <img src="/img/lapak/cumi.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Cumi Bakar Squidmore</a></h5>
            <p class="card-text">Nama Alumni: Vina Jurusan/Angkatan: PAAP Unpad / 2000 Kategori Usaha: Cumi bakar dan olahan seafood Nomor Kontak: 085691480620 Lokasi...</p>
        </div>
        </div>
    </div>
</div>
</div>


<div class="container">
<h5><a href="{{url('/lapak/merchandise')}}">  MERCHANDISE </a></h5>
<div class="card-deck" style="padding:50px; width:70rem; ">
    <div class="card">
        <img src="/img/scuba.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli1" href="#mybeli1">Scuba Mask</a></h5>
            <h4 class="card-text">Rp. 15.000,-</h4>
        </div>
        </div>
        <div class="card">
        <img src="/img/kaos.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#mybeli">Kaos Unpaders</a></h5>
            <h4 class="card-text">Rp. 110.000,-</h4>
        </div>
        </div>
        <div class="card">
        <img src="/img/kaos1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Kaos Unpaders (lengan panjang)</a></h5>
            <h4 class="card-text">Rp. 120.000,-</h4>
        </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<h5><a href="{{url('/lapak/preloved')}}">  PRELOVED </a></h5>
<div class="card-deck" style="padding:50px; width:70rem; ">
    <div class="card">
        <img src="/img/scuba.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Scuba Mask</a></h5>
            <h4 class="card-text">Rp. 15.000,-</h4>
        </div>
        </div>
        <div class="card">
        <img src="/img/kaos.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Kaos Unpaders</a></h5>
            <h4 class="card-text">Rp. 110.000,-</h4>
        </div>
        </div>
        <div class="card">
        <img src="/img/kaos1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Kaos Unpaders (lengan panjang)</a></h5>
            <h4 class="card-text">RP. 120.000,-</h4>
        </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<h5><a href="{{url('/lapak/umkmcenter')}}">  UMKM CENTER </a></h5>
<div class="card-deck" style="padding:50px; width:70rem; ">
    <div class="card">
        <img src="/img/lapak/mustika.jpg" class="card-/-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">PT Mustika Hegar Rekatama</a></h5>
            <p class="card-text">UNPADERS. Developer PT Mustika Hegar Rekatama berdiri tahun 2014 lalu. Hingga saat ini masih fokus mengembangkan perumahan di kawasan Timur-Selatan Bandung... </p>
        </div>
        </div>
        <div class="card">
        <img src="/img/lapak/wim.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Konveksi dan Vendor Wim Clothing</a></h5>
            <p class="card-text">Nama: Wim Clothing Kategori usaha: konveksi baju Nomor kontak: 085954732881 Instagram: @wim_clothing Deskripsi: Wim Clothing adalah salah satu vendor..</p>
        </div>
        </div>
        <div class="card">
        <img src="/img/lapak/bewaze.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Bewaze</a></h5>
            <p class="card-text">UNPADERS. Brand fashion Ethnic Baju-baju keren dalam segala ukuran, termasuk plus size. Karena semua perempuan cantik dan bisa tampil keren apapun uk..</p>
            <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
        </div>
        </div>
    </div>
</div>
@endsection