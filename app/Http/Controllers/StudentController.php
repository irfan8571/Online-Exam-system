<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
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
        return view('student.registration');
    }

    public function login()
    {
        //
        return view('student.login');
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
         Student::create(['username'=>request('username'),'email'=>request('email'),
            'password'=>request('password')]);
         $id = -1;
         $students = Student::all();
         foreach ($students as $student) {
            $id = $student->id;
          } 
          return view('showID', [
              'id'=>$id
          ]);
    }

    public function veriffy(Request $request)
    {
        $students = Student::all();
        $flag = 0;
        foreach ($students as $student) {   
            if( $student->id == request('student_id')   && $student->password == request('student_pass') ){
                $flag = 1;
            }    
        }
        if( $flag == 1)
            return view('student.menu');
        else
            return view('failed_login'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
