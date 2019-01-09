<div class="centent-div" style="background-color: {{ $c3_2_bg }}">
    @if($course->c3_2)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    3-2 法律規定教育議題實施規劃
    <br>
    {{ $c3_2_text }}
</div>
<br>
@if($course->c3_2)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c3_2']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再上傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c3_2']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c3_2.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c3_2']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c3_2']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
