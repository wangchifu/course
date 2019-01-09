@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','初審作業')

@include('firsts.form_show')

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
                    <li class="breadcrumb-item active" aria-current="page">審查 {{ $schools[$course->school_code] }} 結果</li>
                </ol>
            </nav>
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
                <tr bgcolor="#FFEE99">
                    <td colspan="2">
                        @if($course->first_result1 == "ok")
                            <span class="text-success">符合！無需修改！</span>
                        @elseif($course->first_result1 == "excellent")
                            <span class="text-success">優秀！進入複審！</span>
                        @elseif($course->first_result1 == "back")
                            <span class="text-danger">退回！修改後再審！</span>
                        @endif
                    </td>
                    <td colspan="3">
                        {{ $course->first_suggest1->reason }}
                    </td>
                </tr>
            </table>
            <br>
            <a href="#" class="btn btn-secondary btn-sm" onclick="history.back();"><i class="fas fa-backward"></i> 返回</a>
        </div>
    </div>
</div>
@endsection
