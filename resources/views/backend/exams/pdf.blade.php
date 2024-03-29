<!DOCTYPE html>
<html lang="en">

<head>

	<title>Inception BCS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
	<meta name="author" content="Codedthemes" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="author" content="Codedthemes" />

	<!-- Favicon icon -->
<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

	<!-- Custom css -->
	<!-- <link rel="stylesheet" href="{{url('/css/custom.css')}}"> -->

	<style>
		body {
		    font-family: 'bangla', Arial, sans-serif;
		}
	</style>
</head>

<body class="" oncopy="alert('Copying prohibited'); return false" oncut="return false" onpaste="return false">
	<div class="container">
		<div class="row">
			<div class="card question-answer-section">
				<div class="card-header">
					<h4 class="page-title module-name text-center">Exam Name: <span class="course-title">{{$exam->sub_category}}</span></h4>
				</div>
				<div class="card-body">
							
					@foreach($questions as $key => $question)
					<div class="row question-answer">
						<div class="col-md-12 question">
							<strong>{{$loop->index+1}}) {{$question->q_text}}</strong>
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
		</div>
	</div>
			
	<!-- [ Main Content ] end -->

	<!-- Required Js -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>

	<script>
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