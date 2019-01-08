@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','更改密碼')

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
        @if(auth()->user()->group_id < 3)
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    [ 學校專區 ] <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('schools.index') }}">
                        課程計畫
                    </a>
                    <a class="dropdown-item" href="">
                        審查結果
                    </a>
                </div>
            </li>
        @endif
        @if(auth()->user()->group_id==9)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">[ 後台管理 ]</a>
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
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5>
                        <img src="{{ asset('images/key.svg') }}" height="24">
                        變更密碼
                    </h5>
                </div>
                <div class="card-body">
                    @include('layouts.form_error')
                    @if(auth()->user()->login_type=='local')
                        <form action="{{ route('update_pwd') }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="exampleInputPassword0">舊密碼*</label>
                                <input type="password" class="form-control" name="password0" id="exampleInputPassword0" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">新密碼*</label>
                                <input type="password" class="form-control" name="password1" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">確認新密碼*</label>
                                <input type="password" class="form-control" name="password2" id="exampleInputPassword2" required>
                            </div>
                            <button type="submit" class="btn btn-primary">送出</button>
                        </form>
                    @elseif(auth()->user()->login_type=='gsuite')
                        使用GSuite登入，請更改OpenID密碼，登入後即更改本站密碼。
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
