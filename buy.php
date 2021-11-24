<?php

$url = "https://gateway.zibal.ir/v1/request";
$data = array(
    "merchant" => 'zibal',
    "amount" => 160000,
    "callbackUrl" => "https://kikiq.herokuapp.com/buy.php",
    "description" => "Hello World!",
    "orderId" => "ZBL-7799",
    "mobile" => "09198361951"
);

$json_data = json_encode($data);


//$http = array(
//    'http' => array(
//        'method' => 'POST',
////        'header' => 'Content-Type:application/json',
//        'content' => http_build_query($data)
//    )
//);
//$context = stream_context_create($http);
//$result = file_get_contents($url, false, $context);

//echo $result;

//--------------------------------------------------

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );

$response = curl_exec($curl);
$response = json_decode($response , true);

$trackid = $response['trackId'];
curl_close($curl);

echo $response.'<br>';
echo $trackid;

//$urlstart = "https://gateway.zibal.ir/start/{{".$trackid."}}";
//echo $urlstart;
?>

<!--<button onclick='location.href="--><?php //echo $urlstart; ?>//"'>ادامه خرید</button>