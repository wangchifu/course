@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','公告系統')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5>
                        <img src="{{ asset('images/news.svg') }}" height="24">
                        最新消息
                    </h5>
                </div>
                <div class="card-body">
                    @auth
                        @if(auth()->user()->admin==1)
                            <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> 新增公告</a>
                        @endif
                    @endauth
                    <table class="POST">
                        <thead>
                        <tr>
                            <th width="100">
                                發佈日期
                            </th>
                            <th>
                                標題
                            </th>
                            <th width="100">
                                發佈單位
                            </th>
                            <th width="50">
                                瀏覽
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                                {{ substr($post->created_at,0,10) }}
                            </td>
                            <td>
                                <a href="{{ route('posts.show',$post->id) }}">{{ str_limit($post->title,70) }}</a>
                            </td>
                            <td>
                                {{ $post->user->name }}
                            </td>
                            <td>
                                {{ $post->views }}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
            <hr>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5>
                        <img src="{{ asset('images/calendar.svg') }}" height="24">
                        審查時間表
                    </h5>
                </div>
                <div class="card-body">
                    這是首頁！
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
