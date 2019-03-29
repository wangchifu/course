<div class="centent-div" style="background-color: {{ $c13_2_bg }}">
    @if($course->c13_2)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-warning"></i>
    @endif
    12-2 特殊類型教育課程「資賦優異類」課程計畫(非必填)
    <br>
    {{ $c13_2_text }}
</div>
<br>
@if($course->c13_2)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c13_2']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c13_2']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c13_2.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c13_2']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c13_2']) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
