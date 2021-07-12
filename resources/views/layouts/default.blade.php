<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/lib/bootstrap/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    @yield('page-css')
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/main.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/un-custom.css">

    @yield('styles')

    <style>
    	.border-bottom{
    		border-bottom: 1px solid #cecece;
    	}

    	.cursor-pointer{
    		cursor: pointer;
    	}

    	.cursor-default{
    		cursor: default;
    	}
		.dbtn {
		background-color: #FFF;
		color: #8A8A8A;
		padding: 16px;
		font-size: 16px;
		border: 1px solid black;
		border-radius: 20px;
		cursor: pointer;

		
		}

		.dbtn:hover, .dbtn:focus {
		background-color: #FFF;
		}

		.ddown {
		position: relative;
		display: inline-block;
		}

		.ddown-content {
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		overflow: auto;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		}

		.ddown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		}

		.ddown a:hover {background-color: #ddd;}

		.show {display: block;}
		.tag {
    	color: #FDB000;
		}
		.taag a:hover {
			text-decoration: none;
			color: #18B5FC;
		}
		h6 > a{
			color: #000000;
		}
</style>
    
</head>

<body class="horizontal-navigation">
	@include('layouts.header')
	<div class="page-content">
	
	</div>
	@yield('page-css')
	<script src="{{url('public/templates/default')}}/js/lib/jquery/jquery.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/lib/tether/tether.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/plugins.js"></script>
	<script src="{{url('public/templates/default')}}/js/app.js"></script>
	@yield('scripts')
	@include('layouts.footer')
	<div id="mybeli" class="modal fade bd-example-modal-lg" role="dialog">
    	<div class="modal-dialog modal-lg" style="border-radius:20px;">
        <!-- Modal content-->
        	<div class="modal-content">
			<div class="modal-header"> 
			<h4 class="modal-title" style="color: #FDB000;">BELI</h4> 
			<button type="button" class="close" data-dismiss="modal">&times;</button>    
			</div> 
			<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6"><img src="img/kaos.jpg" style="width: 299px; height:415px; "></div>
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
							<div class="qty mt-5">
							<p>Atur jumlah</p>
								<span class="minus">-</span>
								<input type="number" class="count" name="qty" value="1">
								<span class="plus">+</span>
								<hr>
								<h6>Stok:20</h6>
								<hr>
							<div>
							<button type="button" class="btn btn-style"  style="width: 100px;"><a href="{{url('/belanja')}}">Beli</a></button>  
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

	<div id="mybeli1" class="modal fade bd-example-modal-lg" role="dialog">
	    <div class="modal-dialog modal-dialog-scrollable" role="document">

			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title" style="color: #FDB000;">BELI</h4> 
			<button type="button" class="close" data-dismiss="modal">&times;</button>    
			</div> 
			<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6"><img src="" style="width: 299px; height:415px; "></div>
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
							<div class="qty mt-5">
							<p>Atur jumlah</p>
								<span class="minus">-</span>
								<input type="number" class="count" name="qty" value="1">
								<span class="plus">+</span>
								<hr>
								<h6>Stok:20</h6>
								<hr>
							<div>
							<button type="button" class="btn btn-style"  style="width: 100px;"><a href="{{url('/belanja')}}">Beli</a></button>  
							<button type="button" class="btn btn-styleyellow" data-dismiss="modal"  style="	width: 100px;">Chat</button>
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
</body>
</html>
