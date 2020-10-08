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
<div class="reg_teacher">
    <form  method="POST" action="/autho/student">
        {{ csrf_field()}}
        <div class="form-group row">
            <label for="student_id" class="col-sm-2 col-form-label"><h6>Student ID:</h6></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="student_id" placeholder="Student_id:" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="student_pass" class="col-sm-2 col-form-label"><h6>Student Pass:</h6></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="student_pass" placeholder="Student Pass:" required>
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
