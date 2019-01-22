@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','特教審查')

<?php
    $school_name = $schools[$course->school_code];
    $school_code = $course->school_code;
    $group_id = $school_type;

    if($course->special_suggest13_3){
        $checked13_3_ok = ($course->special_suggest13_3->c13_3_pass)?"checked":null;
        $checked13_3_no = ($course->special_suggest13_3->c13_3_pass)?null:"checked";
    }else{
        $checked13_3_ok = "checked";
        $checked13_3_no = null;
    }
    $c13_3 = ($course->special_suggest13_3)?$course->special_suggest13_3->c13_3:null;
?>

@section('c13')
    <td>
    </td>
    <td>
    </td>
@endsection

@section('c13_1')
    <td>
    </td>
    <td>
    </td>
@endsection

@section('c13_2')
    <td>
    </td>
    <td>
    </td>
@endsection

@section('c13_3')
    <td>
        <input type="radio" name="c13_3_pass" id="c13_3_pass1" value="1" {{ $checked13_3_ok }}> <label for="c13_3_pass1">符合</label>　
        <input type="radio" name="c13_3_pass" id="c13_3_pass2" value="0" {{ $checked13_3_no }}> <label for="c13_3_pass2">不符合</label>
    </td>
    <td>
        <textarea name="c13_3">{{ $c13_3 }}</textarea>
    </td>
@endsection

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('specials.index') }}">特教審查</a></li>
                    <li class="breadcrumb-item active" aria-current="page">審查 {{ $schools[$course->school_code] }}</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">
                    <h4>
                        {{ $course->year }} 學年 {{ $schools[$course->school_code] }} 課程計畫-特教部分
                    </h4>
                </div>
                <div class="card-body">
                    @if($course->special_suggest13_3)
                        {{ Form::open(['route'=>['specials.update13_3',$course->id],'method'=>'patch']) }}

                    @else
                        {{ Form::open(['route'=>'specials.store13_3','method'=>'post']) }}
                    @endif

                    @include('specials.special_school_course')
                    <br>
                    <a href="#" class="btn btn-secondary btn-sm" onclick="history.back();"><i class="fas fa-backward"></i> 返回</a>
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <input type="hidden" name="page" value="{{ $page }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('確定儲存？')">
                        <i class="fas fa-save"></i> 儲存設定
                    </button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
