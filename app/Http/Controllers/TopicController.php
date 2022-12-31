<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index($slug){
        // $topic = Topic::where('slug', $slug)->with('courses')->first();
        $topic = Topic::where('slug', $slug)->first();
        $courses = $topic->courses()->paginate(12);
        // return $topic;
        return view('topic.single',compact('topic','courses'));
    }
}
