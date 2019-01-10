@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','初審作業')

@include('layouts.form_show')

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
            <table cellpadding="5" border="1">
                <tr bgcolor="#cccccc">
                    <th>
                        審查
                    </th>
                    <th>
                        結果
                    </th>
                    <th>
                        意見
                    </th>
                </tr>
                <tr>
                    <td nowrap>
                        初審
                    </td>
                    <td nowrap>
                        @if($course->first_result1 == "ok")
                            <span class="text-success">符合！無需修改！</span>
                        @elseif($course->first_result1 == "excellent")
                            <span class="text-success">優秀！進入複審！</span>
                        @elseif($course->first_result1 == "back")
                            <span class="text-danger">退回！修改後再審！</span>
                        @endif
                    </td>
                    <td style="word-break: break-all;">
                        @if($course->first_suggest1)
                            {{ $course->first_suggest1->reason }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td nowrap>
                        初審-再傳
                    </td>
                    <td nowrap>
                        @if($course->first_result2 == "ok")
                            <span class="text-success">符合！無需修改！</span>
                        @elseif($course->first_result2 == "back")
                            <span class="text-danger">退回！修改後再審！</span>
                        @else
                            -
                        @endif
                    </td>
                    <td style="word-break: break-all;">
                        @if($course->first_suggest2)
                            {{ $course->first_suggest2->reason }}
                        @endif
                    </td>
                </tr>
            </table>
            <br>
            @include('layouts.school_course')
            <br>
            <a href="#" class="btn btn-secondary btn-sm" onclick="history.back();"><i class="fas fa-backward"></i> 返回</a>
        </div>
    </div>
</div>
@endsection
