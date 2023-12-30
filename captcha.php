<?php
session_start();
$captcha_code=substr(md5(rand(10000,99999)),0,5);
$_SESSION['CODE']=$captcha_code;
$img=imagecreatetruecolor(60,30);
$bgcolor=imagecolorallocate($img,0,0,255);
imagefill($img,0,0,$bgcolor);
$text_color=imagecolorallocate($img,255,255,255);
imagestring($img,20,rand(1,5),rand(1,10),$captcha_code,$text_color);
header('Content-type:image/jpeg');
imagejpeg($img);

?>