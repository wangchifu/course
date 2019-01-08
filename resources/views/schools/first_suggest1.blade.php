@extends('layouts.master_clean',['bg'=>'bg-dark'])

@section('title','課程計畫初審結果')

@section('nav')
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">課程計畫分享</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">優良學校</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">關於本站</a>
    </li>
    @include('layouts.function')
@endsection

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            課程計畫初審結果：
                            @if($course->first_result1 == null)
                                <span class="text-danger">尚未送審</span>
                            @elseif($course->first_result1 == "submit")
                                <span class="text-primary">已送審中</span>
                            @elseif($course->first_result1 == "ok")
                                <span class="text-success">通過審查</span>
                            @elseif($course->first_result1 == "back")
                                <span class="text-warning">退回修改</span>
                            @elseif($course->first_result1 == "excellent")
                                <i class="fas fa-thumbs-up text-primary"></i> <span class="text-success">優良</span>
                            @endif
                        </h2>
                    </div>
                    <div class="card-body">
                        @include('schools.first_suggest1_form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
