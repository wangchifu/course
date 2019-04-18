@extends('layouts.master_clean')
@section('title','上傳檔案')
@section('content')
@include('layouts.form_error')
{{ Form::open(['route'=>'schools.upload','method'=>'post','files'=>true]) }}
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
        <?php
        $s = $order;
        if(substr($order,0,3) == "c10"){
            $s = str_replace('c10','c9',$order);
        }
        if(substr($order,0,3) == "c11"){
            $s = str_replace('c11','c10',$order);
        }
        if(substr($order,0,3) == "c12"){
            $s = str_replace('c12','c11',$order);
        }
        if(substr($order,0,3) == "c13"){
            $s = str_replace('c13','c12',$order);
        }
        ?>
        <td>
            {{ $s }}
        </td>
        <td>
            <input type="file" name="files[]" required>
        </td>
        <td>
            <button type="submit" onclick="return confirm('確定？')">上傳</button>
            <small class="text-secondary">(限PDF檔)</small>
        </td>
    </tr>
    </tbody>
</table>
<input type="hidden" name="year" value="{{ $select_year }}">
<input type="hidden" name="order" value="{{ $order }}">
{{ Form::close() }}
@endsection
