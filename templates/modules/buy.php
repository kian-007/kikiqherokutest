<?php

$urlrequest = "https://gateway.zibal.ir/v1/request";
$data = array(
    "merchant" => 'zibal',
    "amount" => 160000,
    "callbackUrl" => "https://kikiq.herokuapp.com/templates/modules/buy.php",
    "description" => "Hello World!",
    "orderId" => "ZBL-7799",
    "mobile" => "09198361951"
);
$json_data = json_encode($data);
//--- request
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $urlrequest);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );

$response = curl_exec($curl);
$json_response = json_decode($response , true);
$trackid = $json_response['trackId'];

curl_close($curl);

//--- start
$urlstart = "https://gateway.zibal.ir/start/".$trackid;
echo $urlstart;

//--- verify
$urlverify = "https://gateway.zibal.ir/v1/verify";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $urlverify);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );
$verify_response = curl_exec($curl);
curl_close($curl);
echo $verify_response;
?>

<button onclick='location.href="<?php echo $urlstart; ?>"'>ادامه خرید</button>


