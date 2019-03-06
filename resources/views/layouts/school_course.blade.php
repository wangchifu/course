<?php
    //需要  $course $select_year $school_code $school_name $school_group
    $year = \App\Year::where('year',$select_year)
        ->first();
    $year9 = [];
    $year12= [];
    //九年一貫的年級有哪一些
    if($school_group==1){
        if($year->e1 == '9year'){
            $year9[] = "一";
        }else{
            $year12[] = "一";
        }
        if($year->e2 == '9year'){
            $year9[] = "二";
        }else{
            $year12[] = "二";
        }
        if($year->e3 == '9year'){
            $year9[] = "三";
        }else{
            $year12[] = "三";
        }
        if($year->e4 == '9year'){
            $year9[] = "四";
        }else{
            $year12[] = "四";
        }
        if($year->e5 == '9year'){
            $year9[] = "五";
        }else{
            $year12[] = "五";
        }
        if($year->e6 == '9year'){
            $year9[] = "六";
        }else{
            $year12[] = "六";
        }
    }elseif($school_group==2){
        if($year->j1 == '9year'){
            $year9[] = "一";
        }else{
            $year12[] = "一";
        }
        if($year->j2 == '9year'){
            $year9[] = "二";
        }else{
            $year12[] = "二";
        }
        if($year->j3 == '9year'){
            $year9[] = "三";
        }else{
            $year12[] = "三";
        }
    }



    //c3_1有無已經儲存過了
    $sections = \App\C31Table::where('year',$select_year)
        ->where('school_code',$school_code)
        ->get();
    //查出已存過的各節數
    $has_section = [];
    foreach($sections as $section){
        $has_section[$section->grade]['mandarin'] = $section->mandarin;
        $has_section[$section->grade]['dialects'] = $section->dialects;
        $has_section[$section->grade]['english'] = $section->english;
        $has_section[$section->grade]['mathematics'] = $section->mathematics;
        $has_section[$section->grade]['life_curriculum'] = $section->life_curriculum;
        $has_section[$section->grade]['social_studies'] = $section->social_studies;
        $has_section[$section->grade]['science_technology'] = $section->science_technology;
        $has_section[$section->grade]['science'] = $section->science;
        $has_section[$section->grade]['arts_humanities'] = $section->arts_humanities;
        $has_section[$section->grade]['integrative_activities'] = $section->integrative_activities;
        $has_section[$section->grade]['technology'] = $section->technology;
        $has_section[$section->grade]['health_physical'] = $section->health_physical;
        $has_section[$section->grade]['alternative'] = $section->alternative;

    }

    //c8_1有無已經儲存過教科書版本了
    $books = \App\C81Table::where('year',$select_year)
        ->where('school_code',$school_code)
        ->get();
    //查出已存過的各版本
    $has_book = [];
    foreach($books as $book){
        $has_book[$book->grade]['mandarin_book'] = $book->mandarin_book;
        $has_book[$book->grade]['dialects_book'] = $book->dialects_book;
        $has_book[$book->grade]['english_book'] = $book->english_book;
        $has_book[$book->grade]['mathematics_book'] = $book->mathematics_book;
        $has_book[$book->grade]['life_curriculum_book'] = $book->life_curriculum_book;
        $has_book[$book->grade]['social_studies_book'] = $book->social_studies_book;
        $has_book[$book->grade]['science_technology_book'] = $book->science_technology_book;
        $has_book[$book->grade]['science_book'] = $book->science_book;
        $has_book[$book->grade]['arts_humanities_book'] = $book->arts_humanities_book;
        $has_book[$book->grade]['integrative_activities_book'] = $book->integrative_activities_book;
        $has_book[$book->grade]['technology_book'] = $book->technology_book;
        $has_book[$book->grade]['health_physical_book'] = $book->health_physical_book;
    }
