<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $series = Series::take(4)->get();
        $courses = Course::take(6)->get();
        return view('welcome', compact('series','courses'));
    }
    public function dashboard(){
        if(Auth::user()->type === 1){
            return view('dashboard');
        }else{
            return redirect()->route('home');
        }
    }
}
