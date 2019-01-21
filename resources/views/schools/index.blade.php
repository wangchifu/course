@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','課程計畫管理')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ asset('images/check.svg') }}" height="24">
                            </td>
                            <td>
                                選擇年度：
                            </td>
                            <td>
                                {{ Form::open(['route'=>'schools.index','method'=>'post']) }}
                                {{ Form::select('year',$years,$select_year,['onchange'=>'submit()']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-body">
                    @if($select_year)
                        @if($course->first_result1 == null or $course->first_result1 == "back")
                            @if($course->first_result2 == null or $course->first_result2 == "back")
                                @if($course->first_result3 == null or $course->first_result3 == "back")
                                <a href="{{ route('schools.edit',$select_year) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> 編輯本年度課程計畫</a>
                                <hr>
                                @endif
                            @endif
                        @endif
                        <h4>上傳檢核</h4>
                        <table border="1" cellpadding="5">
                            <tr>
                                <th colspan="3">
                                    初審委員
                                </th>
                                <th>
                                    特教委員
                                </th>
                                <th rowspan="2">
                                    複審委員
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    初審
                                </th>
                                <th>
                                    初審-再傳
                                </th>
                                <th>
                                    初審-三傳
                                </th>
                                <td rowspan="2">
                                    @if($course->special_suggest)
                                        會議紀錄：
                                        @if($course->special_suggest->c13_pass)
                                            符合
                                        @else
                                            <span class="text-danger">不符合</span>
                                        @endif
                                        <br>
                                        身障類課程計畫：
                                        @if($course->special_suggest->c13_1_pass)
                                            符合
                                        @else
                                            <span class="text-danger">不符合</span>
                                        @endif
                                        <br>
                                        資優類課程計畫：
                                        @if($course->special_suggest->c13_2_pass)
                                            符合
                                        @else
                                            <span class="text-danger">不符合</span>
                                        @endif
                                        <br>
                                        藝才類課程計畫：
                                        @if($course->special_suggest->c13_3_pass)
                                            符合
                                        @else
                                            <span class="text-danger">不符合</span>
                                        @endif
                                        <br>
                                        [<a href="{{ route('schools.special_edit',$select_year) }}"><i class="fas fa-edit"></i> 重送特審</a>]
                                    @else
                                        @if($course->first_result1)
                                            會議紀錄：
                                            @if($course->c13)
                                                <span class="text-primary">已送審中</span>
                                            @else
                                                未送審
                                            @endif
                                            <br>
                                            身障類課程計畫：
                                            @if($course->c13_1)
                                                <span class="text-primary">已送審中</span>
                                            @else
                                                未送審
                                            @endif
                                            <br>
                                            資優類課程計畫：
                                            @if($course->c13_2)
                                                <span class="text-primary">已送審中</span>
                                            @else
                                                未送審
                                            @endif
                                            <br>
                                            藝才類課程計畫：
                                            @if($course->c13_3)
                                                <span class="text-primary">已送審中</span>
                                            @else
                                                未送審
                                            @endif
                                        @endif
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if($course->first_result1 == null)
                                        <span class="text-danger">尚未送審</span>
                                    @elseif($course->first_result1 == "submit")
                                        <span class="text-primary">已送審中</span>
                                    @elseif($course->first_result1 == "ok")
                                        <i class="fas fa-check-circle text-success"></i> <span class="text-success">通過審查</span>
                                    @elseif($course->first_result1 == "back")
                                        <i class="fas fa-times-circle text-danger"></i> 退回
                                    @elseif($course->first_result1 == "excellent")
                                        <i class="fas fa-thumbs-up text-primary"></i> <span class="text-success">優秀，進入複審</span>
                                    @endif
                                </td>
                                <td>
                                    @if($course->first_result1=="back" and $course->first_result2 == null)
                                        <span class="text-danger">尚未送審</span>
                                    @elseif($course->first_result2 == "submit")
                                        <span class="text-primary">已送審中</span>
                                    @elseif($course->first_result2 == "ok")
                                        <i class="fas fa-check-circle text-success"></i> <span class="text-success">通過審查</span>
                                    @elseif($course->first_result2 == "back")
                                        <i class="fas fa-times-circle text-danger"></i> 退回
                                    @endif
                                </td>
                                <td>
                                    @if($course->first_result2=="back" and $course->first_result3 == null)
                                        <span class="text-danger">尚未送審</span>
                                    @elseif($course->first_result3 == "submit")
                                        <span class="text-primary">已修正</span>
                                    @endif
                                </td>
                                <td rowspan="2">
                                    @if($course->second_result=="ok")
                                        不列入
                                    @elseif($course->second_result=="excellent")
                                        <i class="fas fa-thumbs-up text-primary"></i> <span class="text-success">優良學校課程計畫！</span>
                                    @endif
                                    <br>
                                    @if($course->second_result)
                                    <small>
                                        {{ $course->second_suggest->reason }}
                                    </small>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    @if($course->first_result1 != null)
                                        @if($course->first_result1 != "submit")
                                            <a href="{{ route('schools.show_first_suggest',$course->year) }}" target="_blank" class="btn btn-primary btn-sm">初審特審詳細意見</a>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <br>
                        @include('layouts.school_course')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
