<?php

namespace App\Http\Controllers;

use App\Course;
use App\Year;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function index(Request $request)
    {
        //年度選單
        $years = Year::orderBy('year','DESC')->pluck('year','year')->toArray();
        //選擇的年度
        $select_year = ($request->input('year'))?$request->input('year'):current($years);

        $data = [
            'years'=>$years,
            'select_year'=>$select_year,
        ];
        return view('exports.index',$data);
    }

    public function show_date($select_year)
    {
        $courses = Course::where('year',$select_year)
            ->get();
        $schools = config('course.schools');

        $data = [
            'courses'=>$courses,
            'schools'=>$schools,
            'select_year'=>$select_year,
        ];
        return view('exports.show_date',$data);
    }
}
