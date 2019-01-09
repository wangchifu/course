<div class="centent-div" style="background-color: {{ $c2_bg }}">
    @if($course->c2)
    <i class="fas fa-check-circle text-success"></i>
    @else
    <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    2-1 學校課程願景<br>
    @if($course->c2)
    <i class="fas fa-check-circle text-success"></i>
    @else
    <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    2-2 依學校課程願景擬定課程目標與發展重點
    <br>
    {{ $c2_text }}
</div>
<br>
@if($course->c2)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c2']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再上傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c2']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c2.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c2']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c2']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
