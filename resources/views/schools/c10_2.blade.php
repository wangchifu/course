<div class="centent-div" style="background-color: {{ $c10_2_bg }}">
    9-2 學校課程發展委員會實際運作且有會議紀錄(每學期至少2次，每學年至少4次) 。<br>
    9-3 學校課程計畫經學校課程發展委員會議決通過(三分之二以上委員出席，二分之一以上委員通過)。
    <br>
    {{ $c10_2_text }}
</div>
<br>
<ul>
    <li>
        @if($course->c10_2_1)
            <i class="fas fa-check-circle text-success"></i>
        @else
            <i class="fas fa-times-circle text-danger check_red"></i>
        @endif
        學校課程發展委員會紀錄({{ $year->year-1 }}學年度上學期第1次)
        @if($course->c10_2_1)
            <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_2_1']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
            <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_2_1']) }}" class="badge badge-primary">
                <i class="fas fa-download"></i> 下載c10_2_1.pdf</a>
            <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_2_1']) }}" onclick="return confirm('確定刪除？')">
                <i class="far fa-trash-alt text-info"></i></a>
        @else
            <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_2_1']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
        @endif
    </li>
    <br>
    <li>
        @if($course->c10_2_2)
            <i class="fas fa-check-circle text-success"></i>
        @else
            <i class="fas fa-times-circle text-danger check_red"></i>
        @endif
        學校課程發展委員會紀錄({{ $year->year-1 }}學年度上學期第2次)
        @if($course->c10_2_2)
            <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_2_2']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
            <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_2_2']) }}" class="badge badge-primary">
                <i class="fas fa-download"></i> 下載c10_2_2.pdf</a>
            <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_2_2']) }}" onclick="return confirm('確定刪除？')">
                <i class="far fa-trash-alt text-info"></i></a>
        @else
            <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_2_2']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
        @endif
    </li>
    </li>
    <br>
    <li>
        @if($course->c10_2_3)
            <i class="fas fa-check-circle text-success"></i>
        @else
            <i class="fas fa-times-circle text-danger check_red"></i>
        @endif
        學校課程發展委員會紀錄({{ $year->year-1 }}學年度下學期第1次)
        @if($course->c10_2_3)
            <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_2_3']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
            <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_2_3']) }}" class="badge badge-primary">
                <i class="fas fa-download"></i> 下載c10_2_3.pdf</a>
            <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_2_3']) }}" onclick="return confirm('確定刪除？')">
                <i class="far fa-trash-alt text-info"></i></a>
        @else
            <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_2_3']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
        @endif
    </li>
    </li>
    <br>
    <li>
        @if($course->c10_2_4)
            <i class="fas fa-check-circle text-success"></i>
        @else
            <i class="fas fa-times-circle text-danger check_red"></i>
        @endif
        學校課程發展委員會紀錄({{ $year->year-1 }}學年度下學期最後1次)
        @if($course->c10_2_4)
            <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_2_4']) }}','新視窗')" class="badge badge-success"><i class="fas fa-check-circle"></i> 再傳</a>
            <a href="{{ route('schools.download',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_2_4']) }}" class="badge badge-primary">
                <i class="fas fa-download"></i> 下載c10_2_4.pdf</a>
            <a href="{{ route('schools.delfile',['year'=>$select_year,'school_code'=>auth()->user()->code,'file'=>'c10_2_4']) }}" onclick="return confirm('確定刪除？')">
                <i class="far fa-trash-alt text-info"></i></a>
        @else
            <a href="javascript:open_upload('{{ route('schools.normal_upload',['select_year'=>$year->year,'order'=>'c10_2_4']) }}','新視窗')" class="badge badge-danger check_red"><i class="fas fa-times-circle"></i> 未上傳</a>
        @endif
    </li>
    </li>
    <br>
    <li>
        @if($course->c10_2_date)
            <i class="fas fa-check-circle text-success"></i>
        @else
            <i class="fas fa-times-circle text-danger check_red"></i>
        @endif
        課程計畫通過日期(xxxx-xx-xx)
        <script src="{{ asset('gijgo/js/gijgo.min.js') }}" type="text/javascript"></script>
        <link href="{{ asset('gijgo/css/gijgo.min.css') }}" rel="stylesheet" type="text/css">

        {{ Form::open(['route'=>'schools.c10_2_date_store','method'=>'post']) }}
        <table>
            <tr>
                <td>
                    <input type="text" name="c10_2_date" id="c10_2_date" maxlength="10" value="{{ $course->c10_2_date }}" required width="200">
                </td>
                <td>
                    <button type="submit" onclick="return confirm('確定？')">儲存</button>
                    @if($course->c10_2_date)
                        <a href="{{ route('schools.c10_2_date_delete',$year->year) }}" onclick="return confirm('確定清除？')"><i class="far fa-trash-alt text-info"></i></a>
                    @endif
                </td>
            </tr>
        </table>
        <script src="{{ asset('gijgo/js/messages/messages.zh-TW.js') }}"></script>
        <script>
            $('#c10_2_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd',
                locale: 'zh-TW',
            });
        </script>
        <input type="hidden" name="select_year" value="{{ $year->year }}">
        {{ Form::close() }}
    </li>
</ul>
