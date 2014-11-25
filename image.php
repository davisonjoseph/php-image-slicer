<?php
$filename = 'uploads/a.JPG';
$fileData = getimagesize($filename);

$source_handle = ImageCreateFromJPEG($filename);

$imageW = $fileData[0];
$imageH = $fileData[1];

/* Cropping Parameters */
$part1X = 0;
$part1Y = 0;
$part1W = $imageW/2;
$part1H = $imageH;
$part2X = $imageW/2;
$part2Y = 0;
$part2W = $imageW/2;
$part2H = $imageH;


$to_crop_array = array('x' =>$part1X , 'y' =>$part1Y, 'width' => $part1W, 'height'=> $part1H);
$imgCroped1 = imagecrop($source_handle, $to_crop_array);

$to_crop_array = array('x' =>$part2X , 'y' =>$part2Y, 'width' => $part2W, 'height'=> $part2H);
$imgCroped2 = imagecrop($source_handle, $to_crop_array);

/* Image Split */
imagejpeg($imgCroped1, '1a.jpeg', 100);
imagejpeg($imgCroped2, '1b.jpeg', 100);


?>