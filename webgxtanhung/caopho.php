<meta name="viewport" content="width=device-width, initial-scale=1">
<?php  
echo "<img src=img/bgcaopho2.png>";  
$im = @imagecreatefrompng("img/bgcaopho2.png"); // Path Images  
$string = "BBBB ÔNG: NGUYỄN VĂN A CCCC"; // String 
$pxX = strlen($string)*10; // X  
$pxY = Imagesy($im)-Imagesx($im) + 350; // Y  
$fontsize = "60";
$color = ImageColorAllocate($im, 148, 0, 139); // Text Color  
$dir= dirname(realpath(__FILE__));
$sep=DIRECTORY_SEPARATOR;   
$font =$dir.$sep.'font/Arial.ttf';
ImagettfText($im, $fontsize, 0, $pxX, $pxY, $color, $font, $string);
imagePng($im,"img/bgcaopho2.png");  
ImageDestroy($im);  
//$ww = $im->getImageWidth();
//$size = getimagesize("img/bgcaopho2.png");
//echo "xxxxxxxxxxxx: ".$ww;
?>  

