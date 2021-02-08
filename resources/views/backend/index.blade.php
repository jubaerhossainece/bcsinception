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
							<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
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
			
			<!--profile will be shown below -->
			<div class="col-md-6 col-xl-4">
				<div class="card user-card">
					<div class="card-header">
						<h5>Profile</h5>
					</div>
					<div class="card-body  text-center">
						<div class="usre-image">
							<img src="../assets/images/widget/img-round1.jpg" class="img-radius wid-100 m-auto" alt="User-Profile-Image">
						</div>
						<h6 class="f-w-600 m-t-25 m-b-10">Alessa Robert</h6>
						<p>Active | Male | Born 23.05.1992</p>
						<hr>
						<p class="m-t-15">Activity Level: 87%</p>
						<div class="bg-c-blue counter-block m-t-10 p-20">
							<div class="row">
								<div class="col-4">
									<i class="fas fa-calendar-check text-white f-20"></i>
									<h6 class="text-white mt-2 mb-0">1256</h6>
								</div>
								<div class="col-4">
									<i class="fas fa-user text-white f-20"></i>
									<h6 class="text-white mt-2 mb-0">8562</h6>
								</div>
								<div class="col-4">
									<i class="fas fa-folder-open text-white f-20"></i>
									<h6 class="text-white mt-2 mb-0">189</h6>
								</div>
							</div>
						</div>
						<p class="m-t-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<hr>
						<div class="row justify-content-center user-social-link">
							<div class="col-auto"><a href="#!"><i class="fab fa-facebook-f text-primary f-22"></i></a></div>
							<div class="col-auto"><a href="#!"><i class="fab fa-twitter text-c-info f-22"></i></a></div>
							<div class="col-auto"><a href="#!"><i class="fab fa-dribbble text-c-red f-22"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- [ Main Content ] end -->
	</div>
</div>
@endsection