<?php

namespace App\Http\Controllers;

use App\Course;
use App\FirstSuggest1;
use App\FirstSuggest2;
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

        if($course->first_user_id != auth()->user()->id){
            return back();
        }

        $school = School::where('school_code',$course->school_code)->first();

        $schools = config('course.schools');


        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'school_name'=>$school->school_name,
            'school_code'=>$school->school_code,
            'school_group'=>$school->school_type,
            'page'=>$page,
            'schools'=>$schools,
        ];
        return view('firsts.create1',$data);
    }

    public function create2($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();

        if($course->first_user_id != auth()->user()->id){
            return back();
        }

        $school = School::where('school_code',$course->school_code)->first();

        $schools = config('course.schools');


        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'school_name'=>$school->school_name,
            'school_code'=>$school->school_code,
            'school_group'=>$school->school_type,
            'page'=>$page,
            'schools'=>$schools,
        ];
        return view('firsts.create2',$data);
    }

    public function store(Request $request)
    {
        $att = $request->all();
        $att['user_id'] = auth()->user()->id;

        $course = Course::where('id',$request->input('course_id'))->first();
        if($course->first_result1 == "submit"){
            $first_suggest1 = FirstSuggest1::create($att);
            $att2['first_result1'] = $request->input('first_result');
            $first_suggest1->course->update($att2);
        }
        if($course->first_result1 =="back" and $course->first_result2 == "submit"){
            $first_suggest2 = FirstSuggest2::create($att);
            $att2['first_result2'] = $request->input('first_result');
            $first_suggest2->course->update($att2);
        }



        return redirect('firsts/index?page='.$request->input('page'));
    }

    public function show($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();

        if($course->first_user_id != auth()->user()->id){
            return back();
        }

        $school = School::where('school_code',$course->school_code)->first();

        $schools = config('course.schools');

        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'school_name'=>$school->school_name,
            'school_code'=>$school->school_code,
            'school_group'=>$school->school_type,
            'page'=>$page,
            'schools'=>$schools,
        ];
        return view('firsts.show',$data);
    }

    public function edit1($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();
        $year = Year::where('year',$course->year)->first();


        if($course->first_user_id != auth()->user()->id){
            return back();
        }

        $school = School::where('school_code',$course->school_code)->first();

        $schools = config('course.schools');

        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'school_name'=>$school->school_name,
            'school_code'=>$school->school_code,
            'school_group'=>$school->school_type,
            'page'=>$page,
            'schools'=>$schools,
        ];
        return view('firsts.edit1',$data);
    }

    public function update(Request $request)
    {
        $att = $request->all();
        $att['user_id'] = auth()->user()->id;
        $first_suggest1 = FirstSuggest1::where('course_id',$att['course_id'])->first();
        $first_suggest1->update($att);

        $att2['first_result1'] = $request->input('first_result1');
        $first_suggest1->course->update($att2);


        return redirect('firsts/index?page='.$request->input('page'));
    }
}
