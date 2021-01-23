@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@extends('layouts.backend.app')
@section('content')
<div class="page-header">
	<h4 class="page-title">User Management</h4>
</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">All Users</h5>
					@can('app.users.create')
						<a href="{{route('app.users.create')}}" class="btn btn-primary float-right">
							<i class="fas fa-plus-circle"></i>
						Create User</a>
					@endcan	
				</div>
				<div class="table-responsive">
					<table id="usersTable" class="table table-borderless table-striped table-hover align-middle mb-0">
						<thead>
							<tr>
							<th class="text-center">#</th>
							<th style="padding-left: 2rem">Name</th>
							<th class="text-center">Email</th>
							<th class="text-center">Role</th>
							<th class="text-center">Status</th>
							<th class="text-center">Joined at</th>
							@canany(['app.users.edit', 'app.users.destroy', 'app.users.show'])
							<th class="text-center">Action</th>
							@endcanany
						</tr>
						</thead>
						<tbody>
							@foreach($users as $key => $user)
								<tr>
									<td class="text-center">{{$key+1}}</td>
									<td>
										<div class="item-list">
											<div class="avatar">
												
											</div>
											<div class="info-user ml-3">
												<div class="username">
													{{$user->name}}
												</div>
												<div class="status">
													
												</div>
											</div>
										</div>
																									
									</td>
									<td class="text-center">{{$user->email}}</td>
									<td class="text-center">{{$user->role->name}}</td>
									<td class="text-center">
										@if($user->status)
											<span class="badge badge-success">Active</span>
										@else
											<span class="badge badge-danger">Inactive</span>
										@endif		
									</td>
									<td class="text-center">
										{{\Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>

									@canany(['app.users.edit', 'app.users.destroy', 'app.users.show'])
										<td class="text-center">
											@can('app.users.show')
												<a href="{{route('app.users.show', $user->id)}}" class="btn btn-primary btn-sm">
													<i class="fas fa-eye"></i>
													Show
												</a>
											@endcan	
											@can('app.users.edit')
												<a href="{{route('app.users.edit', $user->id)}}" class="btn btn-primary btn-sm">
													<i class="fas fa-edit"></i>
													Edit
												</a>
											@endcan
											@can('app.users.destroy')
												<button onclick="deleteData({{$user->id}})" class="btn btn-danger btn-sm">
													<i class="fas fa-trash-alt"></i>
													Delete
												</button>
												<form action="{{route('app.users.destroy', $user->id)}}" method="POST" style="display: none;" id="submit-delete-{{$user->id}}">
													@csrf
													@method('DELETE')
												</form>
											@endcan
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
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
    $('#usersTable').DataTable();
} );
	</script>
@endpush