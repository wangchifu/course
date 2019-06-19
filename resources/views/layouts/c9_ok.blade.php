<table border="1">
    <tr>
        <td>
            年級
        </td>
        @if($school_group==1)
            <td>
                一年級
            </td>
            <td>
                二年級
            </td>
            <td>
                三年級
            </td>
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
        @if($school_group==2)
            <td>
                七年級
            </td>
            <td>
                八年級
            </td>
            <td>
                九年級
            </td>
        @endif
    </tr>
    <tr valign="top">
        <td>
            彈性學習課程
        </td>
        @if($school_group==2)
            <td>
                <?php $files_c9_1 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_7')); ?>
                @if(count($files_c9_1))
                    @foreach($files_c9_1 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_7&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <?php $files_c9_2 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_8')); ?>
                @if(count($files_c9_2))
                    @foreach($files_c9_2 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_8&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <?php $files_c9_3 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_9')); ?>
                @if(count($files_c9_3))
                    @foreach($files_c9_3 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_9&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endif
        @if($school_group==1)
            <td>
                <?php $files_c9_1 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_1')); ?>
                @if(count($files_c9_1))
                    @foreach($files_c9_1 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_1&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <?php $files_c9_2 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_2')); ?>
                @if(count($files_c9_2))
                    @foreach($files_c9_2 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_2&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                        <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <?php $files_c9_3 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_3')); ?>
                @if(count($files_c9_3))
                    @foreach($files_c9_3 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_3&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                        <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <?php $files_c9_4 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_4')); ?>
                @if(count($files_c9_4))
                    @foreach($files_c9_4 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_4&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <?php $files_c9_5 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_5')); ?>
                @if(count($files_c9_5))
                    @foreach($files_c9_5 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_5&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
            <td>
                <?php $files_c9_6 = get_files(storage_path('app/public/upload/'.$year->year.'/'.$school_code.'/c9_6')); ?>
                @if(count($files_c9_6))
                    @foreach($files_c9_6 as $v)
                        <?php $file_path = $year->year."&".$school_code."&c9_6&".$v;$file_path=substr($file_path,0,-4); ?>
                        <a href="{{ route('file.open',$file_path) }}" target="_blank"><small><i class="fas fa-download"></i> {{ $v }}</small></a>
                        <br>
                    @endforeach
                @else
                    <span class="text-danger">未傳</span>
                @endif
            </td>
        @endif
    </tr>
</table>
