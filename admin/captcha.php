<?php
session_start();
function randomCaptcha() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
   
//remember to declare $pass as an array
$pass = array();
 
   //put the length -1 in cache
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 4; $i++)
    {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
 
   //turn the array into a string
    return implode($pass);
}
 
$code=randomCaptcha();
$_SESSION["code"]=$code;
 
//height and width for captcha background
$im = imagecreatetruecolor(100, 50);
 
//background color blue
$bg = imagecolorallocate($im, 242, 243, 244);
 
//text color white
$fg = imagecolorallocate($im, 132, 132, 130);
imagefill($im, 0, 0, $bg);
 
//( $image , $fontsize , $x-distance , $y-distance , $string , $fontcolor )
imagestring($im, 5, 30, 15,  $code, $fg);
 
//generate image
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>