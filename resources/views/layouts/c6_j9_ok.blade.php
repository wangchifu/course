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
        <td rowspan="2">
            語文
        </td>
        <td width="100">
            國語文
        </td>
        @foreach($year9 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_mandarin.pdf')))
                    <?php $file_path = $year->year."&".$school_code."&c6_".cht2num($v).'_mandarin'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
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
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_english.pdf')))
                    <?php $file_path = $year->year."&".$school_code."&c6_".cht2num($v).'_english'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
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
                    <?php $file_path = $year->year."&".$school_code."&c6_".cht2num($v).'_mathematics'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            社會
        </td>
        @foreach($year9 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_social_studies.pdf')))
                    <?php $file_path = $year->year."&".$school_code."&c6_".cht2num($v).'_social_studies'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            自然與生活科技
        </td>
        @foreach($year9 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_science_technology.pdf')))
                    <?php $file_path = $year->year."&".$school_code."&c6_".cht2num($v).'_science_technology'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            藝術與人文
        </td>
        @foreach($year9 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_arts_humanities.pdf')))
                    <?php $file_path = $year->year."&".$school_code."&c6_".cht2num($v).'_arts_humanities'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            綜合活動
        </td>
        @foreach($year9 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c6_'.cht2num($v).'_integrative_activities.pdf')))
                    <?php $file_path = $year->year."&".$school_code."&c6_".cht2num($v).'_integrative_activities'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
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
                    <?php $file_path = $year->year."&".$school_code."&c6_".cht2num($v).'_health_physical'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endforeach
    </tr>
</table>
