<div class="centent-div" style="background-color: {{ $c10_1_bg }}">
    @if($course->c10_1)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    10-1 學校課程發展委員會組織要點符合課程綱要規定，成員符合規定。
    <br>
    {{ $c10_1_text }}
</div>
<br>
@if($course->c10_1)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_1']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_1']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c10_1.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_1']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_1']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
