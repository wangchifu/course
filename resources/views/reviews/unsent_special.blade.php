@extends('layouts.master_clean',['bg'=>'bg-secondary'])

@section('title','特教課程未送學校列表')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        {{ $select_year }}學年 特教課程傳送狀況
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    序號
                                </th>
                                <th>
                                    代碼
                                </th>
                                <th>
                                    學校
                                </th>
                                <th>
                                    繳交情況
                                </th>
                                <th>
                                    審查
                                </th>
                            </tr>
                            <?php $i=1; ?>
                            @foreach($courses as $course)
                            <tr>
                                <td>
                                    {{ $i }}
                                </td>
                                <td>
                                    {{ $course->school_code }}
                                </td>
                                <td>
                                    {{ $schools[$course->school_code] }}
                                </td>
                                <td>
                                    會議紀錄：
                                    @if($course->c13)
                                        <span class="text-success">已傳-></span>
                                        @if($course->special_suggest)
                                            @if($course->special_suggest->c13_pass)
                                                <span>符合</span>
                                            @else
                                                <span class="text-danger">不符合</span>
                                            @endif
                                        @endif
                                    @else
                                        <span class="text-danger">未傳</span>
                                    @endif
                                    <br>
                                    身障類課程計畫：
                                    @if($course->c13_1)
                                        <span class="text-success">已傳-></span>
                                        @if($course->special_suggest)
                                            @if($course->special_suggest->c13_1_pass)
                                                <span>符合</span>
                                            @else
                                                <span class="text-danger">不符合</span>
                                            @endif
                                        @endif
                                    @else
                                        <span class="text-danger">未傳</span>
                                    @endif
                                    <br>
                                    資優類課程計畫：
                                    @if($course->c13_2)
                                        <span class="text-success">已傳-></span>
                                        @if($course->special_suggest)
                                            @if($course->special_suggest->c13_2_pass)
                                                <span>符合</span>
                                            @else
                                                <span class="text-danger">不符合</span>
                                            @endif
                                        @endif
                                    @else
                                        <span class="text-danger">未傳</span>
                                    @endif
                                    <br>
                                    藝才類課程計畫：
                                    @if($course->c13_3)
                                        <span class="text-success">已傳-></span>
                                        @if($course->special_suggest)
                                            @if($course->special_suggest->c13_3_pass)
                                                <span>符合</span>
                                            @else
                                                <span class="text-danger">不符合</span>
                                            @endif
                                        @endif
                                    @else
                                        <span class="text-danger">未傳</span>
                                    @endif
                                </td>
                                <td>
                                    @if($course->special_suggest)
                                        <span class="text-success">已審</span>
                                    @else
                                        未審
                                    @endif
                                </td>
                            </tr>
                                <?php $i++; ?>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
