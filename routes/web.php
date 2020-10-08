<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/attend/form', function () {
    return view('exam_attend');
});

Route::get('/result/form', function () {
    return view('exam_result');
});

Route::get('/own_result/form', function () {
    return view('own_result');
});

Route::get('/catagory', 'CatagoryController@selection');


Route::resource('exams', 'QuestionController');

Route::resource('scripts', 'AnswerscriptController');
Route::resource('results', 'ResultController');
Route::resource('teacher', 'TeacherController');
Route::resource('student', 'StudentController');


Route::get('/studentHome', function(){ 
   return view('student.menu');
});
Route::get('/indiv', 'ResultController@indiv');
Route::get('/result', 'ResultController@take');
Route::get('/attend', 'QuestionController@take');
Route::get('/register/teacher', 'TeacherController@create');
Route::get('/register/student', 'StudentController@create');
Route::get('/login/student', 'StudentController@login');
Route::get('/login/teacher', 'TeacherController@login');


Route::post('/autho/student', 'StudentController@veriffy');
Route::post('/autho/teacher', 'TeacherController@veriffy');
