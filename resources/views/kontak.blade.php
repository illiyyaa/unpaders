@extends ('layouts.header1')

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

  .modal-body{
                background-color: #FFFBFB;
                
            }

            .modal-header{
                background-color: #FFFBFB;
            }

            .modal-footer{
                background-color: #FFFBFB;
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

.img-responsive{
    width:200px;
    height:200px;
}

.card-image > img {   
 width:200px;
 height:200px;
  max-width: inherit;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) scale(1.5);
  -moz-transform: translate(-50%, -50%) scale(1.5);
  -o-transform: translate(-50%, -50%) scale(1.5);
  transform: translate(-50%, -50%) scale(1.5);
}


</style>



@section ('content')

<div class="container">
<div class="row">
  <div class="col">
    <div class="card" style="border:none;" >
        <div class="card-body">
            <img src="/img/kontak/iraaa.jpg" class="card-image img-responsive rounded-circle" alt="Cinque Terre"  >
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">FOUNDER</h5>
                <p class="card-text"  style="text-align: center;">Irawati Hermawan</p>
            </div>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="border:none;" >
        <div class="card-body">
            <img src="/img/kontak/teguh.png" class="card-image img-responsive rounded-circle" alt="Cinque Terre"  >
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">CO-FOUNDER</h5>
                <p class="card-text"  style="text-align: center;">Teguh Santoso</p>
            </div>
        </div>
    </div>
  </div>
  <div class="col">
  <div class="card" style="border:none;" >
        <div class="card-body">
            <img src="/img/kontak/oki.jpg" class="card-image img-responsive rounded-circle" alt="Cinque Terre"  >
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">CHIEF EDITOR</h5>
                <p class="card-text"  style="text-align: center;">Oky Syeiful</p>
            </div>
        </div>
    </div>
  </div>
  <div class="col">
  <div class="card" style="border:none;" >
        <div class="card-body">
            <img src="/img/userrr.png" class="card-image img-responsive rounded-circle" alt="Cinque Terre"  >
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">MANAGING EDITOR</h5>
                <p class="card-text"  style="text-align: center;">Alexander Manurung</p>
            </div>
        </div>
    </div>
  </div>
</div>
<br>
<div class="row">
 <div class="col">
    <div class="card" style="border:none;" >
        <div class="card-body">
            <img src="/img/userrr.png" class="card-image img-responsive rounded-circle" alt="Cinque Terre"  >
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">EDITORIAL ADVISOR</h5>
                <p class="card-text"  style="text-align: center;">Sonny Muhammad</p>
            </div>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="border:none;" >
        <div class="card-body">
            <img src="/img/userrr.png" class="card-image img-responsive rounded-circle" alt="Cinque Terre"  >
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">EDITORIAL STAFF</h5>
                <p class="card-text"  style="text-align: center;">Amelia Putri Pertiwi</p>
            </div>
        </div>
    </div>
  </div>
  <div class="col">
  <div class="card" style="border:none;" >
        <div class="card-body">
            <img src="/img/userrr.png" class="card-image img-responsive rounded-circle" alt="Cinque Terre"  >
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;">EDITORIAL STAFF</h5>
                <p class="card-text"  style="text-align: center;">Ikbal Tawakal</p>
            </div>
        </div>
    </div>
  </div>
  <div class="col">
  </div>
</div>
 <hr>
    <div class="row">
    <h5> Telp/WA: 085156507180</h5>
    </div>
    <hr>
     <div class="row">
    <h5> Email: redaksi@unpaders.id</h5>
    </div>
    <hr>
    <div class="row">
    <h5> Alamat</h5>
  
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6243298366685!2d107.62172481477286!3d-6.935423294989109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e87d0784f845%3A0x479f09ca9b826e79!2sJl.%20Pelajar%20Pejuang%2045%20No.104%2C%20Turangga%2C%20Kec.%20Lengkong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040264!5e0!3m2!1sen!2sid!4v1625472348168!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 
 </div>
    <br>
</div>
@include ('layouts.footer')
@endsection

