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

li{
    color: #000;
}
</style>

@section ('content')
<div class="container">
    <div class="row">
        <div class="mx-auto">
            <a href="{{url('/aktual')}}" class="tag">AKTUAL</a>
            <h3>BI Buka Lowongan Kerja untuk 16 Jurusan Ini, Simak Syarat dan Cara Mendaftarnya</h3>
            <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span> 
            <div class="card flex-center">
                <div class=”card-image”>
                    <img src="/img/loker/bi.jpg" width="1200px:" height="400px;">
                </div>
                <div class="card-body p-0">
                    <p class="card-text">Lowongan kerja Bank Indonesia.</p>
                </div>
            </div>
            <br>
            <p>Bank Indonesia (BI) kembali membuka lowongan kerja jalur Penerimaan Calon Pegawai Muda (PCPM-BI) angkatan ke-35. Pendaftaran calon karyawan baru tersebut akan dilaksanakan mulai hari ini, 5 hingga 10 September 2020.
            Menyadur Pikiranrakyat-Bekasi.com dari situs resmi bank sentral pada Sabtu, 5 September 2020, terdapat 16 jurusan yang berkesempatan untuk mendaftar sebagai calon karyawan BI, berikut syaratnya;</p>    
            <p>PERSYARATAN</p>
            <ol>
            <li>Warga Negara Indonesia (WNI).</li> 
            <li>Telah menyelesaikan masa studi jenjang pendidikan Sarjana (S1) / Pasca Sarjana (S2). </li> 
            <li>Lulusan dari bidang studi: Statistika, Matematika, Teknik Industri, Teknologi Informasi, Teknik Informatika, Sistem Informasi,
            Ilmu Komputer, Ilmu Ekonomi/Studi Pembangunan, Ekonomi Syariah/Islam, Akuntansi, Manajemen/Bisnis, Keuangan, Agribisnis, Ilmu Hukum, Ilmu Administrasi (Niaga/Bisnis/Fiskal).</li> 
            <li>Untuk lulusan perguruan tinggi dari luar negeri, memiliki bidang studi atau keahlian yang setara dengan bidang studi di atas. Indeks Prestasi Kumulatif (IPK) minimal 3,00 (skala 4,00). </li> 
            <li>Lulusan perguruan tinggi luar negeri yang tidak termasuk dalam QS World University Ranking Top 50 diwajibkan untuk: 
                <ul class="list-unstyled">
                <li>- Memberikan hasil penyetaraan ijazah dari Kemendikbud Dikti.</li>
                <li>- Memberikan hasil penyetaraan transkrip nilai yang diraih dari Kemendikbud Dikti.</li>
                <li>- Menyampaikan bukti hasil penyetaraan Ijazah dan Transkrip nilai pada saat dinyatakan lolos untuk mengikuti Seleksi Tahap Tes Kesehatan dan Psikiatri.</li>
                </ul>
            </li> 
            <li>Usia per tanggal 5 September 2020: 
                 <ul class="list-unstyled">
                    <li>- S1: maksimal 26 tahun.</li>
                    <li>- S2: maksimal 28 tahun</li>
                 </ul>
            </li> 
            <li>Diutamakan memiliki prestasi nasional/internasional dan pengalaman berorganisasi di kampus dan/atau sosial kemasyarakatan. </li> 
            <li>Menunjukkan potensi leadership, interpersonal skill, communication skill, team work dan kemampuan analisis yang baik, serta dapat diandalkan. </li> 
            <li>Bersedia mengundurkan diri dan melepaskan ikatan dinas di perusahaan/instansi sebelumnya apabila diterima sebagai calon pegawai Bank Indonesia. </li> 
            <li>Bersedia menandatangani surat perjanjian ikatan dinas dengan Bank Indonesia. </li> 
            <li>Bersedia mematuhi setiap peraturan dan/atau tata tertib yang berlaku di Bank Indonesia. </li> 
            <li>Bersedia ditempatkan di seluruh kantor Bank Indonesia, baik di kantor pusat maupun di kantor perwakilan dengan loyalitas, kemampuan, dan ketahanan tinggi untuk bekerja bagi bangsa dan negara. </li> 
            </ol>
            <p> Tata Cara Melamar: </p>
            <ol>
            <li>Mendaftar Akun dengan cara:
                 <ol>
                    <li>Mengklik tombol "masuk"</li>
                    <li>Mengisi nama lengkap, alamat email personal, nomor KTP dan password.</li>
                    <li>Membuka email yang sudah didaftarkan dan klik link untuk verifikasi akun.</li>
                    <li>Masuk ke akun dengan mengisi alamat email dan password akun.</li>
                    <li>Melengkapi formulir aplikasi online dan upload dokumen pendukung.</li>
                 </ol>
            </li> 
            <li>Untuk memaksimalkan pengisian data pastikan perangkat komputer/laptop kamu memiliki perangkat hardware sekurang-kurangnya memiliki spesifikasi:
                <ul class="list-unstyled">
                    <li>- Processor Core i3 atau setara</li>
                    <li>- RAM 4GB</li>
                    <li>- HDD 500 GB</li>
                    <li>- OS Windows/Linux/Mac</li>
                    <li>- Dilengkapi perangkat web cam, audio, microphone, dan mouse</li>
                 </ul>
            </li>
            <li>Komputer/ laptop sudah terinstall dengan web browser versi terbaru.</li>
            <li>Tidak menggunakan mobile phone.</li>
            <li>Menggunakan salah satu diantara pilihan browser berikut:
                <ul class="list-unstyled">
                    <li>- Mozilla Firefox minimal versi 80 yang dapat menerima cookies.</li>
                    <li>- Google Chrome minimal versi 84 yang dapat menerima cookies.</li>
                </ul>   
            </li>
            <hr>
            <h4>KOMENTAR (0)</h4>
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="col-2">
                    <button class="btn btn-style"><a href="{{url('/detailloker')}}" style="text-decoration:none; color: #FFFFFF;">Kirim</a></button>
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
                <img src="/img/loker/puji.jpg" class="d-block w-100  h-100" alt="gambar">
                <br>
                <h6>Lowongan Kerja di Kantor Susi Pudjiastuti 2020</h6>
                </div>
                <div class="col">
                <img src="/img/loker/dubes.jpg" class="d-block w-100  h-100" alt="gambar">
                <br>
                <h6>Lowongan Kerja Staf Dubes Kementerian Luar Negeri</h6>    
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection