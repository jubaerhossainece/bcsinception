<!DOCTYPE html>
<html lang="en">

<head>

	<title>Inception BCS</title>

	<meta charset="utf-8">
	<meta name="author" content="Codedthemes" />

	<!-- Favicon icon -->
	<link rel="stylesheet" href="{{url('/css/app.css')}}">
	<link rel="icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="{{url('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
	<!-- animation css -->
	<link rel="stylesheet" href="{{url('assets/plugins/animation/css/animate.min.css')}}">
	@stack('css')
	<!-- vendor css -->
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">

	<!-- Custom css -->
	<link rel="stylesheet" href="{{url('/css/custom.css')}}">
</head>

<body class="" oncopy="alert('Copying prohibited'); return false" oncut="return false" onpaste="return false">
 	@include('layouts.backend.includes.sidebar')

 	@include('layouts.backend.includes.header')

	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->

	<!-- Required Js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="{{url('assets/js/vendor-all.min.js')}}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
	
	<script src="{{url('assets/js/pcoded.min.js')}}"></script>
	<script src="{{url('js/script.js')}}"></script>
	@stack('script')

</body>

</html>
