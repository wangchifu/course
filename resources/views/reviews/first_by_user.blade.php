@extends('layouts.master_clean')

@section('title','依初審委員指定學校')

@section('content')
{{ Form::open(['route'=>'reviews.first_by_user_store','method'=>'post']) }}
<table class="table table-striped">
    <tr>
        <td>
            學年度
        </td>
        <td>
            初審委員
        </td>
        <td>
            學校 <label><input type="checkbox" id="checkAll"/> 全選</label>
        </td>
        <td>
            動作
        </td>
    </tr>
    <tr>
        <td>
            {{ $select_year }}學年
        </td>
        <td>
            {{ Form::select('user_id',$users,null,['placeholder'=>'--請選擇--','required'=>'required']) }}
        <td>
            <table border="1">
                @foreach($schools as $k=>$v)
                <p><input type="checkbox" id="s{{ $k }}" name="s[{{ $k }}]"> <label for="s{{ $k }}">{{ $v }}</label></p>
                @endforeach
            </table>
        </td>
        <td>
            <button type="submit" onclick="confirm('確定？')">儲存</button>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button type="submit" onclick="confirm('確定？')">儲存</button>
        </td>
    </tr>
</table>
<input type="hidden" name="select_year" value="{{ $select_year }}">
{{ Form::close() }}
<script>
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });
</script>
@endsection
