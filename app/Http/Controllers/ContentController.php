<?php

namespace App\Http\Controllers;
use App\Content;
use App\Counter;
use App\Course;
use App\Department;
use App\Filde;
use App\Transform;
use App\Rating;
use App\Student;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function showContent(){
        $contents =Content::first();
        $counters =Counter::first();
        $courses=Course::latest()->paginate(3);
        $departments=Department::all();
        $fields=Filde::all();
        $transforms=Transform::all();
        $ratings=Rating::all();
        $students=Student::all();
        return view('home',[
            "contents"=>$contents,
            "counters"=>$counters,
            "courses"=>$courses,
           "departments"=>$departments,
            "fields"=>$fields,
            "transforms"=>$transforms,
            "ratings"=>$ratings,
            "students"=>$students,
        ]);
    }
}
