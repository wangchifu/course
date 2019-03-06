<div class="section-div" style="background-color: {{ $c13_bg }}">
    @if($course->c13)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-warning"></i>
    @endif
    十二.特殊教育推動委員會({{ $select_year-1 }}學年度下學期期末會議紀錄及簽到表)(非必填)
    <br>
    {{ $c13_text }}
</div>
<br>
@if($course->c13)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c13']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c13']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c13.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c13']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c13']) }}','新視窗')" class="badge badge-warning check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
