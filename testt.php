<?php
$url = "https://gateway.zibal.ir/v1/request";
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);
curl_setopt($curl, CURLOPT_HEADER, false);

$data = curl_exec($curl);

curl_close($curl);