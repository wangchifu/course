@extends('layouts.master',['bg'=>'bg-secondary'])

@section('title','特教審查管理')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('reviews2.side')
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
                                    {{ Form::open(['route'=>'reviews2.index','method'=>'post']) }}
                                    {{ Form::select('year',$years,$select_year,['onchange'=>'submit()']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-body">
                        <a href="javascript:open_window2('{{ route('reviews2.special_by_user',['select_year'=>$select_year,'c'=>'13']) }}','新視窗')" class="btn btn-info btn-sm"><i class="fas fa-user-tag"></i> 審「會議」委員選學校</a>
                        <a href="javascript:open_window2('{{ route('reviews2.special_by_user',['select_year'=>$select_year,'c'=>'13_1']) }}','新視窗')" class="btn btn-info btn-sm"><i class="fas fa-user-tag"></i> 審「身障」委員選學校</a>
                        <a href="javascript:open_window2('{{ route('reviews2.special_by_user',['select_year'=>$select_year,'c'=>'13_2']) }}','新視窗')" class="btn btn-info btn-sm"><i class="fas fa-user-tag"></i> 審「資優」委員選學校</a>
                        <a href="javascript:open_window2('{{ route('reviews2.special_by_user',['select_year'=>$select_year,'c'=>'13_3']) }}','新視窗')" class="btn btn-info btn-sm"><i class="fas fa-user-tag"></i> 審「藝才」委員選學校</a>
                        @if(count($courses))

                        <table border="1" width="100%">
                            <thead>
                            <tr>
                                <th nowrap>
                                    校名<a href="{{ route('reviews2.unsent_special',$select_year) }}" class="badge badge-danger" target="_blank">傳送狀況</a>
                                </th>
                                <th nowrap>
                                    審「會議紀錄」
                                </th>
                                <th>
                                    審「身障類」
                                </th>
                                <th>
                                    審「資優類」
                                </th>
                                <th>
                                    審「藝才類」
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
                                    {{ $special13_name[$school->school_code] }}
                                    <a href="javascript:open_window('{{ route('reviews2.special_user',['select_year'=>$select_year,'school_code'=>$school->school_code,'c'=>'13']) }}','新視窗')"><i class="fas fa-list-ul"></i></a>
                                </td>
                                <td>
                                    {{ $special13_1_name[$school->school_code] }}
                                    <a href="javascript:open_window('{{ route('reviews2.special_user',['select_year'=>$select_year,'school_code'=>$school->school_code,'c'=>'13_1']) }}','新視窗')"><i class="fas fa-list-ul"></i></a>
                                </td>
                                <td>
                                    {{ $special13_2_name[$school->school_code] }}
                                    <a href="javascript:open_window('{{ route('reviews2.special_user',['select_year'=>$select_year,'school_code'=>$school->school_code,'c'=>'13_2']) }}','新視窗')"><i class="fas fa-list-ul"></i></a>
                                </td>
                                <td>
                                    {{ $special13_3_name[$school->school_code] }}
                                    <a href="javascript:open_window('{{ route('reviews2.special_user',['select_year'=>$select_year,'school_code'=>$school->school_code,'c'=>'13_3']) }}','新視窗')"><i class="fas fa-list-ul"></i></a>
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
