@extends('layouts.master_clean')
@section('title','彈性學習課程')
@section('content')
@include('layouts.form_error')
<?php $grades = config('course.grades'); ?>
{{ Form::open(['route'=>'schools.c9_store','method'=>'post','files'=>true]) }}
<table class="table table-striped">
    <tr>
        <td>
            學年度
        </td>
        <td>
            學校
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
            {{ $grades[$grade] }}
        </td>
        <td>
            <input type="file" name="files[]" required multiple>
        </td>
        <td>
            <button type="submit" onclick="return confirm('確定？')">上傳</button>
            <br><small class="text-danger">(多選，限PDF檔)</small>
        </td>
    </tr>
</table>
<input type="hidden" name="select_year" value="{{ $select_year }}">
<input type="hidden" name="order" value="{{ $order }}">
<input type="hidden" name="grade" value="{{ $grade }}">
{{ Form::close() }}
@endsection
