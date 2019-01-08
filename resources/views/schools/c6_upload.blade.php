@extends('layouts.master_clean')
@section('title','議題融入檔案上傳')
@section('content')
@include('layouts.form_error')
<?php $subjects = config('course.subjects');$grades = config('course.grades'); ?>
{{ Form::open(['route'=>'schools.c6_store','method'=>'post','files'=>true]) }}
<table class="table table-striped">
    <tr>
        <td>
            學年度
        </td>
        <td>
            學校
        </td>
        <td>
            領域
        </td>
        <td>
            年級
        </td>
        <td>
            檔案
        </td>
        <td>
            動作
        </td>
    </tr>
    <tr>
        <td>
            {{ $select_year }}學年
        </td>
        <td>
            {{ auth()->user()->school }}
        </td>
        <td>
            {{ $subjects[$subject] }}
        </td>
        <td>
            {{ $grades[$grade] }}
        </td>
        <td>
            <input type="file" name="files[]" required>
        </td>
        <td>
            <button type="submit" onclick="return confirm('確定？')">上傳</button>
            <br><small class="text-danger">(限PDF檔)</small>
        </td>
    </tr>
</table>
<input type="hidden" name="select_year" value="{{ $select_year }}">
<input type="hidden" name="order" value="{{ $order }}">
<input type="hidden" name="subject" value="{{ $subject }}">
<input type="hidden" name="grade" value="{{ $grade }}">
{{ Form::close() }}
@endsection
