@extends('layouts.master',['bg'=>'bg-secondary'])

@section('title','普教審查管理')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('reviews.side')
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
                                    {{ Form::open(['route'=>'reviews.index','method'=>'post']) }}
                                    {{ Form::select('year',$years,$select_year,['onchange'=>'submit()']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-body">
                        <a href="javascript:open_window2('{{ route('reviews.first_by_user',['select_year'=>$select_year]) }}','新視窗')" class="btn btn-info btn-sm"><i class="fas fa-user"></i> 依初委選學校</a>
                        <a href="javascript:open_window2('{{ route('reviews.second_by_user',['select_year'=>$select_year]) }}','新視窗')" class="btn btn-info btn-sm"><i class="far fa-user"></i> 依複委選學校</a>
                        <a href="{{ route('reviews.open',$select_year) }}" class="btn btn-success btn-sm" onclick="confirm('確定？')"><i class="fas fa-share"></i> 全部公開</a>
                        @if(count($courses))

                        <table border="1" width="100%">
                            <thead>
                            <tr>
                                <th nowrap>
                                    校名
                                </th>
                                <th nowrap>
                                    初審<br>委員
                                </th>
                                <th nowrap>
                                    初審<br>狀況<br><a href="{{ route('reviews.unsent1',$select_year) }}" class="badge badge-danger" target="_blank">未送名單</a>
                                </th>
                                <th>
                                    再傳<br>狀況<br><a href="{{ route('reviews.unsent2',$select_year) }}" class="badge badge-danger" target="_blank">未送名單</a>
                                </th>
                                <th>
                                    三傳<br>狀況<br><a href="{{ route('reviews.unsent3',$select_year) }}" class="badge badge-danger" target="_blank">未送名單</a>
                                </th>
                                <th nowrap>
                                    複審<br>委員
                                </th>
                                <th nowrap>
                                    複審<br>結果
                                </th>
                                <th nowrap>
                                    公開
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($schools as $school)
                            <?php $bg = ($i%2 == 0)?"#FFFFFF":"#cccccc"; ?>
                            <tr bgcolor="{{ $bg }}">
                                <td>
                                    {{ $school->school_name }}
                                </td>
                                <td>
                                    {{ $first_name[$school->school_code] }}
                                    <a href="javascript:open_window('{{ route('reviews.first_user',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}','新視窗')"><i class="fas fa-list-ul"></i></a>
                                </td>
                                <td>
                                    @if($first_result1[$school->school_code] == null)
                                        <span class="text-danger">未送</span>
                                    @elseif($first_result1[$school->school_code] == "submit")
                                        <span class="text-primary">已傳</span>
                                    @elseif($first_result1[$school->school_code] == "back")
                                        <a href="{{ route('reviews.show_school_first_suggest',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}" class="badge badge-danger" target="_blank">退回</a>
                                    @elseif($first_result1[$school->school_code] == "ok")
                                        <a href="{{ route('reviews.show_school_first_suggest',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}" class="badge badge-success" target="_blank">通過</a>
                                    @elseif($first_result1[$school->school_code] == "excellent")
                                        <a href="{{ route('reviews.show_school_first_suggest',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}" class="badge badge-info" target="_blank">優秀</a>
                                    @elseif($first_result1[$school->school_code] == "late")
                                        <span class="text-danger">缺交</span>
                                    @endif
                                </td>
                                <td>
                                    @if($first_result1[$school->school_code]=="back" and $first_result2[$school->school_code] == null)
                                        <span class="text-danger">未送</span>
                                    @elseif($first_result2[$school->school_code] == "submit")
                                        <span class="text-primary">已傳</span>
                                    @elseif($first_result2[$school->school_code] == "back")
                                        <span class="text-warning">退回</span>
                                    @elseif($first_result2[$school->school_code] == "ok")
                                        <span class="text-success">通過</span>
                                    @elseif($first_result2[$school->school_code] == "excellent")
                                        <a href="{{ route('reviews.show_school_first_suggest',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}" class="badge badge-info" target="_blank">優秀</a>
                                    @elseif($first_result2[$school->school_code] == "late")
                                        <span class="text-danger">缺交</span>
                                    @endif
                                </td>
                                <td>
                                    @if($first_result2[$school->school_code]=="back" and $first_result3[$school->school_code] == null)
                                        <span class="text-danger">未送</span>
                                    @elseif($first_result3[$school->school_code] == "submit")
                                        <span class="text-primary">已傳</span><a href="{{ route('reviews.back_null',["select_year"=>$select_year,"school_code"=>$school->school_code,"action"=>"first_result3"]) }}" onclick="return confirm('{{ $school->school_name }} 三傳確定取消上傳，改為未送？')"><i class="fas fa-times-circle text-danger"></i></a>
                                    @elseif($first_result3[$school->school_code] == "ok")
                                        <span class="text-success">通過</span>
                                    @elseif($first_result3[$school->school_code] == "back")
                                        <span class="text-warning">退回</span>
                                    @elseif($first_result3[$school->school_code] == "excellent")
                                        <a href="{{ route('reviews.show_school_first_suggest',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}" class="badge badge-info" target="_blank">優秀</a>
                                    @endif
                                </td>
                                <td>
                                    {{ $second_name[$school->school_code] }}
                                    <a href="javascript:open_window('{{ route('reviews.second_user',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}','新視窗')"><i class="fas fa-list-ul"></i></a>
                                </td>
                                <td>
                                    @if(($first_result1[$school->school_code] == "excellent" or $first_result2[$school->school_code] == "excellent" or $first_result3[$school->school_code] == "excellent") and $second_result[$school->school_code] == null)
                                        <span class="text-danger">未審</span>
                                    @elseif($second_result[$school->school_code] == "ok")
                                        <span class="text-dark">不列</span>
                                    @elseif($second_result[$school->school_code] == "excellent")
                                        <span class="text-info">優良</span>
                                    @endif
                                </td>
                                <td>
                                    @if($open[$school->school_code])
                                        是 <small><a href="{{ route('reviews.select_close',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}" onclick="confirm('確定？')"><i class="fas fa-times-circle text-danger"></i></a></small>
                                    @else
                                        否 <small><a href="{{ route('reviews.select_open',['select_year'=>$select_year,'school_code'=>$school->school_code]) }}" onclick="confirm('確定？')"><i class="fas fa-plus-circle text-success"></i></a></small>
                                    @endif
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $schools->appends(['year' => request('year')])->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        <!--
        function open_window(url,name)
        {
            window.open(url,name,'statusbar=no,scrollbars=yes,status=yes,resizable=yes,width=900,height=180');
        }
        function open_window2(url,name)
        {
            window.open(url,name,'statusbar=no,scrollbars=yes,status=yes,resizable=yes,width=600,height=800');
        }
        // -->
    </script>
@endsection
