<?php

require 'config.php';


$query = array(
	'id' => 4,
    'name' => "Victoria's secret کیف آرایشی ",
    'price' => '40,000',
    'off' => '',
    'serial_number' => '103'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
