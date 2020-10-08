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
      
         
       @foreach($results as $r)
           @if($r->score == $marks[0])
                <h1>Top scorer is: {{ $r->student_name }}(  id: {{ $r->student_id }} ) with points {{$r->score}}</h1> 
           @endif
       @endforeach
       
        @foreach($results as $r)
           @if($r->score == $marks[1])
                <h1>Second top scorer is: {{ $r->student_name }}(  id: {{ $r->student_id }} ) with points {{$r->score}}</h1> 
           @endif
       @endforeach

        @foreach($results as $r)
           @if($r->score == $marks[2])
                <h1>Third top scorer is: {{ $r->student_name }}(  id: {{ $r->student_id }} ) with points {{$r->score}}</h1> 
           @endif
       @endforeach


</body>
</html>