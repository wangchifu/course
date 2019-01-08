<?php

namespace App\Http\Controllers;

use App\Course;
use App\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Year::orderBy('year','DESC')->get();
        $data = [
            'years'=>$years,
        ];
        return view('years.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = ['9year'=>'九年一貫課程','12year'=>'十二年國教課程'];
        $data = [
            'courses'=>$courses,
        ];
        return view('years.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'year'=>'required|numeric||between:100,999',
            'step1_date1'=>'required|date_format:"Y-m-d"',
            'step1_date2'=>'required|date_format:"Y-m-d"|after:step1_date1',
            'step2_date1'=>'required|date_format:"Y-m-d"',
            'step2_date2'=>'required|date_format:"Y-m-d"|after:step2_date1',
            'step3_date1'=>'required|date_format:"Y-m-d"',
            'step3_date2'=>'required|date_format:"Y-m-d"|after:step3_date1',
            'step4_date1'=>'required|date_format:"Y-m-d"',
            'step4_date2'=>'required|date_format:"Y-m-d"|after:step4_date1',
            'step5_date1'=>'required|date_format:"Y-m-d"',
            'step5_date2'=>'required|date_format:"Y-m-d"|after:step5_date1',
            'step6_date1'=>'required|date_format:"Y-m-d"',
            'step6_date2'=>'required|date_format:"Y-m-d"|after:step6_date1',
        ]);
        $att = $request->all();
        $year = Year::create($att);

        $schools = config('course.schools');
        foreach($schools as $k=>$v){
            $all[] = [
                'year'=>$year->year,
                'school_code'=>$k,
                'created_at'=>now(),
                'updated_at'=>now(),
            ];
        }
        Course::insert($all);

        return redirect()->route('years.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {
        $data = [
            'year'=>$year,
        ];

        return view('years.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Year $year)
    {
        $year->delete();
        return redirect()->route('years.index');
    }
}
