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
                            <p>{{ $course->school_code }}-{{ $schools[$course->school_code] }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
