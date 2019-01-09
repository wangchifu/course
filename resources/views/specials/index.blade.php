@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','特教審查')

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
                                {{ Form::open(['route'=>'specials.index','method'=>'post']) }}
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
                                狀況
                            </th>
                            <th nowrap>
                                動作
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
                                    @endif
                                    @if($course->special_result=="1")
                                        <span class="text-success">已審</span>
                                    @endif
                                </td>
                                <td>
                                    @if($course->first_result1)
                                        <a href="{{ route('specials.create',['course_id'=>$course->id,'page'=>$page]) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>進行審核</a>
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
