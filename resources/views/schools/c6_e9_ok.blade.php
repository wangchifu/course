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
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_mandarin.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_mandarin']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            本土語文/新住民語文
        </td>
        @foreach($year9 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_dialects.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_dialects']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
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
                    @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_english.pdf')))
                        <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_english']) }}"><i class="fas fa-download"></i> 已傳</a>
                    @else
                        <span class="text-danger">未傳</span>
                    @endif
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
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_mathematics.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_mathematics']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
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
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_life_curriculum.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_life_curriculum']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @else
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_social_studies.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_social_studies']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
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
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_science_technology.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_science_technology']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
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
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_arts_humanities.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_arts_humanities']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
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
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_integrative_activities.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_integrative_activities']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            健康與體育
        </td>
        @foreach($year9 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_health_physical.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>$school_code,'file'=>'c6_'.cht2num($v).'_health_physical']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endforeach
    </tr>
</table>
