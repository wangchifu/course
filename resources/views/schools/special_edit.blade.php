@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','編寫特教課程計畫')

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
                    <li class="breadcrumb-item active" aria-current="page">編輯年度特教課程計畫</li>
                </ol>
            </nav>
            <h1>{{ auth()->user()->school }} {{ $select_year }} 學年度特教課程計畫</h1>
        </div>
        <?php
            $c13_bg = null;
            $c13_text = null;
            $c13_1_bg = null;
            $c13_1_text = null;
            $c13_2_bg = null;
            $c13_2_text = null;
            $c13_3_bg = null;
            $c13_3_text = null;

            if($course->special_suggest){
                $c13_bg = ($course->special_suggest->c13_pass===0)?"#FF8888":null;
                $c13_text = ($course->special_suggest->c13_pass===0)?"不符合":null;
                $c13_1_bg = ($course->special_suggest->c13_1_pass===0)?"#FF8888":null;
                $c13_1_text = ($course->special_suggest->c13_1_pass===0)?"不符合":null;
                $c13_2_bg = ($course->special_suggest->c13_2_pass===0)?"#FF8888":null;
                $c13_2_text = ($course->special_suggest->c13_2_pass===0)?"不符合":null;
                $c13_3_bg = ($course->special_suggest->c13_3_pass===0)?"#FF8888":null;
                $c13_3_text = ($course->special_suggest->c13_3_pass===0)?"不符合":null;
            }
        ?>
        <div class="col-md-12">
            <div class="row title-div">
                <div class="col-12">
                    <h3>
                        肆、附件（第4部分，共4部分）
                    </h3>
                </div>
            </div>
            <br>
            <div class="row custom-div">
                <div class="col-12">
                    @include('schools.c13')
                </div>

                <hr class="col-11">

                <div class="col-2">

                </div>
                <div class="col-10">
                    @include('schools.c13_1')
                    <hr>
                    @include('schools.c13_2')
                    <hr>
                    @include('schools.c13_3')
                </div>
            </div>
            <br>
            <a href="#" class="btn btn-secondary btn-sm" onclick="history.back()"><i class="fas fa-backward"></i> 返回</a>
        </div>
    </div>
</div>
<script>
    function open_upload(url,name)
    {
        window.open(url,name,'statusbar=no,scrollbars=yes,status=yes,resizable=yes,width=900,height=180');
    }
</script>
@endsection
