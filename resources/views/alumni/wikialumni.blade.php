@extends ('layouts.default')

<style>
.tag {
    color: #FDB000;
}

.taag a:hover {
    text-decoration: none;
    color: #18B5FC;
}

h6 > a{
    color: #000000;
}
</style>

@section ('content')
 <div class="container">
    <!--Grid row-->
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-9 mx-auto">
            <ul class="list-unstyled mb-0">
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h4> ALUMNI > WIKIALUMNI</h4>
                    <p> 200 Artikel. </p>
                </div>
            </div>
            </li>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/alumni/nina.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/alumni/wikialumni')}}" class="tag">ALUMNI > WIKIALUMNI</a> 
                    <h6><a href="{{url('/detail')}}">Nina Fitriana</a></h6>
                    <p>UNPADERS. Nina Fitriana pernah berkuliah di Jurusan Ilmu Pemerintahan FISIP UNPAD angkatan 1999. Mengalami kesadaran berpolitik sejak memiliki puteri berawal dari perbedaan das sein dan das sollen saa ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <hr>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/alumni/yosie.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/alumni/wikialumni')}}" class="tag">ALUMNI > WIKIALUMNI</a>
                    <h6><a href="{{url('/detail')}}">Yosie Kuranji</a></h6> 
                    <p>UNPADERS. Yosie Kuranji, lahir tahun 1977, masuk dan berkuliah di Fakultas Hukum Unpad di tahun 1995, lulus tahun 1999 dengan predikat Cum Laude.  Walaupun kuliah dan lulus dari Fakultas ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <hr>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/alumni/prima.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/alumni/wikialumni')}}" class="tag">ALUMNI > WIKIALUMNI</a>
                    <h6><a href="{{url('/detail')}}">Prima Adikusnan</a></h6> 
                    <p>UNPADER. Nama : Prima Adikusnan Fakultas: ISIP Jurusan : Ilmu Pemerintahan Angkatan :1995 Pekerjaan: ASN Alamat : Kota Bima NTB Hobby: traveling  Email: maz_prim@yahoo.com Quotes: Hidu ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <hr>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/gambar 5.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/alumni/wikialumni')}}" class="tag">ALUMNI > WIKIALUMNI</a> 
                    <h6><a href="{{url('/detail')}}">Selamat Jalan Bung Candra</a></h6>
                    <p>Usep Setiawan, Alumni Antropologi Unpad 1991, mantan Ketua Human Unpad 1995-1996 DALAM salah satu aksi mahasiswa Unpad di Kampus, Jl. Dipatiukur, Bandung, tahun 1994-an, saya orasi membuka aksi ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <hr>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/alumni/paskah.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/alumni/wikialumni')}}" class="tag">ALUMNI > WIKIALUMNI</a> 
                    <h6><a href="{{url('/detail')}}">Paskah Manurung</a></h6>
                    <p>UNPADERS. Paskah Manurung adalah alumnus Fakultas Ilmu Komuniasi (Fikom) Unpad jurusan Imu Humas. Masuk tahun 1988 dia menyelesaikan studinya di UNPAD pada tahun 1993. Pria kelahiran Medan 12 ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <br>
        </ul>
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
    </div>
    <!-- Grid container -->
@endsection