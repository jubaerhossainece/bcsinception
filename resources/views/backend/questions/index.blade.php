@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@extends('layouts.backend.app')
@section('content')
<div class="page-header">
	<h4 class="page-title">Question Section</h4>
</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card question-answer-section">
				@foreach($questions as $key => $question)
				<div class="row question-answer">
					<div class="col-md-12 question">
						<strong>{{$question->id}}) {{$question->q_text}}</strong>
					</div>
					<div class="col-sm-6">
						<p class="option">a) Lorem ipsum dolor, sit.</p>
					</div>
					<div class="col-sm-6">
				  		<p class="option">b)Lorem, ipsum, dolor.</p>
					</div>
					<div class="col-sm-6">
						<p class="option">a) Lorem ipsum dolor, sit.</p>
					</div>
					<div class="col-sm-6">
				  		<p class="option">b)Lorem, ipsum, dolor.</p>
					</div>
					<div class="col-sm-12 explanation">
						<p><strong>ব্যাখ্যাঃ </strong>{{ $question->explanation}}</p>
					</div>
				</div>
				@endforeach
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