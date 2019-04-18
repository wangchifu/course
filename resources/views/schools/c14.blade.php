<div class="section-div">
    十三.其他資料（補充），如學生在同一學習階段使用不同版本之銜接計畫、全校學生每日作息時間表、學校年度重大活動行事曆、其他課程發展委員會議紀錄，或學校課程發展歷程、課程計畫檢核表等資料。(非必填)
</div>
<br>
<?php $files_c14 = get_files(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c14')); ?>
@if(count($files_c14))
    @foreach($files_c14 as $v)
        <?php $file_path = $year->year."&".auth()->user()->code."&c14&".$v; ?>
        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
        <a href="{{ route('schools.delfile2',$file_path) }}" onclick="return confirm('確定刪除嗎？')"><i class="far fa-trash-alt text-info"></i></a>
        <br>
    @endforeach
    <a href="javascript:open_upload('{{ route('schools.c14_upload',['select_year'=>$year->year]) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
@else
    <a href="javascript:open_upload('{{ route('schools.c14_upload',['select_year'=>$year->year]) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif

