@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','複審作業')

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
                                {{ Form::open(['route'=>'seconds.index','method'=>'post']) }}
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
                                複審作業
                            </th>
                            <th>
                                結果
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
                                    @if($course->first_suggest1)
                                    <a href="{{ route('seconds.create',['course_id'=>$course->id,'page'=>$page]) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>進行審核</a>
                                    @endif
                                </td>
                                <td>
                                    @if($course->second_result=="ok")
                                        <span class="text-warning">不列入優良</span>
                                    @elseif($course->second_result=="excellent")
                                        <span class="text-success">優良學校課程計畫(特優)</span>
                                    @elseif($course->second_result=="good")
                                        <span class="text-primary">優良學校課程計畫(優等)</span>
                                    @elseif($course->second_result=="a")
                                        <span class="text-info">優良學校課程計畫(甲等)</span>
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
