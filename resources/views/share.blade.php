@extends('layouts.master',['bg'=>'bg-dark'])

@section('title','課程計畫分享')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>
                    <img src="{{ asset('images/sharing-content.svg') }}" height="24">
                    課程計畫分享
                </h2>
                <div class="card">
                    <div class="card-header">
                        <h5>
                            <table>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/check.svg') }}" height="24">
                                    </td>
                                    <td>
                                        選擇年度：
                                    </td>
                                    <td>
                                        {{ Form::open(['route'=>'share','method'=>'post']) }}
                                        {{ Form::select('year',$years,$select_year,['onchange'=>'submit()']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            </table>
                        </h5>
                    </div>
                    <div class="card-body">
                        <h4><i class="fab fa-fort-awesome"></i> 彰化市</h4>
                        <a href="{{ url('share/'.$select_year.'/074308/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">彰化藝術高中(國中部)</a>
                        <a href="{{ url('share/'.$select_year.'/074505/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">陽明國中</a>
                        <a href="{{ url('share/'.$select_year.'/074506/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">彰安國中</a>
                        <a href="{{ url('share/'.$select_year.'/074507/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">彰德國中</a>
                        <a href="{{ url('share/'.$select_year.'/074538/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">彰興國中</a>
                        <a href="{{ url('share/'.$select_year.'/074540/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">彰泰國中</a>
                        <a href="{{ url('share/'.$select_year.'/074541/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">信義國中小(國中部)</a>
                        <a href="{{ url('share/'.$select_year.'/074601/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">中山國小</a>
                        <a href="{{ url('share/'.$select_year.'/074602/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">民生國小</a>
                        <a href="{{ url('share/'.$select_year.'/074603/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">平和國小</a>
                        <a href="{{ url('share/'.$select_year.'/074604/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">南郭國小</a>
                        <a href="{{ url('share/'.$select_year.'/074605/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">南興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074606/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">東芳國小</a>
                        <a href="{{ url('share/'.$select_year.'/074607/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">泰和國小</a>
                        <a href="{{ url('share/'.$select_year.'/074608/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">三民國小</a>
                        <a href="{{ url('share/'.$select_year.'/074609/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">聯興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074610/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大竹國小</a>
                        <a href="{{ url('share/'.$select_year.'/074611/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">國聖國小</a>
                        <a href="{{ url('share/'.$select_year.'/074612/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">快官國小</a>
                        <a href="{{ url('share/'.$select_year.'/074613/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">石牌國小</a>
                        <a href="{{ url('share/'.$select_year.'/074614/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">忠孝國小</a>
                        <a href="{{ url('share/'.$select_year.'/074774/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">信義國(中)小(國小部)</a>
                        <a href="{{ url('share/'.$select_year.'/074775/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大成國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 芬園鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074509/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">芬園國中</a>
                        <a href="{{ url('share/'.$select_year.'/074615/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">芬園國小</a>
                        <a href="{{ url('share/'.$select_year.'/074616/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">富山國小</a>
                        <a href="{{ url('share/'.$select_year.'/074617/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">寶山國小</a>
                        <a href="{{ url('share/'.$select_year.'/074618/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">同安國小</a>
                        <a href="{{ url('share/'.$select_year.'/074619/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">文德國小</a>
                        <a href="{{ url('share/'.$select_year.'/074620/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">茄荖國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 花壇鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074526/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">花壇國中</a>
                        <a href="{{ url('share/'.$select_year.'/074621/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">花壇國小</a>
                        <a href="{{ url('share/'.$select_year.'/074622/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">文祥國小</a>
                        <a href="{{ url('share/'.$select_year.'/074623/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">華南國小</a>
                        <a href="{{ url('share/'.$select_year.'/074624/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">僑愛國小</a>
                        <a href="{{ url('share/'.$select_year.'/074625/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">三春國小</a>
                        <a href="{{ url('share/'.$select_year.'/074626/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">白沙國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 秀水鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074522/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">秀水國中</a>
                        <a href="{{ url('share/'.$select_year.'/074654/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">秀水國小</a>
                        <a href="{{ url('share/'.$select_year.'/074655/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">馬興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074656/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">華龍國小</a>
                        <a href="{{ url('share/'.$select_year.'/074657/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">明正國小</a>
                        <a href="{{ url('share/'.$select_year.'/074658/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">陝西國小</a>
                        <a href="{{ url('share/'.$select_year.'/074659/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">育民國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 鹿港鎮</h4>
                        <a href="{{ url('share/'.$select_year.'/074503/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">鹿鳴國中</a>
                        <a href="{{ url('share/'.$select_year.'/074502/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">鹿港國中</a>
                        <a href="{{ url('share/'.$select_year.'/074542/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">鹿江國中(小)</a>
                        <a href="{{ url('share/'.$select_year.'/074639/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">鹿港國小</a>
                        <a href="{{ url('share/'.$select_year.'/074640/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">文開國小</a>
                        <a href="{{ url('share/'.$select_year.'/074641/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">洛津國小</a>
                        <a href="{{ url('share/'.$select_year.'/074642/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">海埔國小</a>
                        <a href="{{ url('share/'.$select_year.'/074643/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">新興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074644/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">草港國小</a>
                        <a href="{{ url('share/'.$select_year.'/074645/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">頂番國小</a>
                        <a href="{{ url('share/'.$select_year.'/074646/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">東興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074771/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">鹿東國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 福興鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074521/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">福興國中</a>
                        <a href="{{ url('share/'.$select_year.'/074647/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">管嶼國小</a>
                        <a href="{{ url('share/'.$select_year.'/074648/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">文昌國小</a>
                        <a href="{{ url('share/'.$select_year.'/074649/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">西勢國小</a>
                        <a href="{{ url('share/'.$select_year.'/074650/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074651/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">永豐國小</a>
                        <a href="{{ url('share/'.$select_year.'/074652/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">日新國小</a>
                        <a href="{{ url('share/'.$select_year.'/074653/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">育新國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 線西鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074504/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">線西國中</a>
                        <a href="{{ url('share/'.$select_year.'/074633/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">線西國小</a>
                        <a href="{{ url('share/'.$select_year.'/074634/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">曉陽國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 和美鎮</h4>
                        <a href="{{ url('share/'.$select_year.'/074323/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">和美高中(國中部)</a>
                        <a href="{{ url('share/'.$select_year.'/074535/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">和群國中</a>
                        <a href="{{ url('share/'.$select_year.'/074627/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">和美國小</a>
                        <a href="{{ url('share/'.$select_year.'/074628/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">和東國小</a>
                        <a href="{{ url('share/'.$select_year.'/074629/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大嘉國小</a>
                        <a href="{{ url('share/'.$select_year.'/074630/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大榮國小</a>
                        <a href="{{ url('share/'.$select_year.'/074631/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">新庄國小</a>
                        <a href="{{ url('share/'.$select_year.'/074632/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">培英國小</a>
                        <a href="{{ url('share/'.$select_year.'/074769/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">和仁國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 伸港鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074524/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">伸港國中</a>
                        <a href="{{ url('share/'.$select_year.'/074635/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">新港國小</a>
                        <a href="{{ url('share/'.$select_year.'/074636/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">伸東國小</a>
                        <a href="{{ url('share/'.$select_year.'/074637/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">伸仁國小</a>
                        <a href="{{ url('share/'.$select_year.'/074638/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大同國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 員林市</h4>
                        <a href="{{ url('share/'.$select_year.'/074510/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">員林國中</a>
                        <a href="{{ url('share/'.$select_year.'/074511/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">明倫國中</a>
                        <a href="{{ url('share/'.$select_year.'/074536/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大同國中</a>
                        <a href="{{ url('share/'.$select_year.'/074680/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">員林國小</a>
                        <a href="{{ url('share/'.$select_year.'/074681/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">育英國小</a>
                        <a href="{{ url('share/'.$select_year.'/074682/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">靜修國小</a>
                        <a href="{{ url('share/'.$select_year.'/074683/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">僑信國小</a>
                        <a href="{{ url('share/'.$select_year.'/074684/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">員東國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074685/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">饒明國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074686/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">東山國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074687/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">青山國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074688/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">明湖國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 社頭鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074530/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">社頭國中</a>
                        <a href="{{ url('share/'.$select_year.'/074704/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">社頭國小</a>
                        <a href="{{ url('share/'.$select_year.'/074705/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">橋頭國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074706/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">朝興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074707/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">清水國小</a>
                        <a href="{{ url('share/'.$select_year.'/074708/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">湳雅國小</a>
                        <a href="{{ url('share/'.$select_year.'/074772/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">舊社國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074773/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">崙雅國小 </a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 永靖鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074527/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">永靖國中</a>
                        <a href="{{ url('share/'.$select_year.'/074693/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">永靖國小</a>
                        <a href="{{ url('share/'.$select_year.'/074694/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">福德國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074695/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">永興國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074696/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">福興國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074697/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">德興國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 埔心鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074520/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">埔心國中 </a>
                        <a href="{{ url('share/'.$select_year.'/074673/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">埔心國小</a>
                        <a href="{{ url('share/'.$select_year.'/074674/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">太平國小</a>
                        <a href="{{ url('share/'.$select_year.'/074675/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">舊館國小</a>
                        <a href="{{ url('share/'.$select_year.'/074676/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">羅厝國小</a>
                        <a href="{{ url('share/'.$select_year.'/074677/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">鳳霞國小</a>
                        <a href="{{ url('share/'.$select_year.'/074678/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">梧鳳國小</a>
                        <a href="{{ url('share/'.$select_year.'/074679/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">明聖國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 溪湖鎮</h4>
                        <a href="{{ url('share/'.$select_year.'/074518/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">溪湖國中</a>
                        <a href="{{ url('share/'.$select_year.'/074339/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">成功高中(國中部)</a>
                        <a href="{{ url('share/'.$select_year.'/074660/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">溪湖國小</a>
                        <a href="{{ url('share/'.$select_year.'/074661/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">東溪國小</a>
                        <a href="{{ url('share/'.$select_year.'/074662/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">湖西國小</a>
                        <a href="{{ url('share/'.$select_year.'/074663/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">湖東國小</a>
                        <a href="{{ url('share/'.$select_year.'/074664/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">湖南國小</a>
                        <a href="{{ url('share/'.$select_year.'/074665/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">媽厝國小</a>
                        <a href="{{ url('share/'.$select_year.'/074777/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">湖北國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 大村鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074525/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大村國中 </a>
                        <a href="{{ url('share/'.$select_year.'/074689/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大村國小</a>
                        <a href="{{ url('share/'.$select_year.'/074690/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大西國小</a>
                        <a href="{{ url('share/'.$select_year.'/074691/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">村上國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074692/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">村東國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 埔鹽鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074519/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">埔鹽國中</a>
                        <a href="{{ url('share/'.$select_year.'/074666/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">埔鹽國小</a>
                        <a href="{{ url('share/'.$select_year.'/074667/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大園國小</a>
                        <a href="{{ url('share/'.$select_year.'/074668/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">南港國小</a>
                        <a href="{{ url('share/'.$select_year.'/074669/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">好修國小</a>
                        <a href="{{ url('share/'.$select_year.'/074670/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">永樂國小</a>
                        <a href="{{ url('share/'.$select_year.'/074671/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">新水國小</a>
                        <a href="{{ url('share/'.$select_year.'/074672/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">天盛國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 田中鎮</h4>
                        <a href="{{ url('share/'.$select_year.'/074328/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">田中高中(國中部) </a>
                        <a href="{{ url('share/'.$select_year.'/074698/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">田中國小</a>
                        <a href="{{ url('share/'.$select_year.'/074699/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">三潭國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074700/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大安國小</a>
                        <a href="{{ url('share/'.$select_year.'/074701/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">內安國小</a>
                        <a href="{{ url('share/'.$select_year.'/074702/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">東和國小</a>
                        <a href="{{ url('share/'.$select_year.'/074703/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">明禮國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074776/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">新民國小 </a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 北斗鎮</h4>
                        <a href="{{ url('share/'.$select_year.'/074501/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">北斗國中</a>
                        <a href="{{ url('share/'.$select_year.'/074712/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">北斗國小</a>
                        <a href="{{ url('share/'.$select_year.'/074713/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">萬來國小</a>
                        <a href="{{ url('share/'.$select_year.'/074714/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">螺青國小</a>
                        <a href="{{ url('share/'.$select_year.'/074715/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大新國小</a>
                        <a href="{{ url('share/'.$select_year.'/074716/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">螺陽國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 田尾鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074531/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">田尾國中</a>
                        <a href="{{ url('share/'.$select_year.'/074717/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">田尾國小</a>
                        <a href="{{ url('share/'.$select_year.'/074718/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">南鎮國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074719/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">陸豐國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074720/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">仁豐國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 埤頭鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074534/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">埤頭國中</a>
                        <a href="{{ url('share/'.$select_year.'/074721/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">埤頭國小</a>
                        <a href="{{ url('share/'.$select_year.'/074722/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">合興國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074723/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">豐崙國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074724/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">芙朝國小</a>
                        <a href="{{ url('share/'.$select_year.'/074725/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">中和國小</a>
                        <a href="{{ url('share/'.$select_year.'/074726/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大湖國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 溪州鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074532/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">溪州國中</a>
                        <a href="{{ url('share/'.$select_year.'/074533/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">溪陽國中</a>
                        <a href="{{ url('share/'.$select_year.'/074727/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">溪州國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074728/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">僑義國小</a>
                        <a href="{{ url('share/'.$select_year.'/074729/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">三條國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074730/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">水尾國小</a>
                        <a href="{{ url('share/'.$select_year.'/074731/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">潮洋國小</a>
                        <a href="{{ url('share/'.$select_year.'/074732/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">成功國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074733/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">圳寮國小</a>
                        <a href="{{ url('share/'.$select_year.'/074734/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大莊國小</a>
                        <a href="{{ url('share/'.$select_year.'/074735/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">南州國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 竹塘鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074514/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">竹塘國中</a>
                        <a href="{{ url('share/'.$select_year.'/074753/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">竹塘國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074754/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">田頭國小</a>
                        <a href="{{ url('share/'.$select_year.'/074755/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">民靖國小</a>
                        <a href="{{ url('share/'.$select_year.'/074756/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">長安國小</a>
                        <a href="{{ url('share/'.$select_year.'/074757/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">土庫國小 </a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 二林鎮</h4>
                        <a href="{{ url('share/'.$select_year.'/074512/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">萬興國中</a>
                        <a href="{{ url('share/'.$select_year.'/074313/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">二林高中(國中部) </a>
                        <a href="{{ url('share/'.$select_year.'/074537/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">原斗國中</a>
                        <a href="{{ url('share/'.$select_year.'/074736/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">二林國小</a>
                        <a href="{{ url('share/'.$select_year.'/074737/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">興華國小</a>
                        <a href="{{ url('share/'.$select_year.'/074738/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">中正國小</a>
                        <a href="{{ url('share/'.$select_year.'/074739/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">育德國小</a>
                        <a href="{{ url('share/'.$select_year.'/074740/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">香田國小</a>
                        <a href="{{ url('share/'.$select_year.'/074741/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">廣興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074742/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">萬興國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074743/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">新生國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074744/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">中興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074745/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">原斗國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074746/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">萬合國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 大城鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074515/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大城國中</a>
                        <a href="{{ url('share/'.$select_year.'/074747/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">大城國小</a>
                        <a href="{{ url('share/'.$select_year.'/074748/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">永光國小</a>
                        <a href="{{ url('share/'.$select_year.'/074749/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">西港國小</a>
                        <a href="{{ url('share/'.$select_year.'/074750/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">美豐國小</a>
                        <a href="{{ url('share/'.$select_year.'/074751/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">頂庄國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074752/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">潭墘國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 芳苑鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074517/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">芳苑國中</a>
                        <a href="{{ url('share/'.$select_year.'/074516/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">草湖國中 </a>
                        <a href="{{ url('share/'.$select_year.'/074758/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">芳苑國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074759/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">後寮國小</a>
                        <a href="{{ url('share/'.$select_year.'/074760/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">民權國小</a>
                        <a href="{{ url('share/'.$select_year.'/074761/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">育華國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074762/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">草湖國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074763/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">建新國小</a>
                        <a href="{{ url('share/'.$select_year.'/074764/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">漢寶國小</a>
                        <a href="{{ url('share/'.$select_year.'/074765/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">王功國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074766/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">新寶國小</a>
                        <a href="{{ url('share/'.$select_year.'/074767/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">路上國小</a>
                        <hr>
                        <h4><i class="fab fa-fort-awesome"></i> 二水鄉</h4>
                        <a href="{{ url('share/'.$select_year.'/074318/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">二水國中 </a>
                        <a href="{{ url('share/'.$select_year.'/074709/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">二水國小 </a>
                        <a href="{{ url('share/'.$select_year.'/074710/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">復興國小</a>
                        <a href="{{ url('share/'.$select_year.'/074711/') }}" class="btn btn-light btn-sm" style="margin:3px" target="_blank">源泉國小</a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
