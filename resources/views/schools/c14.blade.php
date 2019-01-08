<div class="section-div">
    14.其他資料（補充），如學生在同一學習階段使用不同版本之銜接計畫、全校學生每日作息時間表、學校年度重大活動行事曆、其他課程發展委員會議紀錄，或學校課程發展歷程等資料。(非必填)
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
@endif
{{ Form::open(['route'=>'schools.c14_store','method'=>'post','files'=>true]) }}
<input type="file" name="files[]" required multiple>
<input type="hidden" name="select_year" value="{{ $year->year }}">
<input type="hidden" name="order" value="c14">
<button type="submit" onclick="return confirm('確定？')">上傳</button><small class="text-secondary">(多選，限PDF檔)</small>
{{ Form::close() }}
