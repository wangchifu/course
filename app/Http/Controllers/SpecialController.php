<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\SpecialSuggest;
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
            ->where('special_user_id',auth()->user()->id)
            ->paginate('20');

        $data = [
            'page'=>$page,
            'years'=>$years,
            'select_year'=>$select_year,
            'schools'=>$schools,
            'courses'=>$courses,
        ];
        return view('specials.index',$data);
    }

    public function create($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();
        if($course->special_user_id != auth()->user()->id){
            return back();
        }

        $school = School::where('school_code',$course->school_code)->first();
        $schools = config('course.schools');
        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'page'=>$page,
            'school_type'=> $school->school_type,
            'schools'=>$schools,
        ];
        return view('specials.create',$data);
    }

    public function store(Request $request)
    {
        $att['user_id'] = auth()->user()->id;
        $att['course_id'] = $request->input('course_id');
        $att['c13_pass'] = ($request->input('c13_pass')=="1")?"1":null;
        $att['c13'] = $request->input('c13');
        $att['c13_1_pass'] = ($request->input('c13_1_pass')=="1")?"1":null;
        $att['c13_1'] = $request->input('c13_1');
        $special_suggest = SpecialSuggest::create($att);

        $att2['special_result'] = "1";
        $special_suggest->course->update($att2);

        return redirect('specials/index?page='.$request->input('page'));

    }

    public function update(Request $request,Course $course)
    {
        $att['c13_pass'] = ($request->input('c13_pass')=="1")?"1":null;
        $att['c13'] = $request->input('c13');
        $att['c13_1_pass'] = ($request->input('c13_1_pass')=="1")?"1":null;
        $att['c13_1'] = $request->input('c13_1');

        $course->special_suggest->update($att);

        return redirect('specials/index?page='.$request->input('page'));

    }
}
