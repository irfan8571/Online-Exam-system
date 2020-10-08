<?php


use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

use App\Question_paper;



class NumberOfSetQues extends TestCase
{
    use RefreshDatabase;
    public function testExample()
    {
        $questionPapers = Question_paper::all();
        $cnt = 0;

        foreach($questionPapers as $qp){
                $cnt++;
        }
        $this->assertEquals($cnt, 15);
    }
}
