<div style="border:1px solid #96c2f1;background:#eff7ff;padding: 10px;">
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
            <th width="160">
                符合
            </th>
            <th>
                審查意見
            </th>
        </tr>
        <tr>
            <td colspan="5">
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
                    <?php $file_path = $select_year.'&'.$school_code.'&c1_1'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td></td>
            <td></td>
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
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5">
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
            <td></td>
            <td></td>
        </tr>


        <tr>
            <td colspan="5">
                ...
            </td>
        </tr>
        <tr bgcolor="#cccccc">
            <td>
                肆
            </td>
            <td>
                附件
            </td>
            <td width="120">
                狀況
            </td>
            <th width="160">
                符合
            </th>
            <th>
                審查意見
            </th>
        </tr>
        <tr>
            <td colspan="5">
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
                    <?php $file_path = $select_year.'&'.$school_code.'&c10_1'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="4"></td>
            <td rowspan="4">
                10-2 學校課程發展委員會實際運作且有會議紀錄(每學期至少2次，每學年至少4次) 。<br>
                10-3 學校課程計畫經學校課程發展委員會議決符合(三分之二以上委員出席，二分之一以上委員符合)。
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
            <td></td>
            <td></td>
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
            <td></td>
            <td></td>
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
            <td></td>
            <td></td>
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
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                課程計畫符合日期：{{ $course->c10_2_date }}
            </td>
            <td>
                @if($course->c10_2_date)
                    <span class="text-primary">{{ $course->c10_2_date }}</span>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5">
                ...
            </td>
        </tr>
        <tr>
            <td colspan="2">
                13.特殊教育推動委員會({{ $select_year-1 }}學年度下學期期末會議紀錄及簽到表)
            </td>
            <td>
                @if($course->c13)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c13')
        </tr>
        <tr>
            <td></td>
            <td>
                13-1.特殊類型教育課程「身障類」課程計畫
            </td>
            <td>
                @if($course->c13_1)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13_1'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c13_1')
        </tr>
        <tr>
            <td></td>
            <td>
                13-2.特殊類型教育課程「資優類」課程計畫
            </td>
            <td>
                @if($course->c13_2)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13_2'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c13_2')
        </tr>
        <tr>
            <td></td>
            <td>
                13-3.特殊類型教育課程「藝才類」課程計畫
            </td>
            <td>
                @if($course->c13_3)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13_3'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            @yield('c13_3')
        </tr>
    </table>
</div>
