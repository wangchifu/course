@extends('layouts.master_clean',['bg'=>'bg-dark'])

@section('title','課程計畫初審結果')

@include('layouts.form_show')

@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                    <tr>
                        <td nowrap>
                            初審-三傳
                        </td>
                        <td nowrap>
                            @if($course->first_result3 == "ok")
                                <span class="text-success">符合！無需修改！</span>
                            @elseif($course->first_result3 == "back")
                                <span class="text-danger">退回！修改後再審！</span>
                            @else
                                -
                            @endif
                        </td>
                        <td style="word-break: break-all;">
                            @if($course->first_suggest3)
                                {{ $course->first_suggest3->reason }}
                            @endif
                        </td>
                    </tr>
                </table>
                <br>
                @include('layouts.school_course')
            </div>
        </div>
    </div>
@endsection
