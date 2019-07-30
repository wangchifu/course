@extends('layouts.master_clean',['bg'=>'bg-secondary'])

@section('title','初審-再傳未送學校列表')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        {{ $select_year }}學年 初審-再傳未送學校列表
                    </div>
                    <div class="card-body">
                        @foreach($courses as $course)
                            <p>{{ $course->school_code }}-{{ $schools[$course->school_code] }}
                                @if($course->first_result2==null)
                                    尚未送出
                                @elseif($course->first_result2=='late')
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
