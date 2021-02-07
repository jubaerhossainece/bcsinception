<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Course;

class CourseController extends Controller
{
    public function link(Request $request, $courseId){
    	$exams = Exam::where('course_id', $courseId)->get();
    	$course = Course::where('id', $courseId)->first();
    	return view('backend.courses.index', compact('exams', 'course'));
    }
}
