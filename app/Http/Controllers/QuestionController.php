<?php

namespace App\Http\Controllers;

use App\Question_paper;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questionPapers = Question_paper::all();
        return view('exams.index', compact('questionPapers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('exams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Question_paper::create([ 'exam_id'=>request('exam_id'),'question'=>request('q1'),'question_id'=>'1','option1'=>request('op11'),'option2'=>request('op12'),'option3'=>request('op13'),'option4'=>request('op14'),'correct_answer'=>request('correct_answer1') ]);
       Question_paper::create([ 'exam_id'=>request('exam_id'),'question'=>request('q2'),'question_id'=>'2','option1'=>request('op21'),'option2'=>request('op22'),'option3'=>request('op23'),'option4'=>request('op24'),'correct_answer'=>request('correct_answer2') ]);
        Question_paper::create([ 'exam_id'=>request('exam_id'),'question'=>request('q3'),'question_id'=>'3','option1'=>request('op31'),'option2'=>request('op32'),'option3'=>request('op33'),'option4'=>request('op34'),'correct_answer'=>request('correct_answer3') ]);
        Question_paper::create([ 'exam_id'=>request('exam_id'),'question'=>request('q4'),'question_id'=>'4','option1'=>request('op41'),'option2'=>request('op42'),'option3'=>request('op43'),'option4'=>request('op44'),'correct_answer'=>request('correct_answer4') ]);
        Question_paper::create([ 'exam_id'=>request('exam_id'),'question'=>request('q5'),'question_id'=>'5','option1'=>request('op51'),'option2'=>request('op52'),'option3'=>request('op53'),'option4'=>request('op54'),'correct_answer'=>request('correct_answer5') ]);
        return view('teacher.menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question_paper  $question_paper
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $question_paper = Question_paper::find($id);
         return view('exams.test', compact('question_paper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question_paper  $question_paper
     * @return \Illuminate\Http\Response
     */
    public function edit(Question_paper $question_paper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question_paper  $question_paper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question_paper $question_paper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question_paper  $question_paper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question_paper $question_paper)
    {
        //
    }


    public function take(Request $request)
    {
         $question_paper = Question_paper::all();
       return view('exams.attend', [
             'id' => request('exam_id'),
             'question_paper' => $question_paper  
       ]);       
    }
}
