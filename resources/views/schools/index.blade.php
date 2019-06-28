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
                    @if(auth()->user()->group_id ==1 or auth()->user()->group_id ==2)
                        <form method="post" action="{{ route('email') }}">
                            @csrf
                            登錄email取得審查結果通知：<input type="email" name="email" value="{{ auth()->user()->email }}" required><input type="submit" value="儲存" onclick="return confirm('確定嗎？')">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        </form>
                        @if(auth()->user()->access_token)
                            已訂閱 <i class="fab fa-line text-success"></i> LINE 通知 <a href="{{ route('cancel') }}" onclick="return confirm('確定取消訂閱？')"><i class="fas fa-times-circle text-danger"></i></a>
                        @else
                            <button type="button" onclick="open_line()"><i class="fab fa-line text-success"></i> 訂閱LINE通知</button>
                        @endif
                        <hr>
                    @endif

                    @if($select_year)
                        @if($course->first_result1 == null or $course->first_result1 == "back")
                            @if($course->first_result2 == null or $course->first_result2 == "back")
                                @if($course->first_result3 == null or $course->first_result3 == "back")
                                <a href="{{ route('schools.edit',$select_year) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> 編輯本年度課程計畫</a>
                                <hr>
                                @endif
                            @endif
                        @endif
                        <h4>上傳檢核 <a href="{{ route('schools.show_log',$select_year) }}" class="btn btn-secondary btn-sm" target="_blank">檢視上傳歷程</a></h4>
                        <table border="1" cellpadding="5">
                            <tr>
                                <th colspan="3">
                                    普教初審
                                </th>
                                <th>
                                    特教審查
                                </th>
                                <th rowspan="2">
                                    普教複審
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
                                    <?php $i=null; ?>
                                    會議紀錄：
                                    @if($course->special_suggest13)
                                        @if($course->special_suggest13->c13_pass)
                                            符合
                                        @else
                                            <span class="text-danger">不符合</span>
                                            <?php $i=1; ?>
                                        @endif
                                    @else
                                        @if($course->c13=="1" and $course->first_result1 != null)
                                            <span class="text-primary">送審中</span>
                                        @else
                                            <span class="text-danger">尚未送審</span>
                                        @endif
                                    @endif
                                    <br>身障類課程計畫：
                                    @if($course->special_suggest13_1)
                                        @if($course->special_suggest13_1->c13_1_pass)
                                            符合
                                        @else
                                            <span class="text-danger">不符合</span>
                                                <?php $i=1; ?>
                                        @endif
                                    @else
                                        @if($course->c13_1=="1" and $course->first_result1 != null)
                                            <span class="text-primary">送審中</span>
                                        @else
                                            <span class="text-danger">尚未送審</span>
                                        @endif
                                    @endif
                                    <br>資優類課程計畫：
                                    @if($course->special_suggest13_2)
                                        @if($course->special_suggest13_2->c13_2_pass)
                                            符合
                                        @else
                                            <span class="text-danger">不符合</span>
                                                <?php $i=1; ?>
                                        @endif
                                    @else
                                        @if($course->c13_2=="1" and $course->first_result1 != null)
                                            <span class="text-primary">送審中</span>
                                        @else
                                            <span class="text-danger">尚未送審</span>
                                        @endif
                                    @endif
                                    <br>藝才類課程計畫：
                                    @if($course->special_suggest13_3)
                                        @if($course->special_suggest13_3->c13_3_pass)
                                            符合
                                        @else
                                            <span class="text-danger">不符合</span>
                                                <?php $i=1; ?>
                                        @endif
                                    @else
                                        @if($course->c13_3=="1" and $course->first_result1 != null)
                                            <span class="text-primary">送審中</span>
                                        @else
                                            <span class="text-danger">尚未送審</span>
                                        @endif
                                    @endif

                                    @if($i)
                                        [<a href="{{ route('schools.special_edit',$select_year) }}"><i class="fas fa-edit"></i> 重送特審</a>]
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if($course->first_result1 == null)
                                        <span class="text-danger">尚未送審</span>
                                    @elseif($course->first_result1 == "submit")
                                        <span class="text-primary">送審中</span>
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
                                        <span class="text-primary">送審中</span>
                                    @elseif($course->first_result2 == "ok")
                                        <i class="fas fa-check-circle text-success"></i> <span class="text-success">通過審查</span>
                                    @elseif($course->first_result2 == "back")
                                        <i class="fas fa-times-circle text-danger"></i> 退回
                                    @elseif($course->first_result2 == "excellent")
                                        <i class="fas fa-thumbs-up text-primary"></i> <span class="text-success">優秀，進入複審</span>
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
                                            <a href="{{ route('schools.show_first_suggest',$course->year) }}" target="_blank" class="btn btn-primary btn-sm">初審各分項詳細意見</a>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <br>
                        <?php
                            $year = \App\Year::where('year',$select_year)->get();
                        ?>
                        @if($course->first_result1 == "submit")
                            @if(str_replace('-','',$year->step1_date2) > date('Ymd'))
                                <a href="{{ route('schools.give_up_first_suggest1',$select_year) }}" class="badge badge-danger" onclick="return confirm('確定嗎？')">撤回送審，再次修改</a>
                                <br>
                            @endif
                        @endif
                        @if($course->first_result2 == "submit")
                            @if(str_replace('-','',$year->step2_date2) > date('Ymd'))
                                <a href="{{ route('schools.give_up_first_suggest2',$select_year) }}" class="badge badge-danger" onclick="return confirm('確定嗎？')">撤回送審，再次修改</a>
                                <br>
                            @endif
                        @endif
                        @include('layouts.school_course')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function open_line()
    {
        var URL = 'https://notify-bot.line.me/oauth/authorize?';
        URL += 'response_type=code';
        URL += '&client_id=m5dxEjhHvMrmwmqSFXfuKY';
        URL += '&redirect_uri=https:\/\/course108.chc.edu.tw\/callback';
        URL += '&scope=notify';
        URL += '&state=NO_STATE';

        window.open(URL,name,'statusbar=no,scrollbars=yes,status=yes,resizable=yes,width=850,height=850');
    }
</script>
@endsection
