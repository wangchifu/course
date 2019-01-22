<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\User;
use App\Year;
use Illuminate\Http\Request;

class Review2Controller extends Controller
{
    public function index(Request $request)
    {
        //年度選單
        $years = Year::orderBy('year','DESC')->pluck('year','year')->toArray();
        //選擇的年度
        $select_year = ($request->input('year'))?$request->input('year'):current($years);

        $schools = School::orderBy('id')
            ->paginate('20');

        $courses = Course::where('year',$select_year)
            ->get();

        //取全部使用者的id2name
        $usersId2Names = usersId2Names();
        $special13_name = [];
        $special13_1_name = [];
        $special13_2_name = [];
        $special13_3_name = [];

        foreach($courses as $course){
            $special13_name[$course->school_code] = ($course->special13_user_id)?$usersId2Names[$course->special13_user_id]:null;
            $special13_1_name[$course->school_code] = ($course->special13_1_user_id)?$usersId2Names[$course->special13_1_user_id]:null;
            $special13_2_name[$course->school_code] = ($course->special13_2_user_id)?$usersId2Names[$course->special13_2_user_id]:null;
            $special13_3_name[$course->school_code] = ($course->special13_3_user_id)?$usersId2Names[$course->special13_3_user_id]:null;
            $special13[$course->school_code] = $course->c13;
        }

        $data = [
            'years'=>$years,
            'select_year'=>$select_year,
            'schools'=>$schools,
            'courses'=>$courses,
            'special13_name'=>$special13_name,
            'special13_1_name'=>$special13_1_name,
            'special13_2_name'=>$special13_2_name,
            'special13_3_name'=>$special13_3_name,
        ];
        return view('reviews2.index',$data);
    }

    public function special_user($select_year,$school_code,$c)
    {
        $users = User::where('group_id',3)->pluck('name','id')->toArray();
        $school_array = config('course.schools');
        $data = [
            'users'=>$users,
            'select_year'=>$select_year,
            'school_code'=>$school_code,
            'school_array'=>$school_array,
            'c'=>$c,
        ];
        return view('reviews2.special_user',$data);
    }

    public function special_user_store(Request $request)
    {
        $course = Course::where('year',$request->input('select_year'))
            ->where('school_code',$request->input('school_code'))
            ->first();
        $c = $request->input('c');
        $att['special'.$c.'_user_id'] = $request->input('special_user_id');

        $course->update($att);
        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function special_by_user($select_year,$c)
    {
        $users = User::where('group_id',3)->pluck('name','id')->toArray();
        $schools = config('course.schools');

        $data = [
            'select_year'=>$select_year,
            'users'=>$users,
            'schools'=>$schools,
            'c'=>$c,
        ];
        return view('reviews2.special_by_user',$data);
    }

    public function special_by_user_store(Request $request)
    {
        foreach($request->input('s') as $k=>$v){
            $course = Course::where('year',$request->input('select_year'))
                ->where('school_code',$k)
                ->first();
            $c = $request->input('c');
            $att['special'.$c.'_user_id'] = $request->input('user_id');
            $course->update($att);
        }
        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function unsent_special($select_year)
    {
        $courses = Course::where('year',$select_year)
            ->get();
        $schools = config('course.schools');
        $data = [
            'select_year'=>$select_year,
            'courses'=>$courses,
            'schools'=>$schools,
        ];
        return view('reviews2.unsent_special',$data);
    }
}
