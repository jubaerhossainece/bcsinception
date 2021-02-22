<!DOCTYPE html>
<html lang="en">

<head>

	<title>Inception BCS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
	<meta name="author" content="Codedthemes" />

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

<body class="">
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
	
	@stack('script')
	
	<script src="{{url('assets/js/pcoded.min.js')}}"></script>
	<script src="{{url('js/script.js')}}"></script>

</body>

</html>
