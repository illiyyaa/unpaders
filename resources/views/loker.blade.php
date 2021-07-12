@extends ('layouts.default')

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.container {
   margin-top: 10px;
  overflow: hidden;
}

.filterDiv {
 
  display: none; /* Hidden by default */ 
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

.btn-style1 {
    background-color: #FFF;
    color: #18B5FC;
    width:120px;
    height: 50px;
    border-radius: 20px;
    border: 1px solid #18B5FC;
    border-color: #18B5FC;
    
}

.tombol button#all:hover, .tombol button#all:focus, .tombol button#all  :active{
  outline:none;
  background: #18B5FC;
  color: #FFF;
}
</style>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn-style1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

@section ('content')
<div class="container">
    <div class="flex-center tombol" id="myBtnContainer">
        <button id="all" class="btn-style1 mr-2" onclick="filterSelection('all')"> Show all</button>
        <button id="all" class="btn-style1 mr-2" onclick="filterSelection('fulltime')"> FULL-TIME</button>
        <button id="all" class="btn-style1 mr-2" onclick="filterSelection('freelancer')"> FREELANCER</button>
        <button id="all" class="btn-style1 mr-2" onclick="filterSelection('intern')"> INTERN</button>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <ul class="list-unstyled mb-0 container">
            <li class="filterDiv fulltime">
            <div class="row ">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/loker/bi.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/loker')}}" class="tag">LOKER</a> 
                    <h6><a href="{{url('/detail')}}">Ini Tiga Rekomendasi Konferensi Covid-19 IKA Unpad</a></h6>
                    <p>UNPADERS. Konferensi internasional mengenai pandemi Covid-19 yang diselengagrakan Ikatan Keluarga Alumni Universitas Padjajaran (IKA Unpad) bekerja sama dengan Kamar Dagang Indonesia (Kadin), dan Isla ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
                 <hr>
            </li>
            <li class="filterDiv freelancer ">
            <div class="row ">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/loker/puji.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/loker')}}" class="tag">LOKER</a>
                    <h6><a href="{{url('/detail')}}">Irawati Hermawan: Penanganan Covid-19 Perlu Kolaborasi</a></h6> 
                    <p>UNPADERS. Ikatan Alumni Universitas Padjadjaran (IKA Unpad) akan menyelenggarakan Konferensi asional untuk mengatasi pandemi Covid-19 dari aspek kesehatan, ekonomi, serta perspektif sosial. Konf ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
                <hr>
            </li>
            <li class=" filterDiv intern ">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="/img/loker/dubes.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/loker')}}" class="tag">LOKER</a>
                    <h6><a href="{{url('/detail')}}">Ketua ICCIA: Hadapi Pandemi Covid-19, Tak Ada Ruang untuk Pesimisd</a></h6> 
                    <p>UNPADERS. Bangsa-bangsa di dunia perlu memperkuat solidaritas  untuk mencari cara menciptakan dunia yang lebih baik. Salah satu yang sangat krusial adalah memikirkan cara untuk menghidupkan kemba ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
                <hr>
            </li>
            <li class=" filterDiv intern">
            <div class="row filterDiv intern">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="img/gambar 5.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/loker')}}" class="tag">LOKER</a> 
                    <h6><a href="{{url('/detail')}}">Selamat Jalan Bung Candra</a></h6>
                    <p>Usep Setiawan, Alumni Antropologi Unpad 1991, mantan Ketua Human Unpad 1995-1996 DALAM salah satu aksi mahasiswa Unpad di Kampus, Jl. Dipatiukur, Bandung, tahun 1994-an, saya orasi membuka aksi ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
                <hr>
            </li>
            <li class=" filterDiv intern ">
            <div class="row filterDiv intern">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <a href="#!" class=""><img src="img/gambar6.jpg" ></a>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 taag">
                    <a href="{{url('/loker')}}" class="tag">LOKER</a> 
                    <h6><a href="{{url('/detail')}}">Temui Menko Airlangga Hartarto, IKA Unpad Tawarkan Game Changer</a></h6>
                    <p>UNPADERS. Diharapkan 1.000 peserta dari 70 negara akan menghadiri konferensi internasional mengenai penanganan pandemi Covid-19 yang akan diselenggarakan Ikatan Keluarga Alumni Universitas Padjadjaran ...</p>  
                    <span class="time">TIM UNPADERS <i class="fa fa-clock-o" style="color: #8A8A8A;"></i> Kamis, 25 Februari 2021</span>
                </div>
            </li>
            <br>
        </ul>
        </div>
    </div>
</div>
@endsection

