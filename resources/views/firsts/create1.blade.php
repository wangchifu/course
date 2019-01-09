@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','初審作業')
@section('c1_1')
    <td>
        123
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
                    <li class="breadcrumb-item"><a href="{{ route('firsts.index') }}">初審作業</a></li>
                    <li class="breadcrumb-item active" aria-current="page">審查 {{ $schools[$course->school_code] }}</li>
                </ol>
            </nav>
            <?php
            $school_name = $schools[$course->school_code];
            $school_code = $course->school_code;
            $group_id = $school_type;
            $checked1_1_ok = "checked";
            $checked1_1_no = null;
            $checked1_2_ok = "checked";
            $checked1_2_no = null;
            $checked2_ok = "checked";
            $checked2_no = null;
            $checked3_1_ok = "checked";
            $checked3_1_no = null;
            $checked3_2_ok = "checked";
            $checked3_2_no = null;
            $checked3_3_ok = "checked";
            $checked3_3_no = null;
            $checked4_ok = "checked";
            $checked4_no = null;
            $checked6_ok = "checked";
            $checked6_no = null;
            $checked7_1_ok = "checked";
            $checked7_1_no = null;
            $checked7_2_ok = "checked";
            $checked7_2_no = null;
            $checked8_1_ok = "checked";
            $checked8_1_no = null;
            $checked8_2_ok = "checked";
            $checked8_2_no = null;
            $checked9_ok = "checked";
            $checked9_no = null;
            $checked10_1_ok = "checked";
            $checked10_1_no = null;
            $checked10_2_ok = "checked";
            $checked10_2_no = null;
            $checked11_ok = "checked";
            $checked11_no = null;
            $checked12_ok = "checked";
            $checked12_no = null;
            ?>
            {{ Form::open(['route'=>'firsts.store','method'=>'post']) }}
            @include('layouts.school_course')
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
@endsection
