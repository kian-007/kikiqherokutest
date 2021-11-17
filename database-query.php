<?php

require 'config.php';


$query = array(
	'id' => 8,
    'name' => "ریمل Hudamoji",
    'price' => '60,000',
    'off' => '',
    'serial_number' => '107'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
