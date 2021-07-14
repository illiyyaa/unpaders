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


</div>

<div class="container">
<h5><a href="{{url('/lapak/merchandise')}}">  MERCHANDISE </a></h5>
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
            <h4 class="card-text">Rp. 120.000,-</h4>
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
                                    <button type="button" class="btn btn-style"  style="width: 100px;"><a onclick="$('#mybeli1').modal('hide');$('#mybeli2').modal('show');" href='#'>Beli</a></button>  
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

<div class="container">
  <div id="mybeli2" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content" style="color: #FFFBFB;">
                <div class="modal-header" style="color: #FFFBFB;">
                    <h4 class="modal-title" style="color: #FDB000;">Beli</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="color: #FFFBFB;">
			        <div class="container-fluid">
				        <div class="row">
					        <div class="col-sm-6"><img src="/img/scuba.jpg" width="210px;" height="190px;"></div>
					        <div class="col-sm-6 ml-auto"><h3>Ringkasan Order</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6"><h6>Scuba Mask (1)</h6></div>
                                    <div class="col-sm-6 ml-auto"><h6>Rp 15.000,-</h6></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6"><h6>Ongkos Kirim</h6></div>
                                    <div class="col-sm-6 ml-auto"><h6>Rp 8.000,-</h6></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6"><h6>Subtotal</h6></div>
                                    <div class="col-sm-6 ml-auto"><h6>Rp 23.000,-</h6></div>
                                </div>
                                </div>
					        </div>
				        </div>
				        <br>
				        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="qty mt-2">
                                    <p>Alamat</p>
                                    <div class="card">
                                        <div class="card-body">
                                        <p>Jl. Keuchik Ahmad, Komplek Vila Alamanda No. 27, Ie Masen Kayee Adang, Banda Aceh, Indonesia.</p>
                                        <hr>
                                        <p><a href="#" style="text-decoration:none; color: #18B5FC;">Tambah Alamat Baru</a></p>
                                        </div>
                                    </div>
                                    <br>
                                    <p>Metode Pengiriman</p>
                                    <div class="card">
                                        <div class="card-body">
                                        <p style="font-weight: bold;">Regular Shipping</p>
                                        <p>Estimasi Pengiriman: 3-5 hari kerja setelah tanggal konfirmasi pembayaran atau pembayaran sukses</p>
                                        </div>
                                    </div>
                                    <br>
                                    <p>Metode Pembayaran</p>
                                    <div class="card">
                                        <div class="card-body">
                                        <p>Pilih Metode Pembayaran</p>
                                        <label for="country"></label>
                                        <select id="country" name="country" class="form-control">
                                        <option value="S">Bank Mandiri 1560098765432 (konfirmasi otomatis)</option>
                                        <option value="M">Bank BCA 5220304312 (konfirmasi otomatis)</option>
                                        </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                    <button type="button" class="btn btn-style"  ><a href="{{url('/belanjaumum')}}">Pesan</a></button>  
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

<div class="container">
	<div id="mybeli" class="modal fade bd-example-modal-lg" role="dialog">
    	<div class="modal-dialog modal-lg" style="border-radius:20px;">
        <!-- Modal content-->
        	<div class="modal-content">
			<div class="modal-header"> 
			<h4 class="modal-title" style="color: #FDB000;">Beli</h4> 
			<button type="button" class="close" data-dismiss="modal">&times;</button>    
			</div> 
			<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6"><img src="/img/kaos.jpg" style="width: 299px; height:415px; "></div>
					<div class="col-sm-6 ml-auto">
						<h5>Kaos Istimewa Unpaders (Lengan Pendek)</h5>
						<h3>Rp 110.000,-</h3>
						<ul class="list-unstyled">
						<li>Kondisi: Baru</li>
						<li>Berat: 300 Gram</li>
						<li>Detail Featured: 100% Cotton</li>
						<li>Colour: BLACK</li>
						<li>Available Size: S, M, L, XL</li>
						<li>Regular Fit</li>
						</ul>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
							<form>
							<h6 class="p-l-3">Pilih Varian</h6>
							<p>Ukuran: 4 Varian</p>
							<label for="country"></label>
							<select id="country" name="country" class="form-control">
							<option value="S">S</option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="xl">XL</option>
							</select>
							<div class="qty mt-4">
							<p>Atur jumlah</p>
								<span class="minus">-</span>
								<input type="number" class="count" name="qty" value="1">
								<span class="plus">+</span>
								<hr>
								<h6>Stok:20</h6>
								<hr>
							<div>
							<button type="button" class="btn btn-style"  style="width: 100px;"><a onclick="$('#mybeli').modal('hide');$('#mybeli3').modal('show');" href='#'>BELI</a></button>  
							<button type="button" class="btn btn-styleyellow" data-dismiss="modal"  style="	width: 100px;">Chat</button>
							</div>
							</form>
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


<div class="container">
  <div id="mybeli3" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content" style="color: #FFFBFB;">
                <div class="modal-header" style="color: #FFFBFB;">
                    <h4 class="modal-title" style="color: #FDB000;">Beli</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="color: #FFFBFB;">
			        <div class="container-fluid">
				        <div class="row">
					        <div class="col-sm-6"><img src="/img/kaos.jpg" width="210px;" height="230px;"></div>
					        <div class="col-sm-6 ml-auto"><h3>Ringkasan Order</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6"><h6>Kaos Unpaders (1)</h6></div>
                                    <div class="col-sm-6 ml-auto"><h6>Rp. 110.000,-</h6></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6"><h6>Ongkos Kirim</h6></div>
                                    <div class="col-sm-6 ml-auto"><h6>Rp 12.000,-</h6></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6"><h6>Subtotal</h6></div>
                                    <div class="col-sm-6 ml-auto"><h6>Rp 122.000,-</h6></div>
                                </div>
                                </div>
					        </div>
				        </div>
				        <br>
				        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="qty mt-2">
                                    <p>Alamat</p>
                                    <div class="card">
                                        <div class="card-body">
                                        <p>Jl. Keuchik Ahmad, Komplek Vila Alamanda No. 27, Ie Masen Kayee Adang, Banda Aceh, Indonesia.</p>
                                        <hr>
                                        <p><a href="#" style="text-decoration:none; color: #18B5FC;">Tambah Alamat Baru</a></p>
                                        </div>
                                    </div>
                                    <br>
                                    <p>Metode Pengiriman</p>
                                    <div class="card">
                                        <div class="card-body">
                                        <p style="font-weight: bold;">Regular Shipping</p>
                                        <p>Estimasi Pengiriman: 3-5 hari kerja setelah tanggal konfirmasi pembayaran atau pembayaran sukses</p>
                                        </div>
                                    </div>
                                    <br>
                                    <p>Metode Pembayaran</p>
                                    <div class="card">
                                        <div class="card-body">
                                        <p>Pilih Metode Pembayaran</p>
                                        <label for="country"></label>
                                        <select id="country" name="country" class="form-control">
                                        <option value="S">Bank Mandiri 1560098765432 (konfirmasi otomatis)</option>
                                        <option value="M">Bank BCA 5220304312 (konfirmasi otomatis)</option>
                                        </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                    <button type="button" class="btn btn-style"  ><a href="{{url('/belanja')}}">Pesan</a></button>  
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

