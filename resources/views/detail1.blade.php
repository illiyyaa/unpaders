@extends ('layouts.default')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
/*
    Image credits:
    uifaces.com (http://uifaces.com/authorized)
*/
.tag{
    color: #FDB000;
}
.tag:hover{
    text-decoration: none;
    color: #18B5FC;
}
.reviews {
    color: #18B5FC;    
    margin: 10px auto 20px;
}
.media .media-object { max-width: 120px; }
.media-body { position: relative; }

.media-comment { 
    margin-bottom: 20px; 
    color: #000;
}
.tab-content {
    padding: 20px 15px;
    border: 1px solid #ddd;
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
h3{
    color: #000;
}
h4{
    color: #000;
}
h6{
    color: #000;
}
p{
    color: #000;
}
</style>

@section ('content')
<div class="container">
    <div class="row">
        <div class="mx-auto">
            <a href="{{url('/aktual')}}" class="tag">AKTUAL</a>
            <h3>Irawati Hermawan: Penanganan Covid-19 Perlu Kolaborasi</h3>
            <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Selasa, 23 Februari 2021</span> 
            <div class="card flex-center">
                <div class=”card-image”>
                    <img src="img/gambar4.jpg" width="1200px:" height="400px;">
                </div>
                <div class="card-body p-0">
                    <p class="card-text">Ketua Panitia “International Conference on Covid-19 Pandemic, Tackling The Covid-19 Pandemic: Health, Economic, Diplomacy, and Social Perspectives” Philips Jusario Vermonte</p>
                </div>
            </div>
            <br>
            <p> Ikatan Alumni Universitas Padjadjaran (IKA Unpad) akan menyelenggarakan Konferensi Internasional untuk mengatasi pandemi Covid-19 dari aspek kesehatan, ekonomi, serta perspektif sosial. Konferensi tersebut diselenggarakan secara daring dari tanggal 23 hingga 25 Februari 2021 serta diikuti oleh berbagai tokoh dari beberapa negara.</p>    
            <p>Ketua IKA Unpad, Irawati Hermawan mengatakan, kondisi pandemi Covid-19 khususnya di Indonesia memerlukan kolaborasi semua pihak untuk menghadapi maupun dalam penanganannya. Atas dasar itu, pihaknya tak henti-hentinya berupaya menyatukan perspektif semua pihak untuk bersama-sama mengatasi pandemi Covid-19.</p>
            <p>"IKA Unpad bekerjasama dengan Unpad, Kadin dan Islamic Chamber or Commerce, Industry, and Agriculture (ICCIA)," kata Teh Ira sapaan akrabnya di Hotel Pullman, Kota Bandung," Selasa (23/2).</p>
            <p>Menurutnya, kegiatan tersebut semua tenaga maupun pikiran para alumni Unpad dicurahkan untuk mewujudkan kegiatan yang diharapkan mampu memberikan manfaat bagi bangsa dan negara. Oleh karena itu Teh Ira berterima kasih atas antusiasme semua pihak saat Launching International Conference Tackling The Covid-19 Pandemic pada awal januari 2021 lalu.</p>
            <p>Konferensi internasional tersebut akan dibuka oleh Presiden RI Joko Widodo dan ditutup oleh Wakil Presiden RI Ma'ruf Amin. Selain itu, beberapa menteri kabinet Indonesia Maju turut menjadi pembicara seperti, Menteri Koordinator Bidang Perekonomian Airlangga Hartarto, Menteri Luar Negeri Retno Marsudi, Menteri Kesehatan Budi Gunadi Sadikin, Menteri BUMN Erick Thohir, Menteri Kesehatan Kerajaan Arab Saudi Tawfig Al Rabiah, Chairman of ICCIA H.E Abdullah Saleh Kamel, Rektor Universitas Padjadjaran Prof. Dr. Rina Indiastuti, dan Ketua KADIN Rosan Roeslani. [R]</p>
            <hr>
            <h4>KOMENTAR (0)</h4>
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="col-2">
                    <button class="btn btn-style"><a href="{{url('/detail')}}" style="text-decoration:none; color: #FFFFFF;">Kirim</a></button>
                </div>
            </div>
            <br>
            <br>
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                        <li class="media">
                        {{-- <a class="pull-left" href="#">
                            <img class="media-object img-circle" src="/img/user.png" alt="profile">
                        </a> --}}
                        <div class="media-body">
                            <div class="well well-lg pull-left">
                                <h6 class="media-heading reviews"><img class="media-object img-circle" src="/img/user.png" alt="profile"> Alaa Illiyya</h6>
                                <p class="media-comment">
                                wahh, semoga pandemi cepet selesai deh. aamiin.
                                </p>
                                <script type="text/javascript">
                                var clicks = 0;
                                function hello() {
                                    clicks += 1;
                                    document.getElementById("clicks").innerHTML = clicks;
                                };
                                </script>
                                <div class="row">
                                    <h6 style="font-size: 12px; color:#8A8A8A"><button onClick="hello()" style="background:none; border:none; color:#8A8A8A"><i class="fa fa-thumbs-up"></i></button><a id="clicks">0</a> | 1 menit yang lalu </h6>
                                </div>
                            </div>              
                        </div>
                        </li>                  
                    </ul> 
                </div>
            </div>
            <br>
            <h4>BACA JUGA<hr></h4>
            <div class="row">
                <div class="col">
                <img src="/img/gambar3.jpg" class="d-block w-100  h-100" alt="gambar">
                <br>
                <h6>Ketua ICCIA: Hadapi Pandemi Covid-19, Tak Ada Ruang untuk Pesimis</h6>
                </div>
                <div class="col">
                <img src="/img/gambar 5.jpg" class="d-block w-100  h-100" alt="gambar">
                <br>
                <h6> Selamat Jalan Bung Candra</h6>    
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection