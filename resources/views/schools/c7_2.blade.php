<div class="centent-div">
    @if($course->c7_2)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-warning"></i>
    @endif
    7-2 協同教學之師資、時數規劃及實施過程具可行性、合理性。(非必填)
</div>
<br>
<?php
if($course->c7_2 == "1"){
    $check_c7_2_1 = "";
    $check_c7_2_2 = "checked";
}elseif($course->c7_2 == "-1" or $course->c7_2 == null){
    $check_c7_2_1 = "checked";
    $check_c7_2_2 = "";
}
?>
{{ Form::open(['route'=>'schools.c7_2_store','method'=>'post','files'=>true]) }}
<table border="1">
    <tr>
        <td>
            <input type="radio" name="check_c7_2" id="c7_2-1" value="-1" {{ $check_c7_2_1 }} onclick="change_required(-1)"> <label for="c7_2-1" onclick="change_required(-1)">無 實施協同教學</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="check_c7_2" id="c7_2-2" value="1" {{ $check_c7_2_2 }} onclick="change_required(1)"> <label for="c7_2-2" onclick="change_required(1)"><strong class="text-primary">有</strong> 實施協同教學</label>
            <br>
            <input type="file" name="files[]" id="file_c7_2">
            @if($course->c7_2==1)
                <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_2']) }}" class="badge badge-primary"><i class="fas fa-download"></i> 下載c7_2.pdf</a>
                <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_2']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
            @endif
        </td>
    </tr>
</table>
<script>
    function change_required(c){
        if(c==1){
            document.getElementById('file_c7_2').required = true;
        }
        if(c==-1){
            document.getElementById('file_c7_2').required = false;
        }
    }
</script>
<br>
<input type="hidden" name="select_year" value="{{ $year->year }}">
<input type="hidden" name="order" value="c7_2">
<button type="submit" onclick="return confirm('確定？')">送出</button>
{{ Form::close() }}
