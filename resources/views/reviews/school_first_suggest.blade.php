@extends('layouts.master_clean',['bg'=>'bg-dark'])

@section('title','課程計畫初審結果')

@include('layouts.form_show')

@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts.school_course')
            </div>
        </div>
    </div>
@endsection
