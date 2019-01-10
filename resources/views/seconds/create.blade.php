@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','複審作業')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('seconds.index') }}">複審作業</a></li>
                    <li class="breadcrumb-item active" aria-current="page">審查 {{ $schools[$course->school_code] }}</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">
                    <h4>
                        {{ $course->year }} 學年 {{ $schools[$course->school_code] }} 課程計畫-複審作業
                    </h4>
                </div>
                <div class="card-body">
                    @if($course->second_result)
                        {{ Form::open(['route'=>['seconds.update',$course->id],'method'=>'patch']) }}
                    @else
                        {{ Form::open(['route'=>'seconds.store','method'=>'post']) }}
                    @endif
                    <?php
                        $select['no'] = null;
                        $select['ok'] = null;
                        $select['excellent'] = null;
                        if($course->second_result==null){
                            $select['no'] = "selected";
                        }else{
                            $select[$course->second_result] = "selected";
                        }

                        $reason = ($course->second_result)?$course->second_suggest->reason:null;
                    ?>
                    @include('layouts.school_course')
                    <br>
                        <table class="table">
                            <tr bgcolor="#cccccc">
                                <th colspan="2">
                                    複審結果
                                </th>
                                <th colspan="3">
                                    審查意見
                                </th>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <select name="second_result" class="form-control" required>
                                        <option value="" disabled {{ $select['no'] }}>
                                            -----請選擇複審結果-----
                                        </option>
                                        <option value="ok" {{ $select['ok'] }}>
                                            不列入優良學校課程計畫！
                                        </option>
                                        <option value="excellent" {{ $select['excellent'] }}>
                                            讚！列入優良學校課程計畫！
                                        </option>
                                    </select>
                                </td>
                                <td colspan="3">
                                    <textarea name="reason" class="form-control">{{ $reason }}</textarea>
                                </td>
                            </tr>
                        </table>
                    <a href="#" class="btn btn-secondary btn-sm" onclick="history.back();"><i class="fas fa-backward"></i> 返回</a>
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <input type="hidden" name="page" value="{{ $page }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('確定儲存？')">
                        <i class="fas fa-save"></i> 儲存設定
                    </button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
