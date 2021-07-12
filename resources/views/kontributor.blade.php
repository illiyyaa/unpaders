@extends ('layouts.header1')

<style>
div > p > h4>{
    color: #000;
}
</style>

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-6 col-md-4">
            <div class="card" >
                    <div class="card-body card-img">
                        <img src="/img/kontributor/userr.png" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        <div class="col-12 col-md-8 ">
            <div>
              <p>Alumni Universitas Padjadjaran dapat menjadi Kontributor di web komunitas UNPADERS ini.</p>
              <p>Kontributor dapat mengirimkan Naskah/Artikel sesuai tema yang diminati, Informasi UMKM, dan Foto untuk dipublikasikan.</p>
              <p>Kontributor mengirimkan Naskah/Artikel, Informasi UMKM, dan Foto melalui Formulir Tulis Artikel.</p>     
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-md-8 ">
            <div>
              <p>Alumni yang ingin menjadi Kontributor harus mendaftarkan diri dengan mengisi Formulir Registrasi.</p>
              <p>Informasi mengenai Nama Lengkap, Fakultas, Tahun Angkatan, alamat E-mail, dan nomor Telepon dan/atau WA yang dapat dihubungi, serta Foto Diri dengan dimensi square, WAJIB DIISI.</p>
              <p>UNPADERS akan mempublikasikan Nama Lengkap, Fakultas, dan Tahun Angkatan pada bagian keterangan mengenai Kontributor. Dan tidak mempublikasikan Alamat E-mail serta nomor Telp/WA.</p>     
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="/img/kontributor/regis.png" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6 col-md-4">
            <div class="card">
                    
                    <div class="card-body">
                        <img src="/img/kontributor/ket.png" class="card-img-top" alt="...">
                    </div>
                    
                </div>
            </div>
        <div class="col-12 col-md-8 ">
            <div>
             <h4>KETENTUAN INFORMASI ARTIKEL</h4>
              <ol>
              <li>Naskah/Artikel yang dikirimkan Kontributor harus ditulis dengan bahasa Indonesia yang baik dan benar, juga memperhatikan kaidah penulisan yang baik dan benar, seperti penggunaan huruf kapital dan paragraf, serta menghindarkan penggunaan singkatan.</li>
              <li>Kontributor dapat mengirimkan tulisan dalam bahasa Sunda dan Inggris, dengan tetap memperhatikan kaidah penulisan yang baik dan benar.</li>
              <li>Naskah/Artikel yang dikirimkan sebisa mungkin adalah karya orisinil Kontributor. Apabila Naskah/Artikel yang dikirimkan adalah saduran dari sumber lain, Kontributor wajib menyatakan bahwa bahwa Naskah/Artikel itu adalah saduran serta menyebutkan sumber. Bagian ini terutama berlaku untuk Naskah/Artikel yang bersifat Berita.</li>
              <li>Kontributor harus memperhatikan bahwa UNPADERS menggunakan Format Foto berdimensi 800x400 pixels dan .JPG. Foto untuk Naskah/Artikel bisa merupakan karya orisinil dan/atau saduran yang menggambarkan isi Naskah/Artikel. Apabila foto yang dikirimkan adalah saduran, Kontributor sebisa mungkin menyebutkan sumber foto yang dikirimkan. Apabila sumber asli tidak bisa ditemukan, Kontributor dapat menuliskan keterangan “FOTO: NET” di bagian bawah Naskah/Artikel.</li>
              <li>Tim Editorial UNPADERS akan melakukan kurasi/editing terhadap Naskah/Artikel, dan Foto yang dikirimkan Kontributor tanpa mengurangi substansi.</li>
              <li>Bila dipandang perlu, Tim Editorial UNPADERS akan menghubungi Kontributor untuk mengkonfirmasi Naskah/Artikel dan Foto yang dikirimkan.</li>
              <li>Kontributor bertanggung jawab atas Naskah/Artikel dan Foto yang dikirimkan dan dipublikasikan di web komunitas UNPADERS.</li>
              </ol>    
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-md-8 ">
            <div>
            <h4>KETENTUAN INFORMASI UMKM</h4>
            <ol>
              <li>Informasi UMKM yang dikirimkan harus mengandung informasi mengenai Nama Alumni, Fakultas/Angkatan, Kategori Usaha, Nomor Kontak, Lokasi Usaha, dan Media Sosial, serta Deskripsi sejelas mungkin mengenai produk UMKM. Informais UMKM yang dikirimkan harus disertai foto produk dengan memperhatikan Format Foto yang digunakan UNPADERS.</li>
              <li>Tim Editorial UNPADERS akan melakukan kurasi/editing terhadap Informasi UMKM, dan Foto yang dikirimkan Kontributor tanpa mengurangi substansi.</li>
              <li>Bila dipandang perlu, Tim Editorial UNPADERS akan menghubungi Kontributor untuk mengkonfirmasi Informasi UMKM, dan Foto yang dikirimkan.</li>
              <li>Kontributor bertanggung jawab atas Informasi UMKM, dan Foto yang dikirimkan dan dipublikasikan di web komunitas UNPADERS.</li>
            </ol>   
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="/img/kontributor/ketumkm.png" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@include ('layouts.footer')
@endsection