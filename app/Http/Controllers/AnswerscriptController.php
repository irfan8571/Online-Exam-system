<?php

namespace App\Http\Controllers;

use App\Answerscript;
use App\Result;
use App\Question_paper;
use Illuminate\Http\Request;

class AnswerscriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $student_id = request('student_id');   
        Result::create(['exam_id'=>request('exam_id'),'student_id'=>request('student_id'),
            'student_name'=>request('student_name'),   'score'=>'0']);
        
         Answerscript::create([ 'student_name'=>request('student_name'),'student_id'=>request('student_id'),'exam_id'=>request('exam_id'), 'question_id'=>'1',  'submitted_answer'=>request('answer1')  ]);


          Answerscript::create([ 'student_name'=>request('student_name'),'student_id'=>request('student_id'),'exam_id'=>request('exam_id'), 'question_id'=>'2',  'submitted_answer'=>request('answer2')  ]);
           Answerscript::create([ 'student_name'=>request('student_name'),'student_id'=>request('student_id'),'exam_id'=>request('exam_id'), 'question_id'=>'3',  'submitted_answer'=>request('answer3')  ]);
            Answerscript::create([ 'student_name'=>request('student_name'),'student_id'=>request('student_id'),'exam_id'=>request('exam_id'), 'question_id'=>'4',  'submitted_answer'=>request('answer4')  ]);
             Answerscript::create([ 'student_name'=>request('student_name'),'student_id'=>request('student_id'),'exam_id'=>request('exam_id'), 'question_id'=>'5',  'submitted_answer'=>request('answer5')  ]);
             $answerscripts = Answerscript::all();
           $results = Result::all();
           $question_papers = Question_paper::all();
           return view('results.produce',[
                'answerscripts' => $answerscripts,
                'results' => $results,
                'papers' => $question_papers,
                'id' => $student_id
           ]);
    }       

    /**
     * Display the specified resource.
     *
     * @param  \App\Answerscript  $answerscript
     * @return \Illuminate\Http\Response
     */
    public function show(Answerscript $answerscript)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answerscript  $answerscript
     * @return \Illuminate\Http\Response
     */
    public function edit(Answerscript $answerscript)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answerscript  $answerscript
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answerscript $answerscript)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answerscript  $answerscript
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answerscript $answerscript)
    {
        //
    }
   
}
