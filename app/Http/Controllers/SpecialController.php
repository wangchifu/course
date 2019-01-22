<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\SpecialSuggest13;
use App\SpecialSuggest131;
use App\SpecialSuggest132;
use App\SpecialSuggest133;
use App\Year;
use Illuminate\Http\Request;

class SpecialController extends Controller
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
            ->where(function($query){
                $query->where('special13_user_id',auth()->user()->id)
                    ->orWhere('special13_1_user_id',auth()->user()->id)
                    ->orWhere('special13_2_user_id',auth()->user()->id)
                    ->orWhere('special13_3_user_id',auth()->user()->id);
                    })->paginate('20');

        $data = [
            'page'=>$page,
            'years'=>$years,
            'select_year'=>$select_year,
            'schools'=>$schools,
            'courses'=>$courses,
        ];
        return view('specials.index',$data);
    }


    public function edit13($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();

        $school = School::where('school_code',$course->school_code)->first();
        $schools = config('course.schools');
        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'page'=>$page,
            'school_type'=> $school->school_type,
            'schools'=>$schools,
        ];
        return view('specials.edit13',$data);
    }

    public function store13(Request $request)
    {
        $att['user_id'] = auth()->user()->id;
        $att['course_id'] = $request->input('course_id');
        $att['c13_pass'] = ($request->input('c13_pass')=="1")?"1":"0";
        $att['c13'] = $request->input('c13');
        SpecialSuggest13::create($att);

        return redirect('specials/index?page='.$request->input('page'));

    }


    public function update13(Request $request,Course $course)
    {
        $att['c13_pass'] = ($request->input('c13_pass')=="1")?"1":"0";
        $att['c13'] = $request->input('c13');

        $course->special_suggest13->update($att);

        return redirect('specials/index?page='.$request->input('page'));

    }


    public function edit13_1($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();

        $school = School::where('school_code',$course->school_code)->first();
        $schools = config('course.schools');
        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'page'=>$page,
            'school_type'=> $school->school_type,
            'schools'=>$schools,
        ];
        return view('specials.edit13_1',$data);
    }

    public function store13_1(Request $request)
    {
        $att['user_id'] = auth()->user()->id;
        $att['course_id'] = $request->input('course_id');
        $att['c13_1_pass'] = ($request->input('c13_1_pass')=="1")?"1":"0";
        $att['c13_1'] = $request->input('c13_1');
        SpecialSuggest131::create($att);

        return redirect('specials/index?page='.$request->input('page'));

    }


    public function update13_1(Request $request,Course $course)
    {
        $att['c13_1_pass'] = ($request->input('c13_1_pass')=="1")?"1":"0";
        $att['c13_1'] = $request->input('c13_1');

        $course->special_suggest13_1->update($att);

        return redirect('specials/index?page='.$request->input('page'));

    }

    public function edit13_2($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();

        $school = School::where('school_code',$course->school_code)->first();
        $schools = config('course.schools');
        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'page'=>$page,
            'school_type'=> $school->school_type,
            'schools'=>$schools,
        ];
        return view('specials.edit13_2',$data);
    }

    public function store13_2(Request $request)
    {
        $att['user_id'] = auth()->user()->id;
        $att['course_id'] = $request->input('course_id');
        $att['c13_2_pass'] = ($request->input('c13_2_pass')=="1")?"1":"0";
        $att['c13_2'] = $request->input('c13_2');
        SpecialSuggest132::create($att);

        return redirect('specials/index?page='.$request->input('page'));

    }


    public function update13_2(Request $request,Course $course)
    {
        $att['c13_2_pass'] = ($request->input('c13_2_pass')=="1")?"1":"0";
        $att['c13_2'] = $request->input('c13_2');

        $course->special_suggest13_2->update($att);

        return redirect('specials/index?page='.$request->input('page'));

    }

    public function edit13_3($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();

        $school = School::where('school_code',$course->school_code)->first();
        $schools = config('course.schools');
        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'page'=>$page,
            'school_type'=> $school->school_type,
            'schools'=>$schools,
        ];
        return view('specials.edit13_3',$data);
    }

    public function store13_3(Request $request)
    {
        $att['user_id'] = auth()->user()->id;
        $att['course_id'] = $request->input('course_id');
        $att['c13_3_pass'] = ($request->input('c13_3_pass')=="1")?"1":"0";
        $att['c13_3'] = $request->input('c13_3');
        SpecialSuggest133::create($att);

        return redirect('specials/index?page='.$request->input('page'));

    }


    public function update13_3(Request $request,Course $course)
    {
        $att['c13_3_pass'] = ($request->input('c13_3_pass')=="1")?"1":"0";
        $att['c13_3'] = $request->input('c13_3');

        $course->special_suggest13_3->update($att);

        return redirect('specials/index?page='.$request->input('page'));

    }
}
