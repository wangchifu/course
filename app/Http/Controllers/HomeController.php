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

        $data = [
            'years'=>$years,
            'select_year'=>$select_year,
        ];
        return view('share',$data);
    }

    public function share_one($select_year,$school_code)
    {
        $course =Course::where('year',$select_year)
            ->where('school_code',$school_code)
            ->first();

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

    public function excellent()
    {
        $data = [

        ];
        return view('excellent',$data);
    }
}
