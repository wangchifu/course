@section('c1_1')
    @if($course->first_suggest1->c1_1_pass===0)
    <td width="200">
        <input type="radio" name="c1_1_pass" id="c1_1_pass1" {{ $checked1_1_ok }} value="1"> <label for="c1_1_pass1">符合</label>　
        <input type="radio" name="c1_1_pass" id="c1_1_pass2" {{ $checked1_1_no }} value="0"> <label for="c1_1_pass2">不符合</label>
        <br>
        <textarea name="c1_1">{{ $c1_1 }}</textarea>
    </td>
    @endif
@endsection

@section('c1_2')
    @if($course->first_suggest1->c1_2_pass===0)
    <td>
        <input type="radio" name="c1_2_pass" id="c1_2_pass1" {{ $checked1_2_ok }} value="1"> <label for="c1_2_pass1">符合</label>　
        <input type="radio" name="c1_2_pass" id="c1_2_pass2" {{ $checked1_2_no }} value="0"> <label for="c1_2_pass2">不符合</label>
        <br>
        <textarea name="c1_2">{{ $c1_2 }}</textarea>
    </td>
    @endif
@endsection

@section('c2')
    @if($course->first_suggest1->c2_pass===0)
    <td>
        <input type="radio" name="c2_pass" id="c2_pass1" {{ $checked2_ok }} value="1"> <label for="c2_pass1">符合</label>　
        <input type="radio" name="c2_pass" id="c2_pass2" {{ $checked2_no }} value="0"> <label for="c2_pass2">不符合</label>
        <br>
        <textarea name="c2">{{ $c2 }}</textarea>
    </td>
    @endif
@endsection

@section('c3_1')
    @if($course->first_suggest1->c3_1_pass===0)
    <td>
        <input type="radio" name="c3_1_pass" id="c3_1_pass1" {{ $checked3_1_ok }} value="1"> <label for="c3_1_pass1">符合</label>　
        <input type="radio" name="c3_1_pass" id="c3_1_pass2" {{ $checked3_1_no }} value="0"> <label for="c3_1_pass2">不符合</label>
        <br>
        <textarea name="c3_1">{{ $c3_1 }}</textarea>
    </td>
    @endif
@endsection

@section('c3_2')
    @if($course->first_suggest1->c3_2_pass===0)
    <td>
        <input type="radio" name="c3_2_pass" id="c3_2_pass1" {{ $checked3_2_ok }} value="1"> <label for="c3_2_pass1">符合</label>　
        <input type="radio" name="c3_2_pass" id="c3_2_pass2" {{ $checked3_2_no }} value="0"> <label for="c3_2_pass2">不符合</label>
        <br>
        <textarea name="c3_2">{{ $c3_2 }}</textarea>
    </td>
    @endif
@endsection

@section('c3_3')
    @if($course->first_suggest1->c3_3_pass===0)
    <td>
        <input type="radio" name="c3_3_pass" id="c3_3_pass1" {{ $checked3_3_ok }} value="1"> <label for="c3_3_pass1">符合</label>　
        <input type="radio" name="c3_3_pass" id="c3_3_pass2" {{ $checked3_3_no }} value="0"> <label for="c3_3_pass2">不符合</label>
        <br>
        <textarea name="c3_3">{{ $c3_3 }}</textarea>
    </td>
    @endif
@endsection

@section('c4')
    @if($course->first_suggest1->c4_pass===0)
    <td>
        <input type="radio" name="c4_pass" id="c4_pass1" {{ $checked4_ok }} value="1"> <label for="c4_pass1">符合</label>　
        <input type="radio" name="c4_pass" id="c4_pass2" {{ $checked4_no }} value="0"> <label for="c4_pass2">不符合</label>
        <br>
        <textarea name="c4">{{ $c4 }}</textarea>
    </td>
    @endif
@endsection

@section('c6')
    @if($course->first_suggest1->c6_pass===0)
    <td>
        <input type="radio" name="c6_pass" id="c6_pass1" {{ $checked6_ok }} value="1"> <label for="c6_pass1">符合</label>　
        <input type="radio" name="c6_pass" id="c6_pass2" {{ $checked6_no }} value="0"> <label for="c6_pass2">不符合</label>
        <br>
        <textarea name="c6">{{ $c6 }}</textarea>
    </td>
    @endif
@endsection

