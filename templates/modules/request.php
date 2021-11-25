<?php
require 'lib/functions.php';

global $price;
$price = intval(str_replace($price, ',', ''));
$number = intval($_POST['number']);
$final_price = $price * $number;
$current_user = get_current_user_data();
$phone_number = $current_user['phone_number'];
$parameters = array(
    "merchant"=> ZIBAL_MERCHANT_KEY,//required
    "callbackUrl"=> ZIBAL_CALLBACK_URL,//required
    "amount"=> $final_price,//required

    "orderId"=> time(),//optional
    "mobile"=> $phone_number//optional for mpg
);

$response = postToZibal('request', $parameters);
var_dump($response);
if ($response->result == 100)
{
    $startGateWayUrl = "https://gateway.zibal.ir/start/".$response->trackId;
    header('location: '.$startGateWayUrl);
}
else{
    echo "errorCode: ".$response->result."<br>";
    echo "message: ".$response->message;
}