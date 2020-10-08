<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Create exam</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="create_exams">
    <form  method="POST" action="/exams">
        {{ csrf_field()}}
        <div class="form-group row">
            <label for="exam_id" class="col-sm-2 col-form-label"><h6>Exam ID:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="exam_id" placeholder="Exam Id:" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="q1" class="col-sm-2 col-form-label"><h6>Question:</h6></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="q1" placeholder="Question" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="op11" class="col-sm-2 col-form-label"><h6>Option 1:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op11" placeholder="Option_1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op12" class="col-sm-2 col-form-label"><h6>Option 2:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op12" placeholder="Option_2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op13" class="col-sm-2 col-form-label"><h6>Option 3:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op13" placeholder="Option3" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op14" class="col-sm-2 col-form-label"><h6>Option 4:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op14" placeholder="Option4" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="correct_answer1" class="col-sm-2 col-form-label"><h6>Correct answer:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="correct_answer1" placeholder="Correct answer" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="q2" class="col-sm-2 col-form-label"><h6>Question:</h6></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="q2" placeholder="Question" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="op21" class="col-sm-2 col-form-label"><h6>Option 1:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op21" placeholder="Option_1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op22" class="col-sm-2 col-form-label"><h6>Option 2:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op22" placeholder="Option_2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op23" class="col-sm-2 col-form-label"><h6>Option 3:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op23" placeholder="Option3" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op24" class="col-sm-2 col-form-label"><h6>Option 4:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op24" placeholder="Option4" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="correct_answer2" class="col-sm-2 col-form-label"><h6>Correct answer:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="correct_answer2" placeholder="Correct answer" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="q3" class="col-sm-2 col-form-label"><h6>Question:</h6></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="q3" placeholder="Question" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="op31" class="col-sm-2 col-form-label"><h6>Option 1:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op31" placeholder="Option_1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op32" class="col-sm-2 col-form-label"><h6>Option 2:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op32" placeholder="Option_2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op33" class="col-sm-2 col-form-label"><h6>Option 3:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op33" placeholder="Option3" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op34" class="col-sm-2 col-form-label"><h6>Option 4:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op34" placeholder="Option4" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="correct_answer3" class="col-sm-2 col-form-label"><h6>Correct answer:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="correct_answer3" placeholder="Correct answer" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="q4" class="col-sm-2 col-form-label"><h6>Question:</h6></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="q4" placeholder="Question" required>
            </div>
        </div>
       
        <div class="form-group row">
            <label for="op41" class="col-sm-2 col-form-label"><h6>Option 1:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op41" placeholder="Option_1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op42" class="col-sm-2 col-form-label"><h6>Option 2:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op42" placeholder="Option_2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op43" class="col-sm-2 col-form-label"><h6>Option 3:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op43" placeholder="Option3" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op44" class="col-sm-2 col-form-label"><h6>Option 4:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op44" placeholder="Option4" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="correct_answer4" class="col-sm-2 col-form-label"><h6>Correct answer:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="correct_answer4" placeholder="Correct answer" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="q5" class="col-sm-2 col-form-label"><h6>Question:</h6></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="q5" placeholder="Question" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="op51" class="col-sm-2 col-form-label"><h6>Option 1:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op51" placeholder="Option_1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op52" class="col-sm-2 col-form-label"><h6>Option 2:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op52" placeholder="Option_2" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op53" class="col-sm-2 col-form-label"><h6>Option 3:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op53" placeholder="Option3" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="op54" class="col-sm-2 col-form-label"><h6>Option 4:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="op54" placeholder="Option4" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="correct_answer5" class="col-sm-2 col-form-label"><h6>Correct answer:</h6></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="correct_answer5" placeholder="Correct answer" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>
