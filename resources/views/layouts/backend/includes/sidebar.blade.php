
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="index.html" class="b-brand">
					<img src="{{url('assets/images/logo.svg')}}" alt="" class="logo images">
					<img src="{{url('assets/images/logo-icon.svg')}}" alt="" class="logo-thumb images">
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item pcoded-menu-caption profile">
						<div class="pro-sidebar">
							<div class="pro-head-photo">
								<img src="{{url('assets/images/user/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
							</div>
							<div class="pro-head-name">
								<h6>{{auth()->user()->name}}</h6>
								
								<h4>{{auth()->user()->role->name}}</h4>
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
					@can('app.permissions.index')
					<li class="nav-item">
						<a href="{{route('app.permissions.index')}}" class="nav-link"><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">
						Permissions</span></a>
					</li>
					@endcan
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