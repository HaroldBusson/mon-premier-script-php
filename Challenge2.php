<?php
function decode($message) {
    $lenghtMessage= strlen($message);
$halfMessage =$lenghtmessage/2;
$subStringKeyFigure = mb_substr($Message,5,$lenghtMessage);
$replaceChain = str_ireplace("@#?",'',$subStringKeyFigure);
$reverseChain = strrev($replaceChain);

}

$message1="0@sn9sirppa@#?ia’jgtvryko1";
$message2="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3="aopi?sgnirts@#?sedhtg+p9l!";

?>