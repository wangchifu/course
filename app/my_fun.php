<?php
//顯示某目錄下的檔案
if (! function_exists('get_files')) {
    function get_files($folder){
        $files = [];
        $i=0;
        if (is_dir($folder)) {
            if ($handle = opendir($folder)) {
                while (false !== ($name = readdir($handle))) {
                    if ($name != "." && $name != "..") {
                        //去除掉..跟.
                        $files[$i] = $name;
                        $i++;
                    }
                }
                closedir($handle);
            }
        }
        return $files;
    }
}

if (! function_exists('cht2num')) {
    function cht2num($c){
        $cht = [
            '一'=>'1',
            '二'=>'2',
            '三'=>'3',
            '四'=>'4',
            '五'=>'5',
            '六'=>'6',
            '七'=>'7',
            '八'=>'8',
            '九'=>'9',
        ];
        return $cht[$c];
    }
}


//取得指定年度九年一貫年級，及十二年國教年級的array
if (! function_exists('get_year')) {
    function get_year($select_year,$ej){
        $year = \App\Year::where('year',$select_year)->first();
        $year_course[9] = [];
        $year_course[12] = [];
        if($ej==1){
            if($year->e1 == '9year'){
                $year_course[9][] = "一";
            }else{
                $year_course[12][] = "一";
            }
            if($year->e2 == '9year'){
                $year_course[9][] = "二";
            }else{
                $year_course[12][] = "二";
            }
            if($year->e3 == '9year'){
                $year_course[9][] = "三";
            }else{
                $year_course[12][] = "三";
            }
            if($year->e4 == '9year'){
                $year_course[9][] = "四";
            }else{
                $year_course[12][] = "四";
            }
            if($year->e5 == '9year'){
                $year_course[9][] = "五";
            }else{
                $year_course[12][] = "五";
            }
            if($year->e6 == '9year'){
                $year_course[9][] = "六";
            }else{
                $year_course[12][] = "六";
            }

        }elseif($ej==2){
            if($year->j1 == '9year'){
                $year_course[9][] = "一";
            }else{
                $year_course[12][] = "一";
            }
            if($year->j2 == '9year'){
                $year_course[9][] = "二";
            }else{
                $year_course[12][] = "二";
            }
            if($year->j3 == '9year'){
                $year_course[9][] = "三";
            }else{
                $year_course[12][] = "三";
            }
        }

        return $year_course;
    }
}

if (! function_exists('usersId2Names')) {
    function usersId2Names(){
        $users = \App\User::all();
        foreach($users as $user){
            $users2Names[$user->id] = $user->name;
        }
        return $users2Names;
    }
}

function getBrowser(){
    $agent=$_SERVER["HTTP_USER_AGENT"];
    if(strpos($agent,'MSIE')!==false || strpos($agent,'rv:11.0')) //ie11判断
        return "ie";
    else if(strpos($agent,'Firefox')!==false)
        return "firefox";
    else if(strpos($agent,'Chrome')!==false)
        return "chrome";
    else if(strpos($agent,'Opera')!==false)
        return 'opera';
    else if((strpos($agent,'Chrome')==false)&&strpos($agent,'Safari')!==false)
        return 'safari';
    else
        return 'unknown';
}

function getBrowserVer(){
    if (empty($_SERVER['HTTP_USER_AGENT'])){    //当浏览器没有发送访问者的信息的时候
        return 'unknow';
    }
    $agent= $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/MSIE\s(\d+)\..*/i', $agent, $regs))
        return $regs[1];
    elseif (preg_match('/FireFox\/(\d+)\..*/i', $agent, $regs))
        return $regs[1];
    elseif (preg_match('/Opera[\s|\/](\d+)\..*/i', $agent, $regs))
        return $regs[1];
    elseif (preg_match('/Chrome\/(\d+)\..*/i', $agent, $regs))
        return $regs[1];
    elseif ((strpos($agent,'Chrome')==false)&&preg_match('/Safari\/(\d+)\..*$/i', $agent, $regs))
        return $regs[1];
    else
        return 'unknow';
}

function check_login($n){
    if($n==="教學組長") return true;
    if($n==="研發組長") return true;
    if($n==="資訊組長") return true;
    if($n==="教務組長") return true;
    if($n==="教務主任") return true;
    if($n==="教導主任") return true;
    if($n==="輔導主任") return true;
    if($n==="特教組長") return true;
    if($n==="資料組長") return true;
    if($n==="校長") return true;

    return false;
}

function show_pass($n){
    if($n===1) return "<span class='text-success'>符合</span>";
    if($n===0) return "<span class='text-danger'>不符合</span>";

}

