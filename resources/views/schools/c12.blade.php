<div class="section-div" style="background-color: {{ $c12_bg }}">
    @if($course->c12)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-danger check_red"></i>
    @endif
    十一.校長及教師公開授課<br>
    校長及所有專任教師依課程綱要規定每學年至少進行一次公開授課活動，其進行方式與內容能促進教學專業發展。
    學校須擬定實施計畫與每年規劃公開課期程表。
    <br>
    {{ $c12_text }}
</div>
<br>
@if($course->c12)
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c12']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c12']) }}" class="badge badge-primary">
        <i class="fas fa-download"></i> 下載c12.pdf</a>
    <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c12']) }}" onclick="return confirm('確定刪除？')">
        <i class="far fa-trash-alt text-info"></i></a>
@else
    <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c12']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
@endif
