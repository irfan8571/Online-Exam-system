<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
        return view('teacher.registration');
    }

    public function login()
    {
        //
        return view('teacher.login');
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
          Teacher::create(['username'=>request('username'),'email'=>request('email'),
            'password'=>request('password')]);
           $id = -1;
         $teachers = Teacher::all();
         foreach ($teachers as $t) {
            $id = $t->id;
          }
          return view('showID', [
              'id'=>$id
          ]);
          
    }
    
    public function veriffy(Request $request)
    {
        $teachers = Teacher::all();
        $flag = 0;
        foreach ($teachers as $teacher) {   
            if( $teacher->id == request('teacher_id')   && $teacher->password == request('teacher_pass') ){
                $flag = 1;
            }    
        }
        if( $flag == 1)
            return view('teacher.menu');
        else
             return view('failed_login'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
