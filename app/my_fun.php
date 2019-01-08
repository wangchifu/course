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
