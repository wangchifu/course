<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //下載已上傳之檔案
    public function getFile($file)
    {
        $file = str_replace('&','/',$file);
        $file = storage_path('app/public/'.$file);
        return response()->download($file);
    }

    //不要強制下載，要線上打開
    public function open($file_path)
    {
        $file_path = str_replace('&','/',$file_path);
        $file = storage_path('app/public/upload/'.$file_path);
        $file .= ".pdf";

        return response()->file($file);
    }

    //下載指定年度學校的課程計畫
    public function download($year,$school_code,$file_name)
    {
        $course = Course::where('year',$year)
            ->where('school_code',auth()->user()->code)
            ->first();
        if($course->open == 1 or $course->school_code == auth()->user()->code){
            $file = storage_path('app/public/upload/'.$year.'/'.$school_code.'/'.$file_name.".pdf");
            return response()->download($file);
        }else{
            return back();
        }

    }

    //下載指定路徑
    public function download2($file_path)
    {
        $file_path = str_replace('&','/',$file_path);
        $file = storage_path('app/public/upload/'.$file_path);
        return response()->download($file);
    }

    //刪除課程計畫檔案
    public function delfile($year,$school_code,$file_name)
    {
        if($school_code != auth()->user()->code){
            return back()->withErrors('你想做什麼？');
        }

        $course = Course::where('year',$year)
            ->where('school_code',auth()->user()->code)
            ->first();
        if($course->school_code == auth()->user()->code){
            $file = storage_path('app/public/upload/'.$year.'/'.$school_code.'/'.$file_name.".pdf");
            unlink($file);
            $att[$file_name] = null;
            $course->update($att);
        }else{
            return back();
        }

        return redirect('schools/'. $year.'/edit');
    }

    public function delfile2($file_path)
    {
        $file_path = str_replace('&','/',$file_path);
        $file = storage_path('app/public/upload/'.$file_path);

        unlink($file);

        return back();
    }
}
