<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Attending exam</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
      @foreach ($question_paper as $q)
          @if ($q->exam_id == $id)
              ({{ $q->question_id }})
              {{  $q->question }}
              <li>{{ $q->option1  }}</li>
              <li>{{ $q->option2  }}</li>
              <li>{{ $q->option3  }}</li>
              <li>{{ $q->option4  }}</li>
          @endif
      @endforeach
      <h1>........PLEASE SUBMIT YOUR ANSWERS BELOW...........</h1>
      <div class="create_exams">
          <form  method="POST" action="/scripts">
              {{ csrf_field()}}
              <div class="form-group row">
                <label for="student_name" class="col-sm-2 col-form-label"><h6>Student Name:</h6></label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="student_name" placeholder="Student Name:" required>
                </div>
              </div>
              <div class="form-group row">
                  <label for="student_id" class="col-sm-2 col-form-label"><h6>Student ID:</h6></label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="student_id" placeholder="Student Id" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="exam_id" class="col-sm-2 col-form-label"><h6>Exam ID:</h6></label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="exam_id" placeholder="Exam ID" required>
                  </div>
               </div>
               
              </div>   
             
              <div class="form-group row">
                  <label for="answer1" class="col-sm-2 col-form-label"><h6>Answer of 1st question</h6></label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="answer1" placeholder="Answer_1" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="answer2" class="col-sm-2 col-form-label"><h6>Answer of 2nd question</h6></label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="answer2" placeholder="Answer_2" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="answer3" class="col-sm-2 col-form-label"><h6>Answer of 3rd question</h6></label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="answer3" placeholder="Answer_3" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="answer4" class="col-sm-2 col-form-label"><h6>Answer of 4th question</h6></label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="answer4" placeholder="Answer_4" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="answer5" class="col-sm-2 col-form-label"><h6>Answer of 5th question:</h6></label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="answer5" placeholder="Answer_5" required>
                  </div>
              </div>
              <div class="form-group row">
                  <div class="col-sm-10 offset-sm-2">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
          </form>
      </div>





        </form>
  </body>
</html>
