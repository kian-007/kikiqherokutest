<?php
error_reporting(E_ALL ^ E_NOTICE);

$image = $_GET['image'];

switch ($image){
// Home Images ---------------------------------------
case 1:
    $filename = 'beautyandhealth/cobrush1.jpg';
    $type = 'image/jpg';
    break;
case 2:
    $filename = 'beautyandhealth/cobrush2.jpg';
    $type = 'image/jpg';
    break;
case 3:
    $filename = 'skin/lipbalm1.jpg';
    $type = 'image/jpg';
    break;
case 4:
    $filename = 'skin/nlipgloss.jpg';
    $type = 'image/jpg';
    break;
case 5:
    $filename = 'kiki.jpg';
    $type = 'image/jpg';
    break;
case 6:
    $filename = 'bags1.jpg';
    $type = 'image/jpg';
    break;
case 7:
    $filename = 'bags2.jpg';
    $type = 'image/jpg';
    break;
case 8:
    $filename = 'brushes.jpg';
    $type = 'image/jpg';
    break;
case 9:
    $filename = 'mirror1.jpg';
    $type = 'image/jpg';
    break;
case 10:
    $filename = 'mirror1.jpg';
    $type = 'image/jpg';
    break;
case 11:
    $filename = 'mirror2.jpg';
    $type = 'image/jpg';
    break;
// Home Images ---------------------------------------
// iteminfo images -----------------------------------
case 12:
    $filename = 'rimmel7.jpg';
    $type = 'image/jpg';
    break;
case 13:
    $filename = 'balmbastani1.jpg';
    $type = 'image/jpg';
    break;
case 14:
    $filename = 'lamp3.jpg';
    $type = 'image/jpg';
    break;
case 15:
    $filename = 'capsul5.jpg';
    $type = 'image/jpg';
    break;
case 16:
    $filename = 'bbrushes.jpg';
    $type = 'image/jpg';
    break;
case 17:
    $filename = 'cobrush2.jpg';
    $type = 'image/jpg';
    break;
case 18:
    $filename = 'brushm7.jpg';
    $type = 'image/jpg';
    break;
case 19:
    $filename = 'mrtb55.jpg';
    $type = 'image/jpg';
    break;
case 20:
    $filename = 'facebrush1.jpg';
    $type = 'image/jpg';
    break;
}

if(!is_null($filename)){
    
    header("Content-Type: $type");
    //header("Content-Disposition: attachment; filename=$filename");
    readfile("images/$filename");
 
}else{
    
    http_response_code(404);
    die("Error: File Not Found!");
    
}