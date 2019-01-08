<table border="1">
    <tr>
        <td colspan="4">
            領域/科目
        </td>
        @foreach($year12 as $v)
            <td>
                {{ $v }}年級
            </td>
        @endforeach
    </tr>
    <tr>
        <td rowspan="10" width="10">
            部定課程
        </td>
        <td rowspan="10" width="10">
            領域學習課程
        </td>
        <td rowspan="3">
            語文
        </td>
        <td width="100">
            國語文
        </td>
        @foreach($year12 as $v)
            <td>
                {{ $has_section[$v]['mandarin'] }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            本土語文/新住民語文
        </td>
        @foreach($year12 as $v)
            <td>
                {{ $has_section[$v]['dialects'] }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            英語文
        </td>
        @foreach($year12 as $v)
            <td>
                @if($v=="一" or $v=="二")
                    -
                @else
                    {{ $has_section[$v]['english'] }}
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            數學
        </td>
        @foreach($year12 as $v)
            <td>
                {{ $has_section[$v]['mathematics'] }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td rowspan="4">
            生活
        </td>
        <td>
            社會
        </td>
        @foreach($year12 as $v)
            @if($v=="一" or $v=="二")
            <td rowspan="4">
                {{ $has_section[$v]['life_curriculum'] }}
            </td>
            @else
            <td>
                {{ $has_section[$v]['social_studies'] }}
            </td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td>
            自然科學
        </td>
        @foreach($year12 as $v)
            @if($v=="一" or $v=="二")

            @else
                <td>
                    {{ $has_section[$v]['science'] }}
                </td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td>
            藝術與人文
        </td>
        @foreach($year12 as $v)
            @if($v=="一" or $v=="二")

            @else
                <td>
                    {{ $has_section[$v]['arts_humanities'] }}
                </td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td>
            綜合活動
        </td>
        @foreach($year12 as $v)
            @if($v=="一" or $v=="二")

            @else
                <td>
                    {{ $has_section[$v]['integrative_activities'] }}
                </td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            健康與體育
        </td>
        @foreach($year12 as $v)
            <td>
                {{ $has_section[$v]['health_physical'] }}
            </td>
        @endforeach
    </tr>
    <tr bgcolor="#cccccc">
        <td colspan="2">
            領域總節數
        </td>
        @foreach($year12 as $v)
            <td>
                {{
                $has_section[$v]['mandarin']+
                $has_section[$v]['dialects']+
                $has_section[$v]['english']+
                $has_section[$v]['mathematics']+
                $has_section[$v]['life_curriculum']+
                $has_section[$v]['social_studies']+
                $has_section[$v]['science']+
                $has_section[$v]['arts_humanities']+
                $has_section[$v]['integrative_activities']+
                $has_section[$v]['health_physical']
                 }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            校訂課程
        </td>
        <td colspan="3">
            彈性學習課程
        </td>
        @foreach($year12 as $v)
            <td>
                {{ $has_section[$v]['alternative'] }}
            </td>
        @endforeach
    </tr>
    <tr bgcolor="#cccccc">
        <td colspan="4">
            總節數
        </td>
        @foreach($year12 as $v)
            <td>
                {{
                $has_section[$v]['mandarin']+
                $has_section[$v]['dialects']+
                $has_section[$v]['english']+
                $has_section[$v]['mathematics']+
                $has_section[$v]['life_curriculum']+
                $has_section[$v]['social_studies']+
                $has_section[$v]['science']+
                $has_section[$v]['arts_humanities']+
                $has_section[$v]['integrative_activities']+
                $has_section[$v]['health_physical']+
                $has_section[$v]['alternative']
                 }}
            </td>
        @endforeach
    </tr>
</table>
