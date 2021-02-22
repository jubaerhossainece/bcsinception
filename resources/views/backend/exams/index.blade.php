@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@extends('layouts.backend.app')
@section('content')
<div class="page-header exam-set">
	<div class="row">
		<div class="col-md-10">
			<h4 class="page-title module-name">Exam Name: <span class="course-title">{{$exam->sub_category}}</span></h4>
		</div>
		<div class="col-md-2 download-pdf">
			<a href="{{route('app.download', $exam->id)}}" class="btn btn-danger float-right">Download PDF</a>
		</div>
	</div>
</div>
	<div class="card question-answer-section" oncopy="alert('Copying prohibited'); return false" oncut="return false" onpaste="return false">
		<div class="card-body">
			
		@foreach($questions as $key => $question)
		<div class="row question-answer">
			<div class="col-md-12 question">
				<strong>{{$loop->index+1}}) {{$question->q_text}}</strong>
				@canany(['app.questions.create', 'app.questions.edit', 'app.questions.destroy'])
				<button class="action-button">
					<i class="fas fa-ellipsis-h"></i>
				</button>
				@endcanany
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
			@endforeach
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