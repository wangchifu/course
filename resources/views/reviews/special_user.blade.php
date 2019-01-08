@extends('layouts.master_clean')

@section('title','學校指定特教委員')

@section('content')
{{ Form::open(['route'=>'reviews.special_user_store','method'=>'post']) }}
<table class="table table-striped">
    <tr>
        <td>
            學年度
        </td>
        <td>
            學校
        </td>
        <td>
            特教委員
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
            {{ $school_array[$school_code] }}
        </td>
        <td>
            {{ Form::select('special_user_id', $users,null, ['class' => 'form-control','required'=>'required', 'placeholder' => '--']) }}
        </td>
        <td>
            <button type="submit" onclick="confirm('確定？')">儲存特教委員</button>
        </td>
    </tr>
</table>
<input type="hidden" name="select_year" value="{{ $select_year }}">
<input type="hidden" name="school_code" value="{{ $school_code }}">
{{ Form::close() }}
@endsection
