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
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th nowrap>
                                代碼
                            </th>
                            <th nowrap>
                                校名
                            </th>
                            <th nowrap>
                                會議紀錄
                            </th>
                            <th nowrap>
                                身障類課程計畫
                            </th>
                            <th nowrap>
                                資優類課程計畫
                            </th>
                            <th nowrap>
                                藝才類課程計畫
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
                                    @if($course->c13 and $course->first_result1 != null)
                                        @if($course->special_suggest13)
                                            <span class="text-success">已審查</span>
                                        @else
                                            已送審
                                        @endif
                                        @if($course->special13_user_id == auth()->user()->id)
                                            [<a href="{{ route('specials.edit13',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 編輯</a>]
                                        @endif
                                    @else
                                        未送
                                    @endif
                                </td>
                                <td>
                                    @if($course->c13_1 and $course->first_result1 != null)
                                        @if($course->special_suggest13_1)
                                            <span class="text-success">已審查</span>
                                        @else
                                            已送審
                                        @endif
                                        @if($course->special13_1_user_id == auth()->user()->id)
                                            [<a href="{{ route('specials.edit13_1',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 編輯</a>]
                                        @endif
                                    @else
                                        未送
                                    @endif
                                </td>
                                <td>
                                    @if($course->c13_2 and $course->first_result1 != null)
                                        @if($course->special_suggest13_2)
                                            <span class="text-success">已審查</span>
                                        @else
                                            已送審
                                        @endif
                                        @if($course->special13_2_user_id == auth()->user()->id)
                                            [<a href="{{ route('specials.edit13_2',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 編輯</a>]
                                        @endif
                                    @else
                                        未送
                                    @endif
                                </td>
                                <td>
                                    @if($course->c13_3 and $course->first_result1 != null)
                                        @if($course->special_suggest13_3)
                                            <span class="text-success">已審查</span>
                                        @else
                                            已送審
                                        @endif
                                        @if($course->special13_3_user_id == auth()->user()->id)
                                            [<a href="{{ route('specials.edit13_3',['course_id'=>$course->id,'page'=>$page]) }}"><i class="fas fa-edit"></i> 編輯</a>]
                                        @endif
                                    @else
                                        未送
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $courses->appends(['year' => request('year')])->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
