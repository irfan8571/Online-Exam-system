<?php

namespace App\Http\Controllers;

use App\Result;
use App\Answerscript;
use App\Question_paper;
use Illuminate\Http\Request;

class ResultController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
    public function indiv(Request $request)
    {
        $results = Result::all();
         return view('results.indiv', [
           'results'=>$results,
           'exam_id'=>request('exam_id'),
           'student_id' => request('student_id')
        ]);
       
    }
   
    public function take(Request $request)
    {
        $results = Result::all();
         $idx = 0;
        $marks = array(0, 0, 0);
        foreach ( $results as $result) {
           if( $result->exam_id == request('exam_id'))
           {                 
                 $marks[$idx] = $result->score;
                 $idx = $idx +1;
           }    
        }
        
        rsort($marks);
        return view('results.publish', [
           'results'=>$results,
           'marks'=>$marks

        ]);
                 
    }
}
