<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\User;
use App\Year;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $special_name = [];
        $first_name = [];
        $second_name = [];
        $open = [];
        $first_result1 = [];
        $first_result2 = [];
        $first_result3 = [];
        $second_result = [];
        $special_result = [];

        foreach($courses as $course){
            $special_name[$course->school_code] = ($course->special_user_id)?$usersId2Names[$course->special_user_id]:null;
            $first_name[$course->school_code] = ($course->first_user_id)?$usersId2Names[$course->first_user_id]:null;
            $second_name[$course->school_code] = ($course->second_user_id)?$usersId2Names[$course->second_user_id]:null;
            $open[$course->school_code] = $course->open;
            $first_result1[$course->school_code] = $course->first_result1;
            $first_result2[$course->school_code] = $course->first_result2;
            $first_result3[$course->school_code] = $course->first_result3;
            $second_result[$course->school_code] = $course->second_result;
            $special_result[$course->school_code] = $course->special_result;
        }

        $data = [
            'years'=>$years,
            'select_year'=>$select_year,
            'schools'=>$schools,
            'courses'=>$courses,
            'special_name'=>$special_name,
            'first_name'=>$first_name,
            'second_name'=>$second_name,
            'open'=>$open,
            'first_result1'=>$first_result1,
            'first_result2'=>$first_result2,
            'first_result3'=>$first_result3,
            'special_result'=>$special_result,
            'second_result'=>$second_result,
        ];
        return view('reviews.index',$data);
    }

    public function special_user($select_year,$school_code)
    {
        $users = User::where('group_id',3)->pluck('name','id')->toArray();
        $school_array = config('course.schools');
        $data = [
            'users'=>$users,
            'select_year'=>$select_year,
            'school_code'=>$school_code,
            'school_array'=>$school_array,
        ];
        return view('reviews.special_user',$data);
    }

    public function special_user_store(Request $request)
    {
        $course = Course::where('year',$request->input('select_year'))
            ->where('school_code',$request->input('school_code'))
            ->first();
        $att['special_user_id'] = $request->input('special_user_id');
        $course->update($att);

        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function first_user($select_year,$school_code)
    {
        $users = User::where('group_id',4)->pluck('name','id')->toArray();
        $school_array = config('course.schools');
        $data = [
            'users'=>$users,
            'select_year'=>$select_year,
            'school_code'=>$school_code,
            'school_array'=>$school_array,
        ];
        return view('reviews.first_user',$data);
    }

    public function first_user_store(Request $request)
    {
        $course = Course::where('year',$request->input('select_year'))
            ->where('school_code',$request->input('school_code'))
            ->first();
        $att['first_user_id'] = $request->input('first_user_id');
        $course->update($att);

        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function second_user($select_year,$school_code)
    {
        $users = User::where('group_id',5)->pluck('name','id')->toArray();
        $school_array = config('course.schools');
        $data = [
            'users'=>$users,
            'select_year'=>$select_year,
            'school_code'=>$school_code,
            'school_array'=>$school_array,
        ];
        return view('reviews.second_user',$data);
    }

    public function second_user_store(Request $request)
    {
        $course = Course::where('year',$request->input('select_year'))
            ->where('school_code',$request->input('school_code'))
            ->first();
        $att['second_user_id'] = $request->input('second_user_id');
        $course->update($att);

        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function special_by_user($select_year)
    {
        $users = User::where('group_id',3)->pluck('name','id')->toArray();
        $schools = config('course.schools');

        $data = [
            'select_year'=>$select_year,
            'users'=>$users,
            'schools'=>$schools,
        ];
        return view('reviews.special_by_user',$data);
    }

    public function special_by_user_store(Request $request)
    {
        foreach($request->input('s') as $k=>$v){
            $course = Course::where('year',$request->input('select_year'))
                ->where('school_code',$k)
                ->first();
            $att['special_user_id'] = $request->input('user_id');
            $course->update($att);
        }
        echo "<body onload='opener.location.reload();window.close();'>";
    }




    public function first_by_user($select_year)
    {
        $users = User::where('group_id',4)->pluck('name','id')->toArray();
        $schools = config('course.schools');

        $data = [
            'select_year'=>$select_year,
            'users'=>$users,
            'schools'=>$schools,
        ];
        return view('reviews.first_by_user',$data);
    }

    public function first_by_user_store(Request $request)
    {
        foreach($request->input('s') as $k=>$v){
            $course = Course::where('year',$request->input('select_year'))
                ->where('school_code',$k)
                ->first();
            $att['first_user_id'] = $request->input('user_id');
            $course->update($att);
        }
        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function second_by_user($select_year)
    {
        $users = User::where('group_id',5)->pluck('name','id')->toArray();
        $schools = config('course.schools');

        $data = [
            'select_year'=>$select_year,
            'users'=>$users,
            'schools'=>$schools,
        ];
        return view('reviews.second_by_user',$data);
    }

    public function second_by_user_store(Request $request)
    {
        foreach($request->input('s') as $k=>$v){
            $course = Course::where('year',$request->input('select_year'))
                ->where('school_code',$k)
                ->first();
            $att['second_user_id'] = $request->input('user_id');
            $course->update($att);
        }
        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function select_open($select_year,$school_code)
    {
        $att['open'] =1;
        Course::where('year',$select_year)
            ->where('school_code',$school_code)
            ->update($att);
        return back();
    }

    public function select_close($select_year,$school_code)
    {
        $att['open'] =null;
        Course::where('year',$select_year)
            ->where('school_code',$school_code)
            ->update($att);
        return back();
    }

    public function open($select_year)
    {
        $att['open'] =1;
        Course::where('year',$select_year)->update($att);
        return back();
    }

    public function unsent1($select_year)
    {
        $courses = Course::where('year',$select_year)
            ->where('first_result1',null)
            ->get();
        $schools = config('course.schools');
        $data = [
            'select_year'=>$select_year,
            'courses'=>$courses,
            'schools'=>$schools,
        ];
        return view('reviews.unsent1',$data);
    }

    public function unsent2($select_year)
    {
        $courses = Course::where('year',$select_year)
            ->where('first_result1','back')
            ->where('first_result2',null)
            ->get();
        $schools = config('course.schools');
        $data = [
            'select_year'=>$select_year,
            'courses'=>$courses,
            'schools'=>$schools,
        ];
        return view('reviews.unsent2',$data);
    }

    public function unsent3($select_year)
    {
        $courses = Course::where('year',$select_year)
            ->where('first_result2','back')
            ->where('first_result3','null')
            ->get();
        $schools = config('course.schools');
        $data = [
            'select_year'=>$select_year,
            'courses'=>$courses,
            'schools'=>$schools,
        ];
        return view('reviews.unsent3',$data);
    }


}
