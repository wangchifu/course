<div class="centent-div" style="background-color: {{ $c4_bg }}">
    @if($course->c4)
    <i class="fas fa-check-circle text-success"></i>
    @else
    <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    4-1 課程評鑑應包含對課程設計、實施與效果之內容自我檢視<br>
    @if($course->c4)
    <i class="fas fa-check-circle text-success"></i>
    @else
    <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    4-2 包含回饋與修正之可行策略<br>(請依彰化縣國民中小學課程評鑑要點實施課程評鑑，上傳上學年度課程評鑑檢核表結果)
    <br>
    {{ $c4_text }}
</div>
<br>
@if($course->c4)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c4']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 已傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c4']) }}" class="btn btn-primary btn-sm">
        <i class="fas fa-download"></i> 下載c4.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c4']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c4']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
