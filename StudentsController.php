<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class StudentsController extends Controller
{
    public function getStudentData($student_no){
        return View::make('student', [
            'student_no' => $student_no,
            'subject' => null
        ]);
    }

    public function getStudentScore($student_no, $subject = null){
        return View::make('student', [
            'student_no' => $student_no,
            'subject' => $subject
        ]);   
    }
}   
