<div class="centent-div" style="background-color: {{ $c8_1_bg }}">
    @if($course->c8_1)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    7-1 各年級領域/科目選用之教書版本，經教育部審定通過。
    <br>
    {{ $c8_1_text }}
</div>
<br>
@if(count($books))
    <table>
        <tr valign="top">
            @if(auth()->user()->group_id==1)
                <td valign="top">
                    @if(!empty($year12))
                        <strong>國小十二年國教課程</strong>
                        @include('schools.c8_1_e12_ok')
                    @endif
                </td>
                <td>
                    　
                </td>
                <td>
                    @if(!empty($year9))
                        <strong>國小九年一貫課程</strong>
                        @include('schools.c8_1_e9_ok')
                    @endif
                </td>
            @else
                <td valign="top">
                    @if(!empty($year12))
                        <strong>國中十二年國教課程</strong>
                        @include('schools.c8_1_j12_ok')
                    @endif
                </td>
                <td>
                    　
                </td>
                <td>
                    @if(!empty($year9))
                        <strong>國中九年一貫課程</strong>
                        @include('schools.c8_1_j9_ok')
                    @endif
                </td>
            @endif
        </tr>

    </table>
    {{ Form::open(['route'=>'schools.c8_1_delete','method'=>'delete']) }}
    <input type="hidden" name="select_year" value="{{ $year->year }}">
    <button type="submit" onclick="return confirm('確定清除？')" class="btn btn-info btn-sm">清除重設</button>
    {{ Form::close() }}
@else
    {{ Form::open(['route'=>'schools.c8_1_store','method'=>'post']) }}
    <table>
        <tr valign="top">
            @if(auth()->user()->group_id==1)
                <td valign="top">
                    @if(!empty($year12))
                        <strong>國小十二年國教課程</strong>
                        @include('schools.c8_1_e12')
                    @endif
                </td>
                <td>
                    　
                </td>
                <td>
                    @if(!empty($year9))
                        <strong>國小九年一貫課程</strong>
                        @include('schools.c8_1_e9')
                    @endif
                </td>
            @elseif(auth()->user()->group_id==2)
                <td valign="top">
                    @if(!empty($year12))
                        <strong>國中十二年國教課程</strong>
                        @include('schools.c8_1_j12')
                    @endif
                </td>
                <td>
                    　
                </td>
                <td>
                    @if(!empty($year9))
                        <strong>國中九年一貫課程</strong>
                        @include('schools.c8_1_j9')
                    @endif
                </td>
            @endif
        </tr>
    </table>
    <input type="hidden" name="select_year" value="{{ $year->year }}">
    <button type="submit" onclick="return confirm('確定？')">儲存教科書版本</button>
    {{ Form::close() }}
@endif
