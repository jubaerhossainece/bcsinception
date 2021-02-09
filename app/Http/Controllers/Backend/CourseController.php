<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function link(Request $request, $category){
    	$exams = DB::table('exams')->where('name', 'like', '%'.$category.'%')->get();
    	$course = $category;
    	return view('backend.courses.index', compact('exams', 'course'));
    }
}
