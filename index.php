<?php
 
//Carregar imagem
$rImg = ImageCreateFromJPEG("passport.jpg");
 
//Definir cor
$cor = imagecolorallocate($rImg, 0, 0, 0);
 
//Escrever nome
imagestring($rImg,5,126,22,urldecode($_GET['nome']),$cor);
 
//Header e output
header('Content-type: image/jpeg');
imagejpeg($rImg,NULL,100);
 
?>