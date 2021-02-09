@extends('layouts.backend.app')

@section('content')
<div class="main-body">
	<div class="page-wrapper">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5>Home</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><i class="feather icon-home"></i></li>
							<li class="breadcrumb-item">Analytics Dashboard</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">

			<!-- product profit start -->
			@can('app.dashboard')
			<div class="col-xl-4 col-md-6">
				<div class="card prod-p-card bg-c-red">
					<div class="card-body">
						<div class="row align-items-center m-b-25">
							<div class="col">
								<h6 class="m-b-5 text-white">Total Modules</h6>
								<h3 class="m-b-0 text-white">{{$courses->count()}}</h3>
							</div>
							<div class="col-auto">
								<i class="fas fa-database text-c-blue f-18"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6">
				<div class="card prod-p-card bg-c-blue">
					<div class="card-body">
						<div class="row align-items-center m-b-25">
							<div class="col">
								<h6 class="m-b-5 text-white">Total Categories</h6>
								<h3 class="m-b-0 text-white">{{$categories}}</h3>
							</div>
							<div class="col-auto">
								<i class="fas fa-database text-c-blue f-18"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6">
				<div class="card prod-p-card bg-c-green">
					<div class="card-body">
						<div class="row align-items-center m-b-25">
							<div class="col">
								<h6 class="m-b-5 text-white">Total Questions</h6>
								<h3 class="m-b-0 text-white">{{$questions}}</h3>
							</div>
							<div class="col-auto">
								<i class="fas fa-dollar-sign text-c-green f-18"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endcan
			
			
			
		</div>

		<!-- [ Main Content ] end -->
	</div>
</div>
<div class="page-header">
	<h4>Exam Archives</h4>
</div>
	<div class="">
			<div class="row">
			@foreach($sub_categories as $category)

					<div class="col-md-4 module-box">
						<a class="module-link" href="{{route('app.courses', $category->name)}}">
							<div class="inside-box">{{$category->name}}</div>
						</a>
					</div>
			@endforeach
		</div>		
	</div>
		

@endsection('content')

@push('script')
<!-- 	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
	<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{url('assets/js/plugin/datatables/datatables.min.js')}}"></script>
	<script>
	</script>
@endpush