@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','初審作業')

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
                                {{ Form::open(['route'=>'firsts.index','method'=>'post']) }}
                                {{ Form::select('year',$years,$select_year,['onchange'=>'submit()']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th nowrap>
                                代碼
                            </th>
                            <th nowrap>
                                校名
                            </th>
                            <th nowrap>
                                初審
                            </th>
                            <th>
                                初審-再傳
                            </th>
                            <th>
                                初審-三傳
                            </th>
                            <th>
                                詳細結果
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>
                                    {{ $course->school_code }}
                                </td>
                                <td>
                                    {{ $schools[$course->school_code] }}
                                </td>
                                <td>
                                    @if($course->first_result1==null)
                                        <span class="text-danger">未送審</span>
                                    @elseif($course->first_result1=="submit")
                                        <span class="text-primary">已送審</span>
                                        [<a href="{{ route('firsts.create1',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i>審核</a>]
                                    @elseif($course->first_result1=="late")
                                        <span class="text-danger">逾期未交</span>
                                    @else
                                        @if($course->first_result1=="ok")
                                        <span class="text-success">通過</span>
                                        @elseif($course->first_result1=="back")
                                        <span class="text-warning">退回</span>
                                        @elseif($course->first_result1=="excellent")
                                        <i class="fas fa-thumbs-up text-primary"></i> <span class="text-success">優良</span>
                                        @endif
                                        @if($course->first_result2 == null)
                                            [<a href="{{ route('firsts.edit1',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 修改</a>]
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if($course->first_result2==null)
                                        @if($course->first_result1=="back" or $course->first_result1=="late")
                                            <span class="text-danger">未送審</span>
                                        @endif
                                    @elseif($course->first_result2=="submit")
                                        <span class="text-primary">已送審</span>
                                        [<a href="{{ route('firsts.create2',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i>審核</a>]
                                    @else
                                        @if($course->first_result2=="ok")
                                            <span class="text-success">通過</span>
                                        @elseif($course->first_result2=="back")
                                            <span class="text-warning">退回</span>
                                        @elseif($course->first_result2=="excellent")
                                            <i class="fas fa-thumbs-up text-primary"></i> <span class="text-success">優良</span>
                                        @endif
                                        @if($course->first_result3 == null)
                                            [<a href="{{ route('firsts.edit2',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 修改</a>]
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if($course->first_result3==null)
                                        @if($course->first_result2=="back" or $course->first_result1=="late")
                                            <span class="text-danger">未送審</span>
                                        @endif
                                    @elseif($course->first_result3=="submit")
                                        @if($course->first_suggest3)
                                            <span class="text-primary">再次送審</span>
                                            [<a href="{{ route('firsts.edit3',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 修改</a>]
                                        @else
                                            <span class="text-primary">已送審</span>
                                            [<a href="{{ route('firsts.create3',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i>審核</a>]
                                        @endif
                                    @elseif($course->first_result3=="ok")
                                        <span class="text-success">通過</span>
                                        [<a href="{{ route('firsts.edit3',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 修改</a>]
                                    @elseif($course->first_result3=="back")
                                        <span class="text-warning">退回</span>
                                        [<a href="{{ route('firsts.edit3',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 修改</a>]
                                    @elseif($course->first_result3=="excellent")
                                        <i class="fas fa-thumbs-up text-primary"></i> <span class="text-success">優良</span>
                                        [<a href="{{ route('firsts.edit3',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 修改</a>]
                                    @endif
                                </td>
                                <td>
                                    @if($course->first_result1 != null and $course->first_result1 != "submit")
                                    <a href="{{ route('firsts.show',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-eye"></i>檢視</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
