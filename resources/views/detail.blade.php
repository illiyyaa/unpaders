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
            <h3>Ini Tiga Rekomendasi Konferensi Covid-19 IKA Unpad</h3>
            <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span> 
            <div class="card flex-center">
                <div class=”card-image”>
                    <img src="img/gambar2.jpg" width="1200px:" height="400px;">
                </div>
                <div class="card-body p-0">
                    <p class="card-text">Ketua Panitia “International Conference on Covid-19 Pandemic, Tackling The Covid-19 Pandemic: Health, Economic, Diplomacy, and Social Perspectives” Philips Jusario Vermonte</p>
                </div>
            </div>
            <br>
            <p>Konferensi internasional mengenai pandemi Covid-19 yang diselengagrakan Ikatan Keluarga Alumni Universitas Padjajaran (IKA Unpad) bekerja sama dengan Kamar Dagang Indonesia (Kadin), dan Islamic Chamber of Commerce, Industry, and Agriculture (ICCIA) telah berakhir.
            Konferensi yang bertema <span style="font-style:italic; font-weight:bold;">"Tackling The Covid-19 Pandemic: Health, Economic, Diplomacy, and Social Perspectives” </span> itu digelar secara hybrid dari Hotel Pullman Bandung, Jawa Barat, pada tanggal 23 sampai 25 Februari 2021.
            Dalam konferensi internasional itu para panelis membahas kondisi terkini di bidang kesehatan, ekonomi, diplomasi, dan sosial di masa pandemi Covid-19.</p>    
            <p>Pada penutupan konferensi, Ketua Panitia Philips Jusario Vermonte yang juga bertindak sebagai moderator membacakan kesimpulan yang dihasilkan dari presentasi yang dibawakan para panelis di hari pertama hingga hari ketiga.
            Pertama, katanya, dibutuhkan kerja sama global untuk penanggulangan pandemi Covid-19. Perlu diingat bahwa vaksin bukanlah solusi tunggal untuk menyelesaikan pandemi.
            Terlebih lagi, vaksinasi juga masih menyisakan berbagai tantangan. Mulai dari kurang meratanya akses untuk mendapat vaksin di banyak negara di dunia, kesulitan jalur pendistribusian, hingga permasalahan lain seperti sulitnya memiliki sarana penyimpanan vaksin yang memadai.</p>
            <p>Kedua, dibutuhkan inisiatif dan kebijakan pemerintah yang mendukung pemulihan ekonomi.
            Pemulihan ekonomi sangat penting untuk bisa bangkit dari pandemi Covid-19. Fakta di Indonesia menunjukkan bahwa 90% pengusaha (terutama UMKM) terkena dampak pandemi yang erat kaitannya dengan penurunan daya beli masyarakat.  Karena itulah diperlukan inisiatif serta kebijakan yang fleksibel dan pro-pemulihan ekonomi.
            Inisiatif yang menjadi krusial adalah kerja sama ekonomi menuju keterhubungan yang lebih global. Termasuk di dalamnya pengembangan infrastruktur dan digital agar perekonomian bisa tumbuh kembali.
            Pemulihan ekonomi juga tidak bisa berjalan tanpa revitalisasi perdagangan. Karena itu dibutuhkan kebijakan yang mendukung akselerasi transformasi digital, termasuk di dalamnya pengembangan SDM yang kompeten.</p>
            <p>Ketiga, masyarakat harus mampu bertransformasi dalam kehidupan sosial budaya.
            Pandemi Covid-19 menuntut masyarakat seluruh dunia untuk beradaptasi dengan kebudayaan baru alias new normal. Kita harus bersiap bahwa pandemi Covid-19 bukanlah pandemi terakhir yang akan dihadapi di masa depan. Karena itulah jika kita berhasil membangun budaya dan norma-norma baru saat ini, maka kita bisa lebih mampu bertahan di masa depan.
            Salah satu yang urgen adalah investasi di bidang keilmuan, termasuk di dalamnya pembangunan laboratorium yang lebih canggih, penelitian yang lebih masif, kerja sama ilmiah dengan berbagai negara dan lembaga internasional, dan terutama bagaimana mengupayakan produksi vaksin secara independen.</p>
            <hr>
            <h6 style="font-size: 16px; color:#8A8A8A"><button onClick="hello()" style="background:none; border:none; color:#8A8A8A"><i class="fa fa-thumbs-up"></i></button><a id="clicks">0</a></h6>
            <br>                
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
                                <h6 style="font-size: 12px; color:#8A8A8A"><button onClick="hello()" style="background:none; border:none; color:#8A8A8A"><i class="fa fa-thumbs-up"></i></button><a id="clicks">0</a> | 1 menit yang lalu </h6>
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