function check_date($select_year,$action){
    $year = \App\Year::where('year',$select_year)->first();
    $words = null;
    $today = date('Ymd');
    if($action==1){
        $d1 = str_replace('-','',$year->step1_date1);
        $d2 = str_replace('-','',$year->step1_date2);
    }
    if($action==2){
        $d1 = str_replace('-','',$year->step2_date1);
        $d2 = str_replace('-','',$year->step2_date2);
    }
    if($action==3){
        $d1 = str_replace('-','',$year->step3_date1);
        $d2 = str_replace('-','',$year->step3_date2);
    }
    if($action==4){
        $d1 = str_replace('-','',$year->step4_date1);
        $d2 = str_replace('-','',$year->step4_date2);
    }
    if($action==5){
        $d1 = str_replace('-','',$year->step5_date1);
        $d2 = str_replace('-','',$year->step5_date2);
    }
    if($action==6){
        $d1 = str_replace('-','',$year->step6_date1);
        $d2 = str_replace('-','',$year->step6_date2);
    }

    $w = [
        '1'=>'階段1：學校上傳',
        '2'=>'階段2：初審作業',
        '3'=>'階段3：複審作業',
        '4'=>'階段2-1：依初審後再傳',
        '5'=>'階段2-2：初審後，三傳',
        '6'=>'查詢',
    ];

    if($today < $d1 or $today >$d2){
        $words = $w[$action]." 開放時間為 ".$d1." 到 ".$d2;
    }
    return $words;
}

//發email
if(! function_exists('send_mail')){
    function send_mail($to,$subject,$body)
    {
        $data = array("subject"=>$subject,"body"=>$body,"receipt"=>"{$to}");
        $data_string = json_encode($data);
        $ch = curl_init('https://school.chc.edu.tw/api/mail');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string),
                'AUTHKEY: #chc7237182#')
        );
        $result = curl_exec($ch);
        $obj = json_decode($result,true);
        if( $obj["success"] == true) {
            //echo "<body onload=alert('已mail通知')>";
        };


    }
}

if(! function_exists('line_to')){
    function line_to($token,$message){
        define('LINE_API_URL'  ,"https://notify-api.line.me/api/notify");
        define('LINE_API_TOKEN',$token);

        function post_message($message){

            $data = array(
                "message" => $message
            );
            $data = http_build_query($data, "", "&");

            $options = array(
                'http'=>array(
                    'method'=>'POST',
                    'header'=>"Authorization: Bearer " . LINE_API_TOKEN . "\r\n"
                        . "Content-Type: application/x-www-form-urlencoded\r\n"
                        . "Content-Length: ".strlen($data)  . "\r\n" ,
                    'content' => $data
                )
            );
            $context = stream_context_create($options);
            $resultJson = file_get_contents(LINE_API_URL,FALSE,$context );
            $resutlArray = json_decode($resultJson,TRUE);
            if( $resutlArray['status'] != 200)  {
                return false;
            }
            return true;
        }
        post_message($message);
    }
}

if(! function_exists('get_line_token')){
    function get_line_token($authorize_code){
        define('LINE_OAUTH_TOKEN_URL'  ,"https://notify-bot.line.me/oauth/token");
        $line = config('course.line');

        $data = array(
            "grant_type" => "authorization_code",
            "code"=>$authorize_code,
            "redirect_uri"=>"https://".$_SERVER['HTTP_HOST']."/callback",
            "client_id"=>$line['client_id'],
            "client_secret"=>$line['client_secret'],
        );
        $data = http_build_query($data, "", "&");
        $options = array(
            'http'=>array(
                'method'=>'POST',
                'header'=>"Content-Type: application/x-www-form-urlencoded\r\n"
                    . "Content-Length: ".strlen($data)  . "\r\n" ,
                'content' => $data
            )
        );
        $context = stream_context_create($options);
        $resultJson = file_get_contents(LINE_OAUTH_TOKEN_URL,FALSE,$context );
        $resutlArray = json_decode($resultJson,TRUE);
        if($resutlArray['status'] == 200){
            return $resutlArray['access_token'];
        }else{
            return null;
        }
    }
}

if(! function_exists('write_log')){
    function write_log($event,$year){
        $att['year'] = $year;
        $att['school_code'] = auth()->user()->code;
        $att['event'] = $event;
        $att['user_id'] = auth()->user()->id;
        \App\Log::create($att);
    }
}

//刪除某目錄下的任何東西
if (! function_exists('delete_dir')) {
    function delete_dir($dir)
    {
        if (!file_exists($dir))
        {
            return true;
        }

        if (!is_dir($dir) || is_link($dir))
        {
            return unlink($dir);
        }

        foreach (scandir($dir) as $item)
        {
            if ($item == '.' || $item == '..')
            {
                continue;
            }

            if (!delete_dir($dir . "/" . $item))
            {
                chmod($dir . "/" . $item, 0777);

                if (!delete_dir($dir . "/" . $item))
                {
                    return false;
                }
            }
        }

        return rmdir($dir);
    }
}
