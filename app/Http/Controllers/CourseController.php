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
    public function courses(Request $request){
        $search = $request->search;
        $levels = $request->level;
        // dd($levels);
        // if(!empty($search)){
        //     $courses = Course::where('name','like','%'.$request->search.'%')->paginate(12);
        // }else{
        //     $courses = Course::paginate(12);
        // }
        $courses = Course::where(function ($query) use ($search) {
            if(!empty($search)){
                $query->where('name','like','%'.$search.'%');
            }
        })->when($levels, function ($query) use ($levels) {
            $condition_check = 0;
            foreach($levels as $level){
                if($level == 'beginner'){
                    $field = 0;
                    if($condition_check>0){
                        $query->orWhere('difficulty_level',$field);
                    }else{
                        $query->where('difficulty_level',$field);
                    }
                    $condition_check++;
                }elseif($level == 'intermediate'){
                    $field = 1;
                    if($condition_check>0){
                        $query->orWhere('difficulty_level',$field);
                    }else{
                        $query->where('difficulty_level',$field);
                    }
                    $condition_check++;
                }else{
                    $field = 2;
                    if($condition_check>0){
                        $query->orWhere('difficulty_level',$field);
                    }else{
                        $query->where('difficulty_level',$field);
                    }
                    $condition_check++;
                }
            }
            // $query->where('difficulty_level',$field);
        })->paginate(12);

        return view('courses',compact('courses'));
    }
}
