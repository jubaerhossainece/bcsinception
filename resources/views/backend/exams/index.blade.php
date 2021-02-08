@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@extends('layouts.backend.app')
@section('content')
<div class="page-header">
	<h4 class="page-title module-name">Exam Name: <span class="course-title">{{$exam->name}}</span></h4>
</div>
	<div class="card question-answer-section">
				<div class="card-body">
					
				@foreach($questions as $key => $question)
				<div class="row question-answer">
					<div class="col-md-12 question">
						<strong>{{$loop->index+1}}) {{$question->q_text}}</strong>
						<button class="action-button">
							<i class="fas fa-ellipsis-h"></i>
						</button>
					</div>
					@foreach($question->options as $key => $option)
					<div class="col-sm-6">
						<p class="option">
						@if($option->option_number == 1) A)
						@elseif($option->option_number == 2) B)
						@elseif($option->option_number == 3) C)
						@else D)
						@endif
						 {{$option->option_text}}</p>
					</div>
					@endforeach<!-- 
					<div class="col-sm-6">
				  		<p class="option">b)Lorem, ipsum, dolor.</p>
					</div>
					<div class="col-sm-6">
						<p class="option">a) Lorem ipsum dolor, sit.</p>
					</div>
					<div class="col-sm-6">
				  		<p class="option">b)Lorem, ipsum, dolor.</p>
					</div> -->
					<div class="col-sm-12 answer">
						<p><strong>উত্তরঃ </strong>{{ $question->q_ans}}</p>
					</div>
					<div class="col-sm-12 explanation">
						<p><strong>ব্যাখ্যাঃ </strong>{{ $question->explanation}}</p>
					</div>
				</div>
				@endforeach
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

		//copy cut restricted
		$(document).keydown(function(event){
			if(event.keyCode === 123){
				return false;
			} else if(event.ctrlKey && event.shiftKey && event.keyCode ==73){
				return false;
			}
		});

		document.addEventListener('contextmenu', event => event.preventDefault());
	</script>
@endpush