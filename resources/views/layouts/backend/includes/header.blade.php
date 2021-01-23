
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
			<a href="index.html" class="b-brand">
				<img src="../assets/images/logo.svg" alt="" class="logo images">
				<img src="../assets/images/logo-icon.svg" alt="" class="logo-thumb images">
			</a>
		</div>
		<a class="mobile-menu" id="mobile-header" href="#!">
			<i class="feather icon-more-horizontal"></i>
		</a>
		<div class="collapse navbar-collapse">
			<a href="#!" class="mob-toggler"></a>
			<ul class="navbar-nav ml-auto">
				
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{url('assets/images/user/avatar-1.jpg')}}" class="img-radius img-header" alt="User-Profile-Image">
							{{Auth()->user()->name}}
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<div class="pro-head-photo">
									<img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
								</div>
								<div class="pro-head-name">
									<span>{{auth()->user()->name}}</span>
									<br>
									<strong>{{auth()->user()->role->name}}</strong>
								</div>
							</div>
							<ul class="pro-body">
								<li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
								<li>
									<a href="#!" class="dropdown-item">
									<i class="fas fa-user-alt"></i>
									Profile
									</a>
								</li>
								<li>
								<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
<!-- 								<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li> -->
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- [ Header ] end -->