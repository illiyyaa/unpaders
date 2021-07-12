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
        <div class="card-body" >
        <p>Ada banyak media daring dan beragam jenisnya. Unpaders memilih menjadi portal komunitas, untuk alumni Universitas Padjadjaran. Kami berkomitmen menjadi wadah lintas angkatan, lintas generasi; lintas fakultas pun lintas perkubu-kubuan (seandainya itu pun ada). Kami berkomitmen menaungi semua perspektif, hobi, hingga gaya hidup.<p> 
        <p>Para penggagas Unpaders berasal dari angkatan dan fakultas yang berbeda-beda pula. Bersua dan berurun-rembuk secara daring. Sebagian di antaranya belum pernah saling mengenal satu sama lain. Kami disatukan semangat yang sama: mengisi kekosongan medium komunikasi antar sesama alumni Unpad.</p> 
        <p>Unpaders tak terafiliasi pada struktur keorganisasian manapun, termasuk IKA Unpad. Bagi kami, ini pilihan yang strategis. Dengan cara ini kami ingin memastikan Unpaders selalu ada dan terus berkembang, tak tergantung pergantian kepengurusan dan dinamika yang menyertainya.</p> 
        <p>Melalui Unpaders, kami berharap alumni dapat saling berjejaring, berkolaborasi mewujudkan potensinya masing-masing pun memberi kontribusi pada bangsa dan dunia.</p>
        <p>www.unpaders.id</p>
        <p>IG: unpaders.id</p>
        </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9FCEE5"  d="M0,96L48,106.7C96,117,192,139,288,133.3C384,128,480,96,576,106.7C672,117,768,171,864,186.7C960,203,1056,181,1152,149.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
</div>
@include ('layouts.footer')
@endsection