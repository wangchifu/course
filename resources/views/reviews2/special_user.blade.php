@extends('layouts.master_clean')

@section('title','學校指定特教委員')

@section('content')
{{ Form::open(['route'=>'reviews2.special_user_store','method'=>'post']) }}
<table class="table table-striped">
    <tr>
        <td>
            學年度
        </td>
        <td>
            學校
        </td>
        <td>
            評審項次
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
        <?php $item=['13'=>'會議紀錄','13_1'=>'身障類課程','13_2'=>'資優類課程','13_3'=>'藝才類課程']?>
        <td>
            {{ $item[$c] }}
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
<input type="hidden" name="c" value="{{ $c }}">
{{ Form::close() }}
@endsection
