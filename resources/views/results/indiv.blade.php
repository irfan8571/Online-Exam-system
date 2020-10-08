<!DOCTYPE html>
<html>
<head>
	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: yellow;
}
}
</style>
	
</head>
<body>
	
    @foreach($results as $result)
          @if($result->exam_id == $exam_id && $result->student_id== $student_id)
               <h1>Your score: {{$result->score}}</h1>
          @endif
    @endforeach
</body>
</html>