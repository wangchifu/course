<div class="centent-div" style="background-color: {{ $c7_1_bg }}">
    6-1 跨領域/科目課程單元/主題，其課程統整須能有效促成相關領域/科目核心素養及精熟學習重點。(非必填)
    <br>
    {{ $c7_1_text }}
</div>
<br>
<table border="1">
    <tr>
        <td>
            年級
        </td>
        @if(auth()->user()->group_id==1)
        <td>
            一年級
        </td>
        <td>
            二年級
        </td>
        <td>
            三年級
        </td>
        <td>
            四年級
        </td>
        <td>
            五年級
        </td>
        <td>
            六年級
        </td>
        @else
            <td>
                七年級
            </td>
            <td>
                八年級
            </td>
            <td>
                九年級
            </td>
        @endif
    </tr>
    <tr>
        <td>
            跨領域/科目課程單元/主題
        </td>
        @if(auth()->user()->group_id==1)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_1.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('一')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_1']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_1']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('一')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_2.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('二')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_2']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_2']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('二')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_3.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('三')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_3']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_3']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('三')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_4.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('四')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_4']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_4']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('四')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_5.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('五')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_5']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_5']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('五')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_6.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('六')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_6']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_6']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('六')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @else
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_7.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('七')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_7']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_7']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('七')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_8.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('八')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_8']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_8']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('八')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_9.pdf')))
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('九')]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_9']) }}"><i class="fas fa-download"></i></a>
                    <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_9']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
                @else
                    <a href="javascript:open_upload('{{ route('schools.c7_1_upload',['select_year'=>$year->year,'order'=>'c7_1','grade'=>cht2num('九')]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
                @endif
            </td>
        @endif
    </tr>
</table>
