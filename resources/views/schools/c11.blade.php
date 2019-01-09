<div class="section-div" style="background-color: {{ $c11_bg }}">
    @if($course->c11)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    11.節數分配表<br>
    各年級各領域/科目及各彈性學習課程名稱及節數符合課綱規定，並彙整成表格。（學校將表3-1列印，核章後上傳）
    <br>
    {{ $c11_text }}
</div>
<br>
@if($course->c11)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c11']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c11']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c11.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c11']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c11']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
