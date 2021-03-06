@extends('layouts.master',['bg'=>'bg-dark'])

@section('title', '新增公告')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">公告首頁</a></li>
                    <li class="breadcrumb-item active" aria-current="page">新增公告</li>
                </ol>
            </nav>
            {{ Form::open(['route' => 'posts.store', 'method' => 'POST','id'=>'setup', 'files' => true]) }}
            <div class="card my-4">
                <h5 class="card-header">新增公告</h5>
                <div class="card-body">
                    @include('posts.form')
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
