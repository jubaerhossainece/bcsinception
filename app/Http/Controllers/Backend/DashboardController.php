<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Course;
use App\Models\Module;
use App\Models\Exam;
use App\Models\Role;

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
        $exams = Exam::all();
        $categories = Exam::distinct()->count('sub_category');
        // dd($exams);
        return view('backend.index', compact('courses', 'exams', 'categories'));
    }
}
