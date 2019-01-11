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
                        @include('layouts.school_course')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
