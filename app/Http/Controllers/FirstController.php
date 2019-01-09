<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\Year;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(Request $request)
    {
        $page = ($request->input('page'))?$request->input('page'):1;
        //年度選單
        $years = Year::orderBy('year','DESC')->pluck('year','year')->toArray();
        //選擇的年度
        $select_year = ($request->input('year'))?$request->input('year'):current($years);

        $schools = config('course.schools');

        $courses = Course::where('year',$select_year)
            ->where('first_user_id',auth()->user()->id)
            ->paginate('20');

        $data = [
            'page'=>$page,
            'years'=>$years,
            'select_year'=>$select_year,
            'schools'=>$schools,
            'courses'=>$courses,
        ];
        return view('firsts.index',$data);
    }

    public function create1($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();
        //$year = Year::where('year',$course->year)->first();

        if($course->first_user_id != auth()->user()->id){
            return back();
        }

        $school = School::where('school_code',$course->school_code)->first();

        $schools = config('course.schools');


        $data = [
          //  'year'=>$year,
            'course'=>$course,
            'select_year'=>$course->year,
            'school_name'=>$school->school_name,
            'school_code'=>$school->school_code,
            'school_group'=>$school->school_type,

            'page'=>$page,
            'school_type'=> $school->school_type,
            'schools'=>$schools,
        ];
        return view('firsts.create1',$data);
    }
}
