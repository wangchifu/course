<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\SecondSuggest;
use App\Year;
use Illuminate\Http\Request;

class SecondController extends Controller
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
            ->where('second_user_id',auth()->user()->id)
            ->paginate('20');

        $data = [
            'page'=>$page,
            'years'=>$years,
            'select_year'=>$select_year,
            'schools'=>$schools,
            'courses'=>$courses,
        ];
        return view('seconds.index',$data);
    }

    public function create($course_id,$page)
    {
        $course = Course::where('id',$course_id)->first();
        if($course->second_user_id != auth()->user()->id){
            return back();
        }

        $school = School::where('school_code',$course->school_code)->first();
        $schools = config('course.schools');
        $data = [
            'course'=>$course,
            'select_year'=>$course->year,
            'school_name'=>$school->school_name,
            'school_code'=>$school->school_code,
            'school_group'=> $school->school_type,
            'page'=>$page,
            'schools'=>$schools,
        ];
        return view('seconds.create',$data);
    }

    public function store(Request $request)
    {
        $att['user_id'] = auth()->user()->id;
        $att['course_id'] = $request->input('course_id');
        $att['reason'] = $request->input('reason');
        $special_suggest = SecondSuggest::create($att);

        $att2['second_result'] = $request->input('second_result');
        $special_suggest->course->update($att2);

        return redirect('seconds/index?page='.$request->input('page'));

    }

    public function update(Request $request,Course $course)
    {

        $att['reason'] = $request->input('reason');
        $course->second_suggest->update($att);

        $att2['second_result'] = $request->input('second_result');
        $course->update($att2);

        return redirect('seconds/index?page='.$request->input('page'));

    }
}
