<?php
<<<<<<< HEAD
    require_once("sms.php");
    
    $user="01020300000@ega.or.th";
=======
	require_once("sms.php");
	
	$user="01020300000@ega.or.th";
>>>>>>> bb07dbfd764a06923827b47cdb035ffc6fd4aa06
    $pass="ADFG!@#";

    //Test sending OTP
    $sender = sms::init();
    $response = $sender->sendSMS("66817264466","user: ".$user."  pass: ".$pass." ", true);
<<<<<<< HEAD
    echo "<pre>Response: $response </pre></br></br>";
=======
	echo "<pre>Response: $response </pre></br></br>";
>>>>>>> bb07dbfd764a06923827b47cdb035ffc6fd4aa06
?>