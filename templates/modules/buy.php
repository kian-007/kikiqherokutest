<?php


$data = array(
    "merchant" => "zibal",
    "amount" => 160000,
    "callbackUrl" => "http://yourapiurl.com/callback.php",
    "description" => "Hello World!",
    "orderId" => "ZBL-7799",
    "mobile" => "09123456789"
);

$json_data = json_encode($data);
echo '<pre>';
var_dump($json_data);
echo '</pre>';


//---------------------------------------------
//{
//    "merchant": "zibal",
//    "amount": 160000,
//    "callbackUrl": "http://yourapiurl.com/callback.php",
//    "description": "Hello World!",
//    "orderId": "ZBL-7799",
//    "mobile": "09123456789"
//}