?>
<div style="border:1px solid #96c2f1;background:#eff7ff;padding: 10px;">
<h1>{{ $school_name }} {{ $select_year }} 學年度課程計畫</h1>
    <table border="1">
        <tr bgcolor="#cccccc">
            <td>
                壹
            </td>
            <td>
                學校課程總體架構
            </td>
            <td width="90">
                狀況
            </td>
            @yield('td')
        </tr>
        <tr>
            <td colspan="3">
                1.學校現況與背景分析
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                1-1 描述學校現況與人力資源（至少含教師與學生數等）
            </td>
            <td>
                @if($course->c1_1)
                    <?php $file_path = $select_year.'&'.$school_code.'&c1_1'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c1_1')
        </tr>
        <tr>
            <td>

            </td>
            <td>
                1-2 盤點分析學校課程發展的優劣條件、機會與威脅
            </td>
            <td>
                @if($course->c1_2)
                    <?php $file_path = $select_year.'&'.$school_code.'&c1_2'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c1_2')
        </tr>
        <tr>
            <td colspan="3">
                2.課程願景與目標
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                2-1 學校課程願景<br>
                2-2 依學校課程願景擬定課程目標與發展重點
            </td>
            <td>
                @if($course->c2)
                    <?php $file_path = $select_year.'&'.$school_code.'&c2'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c2')
        </tr>
        <tr>
            <td colspan="3">
                3.課程架構
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                3-1 學校課程節數
            </td>
            <td>
                @if($course->c3_1)
                    <span class="text-primary">已儲存</span>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c3_1')
        </tr>
        @if($course->c3_1)
        <tr>
            <td></td>
            <td colspan="2">
                <table>
                    <tr>
                        @if($school_group==1)
                            <td valign="top">
                                @if(!empty($year12))
                                    <strong>國小十二年國教課程</strong>
                                    @include('layouts.c3_1_e12_ok')
                                @endif
                            </td>
                            <td>
                                　
                            </td>
                            <td>
                                @if(!empty($year9))
                                    <strong>國小九年一貫課程</strong>
                                    @include('layouts.c3_1_e9_ok')
                                @endif
                            </td>
                        @elseif($school_group==2)
                            <td valign="top">
                                @if(!empty($year12))
                                    <strong>國中十二年國教課程</strong>
                                    @include('layouts.c3_1_j12_ok')
                                @endif
                            </td>
                            <td>
                                　
                            </td>
                            <td>
                                @if(!empty($year9))
                                    <strong>國中九年一貫課程</strong>
                                    @include('layouts.c3_1_j9_ok')
                                @endif
                            </td>
                        @endif
                    </tr>
                </table>
            </td>
        </tr>
        @endif
        <tr>
            <td></td>
            <td>
                3-2 法律規定教育議題實施規劃
            </td>
            <td>
                @if($course->c3_2)
                    <?php $file_path = $select_year.'&'.$school_code.'&c3_2'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c3_2')
        </tr>
        <tr>
            <td></td>
            <td>
                3-3 畢業考／會考後課程活動之規劃安排
            </td>
            <td>
                @if($course->c3_3)
                    <?php $file_path = $select_year.'&'.$school_code.'&c3_3'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c3_3')
        </tr>
        <tr>
            <td colspan="3">
                4.課程實施與評鑑
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                4-1 課程評鑑應包含對課程設計、實施與效果之內容自我檢視<br>
                4-2 包含回饋與修正之可行策略
            </td>
            <td>
                @if($course->c4)
                    <?php $file_path = $select_year.'&'.$school_code.'&c4'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c4')
        </tr>
        <tr bgcolor="#cccccc">
            <td>
                貳
            </td>
            <td>
                領域／科目課程（部定課程）
            </td>
            <td>
                狀況
            </td>
        </tr>
        <tr>
            <td colspan="3">
                5.各年級領域學習課程計畫
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                5-1各年級各領域/科目課程目標或核心素養、教學單元/主題名稱、教學重點、教學進度、學習節數及評量方式之規劃符合課程綱要規定，且能有效促進該學習領域/科目核心素養之達成。<br>
                5-2各年級各領域/科目課程計畫適合學生之能力、興趣和動機，提供學生練習、體驗思考探索整合之充分機會。
            </td>
            @yield('c5')
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                5-3融入課綱議題(七大或19項)且內涵適合單元/主題內容。
            </td>
            @yield('c6')
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <table>
                    <tr>
                        @if($school_group==1)
                            <td valign="top">
                                @if(!empty($year12))
                                    <strong>國小十二年國教課程</strong>
                                    @include('layouts.c6_e12_ok')
                                @endif
                            </td>
                            <td>
                                　
                            </td>
                            <td>
                                @if(!empty($year9))
                                    <strong>國小九年一貫課程</strong>
                                    @include('layouts.c6_e9_ok')
                                @endif
                            </td>
                        @else($school_group==2)
                            <td valign="top">
                                @if(!empty($year12))
                                    <strong>國中十二年國教課程</strong>
                                    @include('layouts.c6_j12_ok')
                                @endif
                            </td>
                            <td>
                                　
                            </td>
                            <td>
                                @if(!empty($year9))
                                    <strong>國中九年一貫課程</strong>
                                    @include('layouts.c6_j9_ok')
                                @endif
                            </td>
                        @endif
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                6.跨領域／科目統整課程及協同教學（未實施者免填）
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                6-1 跨領域/科目課程單元/主題，其課程統整須能有效促成相關領域/科目核心素養及精熟學習重點。(非必填)
            </td>
            @yield('c7_1')
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                @include('layouts.c7_1_ok')
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                6-2 協同教學之師資、時數規劃及實施過程具可行性、合理性。(非必填)
            </td>
            <td>
                @if($course->c7_2)
                    <?php $file_path = $select_year.'&'.$school_code.'&c7_2'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">無實施</span>
                @endif
            </td>
            @yield('c7_2')
        </tr>
        <tr>
            <td colspan="3">
                7.教科書
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                7-1 各年級領域/科目選用之教書版本，經教育部審定通過。
            </td>
            <td>
                @if(count($books))
                    <span class="text-primary">已儲存</span>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c8_1')
        </tr>
        @if(count($books))
        <tr>
            <td></td>
            <td colspan="2">
                <table>
                    <tr valign="top">
                        @if($school_group==1)
                            <td valign="top">
                                @if(!empty($year12))
                                    <strong>國小十二年國教課程</strong>
                                    @include('layouts.c8_1_e12_ok')
                                @endif
                            </td>
                            <td>
                                　
                            </td>
                            <td>
                                @if(!empty($year9))
                                    <strong>國小九年一貫課程</strong>
                                    @include('layouts.c8_1_e9_ok')
                                @endif
                            </td>
                        @else
                            <td valign="top">
                                @if(!empty($year12))
                                    <strong>國中十二年國教課程</strong>
                                    @include('layouts.c8_1_j12_ok')
                                @endif
                            </td>
                            <td>
                                　
                            </td>
                            <td>
                                @if(!empty($year9))
                                    <strong>國中九年一貫課程</strong>
                                    @include('layouts.c8_1_j9_ok')
                                @endif
                            </td>
                        @endif
                    </tr>

                </table>
            </td>
        </tr>
        @endif
        <tr>
            <td></td>
            <td>
                7-2 自編教材依課程綱要規定，經學校課發會審查通過。(非必填)
            </td>
            <td>
                @if($course->c8_2)
                    <?php $file_path = $select_year.'&'.$school_code.'&c8_2'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">無自編</span>
                @endif
            </td>
            @yield('c8_2')
        </tr>
        <tr bgcolor="#cccccc">
            <td>
                參
            </td>
            <td>
                彈性學習課程（校訂課程）
            </td>
            <td>
                狀況
            </td>
        </tr>
        <tr>
            <td colspan="3">
                8.各年級彈性學習課程目標／核心素養與學習重點、評量
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                8-1各年級彈性學習課程內容符合「統整性主題/專題/議題探究課程」、「社團活動與技藝課程」、「特殊需求領域課程」及「其他類課程」四大類別之一，並應經學校課發會審議通過。(舊課綱年級得依九年一貫課綱之規定執行)<br>
                8-2 特殊需求領域課程規劃須經學校特殊教育推行委員會及課發會審議通過。<br>
                8-3 各年級各彈性學習課程，應呼應學校背景、課程願景及特色發展，以提升學生學習興趣並鼓勵適性發展，落實學校本位及特色課程。
            </td>
            @yield('c9')
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                @include('layouts.c9_ok')
            </td>
        </tr>
        <tr bgcolor="#cccccc">
            <td>
                肆
            </td>
            <td>
                附件
            </td>
            <td>
                狀況
            </td>
        </tr>
        <tr>
            <td colspan="3">
                9.學校課程發展委員會組織要點與會議紀錄
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                9-1 學校課程發展委員會組織要點符合課程綱要規定，成員符合規定。
            </td>
            <td>
                @if($course->c10_1)
                    <?php $file_path = $select_year.'&'.$school_code.'&c10_1'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c10_1')
        </tr>
        <tr>
            <td rowspan="4"></td>
            <td rowspan="4">
                9-2 學校課程發展委員會實際運作且有會議紀錄(每學期至少2次，每學年至少4次) 。<br>
                9-3 學校課程計畫經學校課程發展委員會議決通過(三分之二以上委員出席，二分之一以上委員通過)。
            </td>
            <td>
                上1:
                @if($course->c10_2_1)
                    <?php $file_path = $select_year.'&'.$school_code.'&c10_2_1'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c10_2')
        </tr>
        <tr>
            <td>
                上2:
                @if($course->c10_2_2)
                    <?php $file_path = $select_year.'&'.$school_code.'&c10_2_2'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                下1:
                @if($course->c10_2_3)
                    <?php $file_path = $select_year.'&'.$school_code.'&c10_2_3'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                下2:
                @if($course->c10_2_4)
                    <?php $file_path = $select_year.'&'.$school_code.'&c10_2_4'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                課程計畫通過日期：{{ $course->c10_2_date }}
            </td>
            <td>
                @if($course->c10_2_date)
                    <span class="text-primary">{{ $course->c10_2_date }}</span>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                10.節數分配表<br>
                各年級各領域/科目及各彈性學習課程名稱及節數符合課綱規定，並彙整成表格。（學校將表3-1列印，核章後上傳）
            </td>
            <td>
                @if($course->c11)
                    <?php $file_path = $select_year.'&'.$school_code.'&c11'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c11')
        </tr>
        <tr>
            <td colspan="2">
                11.校長及教師公開授課<br>
                校長及所有專任教師依課程綱要規定每學年至少進行一次公開授課活動，其進行方式與內容能促進教學專業發展。 學校須擬定實施計畫與每年規劃公開課期程表。
            </td>
            <td>
                @if($course->c12)
                    <?php $file_path = $select_year.'&'.$school_code.'&c12'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c12')
        </tr>
        <tr>
            <td colspan="2">
                12.特殊教育推動委員會({{ $select_year-1 }}學年度下學期期末會議紀錄及簽到表)(非必填)
            </td>
            <td>
                @if($course->c13)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
            @yield('c13')
        </tr>
        <tr>
            <td></td>
            <td>
                12-1.特殊類型教育課程「身心障礙類」課程計畫(非必填)
            </td>
            <td>
                @if($course->c13_1)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13_1'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
            @yield('c13_1')
        </tr>
        <tr>
            <td></td>
            <td>
                12-2.特殊類型教育課程「資賦優異類」課程計畫(非必填)
            </td>
            <td>
                @if($course->c13_2)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13_2'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
            @yield('c13_2')
        </tr>
        <tr>
            <td></td>
            <td>
                12-3.特殊類型教育課程「藝術才能班」課程計畫(非必填)
            </td>
            <td>
                @if($course->c13_3)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13_3'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
            @yield('c13_3')
        </tr>
        <tr>
            <?php $files_c14 = get_files(storage_path('app/public/upload/'.$select_year.'/'.$school_code.'/c14')); ?>
            <td colspan="2">
                13.其他資料（補充），如學生在同一學習階段使用不同版本之銜接計畫、全校學生每日作息時間表、學校年度重大活動行事曆、其他課程發展委員會議紀錄，或學校課程發展歷程、課程計畫檢核表等資料。(非必填)
            </td>
            <td>
                @if(count($files_c14))
                    <span class="text-primary">已儲存</span>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
            @yield('c14')
        </tr>
        @if(count($files_c14))
            <tr>
                <td></td>
                <td colspan="2">
                    @foreach($files_c14 as $v)
                        <?php $file_path = $select_year."&".$school_code."&c14&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                </td>
            </tr>
        @endif
    </table>
</div>
