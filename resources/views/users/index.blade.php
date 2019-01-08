@extends('layouts.master',['bg'=>'bg-secondary'])

@section('title','使用者管理')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('users.side')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            <table>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/group.svg') }}" height="24">
                                    </td>
                                    <td>
                                        選擇群組：
                                    </td>
                                    <td>
                                        {{ Form::open(['route'=>'users.index','method'=>'post']) }}
                                        {{ Form::select('group_id',$groups,$group_id,['onchange'=>'submit()']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            </table>
                        </h5>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('users.create',$group_id) }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> 新增{{ $groups[$group_id] }}</a>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    帳號
                                </th>
                                <th>
                                    姓名
                                </th>
                                <th>
                                    職稱
                                </th>
                                <th>
                                    email
                                </th>
                                <th>
                                    動作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        @if($user->disable)
                                            <i class="fas fa-times-circle text-danger"></i>
                                        @endif
                                        {{ $user->username }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->title }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        @if($user->disable)
                                            <a href="#" onclick="if(confirm('確定啟用帳號 {{ $user->username }} 嗎?')) getElementById('able{{ $user->id }}').submit();else return false">
                                                <span class="badge badge-success">啟用</span>
                                            </a>
                                            {{ Form::open(['route' => ['users.able',$user->id], 'method' => 'patch','id'=>'able'.$user->id]) }}
                                            {{ Form::close() }}
                                        @else
                                            <a href="{{ route('users.edit',$user->id) }}"><span class="badge badge-primary">編輯</span></a>
                                            <a href="{{ route('users.reset',$user->id) }}" onclick="return confirm('確定重設密碼為 {{ env('DEFAULT_PWD') }}？')"><span class="badge badge-info">還原</span></a>
                                            <a href="#" onclick="if(confirm('確定停用帳號 {{ $user->username }} 嗎?')) getElementById('disable{{ $user->id }}').submit();else return false">
                                                <span class="badge badge-danger">停用</span>
                                            </a>
                                            {{ Form::open(['route' => ['users.disable',$user->id], 'method' => 'patch','id'=>'disable'.$user->id]) }}
                                            {{ Form::close() }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
