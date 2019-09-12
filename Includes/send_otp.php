<?php

if(isset($_POST['signup'])){

	require('textlocal.class.php');
	$textlocal = new Textlocal(false, false, '');
	$numbers = array(9106618364);
	$sender = 'TXTLCL';
	$otp=mt_rand(100000,999999);
	$message = 'Dear Costumer, your OTP for Food Call Registration is: '.$otp;
	try {
	    $result = $textlocal->sendSms($numbers, $message, $sender);
	    //print_r($result);
	    setcookie('otp',$otp);
	    echo "sms sent";
	} catch (Exception $e) {
	    die('Error: ' . $e->getMessage());
	}

}


?>