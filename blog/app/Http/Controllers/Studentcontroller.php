<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class Studentcontroller extends Controller
{
    public function index()
    {   
      $students = Student::all();
      return view('welcome', compact('students'));
    }
        public function create()
    {
    	return view ('create');
    }
    public function store(Request $request)
    {
    	$student = new Student;
    	$student->first_name = $request->firstname;
    	$student->last_name = $request->lastname;
    	$student->email = $request->email;
    	$student->phone = $request->phone;
    	$student->save();

    	return redirect(route('home'))->with('successMsg','Student Successfully Added');

    }

}
