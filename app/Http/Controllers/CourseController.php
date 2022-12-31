<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function show($slug){
        $course = Course::where('slug', $slug)->with(['platform','topics','authors','series','reviews'])->first();
        // return $course;
        // if(empty($course)){
        //     return abort(404);
        // }
        return view('course.single', compact('course'));
    }
}
