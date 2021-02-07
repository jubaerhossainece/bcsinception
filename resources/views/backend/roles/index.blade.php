@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@extends('layouts.backend.app')
@section('content')
<?php
dd($roles->permissions);
?>
<div class="page-header">
	<h4 class="page-title">Role Management</h4>
</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">All Roles</h5>
					@can('app.roles.create')
						<a href="{{route('app.roles.create')}}" class="btn btn-primary float-right">
							<i class="fas fa-plus-circle"></i>
						Create Role</a>
					@endcan	
				</div>
				<div class="table-responsive">
					<table id="rolesTable" class="table table-borderless table-striped table-hover align-middle mb-0">
						<thead>
							<tr>
							<th class="text-center">#</th>
							<th class="text-center">Name</th>
							<th class="text-center">Permissions</th>
							<th class="text-center">Last Updated</th>
							@canany(['app.roles.edit', 'app.roles.destroy'])
							<th class="text-center">Action</th>
							@endcanany
						</tr>
						</thead>
						<tbody>
							@foreach($roles as $key => $role)
								<tr>
									<td class="text-center">{{$key+1}}</td>
									<td class="text-center">{{$role->name}}</td>
									<td class="text-center">
										@if($role->permissions->count() > 0)
										<div class="badge badge-success">Total Permissions: {{$role->permissions->count()}}</div>
										@else
										<div class="badge badge-danger">no permission found!</div>
										@endif
									</td>
									<td class="text-center">{{\Carbon\Carbon::parse($role->updated_at)->diffForHumans()}}</td>

									@canany('app.roles.edit', 'app.roles.destroy')
										<td class="text-center">
											@can('app.roles.edit')
												<a href="{{route('app.roles.edit', $role->id)}}" class="btn btn-primary btn-sm">
													<i class="fas fa-edit"></i>
													Edit
												</a>
											@endcan
											@if($role->deletable)
												@can('app.roles.destroy')
													<button onclick="deleteData({{$role->id}})" class="btn btn-danger btn-sm">
														<i class="fas fa-trash-alt"></i>
														Delete
													</button>
													<form action="{{route('app.roles.destroy', $role->id)}}" method="POST" style="display: none;" id="submit-delete-{{$role->id}}">
														@csrf
														@method('DELETE')
													</form>
												@endcan
											@endif
										</td>
									@endcanany	
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
		

@endsection('content')

@push('script')
<!-- 	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
	<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{url('assets/js/plugin/datatables/datatables.min.js')}}"></script>
	<script>
		$(document).ready(function() {
    $('#rolesTable').DataTable();
} );
	</script>
@endpush