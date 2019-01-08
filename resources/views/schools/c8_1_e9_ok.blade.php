<table border="1">
    <tr>
        <td colspan="2">
            領域/科目
        </td>
        @foreach($year9 as $v)
        <td>
            {{ $v }}年級
        </td>
        @endforeach
    </tr>
    <tr>
        <td rowspan="3">
            語文
        </td>
        <td width="100">
            國語文
        </td>
        @foreach($year9 as $v)
            <td>
                {{ $has_book[$v]['mandarin_book'] }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            本土語文/新住民語文
        </td>
        @foreach($year9 as $v)
            <td>
                {{ $has_book[$v]['dialects_book'] }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            英語文
        </td>
        @foreach($year9 as $v)
            <td>
                @if($v == "一" or $v == "二")
                    -
                @else
                    {{ $has_book[$v]['english_book'] }}
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            數學
        </td>
        @foreach($year9 as $v)
            <td>
                {{ $has_book[$v]['mathematics_book'] }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td rowspan="3">
            生活
        </td>
        <td>
            社會
        </td>
        @foreach($year9 as $v)
            @if($v=="一" or $v=="二")
            <td rowspan="3">
                {{ $has_book[$v]['life_curriculum_book'] }}
            </td>
            @else
            <td>
                {{ $has_book[$v]['social_studies_book'] }}
            </td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td>
            自然與生活科技
        </td>
        @foreach($year9 as $v)
            @if($v=="一" or $v=="二")

            @else
            <td>
                {{ $has_book[$v]['science_technology_book'] }}
            </td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td>
            藝術與人文
        </td>
        @foreach($year9 as $v)
            @if($v=="一" or $v=="二")

            @else
            <td>
                {{ $has_book[$v]['arts_humanities_book'] }}
            </td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            綜合活動
        </td>
        @foreach($year9 as $v)
            <td>
                {{ $has_book[$v]['integrative_activities_book'] }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            健康與體育
        </td>
        @foreach($year9 as $v)
            <td>
                {{ $has_book[$v]['health_physical_book'] }}
            </td>
        @endforeach
    </tr>
</table>
