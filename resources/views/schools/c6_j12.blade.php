<table border="1">
    <tr>
        <td colspan="2">
            領域/科目
        </td>
        @foreach($year12 as $v)
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
        @foreach($year12 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_mandarin.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'mandarin','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_mandarin']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_mandarin']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'mandarin','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            英語文
        </td>
        @foreach($year12 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_english.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'english','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_english']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_english']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'english','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
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
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_mathematics.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'mathematics','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_mathematics']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_mathematics']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'mathematics','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            社會
        </td>
        @foreach($year12 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_social_studies.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'social_studies','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_social_studies']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_social_studies']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'social_studies','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            自然科學
        </td>
        @foreach($year12 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_science.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'science','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_science']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_science']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'science','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            藝術與人文
        </td>
        @foreach($year12 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_arts_humanities.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'arts_humanities','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_arts_humanities']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_arts_humanities']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'arts_humanities','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            綜合活動
        </td>
        @foreach($year12 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_integrative_activities.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'integrative_activities','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_integrative_activities']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_integrative_activities']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'integrative_activities','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            科技
        </td>
        @foreach($year12 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_technology.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'technology','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_technology']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_technology']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'technology','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            健康與體育
        </td>
        @foreach($year12 as $v)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c6_'.cht2num($v).'_health_physical.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'health_physical','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_health_physical']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c6_'.cht2num($v).'_health_physical']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c6_upload',['select_year'=>$year->year,'order'=>'c6','subject'=>'health_physical','grade'=>cht2num($v)]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endforeach
    </tr>
</table>
