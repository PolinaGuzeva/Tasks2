<?php
$filename11 = 'Frame 1.jpg';

list($width, $height) = getimagesize($filename11);
$new_width = 1024;
$new_height = 724;

$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename11);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

imagejpeg($image_p,'new.jpeg', 50); //50% это качество 0-100%
echo '<img src="new.jpeg" width="200" height="100" alt=" ">';
?>