<div class="centent-div" style="background-color: {{ $c3_3_bg }}">
    @if($course->c3_3)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    3-3 畢業考／會考後課程活動之規劃安排
    <br>
    {{ $c3_3_text }}
</div>
<br>
@if($course->c3_3)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c3_3']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再上傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c3_3']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c3_3.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c3_3']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c3_3']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
