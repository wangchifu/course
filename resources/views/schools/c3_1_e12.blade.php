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
                <select name="mandarin[{{ $v }}]" id="mandarin{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                    <option value="{{ $section12[$v]['mandarin'] }}">
                        {{ $section12[$v]['mandarin'] }}
                    </option>
                </select>
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            本土語文/新住民語文
        </td>
        @foreach($year12 as $v)
            <td>
                <select name="dialects[{{ $v }}]" id="dialects{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                    <option value="{{ $section12[$v]['dialects'] }}">
                        {{ $section12[$v]['dialects'] }}
                    </option>
                </select>
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
                    <select name="english[{{ $v }}]" id="english{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                        <option value="{{ $section12[$v]['english'] }}">
                            {{ $section12[$v]['english'] }}
                        </option>
                    </select>
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
                <select name="mathematics[{{ $v }}]" id="mathematics{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                    <option value="{{ $section12[$v]['mathematics'] }}">
                        {{ $section12[$v]['mathematics'] }}
                    </option>
                </select>
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
                <select name="life_curriculum[{{ $v }}]" id="life_curriculum{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                    <option value="{{ $section12[$v]['life_curriculum'] }}">
                        {{ $section12[$v]['life_curriculum'] }}
                    </option>
                </select>
            </td>
            @else
            <td>
                <select name="social_studies[{{ $v }}]" id="social_studies{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                    <option value="{{ $section12[$v]['social_studies'] }}">
                        {{ $section12[$v]['social_studies'] }}
                    </option>
                </select>
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
                    <select name="science[{{ $v }}]" id="science{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                        <option value="{{ $section12[$v]['science'] }}">
                            {{ $section12[$v]['science'] }}
                        </option>
                    </select>
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
                    <select name="arts_humanities[{{ $v }}]" id="arts_humanities{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                        <option value="{{ $section12[$v]['arts_humanities'] }}">
                            {{ $section12[$v]['arts_humanities'] }}
                        </option>
                    </select>
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
                    <select name="integrative_activities[{{ $v }}]" id="integrative_activities{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                        <option value="{{ $section12[$v]['integrative_activities'] }}">
                            {{ $section12[$v]['integrative_activities'] }}
                        </option>
                    </select>
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
                <select name="health_physical[{{ $v }}]" id="health_physical{{ cht2num($v) }}" onchange="total_areas('total_areas{{ cht2num($v) }}',{{ cht2num($v) }})">
                    <option value="{{ $section12[$v]['health_physical'] }}">
                        {{ $section12[$v]['health_physical'] }}
                    </option>
                </select>
            </td>
        @endforeach
    </tr>
    <tr bgcolor="#cccccc">
        <td colspan="2">
            領域總節數
        </td>
        @foreach($year12 as $v)
            <td>
                <div id="total_areas{{ cht2num($v) }}">{{ $total_area12[$v] }}</div>
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
                {{ Form::select('alternative['.$v.']',$section12[$v]['alternative'],null,['id'=>'alternative'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'total_sections('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr bgcolor="#cccccc">
        <td colspan="4">
            總節數
        </td>
        @foreach($year12 as $v)
            <td>
                <div id="total_sections{{ cht2num($v) }}"></div>
            </td>
        @endforeach
    </tr>
</table>
<script>
    function total_areas(id,grade){
        if(parseInt(grade)>=3){
            document.getElementById(id).innerText=parseInt(document.getElementById('mandarin'+grade).value)+
                parseInt(document.getElementById('dialects'+grade).value)+
                parseInt(document.getElementById('english'+grade).value)+
                parseInt(document.getElementById('mathematics'+grade).value)+
                parseInt(document.getElementById('social_studies'+grade).value)+
                parseInt(document.getElementById('science'+grade).value)+
                parseInt(document.getElementById('arts_humanities'+grade).value)+
                parseInt(document.getElementById('integrative_activities'+grade).value)+
                parseInt(document.getElementById('health_physical'+grade).value);
        }else{
            document.getElementById(id).innerText=parseInt(document.getElementById('mandarin'+grade).value)+
                parseInt(document.getElementById('dialects'+grade).value)+
                parseInt(document.getElementById('mathematics'+grade).value)+
                parseInt(document.getElementById('life_curriculum'+grade).value)+
                parseInt(document.getElementById('health_physical'+grade).value);
        }

    }
    function total_sections(grade){
        document.getElementById('total_sections'+grade).innerText=parseInt(document.getElementById('total_areas'+grade).innerText)+
            parseInt(document.getElementById('alternative'+grade).value);
    }
</script>
