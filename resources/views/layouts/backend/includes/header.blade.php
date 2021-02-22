
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse1" href="#"><span></span></a>
			<a href="#" class="b-brand">
				Inception bcs				
				<img src="{{url('assets/images/logo.png')}}" alt="" class="logo-thumb images">
			</a>
		</div>
		<a class="mobile-menu" id="mobile-header" href="">
			<i class="feather icon-more-horizontal"></i>
		</a>
		<div class="collapse navbar-collapse">
			<a href="#" class="mob-toggler"></a>
			<ul class="navbar-nav ml-auto">
				
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{url('assets/images/user/avatar.png')}}" class="img-radius img-header" alt="User-Profile-Image">
							{{Auth()->user()->name}}
							<i class="fas fa-chevron-down"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<div class="pro-head-photo">
									<img src="{{url('assets/images/user/avatar.png')}}" class="img-radius" alt="User-Profile-Image">
								</div>
								<div class="pro-head-name">
									<span>{{auth()->user()->name}}</span>
									@if(auth()->user()->role->name !== 'User')
									
									<strong>{{auth()->user()->role->name}}</strong>
									@endif
								</div>
							</div>
							<ul class="pro-body">
								<li><a href="{{route('app.password.edit')}}" class="dropdown-item"><i class="fas fa-lock"></i> Change Password</a></li>
								<li>
									<a href="{{route('app.users.show', auth()->user()->id)}}" class="dropdown-item">
									<i class="fas fa-user-alt"></i>
									My Profile
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