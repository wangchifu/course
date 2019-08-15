@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','課程計畫分享')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>
                    <img src="{{ asset('images/thumbs-up.svg') }}" height="24">
                    優良學校
                </h2>
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
                                    {{ Form::open(['route'=>'excellent','method'=>'post']) }}
                                    {{ Form::select('year',$years,$select_year,['onchange'=>'submit()']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-body">
                        @foreach($courses as $course)
                            <a href="{{ route('share_one',['select_year'=>$select_year,'school_code'=>$course->school_code]) }}" class="btn btn-success btn-sm" target="_blank">
                                @if($course->second_result=="excellent")
                                    <i class="fas fa-crown"></i>
                                @elseif($course->second_result=="good")
                                    <i class="fas fa-thumbs-up"></i>
                                @endif
                                {{ $schools[$course->school_code] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
