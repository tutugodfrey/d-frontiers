<?php
//logo for the newfrontiers site
$nflogo = ImageCreate(200, 35);
$background_color = ImageColorAllocate($nflogo, 104, 201, 200);
$text_color = ImageColorAllocate($nflogo, 98, 125, 64);
ImageString($nflogo, 5, 10, 10, "NewFrontiers", $text_color);
//send header to create the image
header("Content-Type:image/png");
ImagePng($nflogo);

?>