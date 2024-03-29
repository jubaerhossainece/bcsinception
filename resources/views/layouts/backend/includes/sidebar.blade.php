
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="#" class="b-brand">
					InceptionBCS
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item pcoded-menu-caption profile">
						<div class="pro-sidebar">
							<div class="pro-head-photo">
								<img src="{{url('assets/images/user/avatar.png')}}" class="img-radius" alt="User-Profile-Image">
							</div>
							<div class="pro-head-name">
								<h4>{{auth()->user()->name}}</h4>
								@if(auth()->user()->role->name !== 'User')
								
								<h4><strong>{{auth()->user()->role->name}}</strong></h4>
								@endif
							</div>
						</div>
					</li>
					<li class="nav-item">
						<a href="{{route('app.dashboard')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item">
						<a href="{{route('app.questions.index')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Questions</span></a>
					</li>
					@can('app.users.index')
					<li class="nav-item">
						<a href="{{route('app.users.index')}}" class="nav-link"><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">
						Users</span></a>
					</li>
					@endcan
					@can('app.roles.index')
					<li class="nav-item">
						<a href="{{route('app.roles.index')}}" class="nav-link"><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">
						Roles</span></a>
					</li>
					@endcan
					<li class="nav-item pcoded-hasmenu">
						<a href="{{route('app.courses.instant', 1)}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Modules</span></a>
						<!-- <ul class="pcoded-submenu">
							@foreach($courses as $course)
							@if($course->name !== 'not in use')
								<li class=""><a href="{{route('app.courses', $course->id)}}" class="">{{$course->name}}</a></li>
							@endif
							@endforeach
						</ul> -->
					</li>

					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Settings</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="{{route('app.users.edit', auth()->user()->id)}}" class="">Edit Profile</a></li>
							<li class=""><a href="{{route('app.password.edit')}}" class="">Change Password</a></li>
						</ul>

					<li class="nav-item pcoded-menu-caption">
						<label>UI Element</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Componant</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="bc_button.html" class="">Button</a></li>
							<li class=""><a href="bc_badges.html" class="">Badges</a></li>
							<li class=""><a href="bc_breadcrumb-pagination.html" class="">Breadcrumb & paggination</a></li>
							<li class=""><a href="bc_collapse.html" class="">Collapse</a></li>
							<li class=""><a href="bc_progress.html" class="">Progress</a></li>
							<li class=""><a href="bc_tabs.html" class="">Tabs & pills</a></li>
							<li class=""><a href="bc_typography.html" class="">Typography</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->