@section('c7_1')
    @if($course->first_suggest1->c7_1_pass===0)
    <td>
        <input type="radio" name="c7_1_pass" id="c7_1_pass1" {{ $checked7_1_ok }} value="1"> <label for="c7_1_pass1">符合</label>　
        <input type="radio" name="c7_1_pass" id="c7_1_pass2" {{ $checked7_1_no }} value="0"> <label for="c7_1_pass2">不符合</label>
        <br>
        <textarea name="c7_1">{{ $c7_1 }}</textarea>
    </td>
    @endif
@endsection

@section('c7_2')
    @if($course->first_suggest1->c7_2_pass===0)
    <td>
        <input type="radio" name="c7_2_pass" id="c7_2_pass1" {{ $checked7_2_ok }} value="1"> <label for="c7_2_pass1">符合</label>　
        <input type="radio" name="c7_2_pass" id="c7_2_pass2" {{ $checked7_2_no }} value="0"> <label for="c7_2_pass2">不符合</label>
        <br>
        <textarea name="c7_2">{{ $c7_2 }}</textarea>
    </td>
    @endif
@endsection

@section('c8_1')
    @if($course->first_suggest1->c8_1_pass===0)
    <td>
        <input type="radio" name="c8_1_pass" id="c8_1_pass1" {{ $checked8_1_ok }} value="1"> <label for="c8_1_pass1">符合</label>　
        <input type="radio" name="c8_1_pass" id="c8_1_pass2" {{ $checked8_1_no }} value="0"> <label for="c8_1_pass2">不符合</label>
        <br>
        <textarea name="c8_1">{{ $c8_1 }}</textarea>
    </td>
    @endif
@endsection

@section('c8_2')
    @if($course->first_suggest1->c8_2_pass===0)
    <td>
        <input type="radio" name="c8_2_pass" id="c8_2_pass1" {{ $checked8_2_ok }} value="1"> <label for="c8_2_pass1">符合</label>　
        <input type="radio" name="c8_2_pass" id="c8_2_pass2" {{ $checked8_2_no }} value="0"> <label for="c8_2_pass2">不符合</label>
        <br>
        <textarea name="c8_2">{{ $c8_2 }}</textarea>
    </td>
    @endif
@endsection

@section('c9')
    @if($course->first_suggest1->c9_pass===0)
    <td>
        <input type="radio" name="c9_pass" id="c9_pass1" {{ $checked9_ok }} value="1"> <label for="c9_pass1">符合</label>　
        <input type="radio" name="c9_pass" id="c9_pass2" {{ $checked9_no }} value="0"> <label for="c9_pass2">不符合</label>
        <br>
        <textarea name="c9">{{ $c9 }}</textarea>
    </td>
    @endif
@endsection

@section('c10_1')
    @if($course->first_suggest1->c10_1_pass===0)
    <td>
        <input type="radio" name="c10_1_pass" id="c10_1_pass1" {{ $checked10_1_ok }} value="1"> <label for="c10_1_pass1">符合</label>　
        <input type="radio" name="c10_1_pass" id="c10_1_pass2" {{ $checked10_1_no }} value="0"> <label for="c10_1_pass2">不符合</label>
        <br>
        <textarea name="c10_1">{{ $c10_1 }}</textarea>
    </td>
    @endif
@endsection

@section('c10_2')
    @if($course->first_suggest1->c10_2_pass===0)
    <td rowspan="5">
        <input type="radio" name="c10_2_pass" id="c10_2_pass1" {{ $checked10_2_ok }} value="1"> <label for="c10_2_pass1">符合</label>　
        <input type="radio" name="c10_2_pass" id="c10_2_pass2" {{ $checked10_2_no }} value="0"> <label for="c10_2_pass2">不符合</label>
        <br>
        <textarea name="c10_2">{{ $c10_2 }}</textarea>
    </td>
    @endif
@endsection

@section('c11')
    @if($course->first_suggest1->c11_pass===0)
    <td>
        <input type="radio" name="c11_pass" id="c11_pass1" {{ $checked11_ok }} value="1"> <label for="c11_pass1">符合</label>　
        <input type="radio" name="c11_pass" id="c11_pass2" {{ $checked11_no }} value="0"> <label for="c11_pass2">不符合</label>
        <br>
        <textarea name="c11">{{ $c11 }}</textarea>
    </td>
    @endif
@endsection

@section('c12')
    @if($course->first_suggest1->c12_pass===0)
    <td>
        <input type="radio" name="c12_pass" id="c12_pass1" {{ $checked12_ok }} value="1"> <label for="c12_pass1">符合</label>　
        <input type="radio" name="c12_pass" id="c12_pass2" {{ $checked12_no }} value="0"> <label for="c12_pass2">不符合</label>
        <br>
        <textarea name="c12">{{ $c12 }}</textarea>
    </td>
    @endif
@endsection

