<?php
// Create an Imagick Draw object 
$draw = new \ImagickDraw(); 
   
// Set the stroke color 
$strokeColor = new \ImagickPixel('Green'); 
$fillColor = new \ImagickPixel('Red'); 
$draw->setStrokeOpacity(1); 
$draw->setStrokeWidth(2); 
$draw->setStrokeColor('black'); 
$draw->setFillColor('lightgreen'); 
$draw->rotate(40); 
$imagick = new \Imagick(); 
$imagick->newImage(500, 500, 'White'); 
// Set the image format 
$imagick->setImageFormat("png"); 
$draw->circle(154, 50, 90, 65);
$draw->rectangle(110, 10, 200, 100); 
$imagick->drawImage($draw); 
header("Content-Type: image/png"); 
echo $imagick->getImageBlob(); 
?>