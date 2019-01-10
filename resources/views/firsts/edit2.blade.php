<?php
$checked1_1_ok = ($course->first_suggest2->c1_1_pass)?"checked":null;
$checked1_1_no = ($course->first_suggest2->c1_1_pass)?null:"checked";
$c1_1 = $course->first_suggest2->c1_1;

$checked1_2_ok = ($course->first_suggest2->c1_2_pass)?"checked":null;
$checked1_2_no = ($course->first_suggest2->c1_2_pass)?null:"checked";
$c1_2 = $course->first_suggest2->c1_2;

$checked2_ok = ($course->first_suggest2->c2_pass)?"checked":null;
$checked2_no = ($course->first_suggest2->c2_pass)?null:"checked";
$c2 = $course->first_suggest2->c2;

$checked3_1_ok = ($course->first_suggest2->c3_1_pass)?"checked":null;
$checked3_1_no = ($course->first_suggest2->c3_1_pass)?null:"checked";
$c3_1 = $course->first_suggest2->c3_1;

$checked3_2_ok = ($course->first_suggest2->c3_2_pass)?"checked":null;
$checked3_2_no = ($course->first_suggest2->c3_2_pass)?null:"checked";
$c3_2 = $course->first_suggest2->c3_2;

$checked3_3_ok = ($course->first_suggest2->c3_3_pass)?"checked":null;
$checked3_3_no = ($course->first_suggest2->c3_3_pass)?null:"checked";
$c3_3 = $course->first_suggest2->c3_3;

$checked4_ok = ($course->first_suggest2->c4_pass)?"checked":null;
$checked4_no = ($course->first_suggest2->c4_pass)?null:"checked";
$c4 = $course->first_suggest2->c4;

$checked6_ok = ($course->first_suggest2->c6_pass)?"checked":null;
$checked6_no = ($course->first_suggest2->c6_pass)?null:"checked";
$c6 = $course->first_suggest2->c6;

$checked7_1_ok = ($course->first_suggest2->c7_1_pass)?"checked":null;
$checked7_1_no = ($course->first_suggest2->c7_1_pass)?null:"checked";
$c7_1 = $course->first_suggest2->c7_1;

$checked7_2_ok = ($course->first_suggest2->c7_2_pass)?"checked":null;
$checked7_2_no = ($course->first_suggest2->c7_2_pass)?null:"checked";
$c7_2 = $course->first_suggest2->c7_2;

$checked8_1_ok = ($course->first_suggest2->c8_1_pass)?"checked":null;
$checked8_1_no = ($course->first_suggest2->c8_1_pass)?null:"checked";
$c8_1 = $course->first_suggest2->c8_1;

$checked8_2_ok = ($course->first_suggest2->c8_2_pass)?"checked":null;
$checked8_2_no = ($course->first_suggest2->c8_2_pass)?null:"checked";
$c8_2 = $course->first_suggest2->c8_2;

$checked9_ok = ($course->first_suggest2->c9_pass)?"checked":null;
$checked9_no = ($course->first_suggest2->c9_pass)?null:"checked";
$c9 = $course->first_suggest2->c9;

$checked10_1_ok = ($course->first_suggest2->c10_1_pass)?"checked":null;
$checked10_1_no = ($course->first_suggest2->c10_1_pass)?null:"checked";
$c10_1 = $course->first_suggest2->c10_1;

$checked10_2_ok = ($course->first_suggest2->c10_2_pass)?"checked":null;
$checked10_2_no = ($course->first_suggest2->c10_2_pass)?null:"checked";
$c10_2 = $course->first_suggest2->c10_2;

$checked11_ok = ($course->first_suggest2->c11_pass)?"checked":null;
$checked11_no = ($course->first_suggest2->c11_pass)?null:"checked";
$c11 = $course->first_suggest2->c11;

$checked12_ok = ($course->first_suggest2->c12_pass)?"checked":null;
$checked12_no = ($course->first_suggest2->c12_pass)?null:"checked";
$c12 = $course->first_suggest2->c12;
?>
@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','初審作業-再傳')
@include('firsts.form2')
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
                    <li class="breadcrumb-item active" aria-current="page">審查 {{ $schools[$course->school_code] }} 再傳</li>
                </ol>
            </nav>
            {{ Form::open(['route'=>'firsts.update2','method'=>'post']) }}
            @include('layouts.school_course')
            <table class="table">
                <tr bgcolor="#cccccc">
                    <th colspan="2">
                        初審-再傳結果
                    </th>
                    <th colspan="3">
                        審查意見
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            $selected['ok']=null;
                            $selected['back']=null;
                            $selected[$course->first_result2]="selected";
                        ?>
                        <select name="first_result2" class="form-control" required>
                            <option value="" disabled selected>
                                -----請選擇初審結果-----
                            </option>
                            <option value="ok" {{ $selected['ok'] }}>
                                符合！無需修改！
                            </option>
                            <option value="back" {{ $selected['back'] }}>
                                退回！修改後再審！
                            </option>
                        </select>
                    </td>
                    <td colspan="3">
                        <textarea name="reason" class="form-control">{{ $course->first_suggest2->reason }}</textarea>
                    </td>
                </tr>
            </table>
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
