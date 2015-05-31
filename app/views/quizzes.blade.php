<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>{{ $quiz->name }}</h3>

	@foreach($quiz->questions as $question)

	        <h4>{{ $question->question }}</h4>

	        @foreach($question->answers as $answer)

	            <p>{{ $answer->answer }}</p>

	        @endforeach

	@endforeach

</body>
</html>