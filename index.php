<?php
 /* @author: Tohir Omoloye; */
//Create Image
$img = ImageCreateFromJPEG("passport.jpg");
 
//Define cordinate you like to write in
$cordinate = imagecolorallocate($img, 0, 0, 0);
 
//Engrave the name on image
imagestring($img,5,126,22,urldecode($_GET['name']),$cordinate);
 
//Output
header('Content-type: image/jpeg');
imagejpeg($img,NULL,100);
 
?>
