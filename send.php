<?php
$uid="##########"; //your uid
$pin="########"; //your api pin
$sender="PSGRKC"; // approved sender id
$domain="www.smsalertbox.com/"; // connecting url
$route="0";// 0-Normal,1-Priority
$method="POST";

if(isset($_REQUEST['send']))
{
    $mobile=$_REQUEST['mobile'];
    $message=$_REQUEST['message'];
    $uid=urlencode($uid);
    $pin=urlencode($pin);
    $sender=urlencode($sender);
    $message=urlencode($message);
    $parameters="uid=$uid&pin=$pin&sender=$sender&route=$route&mobile=$mobile&message=$message ";
    $url="http://$domain/api/sms.php";
    $ch = curl_init($url);
    if($method=="POST")
    {
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);
    }
    else
    {
        $get_url=$url."?".$parameters;
        curl_setopt($ch, CURLOPT_POST,0);
        curl_setopt($ch, CURLOPT_URL, $get_url);
    }
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_HEADER,0);  // DO NOT RETURN HTTP HEADERS
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);  // RETURN THE CONTENTS OF THE CALL
    $return_val = curl_exec($ch);
    if($return_val=="")
    echo "Process Failed, Please check your connecting domain, username or password.";
    else
    echo "Message Id : $return_val"; //Returning the message id  :  Whenever you are sending an SMS our system will give a message id for each numbers, which can be saved into your database and in future by calling these message id's using correct API's you can update the delivery status.
}
echo "<form name='f1' method='post'>";
echo "<p> Mobile: <input name='mobile' > </p>";
echo "<p> Message: <textarea name='message' ></textarea> </p>";
echo "<p> <input type='submit' value='Send' name='send'></p>";
echo "</form>";