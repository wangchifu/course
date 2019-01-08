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
        </tr>
        <tr>
            <td colspan="3">
                1.學校現沿與背景分析
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                1-1 描述學校現況與人力資源（至少含教師與學生數等）
            </td>
            <td>
                @if($course->c1_1)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c1_1']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                1-2 盤點分析學校課程發展的優劣條件、機會與威脅
            </td>
            <td>
                @if($course->c1_2)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c1_2']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
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
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c2']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
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
        </tr>
        @if($course->c3_1)
        <tr>
            <td></td>
            <td colspan="2">
                <table>
                    <tr>
                        @if($group_id==1)
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
                        @elseif($group_id==2)
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
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c3_2']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                3-3 畢業考／會考後課程活動之規劃安排
            </td>
            <td>
                @if($course->c3_3)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c3_3']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
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
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c4']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
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
                5.各年級課程目標／核心素養與學習重點、學習評量
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                5-1各年級各領域/科目課程目標或核心素養、教學單元/主題名稱、教學重點、教學進度、學習節數及評量方式之規劃符合課程綱要規定，且能有效促進該學習領域/科目核心素養之達成。<br>
                5-2各年級各領域/科目課程計畫適合學生之能力、興趣和動機，提供學生練習、體驗思考探索整合之充分機會。
            </td>
            <td>
                不用傳
            </td>
        </tr>
        <tr>
            <td colspan="3">
                6.議題融入
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                融入課綱議題(19 項)且內涵適合單元/主題內容。
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <table>
                    <tr>
                        @if($group_id==1)
                            <td valign="top">
                                @if(!empty($year12))
                                    <strong>國小十二年國教課程</strong>
                                    @include('schools.c6_e12_ok')
                                @endif
                            </td>
                            <td>
                                　
                            </td>
                            <td>
                                @if(!empty($year9))
                                    <strong>國小九年一貫課程</strong>
                                    @include('schools.c6_e9_ok')
                                @endif
                            </td>
                        @else($group_id==2)
                            <td valign="top">
                                @if(!empty($year12))
                                    <strong>國中十二年國教課程</strong>
                                    @include('schools.c6_j12_ok')
                                @endif
                            </td>
                            <td>
                                　
                            </td>
                            <td>
                                @if(!empty($year9))
                                    <strong>國中九年一貫課程</strong>
                                    @include('schools.c6_j9_ok')
                                @endif
                            </td>
                        @endif
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                7.跨領域／科目統整課程及協同教學（未實施跨領域／科目統整課程及協同教學者免填）
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                7-1 跨領域/科目課程單元/主題，其課程統整須能有效促成相關領域/科目核心素養及精熟學習重點。(非必填)
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                @include('schools.c7_1_ok')
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                7-2 協同教學之師資、時數規劃及實施過程具可行性、合理性。(非必填)
            </td>
            <td>
                @if($course->c7_2)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c7_2']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">無實施</span>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="3">
                8.教科書
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                8-1 各年級領域/科目選用之教書版本，經教育部審定通過。
            </td>
            <td>
                @if(count($books))
                    <span class="text-primary">已儲存</span>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        @if(count($books))
        <tr>
            <td></td>
            <td colspan="2">
                <table>
                    <tr valign="top">
                        @if(auth()->user()->group_id==1)
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
                8-2 自編教材依課程綱要規定，經學校課發會審查通過。(非必填)
            </td>
            <td>
                @if($course->c8_2)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c8_2']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">無自編</span>
                @endif
            </td>
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
                9.各年級彈性學習課程目標／核心素養與學習重點、評量
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                9-1各年級彈性學習課程內容符合「統整性主題/專題/議題探究課程」、「社團活動與技藝課程」、「特殊需求領域課程」及「其他類課程」四大類別之一，並應經學校課發會審議通過。<br>
                9-2 特殊需求領域課程規劃須經學校特殊教育推行委員會及課發會審議通過。<br>
                9-3 各年級各彈性學習課程，應呼應學校背景、課程願景及特色發展，以提升學生學習興趣並鼓勵適性發展，落實學校本位及特色課程。
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                @include('schools.c9_ok')
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
                10.學校課程發展委員會組織要點與會議紀錄
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                10-1 學校課程發展委員會組織要點符合課程綱要規定，成員符合規定。
            </td>
            <td>
                @if($course->c10_1)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c10_1']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td rowspan="4"></td>
            <td rowspan="4">
                10-2 學校課程發展委員會實際運作且有會議紀錄(每學期至少2次，每學年至少4次) 。<br>
                10-3 學校課程計畫經學校課程發展委員會議決通過(三分之二以上委員出席，二分之一以上委員通過)。
            </td>
            <td>
                上1:
                @if($course->c10_2_1)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c10_2_1']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                上2:
                @if($course->c10_2_2)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c10_2_2']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                下1:
                @if($course->c10_2_3)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c10_2_3']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                下2:
                @if($course->c10_2_4)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c10_2_4']) }}"><i class="fas fa-download"></i> 已傳</a>
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
                11.節數分配表<br>
                各年級各領域/科目及各彈性學習課程名稱及節數符合課綱規定，並彙整成表格。（學校將表3-1列印，核章後上傳）
            </td>
            <td>
                @if($course->c11)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c11']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                12.校長及教師公開授課<br>
                校長及所有專任教師依課程綱要規定每學年至少進行一次公開授課活動，其進行方式與內容能促進教學專業發展。 學校須擬定實施計畫與每年規劃公開課期程表。
            </td>
            <td>
                @if($course->c12)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c12']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                13.特殊教育課程計畫（如特殊教育班、資源班、藝才班）
            </td>
            <td>
                @if($course->c13)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c13']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                13-1.特殊教育推動委員會
            </td>
            <td>
                @if($course->c13_1)
                    <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>$school_code,'file'=>'c13_1']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        </tr>
        <tr>
            <?php $files_c14 = get_files(storage_path('app/public/upload/'.$select_year.'/'.auth()->user()->code.'/c14')); ?>
            <td colspan="2">
                14.其他資料（補充），如學生在同一學習階段使用不同版本之銜接計畫、全校學生每日作息時間表、學校年度重大活動行事曆、其他課程發展委員會議紀錄，或學校課程發展歷程等資料。(非必填)
            </td>
            <td>
                @if(count($files_c14))
                    <span class="text-primary">已儲存</span>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
        </tr>
        @if(count($files_c14))
            <tr>
                <td></td>
                <td colspan="2">
                    @foreach($files_c14 as $v)
                        <?php $file_path = $select_year."&".auth()->user()->code."&c14&".$v; ?>
                        <a href="{{ route('schools.download2',$file_path) }}"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                </td>
            </tr>
        @endif
    </table>
</div>
