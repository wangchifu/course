@extends('layouts.master_clean')
@section('title','其他資料（補充）')
@section('content')
@include('layouts.form_error')
{{ Form::open(['route'=>'schools.c14_store','method'=>'post','files'=>true]) }}
<table class="table">
    <thead>
    <tr>
        <th>
            題目序號
        </th>
        <th>
            選擇檔案
        </th>
        <th>
            動作
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            c13
        </td>
        <td>
            <input type="file" name="files[]" required multiple>
            <input type="hidden" name="select_year" value="{{ $select_year }}">
            <input type="hidden" name="order" value="c14">
        </td>
        <td>
            <button type="submit" onclick="return confirm('確定？')">上傳</button>
            <small class="text-secondary">(多選，限PDF檔)</small>
        </td>
    </tr>
    </tbody>
</table>
{{ Form::close() }}
@endsection
