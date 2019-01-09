<?php
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
@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','初審作業')
@include('firsts.form1')
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
            {{ Form::open(['route'=>'firsts.store','method'=>'post']) }}
            @include('layouts.school_course')
            <table class="table">
                <tr bgcolor="#cccccc">
                    <th colspan="2">
                        初審結果
                    </th>
                    <th colspan="3">
                        審查意見
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <select name="first_result1" class="form-control" required>
                            <option value="" disabled selected>
                                -----請選擇初審結果-----
                            </option>
                            <option value="ok">
                                符合！無需修改！
                            </option>
                            <option value="back">
                                退回！修改後再審！
                            </option>
                            <option value="excellent">
                                優秀！進入複審！
                            </option>
                        </select>
                    </td>
                    <td colspan="3">
                        <textarea name="reason" class="form-control"></textarea>
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
