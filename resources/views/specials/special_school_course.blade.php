<div style="border:1px solid #96c2f1;background:#eff7ff;padding: 10px;">
    <table border="1">
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
                13.特殊教育課程計畫（如特殊教育班、資源班、藝才班）
            </td>
            <td>
                @if($course->c13)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <input type="radio" name="c13_pass" id="c13_pass1" {{ $checked13_ok }} value="1"> <label for="c13_pass1">符合</label>　
                <input type="radio" name="c13_pass" id="c13_pass2" {{ $checked13_no }} value="0"> <label for="c13_pass2">不符合</label>
            </td>
            <td>
                <textarea name="c13">{{ $c13 }}</textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                13-1.特殊教育推動委員會
            </td>
            <td>
                @if($course->c13_1)
                    <?php $file_path = $select_year.'&'.$school_code.'&c13_1'; ?>
                    <a href="{{ route('file.open',$file_path) }}" target="_blank"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <input type="radio" name="c13_1_pass" id="c13_1_pass1" {{ $checked13_1_ok }} value="1"> <label for="c13_1_pass1">符合</label>　
                <input type="radio" name="c13_1_pass" id="c13_1_pass2" {{ $checked13_1_no }} value="0"> <label for="c13_1_pass2">不符合</label>
            </td>
            <td>
                <textarea name="c13_1">{{ $c13_1}}</textarea>
            </td>
        </tr>
    </table>
</div>
