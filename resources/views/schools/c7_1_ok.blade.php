<table border="1">
    <tr>
        <td>
            年級
        </td>
        <td>
            一年級
        </td>
        <td>
            二年級
        </td>
        <td>
            三年級
        </td>
        @if($group_id==1)
            <td>
                四年級
            </td>
            <td>
                五年級
            </td>
            <td>
                六年級
            </td>
        @endif
    </tr>
    <tr>
        <td>
            跨領域/科目課程單元/主題
        </td>
        <td>
            @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_1.pdf')))
                <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_1']) }}"><i class="fas fa-download"></i> 已傳</a>
            @else
                <span class="text-warning">未傳</span>
            @endif
        </td>
        <td>
            @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_2.pdf')))
                <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_2']) }}"><i class="fas fa-download"></i> 已傳</a>
            @else
                <span class="text-warning">未傳</span>
            @endif
        </td>
        <td>
            @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_3.pdf')))
                <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_3']) }}"><i class="fas fa-download"></i> 已傳</a>
            @else
                <span class="text-warning">未傳</span>
            @endif
        </td>
        @if($group_id==1)
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_4.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_4']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_5.pdf')))
                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_5']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
            <td>
                @if(file_exists(storage_path('app/public/upload/'.$year->year.'/'.auth()->user()->code.'/c7_1_6.pdf')))

                    <a href="{{ route('schools.download',['year'=>$year->year,'school_code'=>auth()->user()->code,'file'=>'c7_1_6']) }}"><i class="fas fa-download"></i> 已傳</a>
                @else
                    <span class="text-warning">未傳</span>
                @endif
            </td>
        @endif
    </tr>
</table>
