@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','編寫課程計畫')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('schools.index') }}">學校專區</a></li>
                    <li class="breadcrumb-item active" aria-current="page">編輯年度課程計畫</li>
                </ol>
            </nav>
            <h5 class="text-info">完成後，請按最下方「確認送出審查」</h5>
            <h1>{{ auth()->user()->school }} {{ $select_year }} 學年度課程計畫</h1>
        </div>
        <?php
            $c1_1_bg = null;
            $c1_1_text = null;
            $c1_2_bg = null;
            $c1_2_text = null;
            $c2_bg = null;
            $c2_text = null;
            $c3_1_bg = null;
            $c3_1_text = null;
            $c3_2_bg = null;
            $c3_2_text = null;
            $c3_3_bg = null;
            $c3_3_text = null;
            $c4_bg = null;
            $c4_text = null;
            $c6_bg = null;
            $c6_text = null;
            $c7_1_bg = null;
            $c7_1_text = null;
            $c7_2_bg = null;
            $c7_2_text = null;
            $c8_1_bg = null;
            $c8_1_text = null;
            $c8_2_bg = null;
            $c8_2_text = null;
            $c9_bg = null;
            $c9_text = null;
            $c10_1_bg = null;
            $c10_1_text = null;
            $c10_2_bg = null;
            $c10_2_text = null;
            $c11_bg = null;
            $c11_text = null;
            $c12_bg = null;
            $c12_text = null;
            $c13_bg = null;
            $c13_text = null;
            $c13_1_bg = null;
            $c13_1_text = null;
            $c13_2_bg = null;
            $c13_2_text = null;
            $c13_3_bg = null;
            $c13_3_text = null;
            if($course->first_suggest1){
                if(!$course->first_suggest2){
                    $c1_1_bg = ($course->first_suggest1->c1_1_pass===0)?"#FF8888":null;
                    $c1_1_text = ($course->first_suggest1->c1_1_pass===0)?"不符合":null;
                    $c1_2_bg = ($course->first_suggest1->c1_2_pass===0)?"#FF8888":null;
                    $c1_2_text = ($course->first_suggest1->c1_2_pass===0)?"不符合":null;
                    $c2_bg = ($course->first_suggest1->c2_pass===0)?"#FF8888":null;
                    $c2_text = ($course->first_suggest1->c2_pass===0)?"不符合":null;
                    $c3_1_bg = ($course->first_suggest1->c3_1_pass===0)?"#FF8888":null;
                    $c3_1_text = ($course->first_suggest1->c3_1_pass===0)?"不符合":null;
                    $c3_2_bg = ($course->first_suggest1->c3_2_pass===0)?"#FF8888":null;
                    $c3_2_text = ($course->first_suggest1->c3_2_pass===0)?"不符合":null;
                    $c3_3_bg = ($course->first_suggest1->c3_3_pass===0)?"#FF8888":null;
                    $c3_3_text = ($course->first_suggest1->c3_3_pass===0)?"不符合":null;
                    $c4_bg = ($course->first_suggest1->c4_pass===0)?"#FF8888":null;
                    $c4_text = ($course->first_suggest1->c4_pass===0)?"不符合":null;
                    $c6_bg = ($course->first_suggest1->c6_pass===0)?"#FF8888":null;
                    $c6_text = ($course->first_suggest1->c6_pass===0)?"不符合":null;
                    $c7_1_bg = ($course->first_suggest1->c7_1_pass===0)?"#FF8888":null;
                    $c7_1_text = ($course->first_suggest1->c7_1_pass===0)?"不符合":null;
                    $c7_2_bg = ($course->first_suggest1->c7_2_pass===0)?"#FF8888":null;
                    $c7_2_text = ($course->first_suggest1->c7_2_pass===0)?"不符合":null;
                    $c8_1_bg = ($course->first_suggest1->c8_1_pass===0)?"#FF8888":null;
                    $c8_1_text = ($course->first_suggest1->c8_1_pass===0)?"不符合":null;
                    $c8_2_bg = ($course->first_suggest1->c8_2_pass===0)?"#FF8888":null;
                    $c8_2_text = ($course->first_suggest1->c8_2_pass===0)?"不符合":null;
                    $c9_bg = ($course->first_suggest1->c9_pass===0)?"#FF8888":null;
                    $c9_text = ($course->first_suggest1->c9_pass===0)?"不符合":null;
                    $c10_1_bg = ($course->first_suggest1->c10_1_pass===0)?"#FF8888":null;
                    $c10_1_text = ($course->first_suggest1->c10_1_pass===0)?"不符合":null;
                    $c10_2_bg = ($course->first_suggest1->c10_2_pass===0)?"#FF8888":null;
                    $c10_2_text = ($course->first_suggest1->c10_2_pass===0)?"不符合":null;
                    $c11_bg = ($course->first_suggest1->c11_pass===0)?"#FF8888":null;
                    $c11_text = ($course->first_suggest1->c11_pass===0)?"不符合":null;
                    $c12_bg = ($course->first_suggest1->c12_pass===0)?"#FF8888":null;
                    $c12_text = ($course->first_suggest1->c12_pass===0)?"不符合":null;
                }
            }
        if($course->first_suggest2){
            if(!$course->first_suggest3){
                $c1_1_bg = ($course->first_suggest2->c1_1_pass===0)?"#FF8888":null;
                $c1_1_text = ($course->first_suggest2->c1_1_pass===0)?"不符合":null;
                $c1_2_bg = ($course->first_suggest2->c1_2_pass===0)?"#FF8888":null;
                $c1_2_text = ($course->first_suggest2->c1_2_pass===0)?"不符合":null;
                $c2_bg = ($course->first_suggest2->c2_pass===0)?"#FF8888":null;
                $c2_text = ($course->first_suggest2->c2_pass===0)?"不符合":null;
                $c3_1_bg = ($course->first_suggest2->c3_1_pass===0)?"#FF8888":null;
                $c3_1_text = ($course->first_suggest2->c3_1_pass===0)?"不符合":null;
                $c3_2_bg = ($course->first_suggest2->c3_2_pass===0)?"#FF8888":null;
                $c3_2_text = ($course->first_suggest2->c3_2_pass===0)?"不符合":null;
                $c3_3_bg = ($course->first_suggest2->c3_3_pass===0)?"#FF8888":null;
                $c3_3_text = ($course->first_suggest2->c3_3_pass===0)?"不符合":null;
                $c4_bg = ($course->first_suggest2->c4_pass===0)?"#FF8888":null;
                $c4_text = ($course->first_suggest2->c4_pass===0)?"不符合":null;
                $c6_bg = ($course->first_suggest2->c6_pass===0)?"#FF8888":null;
                $c6_text = ($course->first_suggest2->c6_pass===0)?"不符合":null;
                $c7_1_bg = ($course->first_suggest2->c7_1_pass===0)?"#FF8888":null;
                $c7_1_text = ($course->first_suggest2->c7_1_pass===0)?"不符合":null;
                $c7_2_bg = ($course->first_suggest2->c7_2_pass===0)?"#FF8888":null;
                $c7_2_text = ($course->first_suggest2->c7_2_pass===0)?"不符合":null;
                $c8_1_bg = ($course->first_suggest2->c8_1_pass===0)?"#FF8888":null;
                $c8_1_text = ($course->first_suggest2->c8_1_pass===0)?"不符合":null;
                $c8_2_bg = ($course->first_suggest2->c8_2_pass===0)?"#FF8888":null;
                $c8_2_text = ($course->first_suggest2->c8_2_pass===0)?"不符合":null;
                $c9_bg = ($course->first_suggest2->c9_pass===0)?"#FF8888":null;
                $c9_text = ($course->first_suggest2->c9_pass===0)?"不符合":null;
                $c10_1_bg = ($course->first_suggest2->c10_1_pass===0)?"#FF8888":null;
                $c10_1_text = ($course->first_suggest2->c10_1_pass===0)?"不符合":null;
                $c10_2_bg = ($course->first_suggest2->c10_2_pass===0)?"#FF8888":null;
                $c10_2_text = ($course->first_suggest2->c10_2_pass===0)?"不符合":null;
                $c11_bg = ($course->first_suggest2->c11_pass===0)?"#FF8888":null;
                $c11_text = ($course->first_suggest2->c11_pass===0)?"不符合":null;
                $c12_bg = ($course->first_suggest2->c12_pass===0)?"#FF8888":null;
                $c12_text = ($course->first_suggest2->c12_pass===0)?"不符合":null;
            }
        }
        if($course->first_suggest3){
            $c1_1_bg = ($course->first_suggest3->c1_1_pass===0)?"#FF8888":null;
            $c1_1_text = ($course->first_suggest3->c1_1_pass===0)?"不符合":null;
            $c1_2_bg = ($course->first_suggest3->c1_2_pass===0)?"#FF8888":null;
            $c1_2_text = ($course->first_suggest3->c1_2_pass===0)?"不符合":null;
            $c2_bg = ($course->first_suggest3->c2_pass===0)?"#FF8888":null;
            $c2_text = ($course->first_suggest3->c2_pass===0)?"不符合":null;
            $c3_1_bg = ($course->first_suggest3->c3_1_pass===0)?"#FF8888":null;
            $c3_1_text = ($course->first_suggest3->c3_1_pass===0)?"不符合":null;
            $c3_2_bg = ($course->first_suggest3->c3_2_pass===0)?"#FF8888":null;
            $c3_2_text = ($course->first_suggest3->c3_2_pass===0)?"不符合":null;
            $c3_3_bg = ($course->first_suggest3->c3_3_pass===0)?"#FF8888":null;
            $c3_3_text = ($course->first_suggest3->c3_3_pass===0)?"不符合":null;
            $c4_bg = ($course->first_suggest3->c4_pass===0)?"#FF8888":null;
            $c4_text = ($course->first_suggest3->c4_pass===0)?"不符合":null;
            $c6_bg = ($course->first_suggest3->c6_pass===0)?"#FF8888":null;
            $c6_text = ($course->first_suggest3->c6_pass===0)?"不符合":null;
            $c7_1_bg = ($course->first_suggest3->c7_1_pass===0)?"#FF8888":null;
            $c7_1_text = ($course->first_suggest3->c7_1_pass===0)?"不符合":null;
            $c7_2_bg = ($course->first_suggest3->c7_2_pass===0)?"#FF8888":null;
            $c7_2_text = ($course->first_suggest3->c7_2_pass===0)?"不符合":null;
            $c8_1_bg = ($course->first_suggest3->c8_1_pass===0)?"#FF8888":null;
            $c8_1_text = ($course->first_suggest3->c8_1_pass===0)?"不符合":null;
            $c8_2_bg = ($course->first_suggest3->c8_2_pass===0)?"#FF8888":null;
            $c8_2_text = ($course->first_suggest3->c8_2_pass===0)?"不符合":null;
            $c9_bg = ($course->first_suggest3->c9_pass===0)?"#FF8888":null;
            $c9_text = ($course->first_suggest3->c9_pass===0)?"不符合":null;
            $c10_1_bg = ($course->first_suggest3->c10_1_pass===0)?"#FF8888":null;
            $c10_1_text = ($course->first_suggest3->c10_1_pass===0)?"不符合":null;
            $c10_2_bg = ($course->first_suggest3->c10_2_pass===0)?"#FF8888":null;
            $c10_2_text = ($course->first_suggest3->c10_2_pass===0)?"不符合":null;
            $c11_bg = ($course->first_suggest3->c11_pass===0)?"#FF8888":null;
            $c11_text = ($course->first_suggest3->c11_pass===0)?"不符合":null;
            $c12_bg = ($course->first_suggest3->c12_pass===0)?"#FF8888":null;
            $c12_text = ($course->first_suggest3->c12_pass===0)?"不符合":null;
        }
        if($course->special_suggest13){
            $c13_bg = ($course->special_suggest13->c13_pass===0)?"#FF8888":null;
            $c13_text = ($course->special_suggest13->c13_pass===0)?"不符合":null;
        }
        if($course->special_suggest13_1){
            $c13_1_bg = ($course->special_suggest13_1->c13_1_pass===0)?"#FF8888":null;
            $c13_1_text = ($course->special_suggest13_1->c13_1_pass===0)?"不符合":null;
        }
        if($course->special_suggest13_2){
            $c13_2_bg = ($course->special_suggest13_2->c13_2_pass===0)?"#FF8888":null;
            $c13_2_text = ($course->special_suggest13_2->c13_2_pass===0)?"不符合":null;
        }
        if($course->special_suggest13_3){
            $c13_3_bg = ($course->special_suggest13_3->c13_3_pass===0)?"#FF8888":null;
            $c13_3_text = ($course->special_suggest13_3->c13_3_pass===0)?"不符合":null;
        }
        ?>
        @include('schools.b1')
        <hr class="col-12">
        @include('schools.b2')
        <hr class="col-12">
        @include('schools.b3')
        <hr class="col-12">
        @include('schools.b4')
    </div>
    <div class="row">
        <form action="{{ route('schools.submit') }}" method="post" onsubmit="return false" id="form_submit">
            @csrf
            <input type="hidden" name="select_year" value="{{ $select_year }}">
            <br>
            <a href="#" class="btn btn-secondary btn-sm" onclick="history.back()"><i class="fas fa-backward"></i> 返回</a>
            <button type="submit" class="btn btn-danger btn-sm" onclick="check_red()">以上確認不再更改，送出審查！</button>
        </form>
    </div>
</div>
<script>
    <!--
    function open_upload(url,name)
    {
        window.open(url,name,'statusbar=no,scrollbars=yes,status=yes,resizable=yes,width=900,height=180');
    }
    function check_red(){
        var numItems = $('.check_red').length;
        if(confirm('送出後，無法再更改！您確定嗎?')){
            if(numItems>0){
                alert('有必填題目未填！');
                return false;
            }else{
                document.getElementById('form_submit').submit();
            }
        }else{
            return false;
        }
    }
    // -->
</script>
@endsection
