<?php

$url = "https://gateway.zibal.ir/v1/request";
$data = array(
    "merchant" => "zibal",
    "amount" => 160000,
    "callbackUrl" => "https://kikiq.herokuapp.com/buy.php",
    "description" => "Hello World!",
    "orderId" => "ZBL-7799",
    "mobile" => "09123456789"
);

$json_data = json_encode($data);


$http = array(
    'http' => array(
        'method' => 'POST',
//        'header' => 'Content-Type:application/json',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($http);
$result = file_get_contents($url, false, $context);

echo $result;

