<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Exam;

class ExamController extends Controller
{
    public function exam(Request $request, $id){
    	$questions = Question::where('exam_id', $id)->get();
    	$exam = Exam::where('id', $id)->first();
    	return view('backend.exams.index', compact('questions', 'exam'));
    }
}
