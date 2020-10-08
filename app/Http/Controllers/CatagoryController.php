<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    //
    public function selection(Request $request)
    {
    	if( request("selection") == 'regT'){
    	  return view('teacher.registration');
    	}
    	if( request("selection") == 'regS'){
    	  return view('student.registration');
    	}
    	if( request("selection") == 'logT'){
    	  return view('teacher.login');
    	}
    	if( request("selection") == 'logS'){
    	  return view('student.login');
    	}
    	
    }
}
