@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','系統管理登入')

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
    @auth
        @if(auth()->user()->group_id==9)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}">[ 後台管理 ]</a>
            </li>
        @endif
    @endauth
@endsection

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>系統管理登入</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-sm-4 col-form-label text-md-right">帳號</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">密碼</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    登入
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
