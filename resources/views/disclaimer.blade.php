@extends ('layouts.header1')

<style>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
p{
    color: #000;
    font-family: Poppins;
}
.card{
    border-radius: 20px;
}
rect {
    cursor: pointer;
    fill: url(#MyGradient);
}
</style>

@section ('content')
<div class="container" style="margin-bottom: 200px;">
    <div class="card" style="background:linear-gradient(180deg, #F9EBCD 0%, #FFFFFF 100%);">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FDCD5E" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,234.7C384,235,480,181,576,176C672,171,768,213,864,229.3C960,245,1056,235,1152,218.7C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="card-body">
        <p>UNPADERS adalah website komunitas alumni Universitas Padjadjaran dan memberi kesempatan kepada semua alumni untuk menjadi Kontributor. Alumni dan anggota masyarakat umum diperkenankan memberikan komentar atas naskah/artikel/informasi yang dimuat UNPADERS.<p> 
        <p>UNPADERS sangat menganjurkan agar Kontributor dan Pembaca yang hendak mempublikasikan naskah/artikel serta opini dan pendapat tidak menyinggung suku, agama, ras dan antar-golongan (SARA), tidak menyebarkan fitnah, tidak menggunakan kata-kata kotor, tidak menggunakan nickname atau nama samaran.</p>
        <p>UNPADERS sangat berharap informasi yang dikirimkan Kontributor dan komentar Pembaca berisi pokok-pokok pikiran, ide dan gagasan yang konstruktif.</p> 
        <p>Kontributor dan Pembaca pun sangat dianjurkan untuk menggunakan bahasa Indonesia yang baik dan benar.</p>
        <p>.UNPADERS tidak bertanggung jawab atas naskah/artikel yang dipublikasikan Kontributor, juga komentar yang diberikan Pembaca.</p>
        <p>UNPADERS tidak bertanggung jawab atas semua bentuk pelanggaran hukum yang dilakukan pihak lain dengan menggunakan atau memanfaatkan berita atau materi lain yang dipublikasikan UNPADERS, baik sebagian atau keseluruhan.</p>
        </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9FCEE5"  d="M0,96L48,106.7C96,117,192,139,288,133.3C384,128,480,96,576,106.7C672,117,768,171,864,186.7C960,203,1056,181,1152,149.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
</div>
@include ('layouts.footer')
@endsection