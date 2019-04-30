<?php

namespace App\Http\Controllers;

use App\Book;
use App\C31Table;
use App\C81Table;
use App\Course;
use App\Http\Requests\UploadRequest;
use App\Log;
use App\Year;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(Request $request)
    {
        //年度選單
        $years = Year::orderBy('year','DESC')->pluck('year','year')->toArray();
        //選擇的年度
        $select_year = ($request->input('year'))?$request->input('year'):current($years);

        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        $data = [
            'course'=>$course,
            'select_year'=>$select_year,
            'school_name'=>auth()->user()->school,
            'school_code'=>auth()->user()->code,
            'school_group'=>auth()->user()->group_id,
            'years'=>$years,
        ];
        return view('schools.index',$data);
    }

    public function edit($select_year)
    {
        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        if($course->first_result1==null){
            //檢驗日期是否超過
            if(check_date($select_year,1)){
                $words = check_date($select_year,1);
                return view('layouts.page_error',compact('words'));
            };
        }
        if($course->first_result1=="back" and $course->first_result2==null){
            //檢驗日期是否超過
            if(check_date($select_year,4)){
                $words = check_date($select_year,4);
                return view('layouts.page_error',compact('words'));
            };
        }
        if($course->first_result2=="back"){
            //檢驗日期是否超過
            if(check_date($select_year,5)){
                $words = check_date($select_year,5);
                return view('layouts.page_error',compact('words'));
            };
        }


        if($course->first_result1 != null and $course->first_result1 != "back"){
            return back();
        }
        if($course->first_result2 != null and $course->first_result2 != "back"){
            return back();
        }

        //九年一貫的年級有哪一些
        $year = Year::where('year',$select_year)->first();

        //取得本年度的九年一貫課程及十二年國教課程的年段
        $year_course = get_year($select_year,auth()->user()->group_id);
        $year9= $year_course[9];
        $year12= $year_course[12];

        //取得九年一貫的課程節數規定
        $section9 = (auth()->user()->group_id==1)?$this->section_e9:$this->section_j9;

        //取得十二年國教的課程節數規定
        $section12 = (auth()->user()->group_id==1)?$this->section_e12:$this->section_j12;

        //取得國小九年一貫的課程節數規定
        $total_area12 = (auth()->user()->group_id==1)?$this->total_area_e12:$this->total_area_j12;

        //c3_1有無已經儲存過了
        $sections = C31Table::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->get();
        //查出已存過的各節數
        $has_section = [];
        foreach($sections as $section){
            $has_section[$section->grade]['mandarin'] = $section->mandarin;
            $has_section[$section->grade]['dialects'] = $section->dialects;
            $has_section[$section->grade]['english'] = $section->english;
            $has_section[$section->grade]['mathematics'] = $section->mathematics;
            $has_section[$section->grade]['life_curriculum'] = $section->life_curriculum;
            $has_section[$section->grade]['social_studies'] = $section->social_studies;
            $has_section[$section->grade]['science_technology'] = $section->science_technology;
            $has_section[$section->grade]['science'] = $section->science;
            $has_section[$section->grade]['arts_humanities'] = $section->arts_humanities;
            $has_section[$section->grade]['integrative_activities'] = $section->integrative_activities;
            $has_section[$section->grade]['technology'] = $section->technology;
            $has_section[$section->grade]['health_physical'] = $section->health_physical;
            $has_section[$section->grade]['alternative'] = $section->alternative;

        }

        //管理者已建之版本
        $mandarin_books = Book::where('subject','mandarin')
            ->where('disable',null)
            ->get();
        $dialects_books = Book::where('subject','dialects')
            ->where('disable',null)
            ->get();
        $english_books = Book::where('subject','english')
            ->where('disable',null)
            ->get();
        $mathematics_books = Book::where('subject','mathematics')
            ->where('disable',null)
            ->get();
        $life_curriculum_books = Book::where('subject','life_curriculum')
            ->where('disable',null)
            ->get();
        $social_studies_books = Book::where('subject','social_studies')
            ->where('disable',null)
            ->get();
        $science_technology_books = Book::where('subject','science_technology')
            ->where('disable',null)
            ->get();
        $science_books = Book::where('subject','science')
            ->where('disable',null)
            ->get();
        $arts_humanities_books = Book::where('subject','arts_humanities')
            ->where('disable',null)
            ->get();
        $integrative_activities_books = Book::where('subject','integrative_activities')
            ->where('disable',null)
            ->get();
        $technology_books = Book::where('subject','technology')
            ->where('disable',null)
            ->get();
        $health_physical_books = Book::where('subject','health_physical')
            ->where('disable',null)
            ->get();

        //有無已經儲存過教科書版本了
        $books = C81Table::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->get();
        //查出已存過的各版本
        $has_book = [];
        foreach($books as $book){
            $has_book[$book->grade]['mandarin_book'] = $book->mandarin_book;
            $has_book[$book->grade]['dialects_book'] = $book->dialects_book;
            $has_book[$book->grade]['english_book'] = $book->english_book;
            $has_book[$book->grade]['mathematics_book'] = $book->mathematics_book;
            $has_book[$book->grade]['life_curriculum_book'] = $book->life_curriculum_book;
            $has_book[$book->grade]['social_studies_book'] = $book->social_studies_book;
            $has_book[$book->grade]['science_technology_book'] = $book->science_technology_book;
            $has_book[$book->grade]['science_book'] = $book->science_book;
            $has_book[$book->grade]['arts_humanities_book'] = $book->arts_humanities_book;
            $has_book[$book->grade]['integrative_activities_book'] = $book->integrative_activities_book;
            $has_book[$book->grade]['technology_book'] = $book->technology_book;
            $has_book[$book->grade]['health_physical_book'] = $book->health_physical_book;
        }





        $data = [
            'select_year'=>$select_year,
            'course'=>$course,
            'section9'=>$section9,
            'section12'=>$section12,
            'total_area12'=>$total_area12,
            'year'=>$year,
            'year9'=>$year9,
            'year12'=>$year12,
            'sections'=>$sections,
            'has_section'=>$has_section,
            'books'=>$books,
            'has_book'=>$has_book,
            'mandarin_books'=>$mandarin_books,
            'dialects_books'=>$dialects_books,
            'english_books'=>$english_books,
            'mathematics_books'=>$mathematics_books,
            'life_curriculum_books'=>$life_curriculum_books,
            'social_studies_books'=>$social_studies_books,
            'science_technology_books'=>$science_technology_books,
            'science_books'=>$science_books,
            'arts_humanities_books'=>$arts_humanities_books,
            'integrative_activities_books'=>$integrative_activities_books,
            'technology_books'=>$technology_books,
            'health_physical_books'=>$health_physical_books,
        ];
        return view('schools.edit',$data);
    }

    public function special_edit($select_year)
    {
        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();
        $year = Year::where('year',$select_year)->first();
        $data = [
            'course'=>$course,
            'year'=>$year,
            'select_year'=>$select_year,
        ];
        return view('schools.special_edit',$data);
    }

    public function normal_upload($select_year,$order)
    {
        $data = [
            'select_year'=>$select_year,
            'order'=>$order,
        ];
        return view('schools.normal_upload',$data);
    }

    //上傳課程計畫
    public function upload(UploadRequest $request)
    {
        $year = $request->input('year');
        $order = $request->input('order');
        //處理檔案上傳
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach($files as $file){
                $info = [
                    //'mime-type' => $file->getMimeType(),
                    'original_filename' => $file->getClientOriginalName(),
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => $file->getClientSize(),
                ];

                $file->storeAs('public/upload/'.$year.'/'.auth()->user()->code,$order.".pdf");

                $att[$order] = 1;
                $course = Course::where('year',$year)
                    ->where('school_code',auth()->user()->code)
                    ->first();

                $course->update($att);
            }
        }

        if(substr($order,0,3) == "c10"){
            $order = str_replace('c10','c9',$order);
        }

        if(substr($order,0,3) == "c11"){
            $order = str_replace('c11','c10',$order);
        }

        if(substr($order,0,3) == "c12"){
            $order = str_replace('c12','c11',$order);
        }

        if(substr($order,0,3) == "c13"){
            $order = str_replace('c13','c12',$order);
        }

        write_log('上傳 '.$order.' 題',$year);

        echo "<body onload='opener.location.reload();window.close();'>";
    }

    public function c3_1_store(Request $request)
    {
        $mandarin = $request->input('mandarin');
        $dialects = $request->input('dialects');
        $english = $request->input('english');
        $mathematics = $request->input('mathematics');
        $life_curriculum = $request->input('life_curriculum');
        $social_studies = $request->input('social_studies');
        $science_technology = $request->input('science_technology');
        $science = $request->input('science');
        $arts_humanities = $request->input('arts_humanities');
        $integrative_activities = $request->input('integrative_activities');
        $technology = $request->input('technology');
        $health_physical = $request->input('health_physical');
        $alternative = $request->input('alternative');

        //國小
        if(auth()->user()->group_id ==1){
            $grade_array = ['一','二','三','四','五','六'];

            //國中
        }elseif(auth()->user()->group_id ==2){
            $grade_array = ['七','八','九'];
        }

        foreach($grade_array as $v){
            $att['year'] = $request->input('select_year');
            $att['school_code'] = auth()->user()->code;
            $att['grade'] = $v;


            $att['mandarin'] = $mandarin[$v];

            if(!isset($dialects[$v])) $dialects[$v] = null;
            $att['dialects'] = $dialects[$v];

            if(!isset($english[$v])) $english[$v] = null;
            $att['english'] = $english[$v];

            $att['mathematics'] = $mathematics[$v];

            if(!isset($life_curriculum[$v])) $life_curriculum[$v] = null;
            $att['life_curriculum'] = $life_curriculum[$v];

            if(!isset($social_studies[$v])) $social_studies[$v] = null;
            $att['social_studies'] = $social_studies[$v];

            if(!isset($science_technology[$v])) $science_technology[$v] = null;
            $att['science_technology'] = $science_technology[$v];

            if(!isset($science[$v])) $science[$v] = null;
            $att['science'] = $science[$v];

            if(!isset($arts_humanities[$v])) $arts_humanities[$v] = null;
            $att['arts_humanities'] = $arts_humanities[$v];

            if(!isset($integrative_activities[$v])) $integrative_activities[$v] = null;
            $att['integrative_activities'] = $integrative_activities[$v];

            if(!isset($technology[$v])) $technology[$v] = null;
            $att['technology'] = $technology[$v];

            $att['health_physical'] = $health_physical[$v];

            $att['alternative'] = $alternative[$v];

            C31Table::create($att);

        }
        $course = Course::where('year',$att['year'])
            ->where('school_code',auth()->user()->code)
            ->first();

        $att['c3_1'] = 1;
        $att['leading'] = ($request->input('leading'))?1:null;
        $course->update($att);

        write_log('儲存 c3_1 節數表',$course->year);

        return redirect('schools/'. $att['year'].'/edit');
    }

    public function c3_1_delete(Request $request)
    {
        C31Table::where('year',$request->input('select_year'))
            ->where('school_code',auth()->user()->code)
            ->delete();

        $course = Course::where('year',$request->input('select_year'))
            ->where('school_code',auth()->user()->code)
            ->first();

        $att['c3_1'] = null;
        $course->update($att);

        write_log('清除 c3_1 節數表',$course->year);

        return redirect('schools/'. $request->input('select_year').'/edit');
    }

    public function c3_1_print($select_year)
    {
        $year = Year::where('year',$select_year)
            ->first();
        $year9 = [];
        $year12= [];
        //九年一貫的年級有哪一些
        if(auth()->user()->group_id==1){
            if($year->e1 == '9year'){
                $year9[] = "一";
            }else{
                $year12[] = "一";
            }
            if($year->e2 == '9year'){
                $year9[] = "二";
            }else{
                $year12[] = "二";
            }
            if($year->e3 == '9year'){
                $year9[] = "三";
            }else{
                $year12[] = "三";
            }
            if($year->e4 == '9year'){
                $year9[] = "四";
            }else{
                $year12[] = "四";
            }
            if($year->e5 == '9year'){
                $year9[] = "五";
            }else{
                $year12[] = "五";
            }
            if($year->e6 == '9year'){
                $year9[] = "六";
            }else{
                $year12[] = "六";
            }

        }elseif(auth()->user()->group_id==2){
            if($year->j1 == '9year'){
                $year9[] = "一";
            }else{
                $year12[] = "一";
            }
            if($year->j2 == '9year'){
                $year9[] = "二";
            }else{
                $year12[] = "二";
            }
            if($year->j3 == '9year'){
                $year9[] = "三";
            }else{
                $year12[] = "三";
            }
        }

        $sections = C31Table::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->get();
        //查出已存過的各節數
        $has_section = [];
        foreach($sections as $section){
            $has_section[$section->grade]['mandarin'] = $section->mandarin;
            $has_section[$section->grade]['dialects'] = $section->dialects;
            $has_section[$section->grade]['english'] = $section->english;
            $has_section[$section->grade]['mathematics'] = $section->mathematics;
            $has_section[$section->grade]['life_curriculum'] = $section->life_curriculum;
            $has_section[$section->grade]['social_studies'] = $section->social_studies;
            $has_section[$section->grade]['science_technology'] = $section->science_technology;
            $has_section[$section->grade]['science'] = $section->science;
            $has_section[$section->grade]['arts_humanities'] = $section->arts_humanities;
            $has_section[$section->grade]['integrative_activities'] = $section->integrative_activities;
            $has_section[$section->grade]['technology'] = $section->technology;
            $has_section[$section->grade]['health_physical'] = $section->health_physical;
            $has_section[$section->grade]['alternative'] = $section->alternative;
        }

        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        $data = [
            'select_year'=>$select_year,
            'year9'=>$year9,
            'year12'=>$year12,
            'has_section'=>$has_section,
            'leading'=>$course->leading,
        ];
        return view('schools.c3_1_print',$data);


    }

    public function c6_upload($select_year,$order,$subject,$grade)
    {
        $data = [
            'select_year'=>$select_year,
            'order'=>$order,
            'subject'=>$subject,
            'grade'=>$grade,
        ];
        return view('schools.c6_upload',$data);
    }

    public function c6_store(UploadRequest $request)
    {
        $select_year = $request->input('select_year');
        $order = $request->input('order');
        $subject = $request->input('subject');
        $grade = $request->input('grade');
        //處理檔案上傳
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach($files as $file){
                $info = [
                    //'mime-type' => $file->getMimeType(),
                    'original_filename' => $file->getClientOriginalName(),
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => $file->getClientSize(),
                ];

                $file->storeAs('public/upload/'.$select_year.'/'.auth()->user()->code,$order."_".$grade."_".$subject.".pdf");

                write_log('上傳 c5_3 '.$grade .'年級'.' '.$subject.' 檔',$select_year);
            }
        }


        echo "<body onload='opener.location.reload();window.close();'>";

    }

    public function c7_1_upload($select_year,$order,$grade)
    {
        $data = [
            'select_year'=>$select_year,
            'order'=>$order,
            'grade'=>$grade,
        ];
        return view('schools.c7_1_upload',$data);
    }

    public function c7_1_store(UploadRequest $request)
    {
        $select_year = $request->input('select_year');
        $order = $request->input('order');
        $grade = $request->input('grade');
        //處理檔案上傳
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach($files as $file){
                $info = [
                    //'mime-type' => $file->getMimeType(),
                    'original_filename' => $file->getClientOriginalName(),
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => $file->getClientSize(),
                ];

                $file->storeAs('public/upload/'.$select_year.'/'.auth()->user()->code,$order."_".$grade.".pdf");
                write_log('上傳 c6_1 '.$grade.'年級 領域/科目課程單元/主題',$select_year);
            }
        }


        echo "<body onload='opener.location.reload();window.close();'>";

    }

    public function c7_2_store(UploadRequest $request)
    {

        $select_year = $request->input('select_year');
        $order = $request->input('order');

        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        $att['c7_2'] = $request->input('check_c7_2');
        $course->update($att);

        $s = ($request->input('check_c7_2')==1)?"有":"無";
        write_log('選定 c6_2 協同教學為 '.$s,$select_year);

        //處理檔案上傳
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach($files as $file){
                $info = [
                    //'mime-type' => $file->getMimeType(),
                    'original_filename' => $file->getClientOriginalName(),
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => $file->getClientSize(),
                ];

                $file->storeAs('public/upload/'.$select_year.'/'.auth()->user()->code,$order.".pdf");

                write_log('上傳 c6_2 協同教學檔案',$select_year);
            }
        }

        return redirect('schools/'. $request->input('select_year').'/edit');
    }

    public function c8_1_store(Request $request)
    {
        $mandarin_book = $request->input('mandarin_book');
        $dialects_book = $request->input('dialects_book');
        $english_book = $request->input('english_book');
        $mathematics_book = $request->input('mathematics_book');
        $life_curriculum_book = $request->input('life_curriculum_book');
        $social_studies_book = $request->input('social_studies_book');
        $science_technology_book = $request->input('science_technology_book');
        $science_book = $request->input('science_book');
        $arts_humanities_book = $request->input('arts_humanities_book');
        $integrative_activities_book = $request->input('integrative_activities_book');
        $technology_book = $request->input('technology_book');
        $health_physical_book = $request->input('health_physical_book');

        //國小
        if(auth()->user()->group_id ==1){
            $grade_array = ['一','二','三','四','五','六'];

            //國中
        }elseif(auth()->user()->group_id ==2){
            $grade_array = ['七','八','九'];
        }

        foreach($grade_array as $v){
            $att['year'] = $request->input('select_year');
            $att['school_code'] = auth()->user()->code;
            $att['grade'] = $v;


            $att['mandarin_book'] = $mandarin_book[$v];

            if(!isset($dialects_book[$v])) $dialects_book[$v] = null;
            $att['dialects_book'] = $dialects_book[$v];

            if(!isset($english_book[$v])) $english_book[$v] = null;
            $att['english_book'] = $english_book[$v];

            $att['mathematics_book'] = $mathematics_book[$v];

            if(!isset($life_curriculum_book[$v])) $life_curriculum_book[$v] = null;
            $att['life_curriculum_book'] = $life_curriculum_book[$v];

            if(!isset($social_studies_book[$v])) $social_studies_book[$v] = null;
            $att['social_studies_book'] = $social_studies_book[$v];

            if(!isset($science_technology_book[$v])) $science_technology_book[$v] = null;
            $att['science_technology_book'] = $science_technology_book[$v];

            if(!isset($science_book[$v])) $science_book[$v] = null;
            $att['science_book'] = $science_book[$v];

            if(!isset($arts_humanities_book[$v])) $arts_humanities_book[$v] = null;
            $att['arts_humanities_book'] = $arts_humanities_book[$v];

            if(!isset($integrative_activities_book[$v])) $integrative_activities_book[$v] = null;
            $att['integrative_activities_book'] = $integrative_activities_book[$v];

            if(!isset($technology_book[$v])) $technology_book[$v] = null;
            $att['technology_book'] = $technology_book[$v];

            $att['health_physical_book'] = $health_physical_book[$v];

            C81Table::create($att);

        }
        $course = Course::where('year',$att['year'])
            ->where('school_code',auth()->user()->code)
            ->first();

        $att['c8_1'] = 1;
        $course->update($att);

        write_log('儲存 c7_1 教科書版本',$course->year);

        return redirect('schools/'. $request->input('select_year').'/edit');
    }

    public function c8_1_delete(Request $request)
    {
        C81Table::where('year',$request->input('select_year'))
            ->where('school_code',auth()->user()->code)
            ->delete();

        $course = Course::where('year',$request->input('select_year'))
            ->where('school_code',auth()->user()->code)
            ->first();

        $att['c8_1'] = null;
        $course->update($att);

        write_log('清除重設 c7_1 教科書版本',$course->year);

        return redirect('schools/'. $request->input('select_year').'/edit');
    }

    public function c8_2_store(UploadRequest $request)
    {

        $select_year = $request->input('select_year');
        $order = $request->input('order');

        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        $att['c8_2'] = $request->input('check_c8_2');
        $course->update($att);

        $s = ($request->input('check_c8_2')==1)?"有":"無";
        write_log('選定 c7_2 協同教學為 '.$s,$select_year);

        //處理檔案上傳
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach($files as $file){
                $info = [
                    //'mime-type' => $file->getMimeType(),
                    'original_filename' => $file->getClientOriginalName(),
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => $file->getClientSize(),
                ];

                $file->storeAs('public/upload/'.$select_year.'/'.auth()->user()->code,$order.".pdf");

                write_log('上傳 c7_2 自編教材審查記錄',$select_year);
            }
        }

        return redirect('schools/'. $request->input('select_year').'/edit');
    }

    public function c9_upload($select_year,$order,$grade)
    {
        $data = [
            'select_year'=>$select_year,
            'order'=>$order,
            'grade'=>$grade,
        ];
        return view('schools.c9_upload',$data);
    }

    public function c9_store(UploadRequest $request)
    {
        $select_year = $request->input('select_year');
        $order = $request->input('order');
        $grade = $request->input('grade');
        //處理檔案上傳
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach($files as $file){
                $info = [
                    //'mime-type' => $file->getMimeType(),
                    'original_filename' => $file->getClientOriginalName(),
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => $file->getClientSize(),
                ];

                $file->storeAs('public/upload/'.$select_year.'/'.auth()->user()->code.'/'.$order.'_'.$grade,$info['original_filename']);

                write_log('上傳 c8 '.$grade.'年級檔案 '.$info['original_filename'],$select_year);
            }
        }

        echo "<body onload='opener.location.reload();window.close();'>";

    }

    public function c10_2_date_store(Request $request)
    {
        $select_year = $request->input('select_year');
        $att['c10_2_date'] = $request->input('c10_2_date');
        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        $course->update($att);

        write_log('儲存 c9_2 課程計畫通過日期',$select_year);

        return back();

    }

    public function c10_2_date_delete($select_year)
    {
        $att['c10_2_date'] = null;
        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        $course->update($att);

        return back();

    }

    public function c14_upload($select_year)
    {
        $data = [
            'select_year'=>$select_year,
        ];
        return view('schools.c14_upload',$data);
    }

    public function c14_store(UploadRequest $request)
    {
        $select_year = $request->input('select_year');
        $order = $request->input('order');
        //處理檔案上傳
        if ($request->hasFile('files')) {
            $files = $request->file('files');

            foreach($files as $file){
                $info = [
                    //'mime-type' => $file->getMimeType(),
                    'original_filename' => $file->getClientOriginalName(),
                    'extension' => $file->getClientOriginalExtension(),
                    'size' => $file->getClientSize(),
                ];

                $file->storeAs('public/upload/'.$select_year.'/'.auth()->user()->code.'/'.$order,$info['original_filename']);

                write_log('上傳 c13 檔案 '.$info['original_filename'],$select_year);
            }
        }

        echo "<body onload='opener.location.reload();window.close();'>";

    }

    public function submit(Request $request)
    {
        $course = Course::where('year',$request->input('select_year'))
            ->where('school_code',auth()->user()->code)
            ->first();
        if($course->first_result1==null){
            $att['first_result1'] = 'submit';
        }

        if($course->first_result1=="back" and $course->first_result2==null){
            $att['first_result2'] = 'submit';
        }

        if($course->first_result2=="back" and $course->first_result3==null){
            $att['first_result3'] = 'submit';
        }
        $course->update($att);

        return redirect()->route('schools.index');
    }

    public function give_up_first_suggest1($select_year)
    {
        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();
        if($course->first_result1=="submit"){
            $att['first_result1'] = null;
            $course->update($att);
        }

        return redirect()->route('schools.index');
    }

    public function give_up_first_suggest2($select_year)
    {
        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();
        if($course->first_result2=="submit"){
            $att['first_result2'] = null;
            $course->update($att);
        }

        return redirect()->route('schools.index');
    }

    public function show_first_suggest($select_year)
    {
        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        $data = [
            'course'=>$course,
            'select_year'=>$select_year,
            'school_name'=>auth()->user()->school,
            'school_code'=>auth()->user()->code,
            'school_group'=>auth()->user()->group_id,
        ];

        return view('schools.first_suggest',$data);
    }

    public function show_second_suggest($select_year)
    {
        $course = Course::where('year',$select_year)
            ->where('school_code',auth()->user()->code)
            ->first();

        $data = [
            'course'=>$course,
            'select_year'=>$select_year,
            'school_name'=>auth()->user()->school,
            'school_code'=>auth()->user()->code,
            'school_group'=>auth()->user()->group_id,
        ];

        return view('schools.second_suggest',$data);
    }

    public function show_log($year)
    {
        $logs = Log::where('year',$year)
            ->where('school_code',auth()->user()->code)
            ->get();
        $data = [
            'logs'=>$logs,
        ];
        return view('schools.log',$data);
    }



    //國小九年一貫節數規定
    protected $section_e9 = [
        '一'=>[
            'mandarin'=>['3'=>'3','4'=>'4','5'=>'5'],
            'dialects'=>['1'=>'1'],
            'mathematics'=>['2'=>'2','3'=>'3'],
            'life_curriculum'=>['6'=>'6','7'=>'7','8'=>'8','9'=>'9'],
            'integrative_activities'=>['2'=>'2','3'=>'3'],
            'health_physical'=>['2'=>'2','3'=>'3','4'=>'4'],
            'alternative'=>['2'=>'2','3'=>'3','4'=>'4'],
        ],
        '二'=>[
            'mandarin'=>['3'=>'3','4'=>'4','5'=>'5'],
            'dialects'=>['1'=>'1'],
            'mathematics'=>['2'=>'2','3'=>'3'],
            'life_curriculum'=>['6'=>'6','7'=>'7','8'=>'8','9'=>'9'],
            'integrative_activities'=>['2'=>'2','3'=>'3'],
            'health_physical'=>['2'=>'2','3'=>'3','4'=>'4'],
            'alternative'=>['2'=>'2','3'=>'3','4'=>'4'],
        ],
        '三'=>[
            'mandarin'=>['4'=>'4','5'=>'5'],
            'dialects'=>['1'=>'1'],
            'english'=>['1'=>'1','2'=>'2'],
            'mathematics'=>['3'=>'3','4'=>'4'],
            'social_studies'=>['3'=>'3','4'=>'4'],
            'science_technology'=>['3'=>'3','4'=>'4'],
            'arts_humanities'=>['3'=>'3','4'=>'4'],
            'integrative_activities'=>['3'=>'3','4'=>'4'],
            'health_physical'=>['3'=>'3','4'=>'4'],
            'alternative'=>['3'=>'3','4'=>'4','5'=>'5','6'=>'6'],
        ],
        '四'=>[
            'mandarin'=>['4'=>'4','5'=>'5'],
            'dialects'=>['1'=>'1'],
            'english'=>['1'=>'1','2'=>'2'],
            'mathematics'=>['3'=>'3','4'=>'4'],
            'social_studies'=>['3'=>'3','4'=>'4'],
            'science_technology'=>['3'=>'3','4'=>'4'],
            'arts_humanities'=>['3'=>'3','4'=>'4'],
            'integrative_activities'=>['3'=>'3','4'=>'4'],
            'health_physical'=>['3'=>'3','4'=>'4'],
            'alternative'=>['3'=>'3','4'=>'4','5'=>'5','6'=>'6'],
        ],
        '五'=>[
            'mandarin'=>['4'=>'4','5'=>'5','6'=>'6'],
            'dialects'=>['1'=>'1'],
            'english'=>['1'=>'1','2'=>'2'],
            'mathematics'=>['3'=>'3','4'=>'4'],
            'social_studies'=>['3'=>'3','4'=>'4'],
            'science_technology'=>['3'=>'3','4'=>'4'],
            'arts_humanities'=>['3'=>'3','4'=>'4'],
            'integrative_activities'=>['3'=>'3','4'=>'4'],
            'health_physical'=>['3'=>'3','4'=>'4'],
            'alternative'=>['3'=>'3','4'=>'4','5'=>'5','6'=>'6'],
        ],
        '六'=>[
            'mandarin'=>['4'=>'4','5'=>'5','6'=>'6'],
            'dialects'=>['1'=>'1'],
            'english'=>['1'=>'1','2'=>'2'],
            'mathematics'=>['3'=>'3','4'=>'4'],
            'social_studies'=>['3'=>'3','4'=>'4'],
            'science_technology'=>['3'=>'3','4'=>'4'],
            'arts_humanities'=>['3'=>'3','4'=>'4'],
            'integrative_activities'=>['3'=>'3','4'=>'4'],
            'health_physical'=>['3'=>'3','4'=>'4'],
            'alternative'=>['3'=>'3','4'=>'4','5'=>'5','6'=>'6'],
        ],
    ];

    //國小十二年國教節數規定
    protected $section_e12 = [
        '一'=>[
            'mandarin'=>6,
            'dialects'=>1,
            'mathematics'=>4,
            'life_curriculum'=>6,
            'health_physical'=>3,
            'alternative'=>['2' => '2', '3' => '3', '4' => '4'],
        ],
        '二'=>[
            'mandarin'=>6,
            'dialects'=>1,
            'mathematics'=>4,
            'life_curriculum'=>6,
            'health_physical'=>3,
            'alternative'=>['2' => '2', '3' => '3', '4' => '4'],
        ],
        '三'=>[
            'mandarin'=>5,
            'dialects'=>1,
            'english'=>1,
            'mathematics'=>4,
            'social_studies'=>3,
            'science'=>3,
            'arts_humanities'=>3,
            'integrative_activities'=>2,
            'health_physical'=>3,
            'alternative'=>['3' => '3', '4' => '4', '5' => '5', '6' => '6'],
        ],
        '四'=>[
            'mandarin'=>5,
            'dialects'=>1,
            'english'=>1,
            'mathematics'=>4,
            'social_studies'=>3,
            'science'=>3,
            'arts_humanities'=>3,
            'integrative_activities'=>2,
            'health_physical'=>3,
            'alternative'=>['3' => '3', '4' => '4', '5' => '5', '6' => '6'],
        ],
        '五'=>[
            'mandarin'=>5,
            'dialects'=>1,
            'english'=>2,
            'mathematics'=>4,
            'social_studies'=>3,
            'science'=>3,
            'arts_humanities'=>3,
            'integrative_activities'=>2,
            'health_physical'=>3,
            'alternative'=>['4' => '4', '5' => '5', '6' => '6', '7' => '7'],
        ],
        '六'=>[
            'mandarin'=>5,
            'dialects'=>1,
            'english'=>2,
            'mathematics'=>4,
            'social_studies'=>3,
            'science'=>3,
            'arts_humanities'=>3,
            'integrative_activities'=>2,
            'health_physical'=>3,
            'alternative'=>['4' => '4', '5' => '5', '6' => '6', '7' => '7'],
        ],
    ];

    //國小領域總節數
    protected $total_area_e12 = [
        '一'=>20,
        '二'=>20,
        '三'=>25,
        '四'=>25,
        '五'=>26,
        '六'=>26,
    ];

    //國中九年一貫節數規定
    protected $section_j9 = [
        '七'=>[
            'mandarin'=>['4'=>'4','5'=>'5','6'=>'6'],
            'english'=>['2'=>'2','3'=>'3','4'=>'4'],
            'mathematics'=>['3'=>'3','4'=>'4'],
            'social_studies'=>['3'=>'3','4'=>'4'],
            'science_technology'=>['3'=>'3','4'=>'4'],
            'arts_humanities'=>['3'=>'3','4'=>'4'],
            'integrative_activities'=>['3'=>'3','4'=>'4'],
            'health_physical'=>['3'=>'3','4'=>'4'],
            'alternative'=>['4'=>'4','5'=>'5','6'=>'6'],
        ],
        '八'=>[
            'mandarin'=>['4'=>'4','5'=>'5','6'=>'6'],
            'english'=>['2'=>'2','3'=>'3','4'=>'4'],
            'mathematics'=>['3'=>'3','4'=>'4'],
            'social_studies'=>['3'=>'3','4'=>'4'],
            'science_technology'=>['3'=>'3','4'=>'4'],
            'arts_humanities'=>['3'=>'3','4'=>'4'],
            'integrative_activities'=>['3'=>'3','4'=>'4'],
            'health_physical'=>['3'=>'3','4'=>'4'],
            'alternative'=>['4'=>'4','5'=>'5','6'=>'6'],
        ],
        '九'=>[
            'mandarin'=>['4'=>'4','5'=>'5','6'=>'6'],
            'english'=>['3'=>'3','4'=>'4'],
            'mathematics'=>['3'=>'3','4'=>'4'],
            'social_studies'=>['3'=>'3','4'=>'4'],
            'science_technology'=>['3'=>'3','4'=>'4'],
            'arts_humanities'=>['3'=>'3','4'=>'4'],
            'integrative_activities'=>['3'=>'3','4'=>'4'],
            'health_physical'=>['3'=>'3','4'=>'4'],
            'alternative'=>['3'=>'3','4'=>'4','5'=>'5'],
        ],
    ];

    //國中十二年國教節數規定
    protected $section_j12 = [
        '七'=>[
            'mandarin'=>5,
            'english'=>3,
            'mathematics'=>4,
            'social_studies'=>3,
            'science'=>3,
            'arts_humanities'=>3,
            'integrative_activities'=>3,
            'technology'=>2,
            'health_physical'=>3,
            'alternative'=>['3' => '3', '4' => '4', '5' => '5', '6' => '6'],
        ],
        '八'=>[
            'mandarin'=>5,
            'english'=>3,
            'mathematics'=>4,
            'social_studies'=>3,
            'science'=>3,
            'arts_humanities'=>3,
            'integrative_activities'=>3,
            'technology'=>2,
            'health_physical'=>3,
            'alternative'=>['3' => '3', '4' => '4', '5' => '5', '6' => '6'],
        ],
        '九'=>[
            'mandarin'=>5,
            'english'=>3,
            'mathematics'=>4,
            'social_studies'=>3,
            'science'=>3,
            'arts_humanities'=>3,
            'integrative_activities'=>3,
            'technology'=>2,
            'health_physical'=>3,
            'alternative'=>['3' => '3', '4' => '4', '5' => '5', '6' => '6'],
        ],
    ];

    //國中領域總節數
    protected $total_area_j12 = [
        '七'=>29,
        '八'=>29,
        '九'=>29,
    ];


}
