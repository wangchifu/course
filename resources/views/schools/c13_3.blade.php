<div class="centent-div" style="background-color: {{ $c13_3_bg }}">
    @if($course->c13_3)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-warning"></i>
    @endif
    13-3 特殊類型教育課程「藝術才能班」課程計畫(非必填)
    <br>
    {{ $c13_3_text }}
</div>
<br>
@if($course->c13_3)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c13_3']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c13_3']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c13_3.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c13_3']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c13_3']) }}','新視窗')" class="badge badge-warning check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
