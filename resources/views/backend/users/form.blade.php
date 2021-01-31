@push('css')
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@extends('layouts.backend.app')

@section('content')

<div class="page-header">
	<h4 class="page-title">
		{{isset($user) ? 'Edit' : 'Create'}} User
	</h4>
	<a href="{{route('app.users.index')}}" class="btn btn-secondary">
		<i class="fas fa-arrow-circle-left"></i>
		Back To list
	</a>
</div>

<!-- User Information section -->
<form action="{{isset($user) ? route('app.users.update', $user->id) : route('app.users.store')}}" method="POST" enctype="multipart/form-data">
	@csrf
	@isset($user)
		@method('PUT')
	@endisset
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">User Information</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Name" value="{{$user->name ?? old('name') }}">
						@error('name')
							<div class="text-danger">
								<strong>{{$message}}</strong>
							</div>
						@enderror
					</div>

					<div class="form-group">					
						<label for="email">Email</label>
						<input type="email" class="form-control @error('name') is-invalid @enderror" id="email" name="email" placeholder="John@example.com" value="{{$user->email ?? old('email')}}">
						@if(! isset($user))
							<small class="form-text text-muted">We'll never share your email with anyone else.</small>
						@endif
						@error('email')
							<div class="text-danger">
								<strong>{{$message}}</strong>
							</div>
						@enderror
					</div>

					<div class="form-group">					
						<label for="password">Password</label>
						<input type="password" class="form-control @error('name') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
						@if(! isset($user))
							<small class="form-text text-muted">
								At least 8 characters long.
							</small>
						@endif
						@error('password')
							<div class="text-danger">
								<strong>{{$message}}</strong>
							</div>
						@enderror
					</div>

					<div class="form-group">					
						<label for="confirm_password">Confirm Password</label>
						<input type="password" class="form-control @error('name') is-invalid @enderror" id="confirm_password" name="password_confirmation" placeholder="Confirm password">
						@error('password_confirmation')
							<div class="text-danger">
								<strong>{{$message}}</strong>
							</div>
						@enderror
					</div>
				</div>
			</div>
		</div>	
	</div>


	<!-- Role and status section -->
	<div class="row">
		<div class="col-md-12">	
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">User Role and Status</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="role">Select Role</label>
						<select name="role" class="role-select form-control @error('role') is-invalid @enderror">
							<option value=""></option>
							@foreach($roles as $role)
						  <option @isset($user)
						  					{{$user->role->id == $role->id ? 'selected' : ''}}
						  				@endisset
						   value="{{$role->id}}">{{$role->name}}
						  </option>
						  @endforeach
						</select>

						@error('role')
							<span class="text-danger">
								<strong>{{$message}}</strong>
							</span>
						@enderror	
					</div>

						<label>Select Image</label>
					<div class="custom-file mb-3">
						<input type="file" id="image" name="image" class="custom-file-input @error('image') is-invalid @enderror" data-default-file="{{isset($user) ? $user->getFirstMediaUrl('image') : ''}}">
						<label class="custom-file-label" for="image">Choose file</label>

						@error('image')
							<span class="text-danger">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<div class="custom-control custom-switch">
							<input type="checkbox" name="status" id="status" class="custom-control-input" @isset($user) {{$user->status == true ? 'checked' : ''}} @endisset>	
							<label for="status" class="custom-control-label">Status</label>
						</div>

						@error('status')
							<span class="text-danger">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>					

						<button type="submit" class="btn btn-primary" id="submit" name="submit">
							@isset($user)
							 <i class="fas fa-arrow-circle-up"></i>
							 Update User
							@else
							<i class="fas fa-plus-circle"></i>
							Create User
							@endisset
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</form>

@endsection('content')
@push('script')
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<script>
		$(document).ready(function() {
		    $('.role-select').select2({
		    	placeholder: "Select a role",
    			allowClear: true
		    });
		});
	</script>

@endpush