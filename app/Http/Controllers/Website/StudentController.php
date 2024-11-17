<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){ 
        $students = Student::all();
        return view('website.Dashboard', compact('students'));
    }



    public function apiDeleteStudent(Request $request) { 
        
    $student = Student::find($request->id); 

    if ($student && $student->delete()) { 
        return successResponse('Student Remove successfully.');
    }
    return errorResponse('Failed.');
}




}
