<table border="1">
    <tr>
        <td colspan="4">
            領域/科目
        </td>
        @foreach($year9 as $v)
            <td>
                {{ $v }}年級
            </td>
        @endforeach
    </tr>
    <tr>
        <td rowspan="10" width="10">
            部定課程
        </td>
        <td rowspan="10" width="10">
            領域學習課程
        </td>
        <td rowspan="2">
            語文
        </td>
        <td width="100">
            國語文
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('mandarin['.$v.']',$section9[$v]['mandarin'],null,['id'=>'mandarin9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            英語文
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('english['.$v.']',$section9[$v]['english'],null,['id'=>'english9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr bgcolor="#cccccc">
        <td colspan="2">
            小計
        </td>
        @foreach($year9 as $v)
            <td>
                <div id="language9{{ cht2num($v) }}"></div>
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            數學
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('mathematics['.$v.']',$section9[$v]['mathematics'],null,['id'=>'mathematics9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            社會
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('social_studies['.$v.']',$section9[$v]['social_studies'],null,['id'=>'social_studies9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            自然與生活科技
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('science_technology['.$v.']',$section9[$v]['science_technology'],null,['id'=>'science_technology9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            藝術與人文
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('arts_humanities['.$v.']',$section9[$v]['arts_humanities'],null,['id'=>'arts_humanities9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            綜合活動
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('integrative_activities['.$v.']',$section9[$v]['integrative_activities'],null,['id'=>'integrative_activities9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td colspan="2">
            健康與體育
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('health_physical['.$v.']',$section9[$v]['health_physical'],null,['id'=>'health_physical9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr bgcolor="#cccccc">
        <td colspan="2">
            領域總節數
        </td>
        @foreach($year9 as $v)
            <td>
                <div id="total_areas9{{ cht2num($v) }}"></div>
            </td>
        @endforeach
    </tr>
    <tr>
        <td>
            校訂課程
        </td>
        <td colspan="3">
            彈性學習課程
        </td>
        @foreach($year9 as $v)
            <td>
                {{ Form::select('alternative['.$v.']',$section9[$v]['alternative'],null,['id'=>'alternative9'.cht2num($v),'placeholder'=>'','required'=>'required','onchange'=>'check_section('.cht2num($v).')']) }}
            </td>
        @endforeach
    </tr>
    <tr bgcolor="#cccccc">
        <td colspan="4">
            總節數
        </td>
        @foreach($year9 as $v)
            <td>
                <div id="total_sections9{{ cht2num($v) }}"></div>
            </td>
        @endforeach
    </tr>
</table>
<script>
    function check_section(grade){
        document.getElementById('language9'+grade).innerText=check(document.getElementById('mandarin9'+grade).value)+
            check(document.getElementById('english9'+grade).value);

        document.getElementById('total_areas9'+grade).innerText=check(document.getElementById('mandarin9'+grade).value)+
            check(document.getElementById('english9'+grade).value)+
            check(document.getElementById('mathematics9'+grade).value)+
            check(document.getElementById('social_studies9'+grade).value)+
            check(document.getElementById('science_technology9'+grade).value)+
            check(document.getElementById('arts_humanities9'+grade).value)+
            check(document.getElementById('integrative_activities9'+grade).value)+
            check(document.getElementById('health_physical9'+grade).value);

        document.getElementById('total_sections9'+grade).innerText=check(document.getElementById('total_areas9'+grade).innerText)+
            check(document.getElementById('alternative9'+grade).value);

    }

    function check( x ) {
        return x ? parseInt( x, 10 ) : 0;
    }

    function check_total(){
        var c=1;
        @if($year->j1=="9year")
            if(check(document.getElementById('language91').innerText) < 6 || check(document.getElementById('language91').innerText) > 8){
                alert('國中1年級語文領域小計節數應在6~8節之間');
                c=0;
                return false;
            }
            if(check(document.getElementById('total_areas91').innerText) != 28){
                alert('國中1年級領域總節數應為28節');
                c=0;
                return false;
            }
        @endif


        @if($year->j2=="9year")
            if(check(document.getElementById('language92').innerText) < 6 || check(document.getElementById('language92').innerText) > 8){
                alert('國中2年級語文領域小計節數應在6~8節之間');
                c=0;
                return false;
            }
            if(check(document.getElementById('total_areas92').innerText) != 28){
                alert('國中2年級領域總節數應為28節');
                c=0;
                return false;
            }
        @endif


        @if($year->j3=="9year")
            if(check(document.getElementById('language93').innerText) < 6 || check(document.getElementById('language93').innerText) > 9){
                alert('國中3年級語文領域小計節數應在6~9節之間');
                c=0;
                return false;
            }
            if(check(document.getElementById('total_areas93').innerText) != 30){
                alert('國中3年級領域總節數應為30節');
                c=0;
                return false;
            }
        @endif

        if(c==1) {
            document.getElementById('sections_store').submit();
        }
    }
</script>
