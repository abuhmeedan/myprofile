<?php

$siteKey = "6Leo1VYUAAAAAJwxgIfUDr58x5yEMsAIXEkprd_u";
$captcha = $_REQUEST['g-recaptcha-response'];

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$siteKey."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

$obj = json_decode($response);

if($obj->success == true)
{
    if ( isset($_SERVER["OS"]) && $_SERVER["OS"] == "Windows_NT" ) {
        $hostname = strtolower($_SERVER["COMPUTERNAME"]);
    } else {
        $hostname = `hostname`;
        $hostnamearray = explode('.', $hostname);
        $hostname = $hostnamearray[0];
    }
    
    header("Content-Type: text/plain");
    header("X-Node: $hostname");
    $replyto = $_REQUEST['_replyto'];
    $name = $_REQUEST['name'];
    $from = "admin@nourjan.com";
    $toemail = "abuhmeedan@gmail.com";
    $subject = $_REQUEST['subject']." (From: $name)";
    $message = $_REQUEST['message'];
    
    if ( $from == "" || $toemail == "" ) {
        header("HTTP/1.1 500 WhatAreYouDoing");
        header("Content-Type: text/plain");
        echo 'FAIL: You must fill in From: and To: fields.';
        exit;
    }
    $result = mail($toemail, $subject, $message, "From: $from\r\nReply-To: $replyto" );
    header("Location: http://stage.nourjan.com");
    header("Via: waleedz");
}
else
{
    echo "btthbl Y3ni?!!!<br> e3mel el reCAPTCHA";
}
exit;
?>