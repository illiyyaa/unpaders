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

</body>
</html>
