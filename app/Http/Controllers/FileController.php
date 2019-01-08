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
}
