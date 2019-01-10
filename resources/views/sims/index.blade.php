@extends('layouts.master',['bg'=>'bg-secondary'])

@section('title','模擬登入')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('sims.side')
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h5>模擬登入</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>
                                    帳號
                                </th>
                                <th>
                                    姓名
                                </th>
                                <th>
                                    分類
                                </th>
                                <th>
                                    學校
                                </th>
                                <td>
                                    動作
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->username }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $all_groups[$user->group_id] }}
                                    </td>
                                    <td>
                                        {{ $user->school }}
                                    </td>
                                    <td>
                                        <a href="{{ route('sims.impersonate',$user->id) }}" class="btn btn-secondary btn-sm">模擬登入</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
