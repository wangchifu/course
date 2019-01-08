<div style="border:1px solid #96c2f1;background:#eff7ff;padding: 10px;">
    <h1>{{ auth()->user()->school }} {{ $select_year }} 學年度課程計畫</h1>
    <table border="1">
        <tr bgcolor="#cccccc">
            <td>
                壹
            </td>
            <td>
                學校課程總體架構
            </td>
            <td width="90">
                符合
            </td>
            <td width="200">
                意見
            </td>
        </tr>
        <tr>
            <td colspan="4">
                1.學校現沿與背景分析
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                1-1 描述學校現況與人力資源（至少含教師與學生數等）
            </td>
            <td>
                @if($course->first_suggest2->c1_1_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c1_1_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c1_1))
                {{ $course->first_suggest2->c1_1 }}
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
                @if($course->first_suggest2->c1_2_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c1_2_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c1_2))
                    {{ $course->first_suggest2->c1_2 }}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="4">
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
                @if($course->first_suggest2->c2_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c2_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c2))
                    {{ $course->first_suggest2->c2 }}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="4">
                3.課程架構
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                3-1 學校課程節數
            </td>
            <td>
                @if($course->first_suggest2->c3_1_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c3_1_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c3_1))
                    {{ $course->first_suggest2->c3_1 }}
                @endif
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                3-2 法律規定教育議題實施規劃
            </td>
            <td>
                @if($course->first_suggest2->c3_2_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c3_2_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c3_2))
                    {{ $course->first_suggest2->c3_2 }}
                @endif
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                3-3 畢業考／會考後課程活動之規劃安排
            </td>
            <td>
                @if($course->first_suggest2->c3_3_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c3_3_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c3_3))
                    {{ $course->first_suggest2->c3_3 }}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="4">
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
                @if($course->first_suggest2->c4_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c4_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c4))
                    {{ $course->first_suggest2->c4 }}
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
                符合
            </td>
            <td>
                意見
            </td>
        </tr>
        <tr>
            <td colspan="4">
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
            <td>

            </td>
        </tr>
        <tr>
            <td colspan="4">
                6.議題融入
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                融入課綱議題(19 項)且內涵適合單元/主題內容。
            </td>
            <td>
                @if($course->first_suggest2->c6_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c6_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c6))
                    {{ $course->first_suggest2->c6 }}
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="4">
                7.跨領域／科目統整課程及協同教學（未實施跨領域／科目統整課程及協同教學者免填）
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                7-1 跨領域/科目課程單元/主題，其課程統整須能有效促成相關領域/科目核心素養及精熟學習重點。(非必填)
            </td>
            <td>
                不用審
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                7-2 協同教學之師資、時數規劃及實施過程具可行性、合理性。(非必填)
            </td>
            <td>
                不用審
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td colspan="4">
                8.教科書
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                8-1 各年級領域/科目選用之教書版本，經教育部審定通過。
            </td>
            <td>
                @if($course->first_suggest2->c8_1_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c8_1_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c8_1))
                    {{ $course->first_suggest2->c8_1 }}
                @endif
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                8-2 自編教材依課程綱要規定，經學校課發會審查通過。(非必填)
            </td>
            <td>
                不用審
            </td>
            <td>

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
                符合
            </td>
            <td>
                意見
            </td>
        </tr>
        <tr>
            <td colspan="4">
                9.各年級彈性學習課程目標／核心素養與學習重點、評量
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                9-1各年級彈性學習課程內容符合「統整性主題/專題/議題探究課程」、「社團活動與技藝課程」、「特殊需求領域課程」及「其他類課程」四大類別之一，並應經學校課發會審議通過。<br>
                9-2 特殊需求領域課程規劃須經學校特殊教育推行委員會及課發會審議通過。<br>
                9-3 各年級各彈性學習課程，應呼應學校背景、課程願景及特色發展，以提升學生學習興趣並鼓勵適性發展，落實學校本位及特色課程。
            </td>
            <td>
                @if($course->first_suggest2->c9_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c9_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c9))
                    {{ $course->first_suggest2->c9 }}
                @endif
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
                符合
            </td>
            <td>
                意見
            </td>
        </tr>
        <tr>
            <td colspan="4">
                10.學校課程發展委員會組織要點與會議紀錄
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                10-1 學校課程發展委員會組織要點符合課程綱要規定，成員符合規定。
            </td>
            <td>
                @if($course->first_suggest2->c10_1_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c10_1_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c10_1))
                    {{ $course->first_suggest2->c10_1 }}
                @endif
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                10-2 學校課程發展委員會實際運作且有會議紀錄(每學期至少2次，每學年至少4次) 。<br>
                10-3 學校課程計畫經學校課程發展委員會議決通過(三分之二以上委員出席，二分之一以上委員通過)。
            </td>
            <td rowspan="2">
                @if($course->first_suggest2->c10_2_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c10_2_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td rowspan="2">
                @if(!empty($course->first_suggest2->c10_2))
                    {{ $course->first_suggest2->c10_2 }}
                @endif
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                課程計畫通過日期：{{ $course->c10_2_date }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                11.節數分配表<br>
                各年級各領域/科目及各彈性學習課程名稱及節數符合課綱規定，並彙整成表格。（學校將表3-1列印，核章後上傳）
            </td>
            <td>
                @if($course->first_suggest2->c11_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c11_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c11))
                    {{ $course->first_suggest2->c11 }}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                12.校長及教師公開授課<br>
                校長及所有專任教師依課程綱要規定每學年至少進行一次公開授課活動，其進行方式與內容能促進教學專業發展。 學校須擬定實施計畫與每年規劃公開課期程表。
            </td>
            <td>
                @if($course->first_suggest2->c12_pass === 1)
                    <span class="text-success">符合</span>
                @elseif($course->first_suggest2->c12_pass === 0)
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                @if(!empty($course->first_suggest2->c11))
                    {{ $course->first_suggest2->c11 }}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2">
                13.特殊教育課程計畫（如特殊教育班、資源班、藝才班）
            </td>
            <td>
                @if($course->special_suggest->c13_pass == 1)
                    <span class="text-success">符合</span>
                @else
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                {{ $course->special_suggest->c13 }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                13-1.特殊教育推動委員會
            </td>
            <td>
                @if($course->special_suggest->c13_1_pass == 1)
                    <span class="text-success">符合</span>
                @else
                    <span class="text-danger">不符合</span>
                @endif
            </td>
            <td>
                {{ $course->special_suggest->c13_1 }}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                14.其他資料（補充），如學生在同一學習階段使用不同版本之銜接計畫、全校學生每日作息時間表、學校年度重大活動行事曆、其他課程發展委員會議紀錄，或學校課程發展歷程等資料。(非必填)
            </td>
            <td>
                不用審
            </td>
            <td>

            </td>
    </table>
</div>
