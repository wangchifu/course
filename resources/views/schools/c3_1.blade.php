<div class="centent-div" style="background-color: {{ $c3_1_bg }}">
    @if($course->c3_1)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    3-1 學校課程節數
    <br>
    {{ $c3_1_text }}
</div>
<br>
@if(count($sections))
    <table>
        <tr>
            @if(auth()->user()->group_id==1)
                <td valign="top">
                    @if(!empty($year12))
                        <strong>國小十二年國教課程</strong>
                        @include('layouts.c3_1_e12_ok')
                    @endif
                </td>
                <td>
                    　
                </td>
                <td>
                    @if(!empty($year9))
                        <strong>國小九年一貫課程</strong>
                        @include('layouts.c3_1_e9_ok')
                    @endif
                </td>
            @elseif(auth()->user()->group_id==2)
                <td valign="top">
                    @if(!empty($year12))
                        <strong>國中十二年國教課程</strong>
                        @include('layouts.c3_1_j12_ok')
                    @endif
                </td>
                <td>
                    　
                </td>
                <td>
                    @if(!empty($year9))
                        <strong>國中九年一貫課程</strong>
                        @include('layouts.c3_1_j9_ok')
                    @endif
                </td>
            @endif
        </tr>
    </table>
    {{ Form::open(['route'=>'schools.c3_1_delete','method'=>'delete']) }}
    <input type="hidden" name="select_year" value="{{ $year->year }}">
    <button type="submit" onclick="return confirm('確定清除？')" class="btn btn-info btn-sm">清除重設</button>
    <a href="{{ route('schools.c3_1_print',$year->year) }}" class="btn btn-primary btn-sm" target="_blank"><i class="fas fa-print"></i> 列印核章後存成PDF，供第十項上傳</a>
    {{ Form::close() }}
@else
    {{ Form::open(['route'=>'schools.c3_1_store','id'=>'sections_store','method'=>'post','onsubmit'=>"if(confirm('您確定送出嗎?')) return check_total();else return false"]) }}
    <table>
        <tr>
            @if(auth()->user()->group_id==1)
                <td valign="top">
                    @if(!empty($year12))
                        <strong>國小十二年國教課程</strong>
                        @include('schools.c3_1_e12')
                    @endif
                </td>
                @if(!empty($year9) and !empty($year12))
                    <td>　
                    </td>
                @endif
                <td valign="top">
                    @if(!empty($year9))
                        <strong>國小九年一貫課程</strong>
                        @include('schools.c3_1_e9')
                    @endif
                </td>
            @elseif(auth()->user()->group_id==2)
                <td valign="top">
                    @if(!empty($year12))
                        <strong>國中十二年國教課程</strong>
                        @include('schools.c3_1_j12')
                    @endif
                </td>
                @if(!empty($year9) and !empty($year12))
                    <td>　
                    </td>
                @endif
                <td valign="top">
                    @if(!empty($year9))
                        <strong>國中九年一貫課程</strong>
                        @include('schools.c3_1_j9')
                    @endif
                </td>
            @endif
        </tr>
    </table>
    <input type="hidden" name="select_year" value="{{ $year->year }}">
    <button type="submit">儲存課程節數</button>
    {{ Form::close() }}
@endif
