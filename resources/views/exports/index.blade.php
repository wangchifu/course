@extends('layouts.master',['bg'=>'bg-secondary'])

@section('title','匯出報表')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('exports.side')
            </div>
            <div class="col-md-9">
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
                                    {{ Form::open(['route'=>'exports.index','method'=>'post']) }}
                                    {{ Form::select('year',$years,$select_year,['onchange'=>'submit()']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-success btn-sm">匯出各校課程學習節數</a>
                        <a href="{{ route('exports.show_date',$select_year) }}" class="btn btn-success btn-sm" target="_blank">匯出各校課程計畫通過日期</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
