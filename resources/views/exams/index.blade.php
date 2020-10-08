 c<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Showing question</title>
  </head>
  <body>
       <h1>Here are the questions:</h1>
       
         @foreach ($questionPapers as $q)
               <b> ( {{  $q->question_id  }} )</b>
               <b>{{  $q->question  }}<b>
               {{  $q->option1  }}
               {{  $q->option2  }}
               {{  $q->option3  }}
               {{  $q->option4  }}
               <h1>{{  $q->correct_answer  }}</h1>
         @endforeach


  </body>
</html>
