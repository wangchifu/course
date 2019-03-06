<div class="centent-div" style="background-color: {{ $c8_2_bg }}">
    @if($course->c8_2)
        <i class="fas fa-check-circle text-success"></i>
    @else
        <i class="fas fa-times-circle text-warning"></i>
    @endif
    7-2 自編教材依課程綱要規定，經學校課發會審查通過。(非必填)
    <br>
    {{ $c8_2_text }}
</div>
<br>
<?php
if($course->c8_2 == "1"){
    $check_c8_2_1 = "";
    $check_c8_2_2 = "checked";
}elseif($course->c8_2 == "-1" or $course->c8_2 == null){
    $check_c8_2_1 = "checked";
    $check_c8_2_2 = "";
}
?>
{{ Form::open(['route'=>'schools.c8_2_store','method'=>'post','files'=>true]) }}
<table border="1">
    <tr>
        <td>
            <input type="radio" name="check_c8_2" id="c8_2-1" value="-1" {{ $check_c8_2_1 }} onclick="change_required2(-1)"> <label for="c8_2-1" onclick="change_required2(-1)">無 自編教材</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="check_c8_2" id="c8_2-2" value="1" {{ $check_c8_2_2 }} onclick="change_required2(1)"> <label for="c8_2-2" onclick="change_required2(1)"><strong class="text-primary">有</strong> 自編教育，上傳課發會審查紀錄</label>
            <br>
            <input type="file" name="files[]" id="file_c8_2">
            @if($course->c8_2==1)
                <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c8_2']) }}" class="badge badge-primary"><i class="fas fa-download"></i> 下載c8_2.pdf</a>
                <a href="{{ route('schools.delfile',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c8_2']) }}" onclick="return confirm('確定刪除？')"><i class="far fa-trash-alt text-info"></i></a>
            @endif
        </td>
    </tr>
</table>
<script>
    function change_required2(c){
        if(c==1){
            document.getElementById('file_c8_2').required = true;
        }
        if(c==-1){
            document.getElementById('file_c8_2').required = false;
        }
    }
</script>
<br>
<input type="hidden" name="select_year" value="{{ $year->year }}">
<input type="hidden" name="order" value="c8_2">
<button type="submit" onclick="return confirm('確定？')">送出</button>
{{ Form::close() }}
