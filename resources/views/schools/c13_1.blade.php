<div class="centent-div" style="background-color: {{ $c13_1_bg }}">
    @if($course->c13_1)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-warning"></i>
    @endif
    12-1 特殊類型教育課程「身心障礙類」課程計畫(非必填)
    <br>
    {{ $c13_1_text }}
</div>
<br>
@if($course->c13_1)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c13_1']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c13_1']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c13_1.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c13_1']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c13_1']) }}','新視窗')" class="badge badge-warning"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
