<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: yellow;
}
}
</style>
</head>
<body>
            <?php 
            foreach($results as $res){
                if( $res->student_id == $id){
                    foreach ($answerscripts as $script) {
                        if( $script->student_id == $res->student_id && $script->exam_id==$res->exam_id){
                               foreach ($papers as $paper) {
                                   if( $paper->exam_id == $res->exam_id && $paper->question_id == $script->question_id){
                                            $right_answer = $paper->correct_answer;
                                            if( $script->submitted_answer == $right_answer){
                                                 $res->score = $res->score+1;
                                                 $res->save();
                                            }        
                                    }
                                }  
                        }  
                    }
                }
            }
            ?>

            <h1>Your answerscript has been submitted</h1>
            <a href="/studentHome">Home page</a>


</body>
</html>



