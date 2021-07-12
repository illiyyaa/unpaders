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
                    <h4> LAPAK > UMKM</h4>
                    <p> 200 Artikel. </p>
                </div>
            </div>
            </li>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/gambar2.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/lapak/umkmcenter')}}" class="tag">LAPAK > UMKM CENTER</a> 
                    <h6><a href="{{url('/detail')}}">Ini Tiga Rekomendasi Konferensi Covid-19 IKA Unpad</a></h6>
                    <p>UNPADERS. Konferensi internasional mengenai pandemi Covid-19 yang diselengagrakan Ikatan Keluarga Alumni Universitas Padjajaran (IKA Unpad) bekerja sama dengan Kamar Dagang Indonesia (Kadin), dan Isla ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <hr>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/gambar4.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/lapak/umkmcenter')}}" class="tag">LAPAK > UMKM CENTER</a>
                    <h6><a href="{{url('/detail')}}">Irawati Hermawan: Penanganan Covid-19 Perlu Kolaborasi</a></h6> 
                    <p>UNPADERS. Ikatan Alumni Universitas Padjadjaran (IKA Unpad) akan menyelenggarakan Konferensi Internasional untuk mengatasi pandemi Covid-19 dari aspek kesehatan, ekonomi, serta perspektif sosial. Konf ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <hr>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/gambar3.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/lapak/umkmcenter')}}" class="tag">LAPAK > UMKM CENTER</a>
                    <h6><a href="{{url('/detail')}}">Ketua ICCIA: Hadapi Pandemi Covid-19, Tak Ada Ruang untuk Pesimisd</a></h6> 
                    <p>UNPADERS. Bangsa-bangsa di dunia perlu memperkuat solidaritas  untuk mencari cara menciptakan dunia yang lebih baik. Salah satu yang sangat krusial adalah memikirkan cara untuk menghidupkan kemba ...</p>  
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
                    <a href="{{url('/lapak/umkmcenter')}}" class="tag">LAPAK > UMKM CENTER</a> 
                    <h6><a href="{{url('/detail')}}">Selamat Jalan Bung Candra</a></h6>
                    <p>Usep Setiawan, Alumni Antropologi Unpad 1991, mantan Ketua Human Unpad 1995-1996 DALAM salah satu aksi mahasiswa Unpad di Kampus, Jl. Dipatiukur, Bandung, tahun 1994-an, saya orasi membuka aksi ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <hr>
            <li>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/gambar6.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/lapak/umkmcenter')}}" class="tag">LAPAK > UMKM CENTER</a> 
                    <h6><a href="{{url('/detail')}}">Temui Menko Airlangga Hartarto, IKA Unpad Tawarkan Game Changer</a></h6>
                    <p>UNPADERS. Diharapkan 1.000 peserta dari 70 negara akan menghadiri konferensi internasional mengenai penanganan pandemi Covid-19 yang akan diselenggarakan Ikatan Keluarga Alumni Universitas Padjadjaran ...</p>  
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