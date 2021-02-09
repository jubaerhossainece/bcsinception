@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@extends('layouts.backend.app')
@section('content')
<div class="page-header">
	<h4 class="page-title module-name">Module Name: <span class="course-title">{{$course}}</span></h4>
</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">All Exams</h5>
					
				</div>
				<div class="card-body" id="exams">
					<ol class="exam-list-ol">
						@foreach($exams as $exam)
						<li class="exam-list">
							<a href="{{route('app.exams', $exam->id)}}" class="exam-btn">{{$exam->category}}</a>
						</li>
						@endforeach
					</ol>
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