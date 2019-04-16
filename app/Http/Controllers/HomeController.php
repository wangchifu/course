<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\User;
use App\Year;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function reset_pwd()
    {
        return view('reset_pwd');
    }

    public function update_pwd(Request $request)
    {
        $request->validate([
            'password1'=>'required|same:password2'
        ]);
        if(password_verify($request->input('password0'), auth()->user()->password)){
            $att['password'] = bcrypt($request->input('password1'));
            User::where('id',auth()->user()->id)->update($att);
            return redirect()->route('index');
        }else{
            return back()->withErrors('舊密碼錯誤');
        }

    }

    public function share(Request $request)
    {
        //年度選單
        $years = Year::orderBy('year','DESC')->pluck('year','year')->toArray();
        //選擇的年度
        $select_year = ($request->input('year'))?$request->input('year'):current($years);


        if(check_date($select_year,6)){
            $words = check_date($select_year,6);
            return view('layouts.page_error',compact('words'));
        };

        $courses = Course::where('year',$select_year)
            ->get();
        foreach($courses as $course){
            $open[$course->school_code] = ($course->open)?"<i class='fas fa-check-circle'></i> ":"";
        }

        $data = [
            'years'=>$years,
            'select_year'=>$select_year,
            'open'=>$open,
        ];
        return view('share',$data);
    }

    public function share_one($select_year,$school_code)
    {
        $course =Course::where('year',$select_year)
            ->where('school_code',$school_code)
            ->first();

        if($course->open != 1){
            echo "<body onload=alert('尚未公開！');window.close();>";
            die();
        }

        $school = School::where('school_code',$course->school_code)
            ->first();

        $data = [
            'course'=>$course,
            'select_year'=>$select_year,
            'school_code'=>$school->school_code,
            'school_name'=>$school->school_name,
            'school_group'=>$school->school_type,
        ];
        return view('share_one',$data);
    }

    public function excellent(Request $request)
    {
        //年度選單
        $years = Year::orderBy('year','DESC')->pluck('year','year')->toArray();
        //選擇的年度
        $select_year = ($request->input('year'))?$request->input('year'):current($years);

        $courses =Course::where('year',$select_year)
            ->where('open',1)
            ->where('second_result','excellent')
            ->get();

        $schools = config('course.schools');

        $data = [
            'years'=>$years,
            'select_year'=>$select_year,
            'courses'=>$courses,
            'schools'=>$schools,
        ];
        return view('excellent',$data);
    }

    public function email(Request $request)
    {
        $user = User::find($request->input('user_id'));
        $att['email'] = $request->input('email');
        $user->update($att);
        return redirect()->route('schools.index');
    }

    public function callback(Request $request)
    {
        if($request->input('error')=="access_denied"){
            echo "<body onload='opener.location.reload();window.close();'>";
        }else{
            $code = ($request->input('code'));
            $token = get_line_token($code);
            if($token){
                $att['access_token'] = $token;
                $user = User::find(auth()->user()->id);
                $user->update($att);

            }
        }
        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function cancel()
    {
        $att['access_token'] = null;
        $user = User::find(auth()->user()->id);
        $user->update($att);

        return redirect()->route('schools.index');
    }
}
