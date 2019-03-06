<div class="centent-div" style="background-color: {{ $c6_bg }}">
    5-3 融入課綱議題(七大或19項)且內涵適合單元/主題內容。
    <br>
    {{ $c6_text }}
</div>
<br>
<table>
    <tr valign="top">
        @if(auth()->user()->group_id==1)
            <td valign="top">
                @if(!empty($year12))
                    <strong>國小十二年國教課程</strong>
                    @include('schools.c6_e12')
                @endif
            </td>
            <td>
                　
            </td>
            <td>
                @if(!empty($year9))
                    <strong>國小九年一貫課程</strong>
                    @include('schools.c6_e9')
                @endif
            </td>
        @else(auth()->user()->group_id==2)
            <td valign="top">
                @if(!empty($year12))
                    <strong>國中十二年國教課程</strong>
                    @include('schools.c6_j12')
                @endif
            </td>
            <td>
                　
            </td>
            <td>
                @if(!empty($year9))
                    <strong>國中九年一貫課程</strong>
                    @include('schools.c6_j9')
                @endif
            </td>
        @endif
    </tr>
</table>
