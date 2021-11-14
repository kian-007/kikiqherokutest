<?php

require 'config.php';


$query = array(
	'id' => 1,
    'name' => 'آیینه',
    'price' => '17,000',
    'off' => '',
    'serial_number' => '100'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
