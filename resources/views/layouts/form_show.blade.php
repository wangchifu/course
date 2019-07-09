@section('c1_1')
    <td width="200" bgcolor="#FFEE99">
    @if(!is_null($course))
    初審1：{!! show_pass($course->first_suggest1->c1_1_pass) !!}<br>
        <small>{{ $course->first_suggest1->c1_1 }}</small><br>
    @else
            初審1：<span class="text-danger">逾期</span><br>
    @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c1_1_pass) !!}<br>
            <small>{{ $course->first_suggest2->c1_1 }}</small><br>
        @endif
    </td>
@endsection

@section('c1_2')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c1_2_pass) !!}<br>
        <small>{{ $course->first_suggest1->c1_2 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c1_2_pass) !!}<br>
            <small>{{ $course->first_suggest2->c1_2 }}</small><br>
        @endif
    </td>
@endsection

@section('c2')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c2_pass) !!}<br>
        <small>{{ $course->first_suggest1->c2 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c2_pass) !!}<br>
            <small>{{ $course->first_suggest2->c2 }}</small><br>
        @endif
    </td>
@endsection

@section('c3_1')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c3_1_pass) !!}<br>
        <small>{{ $course->first_suggest1->c3_1 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c3_1_pass) !!}<br>
            <small>{{ $course->first_suggest2->c3_1 }}</small><br>
        @endif
    </td>
@endsection

@section('c3_2')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c3_2_pass) !!}<br>
        <small>{{ $course->first_suggest1->c3_2 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c3_2_pass) !!}<br>
            <small>{{ $course->first_suggest2->c3_2 }}</small><br>
        @endif
    </td>
@endsection

@section('c3_3')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c3_3_pass) !!}<br>
        <small>{{ $course->first_suggest1->c3_3 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c3_3_pass) !!}<br>
            <small>{{ $course->first_suggest2->c3_3 }}</small><br>
        @endif
    </td>
@endsection

@section('c4')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c4_pass) !!}<br>
        <small>{{ $course->first_suggest1->c4 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c4_pass) !!}<br>
            <small>{{ $course->first_suggest2->c4 }}</small><br>
        @endif
    </td>
@endsection

@section('c6')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c6_pass) !!}<br>
        <small>{{ $course->first_suggest1->c6 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c6_pass) !!}<br>
            <small>{{ $course->first_suggest2->c6 }}</small><br>
        @endif
    </td>
@endsection

@section('c7_1')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c7_1_pass) !!}<br>
        <small>{{ $course->first_suggest1->c7_1 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c7_1_pass) !!}<br>
            <small>{{ $course->first_suggest2->c7_1 }}</small><br>
        @endif
    </td>
@endsection

@section('c7_2')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c7_2_pass) !!}<br>
        <small>{{ $course->first_suggest1->c7_2 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c7_2_pass) !!}<br>
            <small>{{ $course->first_suggest2->c7_2 }}</small><br>
        @endif
    </td>
@endsection

@section('c8_1')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c8_1_pass) !!}<br>
        <small>{{ $course->first_suggest1->c8_1 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c8_1_pass) !!}<br>
            <small>{{ $course->first_suggest2->c8_1 }}</small><br>
        @endif
    </td>
@endsection

@section('c8_2')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c8_2_pass) !!}<br>
        <small>{{ $course->first_suggest1->c8_2 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c8_2_pass) !!}<br>
            <small>{{ $course->first_suggest2->c8_2 }}</small><br>
        @endif
    </td>
@endsection

@section('c9')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c9_pass) !!}<br>
        <small>{{ $course->first_suggest1->c9 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c9_pass) !!}<br>
            <small>{{ $course->first_suggest2->c9 }}</small><br>
        @endif
    </td>
@endsection

@section('c10_1')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c10_1_pass) !!}<br>
        <small>{{ $course->first_suggest1->c10_1 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c10_1_pass) !!}<br>
            <small>{{ $course->first_suggest2->c10_1 }}</small><br>
        @endif
    </td>
@endsection

@section('c10_2')
    <td rowspan="5" bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c10_2_pass) !!}<br>
        <small>{{ $course->first_suggest1->c10_2 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c10_2_pass) !!}<br>
            <small>{{ $course->first_suggest2->c10_2 }}</small><br>
        @endif
    </td>
@endsection

@section('c11')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c11_pass) !!}<br>
        <small>{{ $course->first_suggest1->c11 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c11_pass) !!}<br>
            <small>{{ $course->first_suggest2->c11 }}</small><br>
        @endif
    </td>
@endsection

@section('c12')
    <td bgcolor="#FFEE99">
        @if(!is_null($course))
        初審1：{!! show_pass($course->first_suggest1->c12_pass) !!}<br>
        <small>{{ $course->first_suggest1->c12 }}</small><br>
        @else
            初審1：<span class="text-danger">逾期</span><br>
        @endif
        @if($course->first_suggest2)
            初審2：{!! show_pass($course->first_suggest2->c12_pass) !!}<br>
            <small>{{ $course->first_suggest2->c12 }}</small><br>
        @endif
    </td>
@endsection

@section('c13')
    <td bgcolor="#FFEE99">
        特教審查：
        @if($course->special_suggest13)
            {!! show_pass($course->special_suggest13->c13_pass) !!}<br>
            <small>{{ $course->special_suggest13->c13 }}</small><br>
        @endif
    </td>
@endsection

@section('c13_1')
    <td bgcolor="#FFEE99">
        特教審查：
        @if($course->special_suggest13_1)
            {!! show_pass($course->special_suggest13_1->c13_1_pass) !!}<br>
            <small>{{ $course->special_suggest13_1->c13_1 }}</small><br>
        @endif
    </td>
@endsection

@section('c13_2')
    <td bgcolor="#FFEE99">
        特教審查：
        @if($course->special_suggest13_2)
            {!! show_pass($course->special_suggest13_2->c13_2_pass) !!}<br>
            <small>{{ $course->special_suggest13_2->c13_2 }}</small><br>
        @endif
    </td>
@endsection

@section('c13_3')
    <td bgcolor="#FFEE99">
        特教審查：
        @if($course->special_suggest13_3)
            {!! show_pass($course->special_suggest13_3->c13_3_pass) !!}<br>
            <small>{{ $course->special_suggest13_3->c13_3 }}</small><br>
        @endif
    </td>
@endsection
