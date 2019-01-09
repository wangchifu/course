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
                                <a href="{{ route('schools.edit',$select_year) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> 編輯本年度課程計畫</a>
                                <hr>
                            @endif
                        @endif
                        <h4>上傳檢核</h4>
                        <table border="1" cellpadding="5">
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
                                <th>
                                    複審
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    @if($course->first_result1 == null)
                                        <span class="text-danger">尚未送審</span>
                                    @elseif($course->first_result1 == "submit")
                                        <span class="text-primary">已送審中</span>
                                    @elseif($course->first_result1 == "ok")
                                        <i class="fas fa-check-circle text-success"></i> <span class="text-success">通過審查</span>
                                        [ <a href="{{ route('schools.show_first_suggest1',$course->year) }}" target="_blank">檢視</a> ]
                                    @elseif($course->first_result1 == "back")
                                        <i class="fas fa-times-circle text-danger"></i> 退回
                                        [ <a href="{{ route('schools.show_first_suggest1',$course->year) }}" target="_blank">檢視</a> ]
                                    @elseif($course->first_result1 == "excellent")
                                        <i class="fas fa-thumbs-up text-primary"></i> <span class="text-success">優良</span>
                                        [ <a href="{{ route('schools.show_first_suggest1',$course->year) }}" target="_blank">檢視</a> ]
                                    @endif
                                </td>
                                <td>
                                    @if($course->first_result1 == "back" and $course->first_result2 ==null)
                                        <span class="text-danger">尚未送審</span>
                                    @elseif($course->first_result2 == "submit")
                                        <span class="text-primary">已送審中</span>
                                    @elseif($course->first_result2 == "ok")
                                        <i class="fas fa-check-circle text-success"></i> <span class="text-success">通過審查</span>
                                        [ <a href="{{ route('schools.show_first_suggest2',$course->year) }}" target="_blank">檢視</a> ]
                                    @endif
                                </td>
                                <td>

                                </td>
                                <td>

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
