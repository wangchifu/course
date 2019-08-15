@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','課程計畫分享')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>

                        </h5>
                    </div>
                    <div class="card-body">
                        @if($course->second_result=="excellent")
                            <h3>
                                <img src="{{ asset('images/crown.svg') }}" width="50"><span class="text-danger">優秀課程計畫得獎學校！(特優)</span><br>
                            </h3>
                        @endif
                        @if($course->second_result=="good")
                            <h3>
                                <img src="{{ asset('images/medal.svg') }}" width="50"><span class="text-danger">優秀課程計畫得獎學校！(優等)</span><br>
                            </h3>
                        @endif
                        @if($course->second_result=="a")
                            <h3>
                                <img src="{{ asset('images/bronze-medal.svg') }}" width="50"><span class="text-danger">優秀課程計畫得獎學校！(甲等)</span><br>
                            </h3>
                        @endif
                        @include('layouts.school_course')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
