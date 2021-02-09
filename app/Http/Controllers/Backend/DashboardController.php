<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Gate::authorize('app.dashboard');
        $courses = Course::all();
        $questions = Question::all()->count();
        $categories = Exam::distinct('sub_category')->count();
        $sub_categories = DB::table('categories')->get();
        
        return view('backend.index', compact('courses', 'categories', 'questions','sub_categories'));
    }
}
