@extends('layouts.master_clean',['bg'=>'bg-secondary'])

@section('title','初審未送學校列表')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        {{ $select_year }}學年 初審未送學校列表
                    </div>
                    <div class="card-body">
                        <?php
                        $year = \App\Year::where('year',$select_year)->first();
                        $d = str_replace('-','',$year->step1_date2);
                        ?>
                        @if(date('Ymd')>$d)
                            <a href="{{ route('reviews.set_unsent',$select_year) }}" class="btn btn-danger btn-sm" onclick="return confirm('確定？')">截止後，點此設為「缺交」，待第二次上傳時方能補交</a>
                        @endif
                        @foreach($courses as $course)
                            <p>{{ $course->school_code }}-{{ $schools[$course->school_code] }}
                                @if($course->first_result1==null)
                                    尚未送出
                                @elseif($course->first_result1=='late')
                                    <span class="text-danger">已設為缺交</span>
                                @endif
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
