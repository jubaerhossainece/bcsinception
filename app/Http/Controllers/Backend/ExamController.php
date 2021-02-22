<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Exam;
use PDF;

class ExamController extends Controller
{
    public function exam(Request $request, $id){
    	$questions = Question::where('exam_id', $id)->get();
    	$exam = Exam::where('id', $id)->first();
    	return view('backend.exams.index', compact('questions', 'exam'));
    }


    public function downloadPDF($id){
    	$questions = Question::where('exam_id', $id)->get();
    	$exam = Exam::where('id', $id)->first();
    	$pdf = PDF::loadView('backend.exams.pdf', compact('questions', 'exam'));

    	return $pdf->download($exam->category.'.pdf');
    	// return view('backend.exams.pdf', compact('questions', 'exam'));
        //   $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('backend.exams.pdf', compact('questions', 'exam')); 
        // return $pdf->stream(); 
    }
}
