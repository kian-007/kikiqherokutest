<?php
error_reporting(E_ALL ^ E_NOTICE);

$image = $_GET['image'];

switch ($image){
case 1:
    $filename = 'kiki.jpg';
    $type = 'image/jpg';
    break;
case 2:
    $filename = 'bags1.jpg';
    $type = 'image/jpg';
    break;
case 3:
    $filename = 'bags2.jpg';
    $type = 'image/jpg';
    break;
case 4:
    $filename = 'brushes.jpg';
    $type = 'image/jpg';
    break;
case 5:
    $filename = 'mirror1.jpg';
    $type = 'image/jpg';
    break;
case 6:
    $filename = 'mirror1.jpg';
    $type = 'image/jpg';
    break;
case 7:
    $filename = 'mirror2.jpg';
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