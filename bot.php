<?php
error_reporting(0);
$zone = json_decode(file_get_contents("http://ip-api.com/json"),1)["timezone"];if($zone){date_default_timezone_set($zone);}
$a = ["iewil","emcsnetwork","1.0"];
$reg = "https://bit.ly/3gFG1oc";
$yt = "https://youtube.com/c/iewil";
$server = "https://pastebin.com/raw/RZxwy6dr";
$disable = col("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".col("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".col("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".col("Family-Team-Function-INDO","b")."\n";bn();
cookie:
Save('Cookie');Save('User_Agent');
system("termux-open-url ".$yt);
bn();
$r=auto();
$user=explode('</p>',explode('<p class="username">',$r)[1])[0];
$energy=explode('<span>',explode('<p class="amount">',$r)[1])[0];
echo col("Username ~> ",'h').col($user,'k')."\n";
echo col("Energy ~> ",'h').col($energy,'k')."\n";line();
menu:
echo col("1 >","m")." AutoFaucet\n";
echo col("2 >","m")." Update Cookie\n";
$pil=readline(col("Input Number ","h").col("> ","m"));line();
if($pil==1){goto faucet;
}elseif($pil==2){unlink("Cookie");goto cookie;
}else{echo col("Bad Number\n","m")."\n";line();goto menu;}
faucet:
while(true){auto();$api = api();$time = $api["seconds"];$msg = $api["message"];auto();if($time){tmr($time);}$energy=explode('<span>',explode('<p class="amount">',auto())[1])[0];if($msg=="no_autoclaims"){echo col('insufficient BITS Balance','m')."\n";goto menu;}api();Credit();echo col("Energy ~> ",'h').col($energy,'k')."\n";line();}
function head(){$user=Save("User_Agent");$cookie=Save("Cookie");$ua=["user-agent: ".$user,"cookie: ".$cookie];return $ua;}
function host(){return "https://emcsnetwork.com";}
function auto(){$url = host().'/dashboard/claim/auto/start';return Run($url,head());}
function api(){$url = host().'/dashboard/claim/auto/api';return json_decode(Run($url,head()),1);}
function Credit(){$r = Run(host().'/dashboard',head());preg_match_all('#<p class="amountText">(.*?)<span class="text-uppercase">(.*?)</span>#is',$r,$coin);echo str_repeat(' ',11).col('Credit Balance','c')."\n";for($i=0;$i<count($coin[1]);$i++){if($i % 2 == 0){echo col(trim($coin[1][$i]),'h').' '.col(substr($coin[2][$i],0,3),'k').col("   |   ",'m');}else{echo col(trim($coin[1][$i]),'h').' '.col(substr($coin[2][$i],0,3),'k')."\n";}}line();}
function Run($url, $httpheader = 0, $post = 0, $proxy = 0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($httpheader){curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);}if($proxy){curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);curl_setopt($ch, CURLOPT_PROXY, $proxy);}curl_setopt($ch, CURLOPT_HEADER, true);$response = curl_exec($ch);$httpcode = curl_getinfo($ch);if(!$httpcode) return "Curl Error : ".curl_error($ch); else{$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($header, $body)[1];}}
function Save($namadata){if(file_exists($namadata)){$datauser=file_get_contents($namadata);}else{$datauser=readline("Input ".$namadata." > ");echo "\n";file_put_contents($namadata,$datauser);}return $datauser;}
function Col($str,$color){if($color=="rand"){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function Slow($msg){$slow = str_split($msg);foreach( $slow as $slowmo ){echo $slowmo; usleep(70000);}}
function Line(){$len = 36;$var = '─';echo str_repeat($var,$len)."\n";}
function Bn(){global $a,$reg;system('clear');$m="\033[1;31m";$p="\033[1;37m";$k="\033[1;33m";$h="\033[1;32m";$u="\033[1;35m";$b="\033[1;34m";$c="\033[1;36m";$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";$z=trim(strtoupper($a[1]));$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$a[2].$k."]".$p.$line.".\n{$u}.__              .__.__ 	    {$p}| \n{$u}|__| ______  _  _|__|  |	\n|  |/ __ \ \/ \/ /  |  |\n|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n        \/\n{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n{$p}────────────────────────────────────\nLink Reg : ".$reg."\n\n";}
function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo col(date('i:s',$res),"rand");sleep(1);}}
