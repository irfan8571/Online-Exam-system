<!DOCTYPE html>
<html>
<head>
	<title>Result generated</title>
</head>
<body>
      @foreach ($results as $res)
           $res->score = $res->score + 1;
           $res->save();
     @endforeach
</body>
</html>