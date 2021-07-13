@extends ('layouts.default')

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

.card-title > a {
    text-decoration:none;
    color: #000;
}
.card-title > a:hover {
    text-decoration:none;
    color: #8A8A8A;
}

.card-text{
    color: #000;

}

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
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}
h5 > a{
    color: #000;
}
h5 {
    color: #000;
}

h6 {
    color:#000
}
p{
    color:black;
}
h3{
    color:black;
}
</style>

@section ('content')

<div class="container">
<h5><a href="{{url('/lapak/preloved')}}">  PRELOVED </a></h5>
    <div class="card-deck" style="padding:50px; width:70rem; ">
        <div class="card">
            <img src="/img/scuba.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli1" href="#">Scuba Mask</a></h5>
                <h4 class="card-text">Rp. 15.000,-</h4>
            </div>
            </div>
            <div class="card">
            <img src="/img/kaos.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Kaos Unpaders</a></h5>
                <h4 class="card-text">Rp. 110.000,-</h4>
            </div>
            </div>
            <div class="card">
            <img src="/img/kaos1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a data-toggle="modal" data-target="#mybeli" href="#">Kaos Unpaders (lengan panjang)</a></h5>
                <h4 class="card-text">RP. 120.000,-</h4>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="mybeli1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: #FFFBFB;">
                <div class="modal-header" style="color: #FFFBFB;">
                    <h4 class="modal-title" style="color: #FDB000;">Beli</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="color: #FFFBFB;">
			        <div class="container-fluid">
				        <div class="row">
					        <div class="col-sm-6"><img src="/img/scuba.jpg"></div>
					        <div class="col-sm-6 ml-auto">
						    <h5>Scuba Mask</h5>
						    <h3>Rp 15.000,-</h3>
					        </div>
				        </div>
				        <br>
				        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="qty mt-2">
                                    <p>Atur jumlah</p>
                                    <span class="minus">-</span>
                                    <input type="number" class="count" name="qty" value="1">
                                    <span class="plus">+</span>
                                    <hr>
                                    <h6>Stok:100</h6>
                                    <hr>
                                    <div>
                                    <button type="button" class="btn btn-style"  style="width: 100px;"><a href="{{url('/belanjaumum')}}">Beli</a></button>  
                                    <button type="button" class="btn btn-styleyellow" data-dismiss="modal"  style="	width: 100px;">Chat</button>
                                    </div>							
                                </div>
                            </div>
				        </div>
			        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection

