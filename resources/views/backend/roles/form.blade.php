@push('css')
	
@endpush
@extends('layouts.backend.app')

@section('content')

<div class="page-header">
	<h4 class="page-title">
		{{isset($role) ? 'Edit' : 'Create'}} Role
	</h4>
	<a href="{{route('app.roles.index')}}" class="btn btn-secondary">
		<i class="fas fa-arrow-circle-left"></i>
		Back To list
	</a>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
		<div class="card-header">
			<h5 class="card-title">{{isset($role) ? 'Edit' : 'Create New'}} Role</h5>
		</div>
		<div class="card-body">
			<form action="{{isset($role) ? route('app.roles.update', $role->id) : route('app.roles.store')}}" method="POST">
				@csrf
				@isset($role)
					@method('PUT')
				@endisset
				<div class="form-group">
					<label for="name">Role Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Give a Role Name" value="{{$role->name ?? old('name') }}">
					@error('name')
						<div class="text-danger">
							<strong>{{$message}}</strong>
						</div>
					@enderror
				</div>

				<div class="form-group mt-12">
					<div class="text-center">
						<h4 class="h4-bold">Select Permissions for this role</h4>
						@error('permissions')
							<div class="text-danger">
								<strong>{{$message}}</strong>
							</div>
						@enderror
					</div>
					<div class="mt-3">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="select-all-permissions">
							<label class="custom-control-label" for="select-all-permissions">Select All Permissions</label>
						</div>
					</div>
					@forelse($modules->chunk(2) as $key => $chunks)
					<div class="form-row mb-3">
						@foreach($chunks as $key => $module)
						<div class="col">
						<label for="">Module : {{$module->name}}</label>
						@foreach($module->permissions as $permission_key => $permission)
							<div class="@if($permission_key !== 0)mt-2 @endif ml-3">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" 
									id="{{$permission->name}}" name="permissions[]" 
									value="{{$permission->id}}"
									@isset($role)
										@foreach($role->permissions as $rolePermission)
											{{$permission->id === $rolePermission->id ? 'checked' : ''}}
										@endforeach
									@endisset
									>
									<label class="light custom-control-label" for="{{$permission->name}}">
										{{$permission->name}}
									</label>
								</div>
							</div>
						@endforeach
						</div>
						@endforeach
					</div>
					@empty
					<div class="form-group text-center">
						<strong>No Permissions found!</strong>
					</div>	
					@endforelse
				</div>

				<button type="submit" class="btn btn-primary" id="submit" name="submit">
					@isset($role)
					 <i class="fas fa-arrow-circle-up"></i>
					 Update
					@else
					<i class="fas fa-plus-circle"></i>
					Create Role
					@endisset
				</button>
			</form>
		</div>
	</div>
	</div>
</div>

@endsection('content')
@push('script')
<script>
 	// Listen for click on toggle checkbox
 	$("#select-all-permissions").click(function(event){
 		if(this.checked) {
 			// Iterate eache checkbox
 			$(':checkbox').each(function() {
 				this.checked = true;
 			});
 		}else{
 			$(':checked').each(function() {
 				this.checked = false;
 			});
 		}
 	});
 </script>
@endpush