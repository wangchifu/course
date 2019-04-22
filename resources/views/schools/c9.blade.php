<div class="centent-div" style="background-color: {{ $c9_bg }}">
    8-1 各年級彈性學習課程內容符合「統整性主題/專題/議題探究課程」、「社團活動與技藝課程」、「特殊需求領域課程」及「其他類課程」四大類別之一，並應經學校課發會審議通過。(舊課綱年級得依九年一貫課綱之規定執行)
    <br>
    8-2 特殊需求領域課程規劃須經學校特殊教育推行委員會及課發會審議通過。
    <br>
    8-3 各年級各彈性學習課程，應呼應學校背景、課程願景及特色發展，以提升學生學習興趣並鼓勵適性發展，落實學校本位及特色課程。
    <br>
    {{ $c9_text }}
</div>
上傳內容：
<br>
1.彈性課程項目之規劃分配表及學期總節數（如：全校性和全年級活動、學校特色課程或活動、學習領域選修、補救教學、班級輔導或學生自我學習、或「統整性主題/專題/議題探究課程」、「社團活動與技藝課程」、「特殊需求領域課程」及「其他類課程」）
<br>
2.教學活動設計或方案
<br>
3.進度表（或與各領域進度表合併呈現）
<br>
4.跨領域教學方案／協同教學規劃（如果有得呈現）
<br>
<table border="1">
    <tr>
        <td>
            年級
        </td>
        @if(auth()->user()->group_id==1)
        <td width="14%">
            一年級
        </td>
        <td width="14%">
            二年級
        </td>
        <td width="14%">
            三年級
        </td>
        <td width="14%">
            四年級
        </td>
        <td width="14%">
            五年級
        </td>
        <td width="14%">
            六年級
        </td>
        @else
            <td width="14%">
                七年級
            </td>
            <td width="14%">
                八年級
            </td>
            <td width="14%">
                九年級
            </td>
        @endif
    </tr>
    <tr valign="top">
        <td>
            彈性學習課程
        </td>
        @if(auth()->user()->group_id==1)
            <td>
                <?php $files_c9_1 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_1')); ?>
                @if(count($files_c9_1))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('一')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_1 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_1&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('一')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                <?php $files_c9_2 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_2')); ?>
                @if(count($files_c9_2))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('二')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_2 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_2&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('二')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                <?php $files_c9_3 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_3')); ?>
                @if(count($files_c9_3))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('三')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_3 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_3&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('三')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                <?php $files_c9_4 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_4')); ?>
                @if(count($files_c9_4))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('四')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_4 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_4&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('四')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                <?php $files_c9_5 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_5')); ?>
                @if(count($files_c9_5))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('五')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_5 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_5&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('五')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                <?php $files_c9_6 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_6')); ?>
                @if(count($files_c9_6))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('六')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_6 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_6&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('六')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @else
            <td>
                <?php $files_c9_7 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_7')); ?>
                @if(count($files_c9_7))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('七')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_7 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_7&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('七')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                <?php $files_c9_8 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_8')); ?>
                @if(count($files_c9_8))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('八')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_8 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_8&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('八')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                <?php $files_c9_9 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c9_9')); ?>
                @if(count($files_c9_9))
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('九')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <br>
                    @foreach($files_c9_9 as $v)
                        <?php $file_path = $year->year."&".auth()->user()->code."&c9_9&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
                        <br>
                    @endforeach
                @else
                    <a href="javascript:open_upload('{{ route('schools.c9_upload',['select_year'=>$year->year,'order'=>'c9','grade'=>cht2num('九')]) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endif
    </tr>
</table>
