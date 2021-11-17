<?php

require 'config.php';


$query = array(
	'id' => 10,
    'name' => "براش ماسک",
    'price' => '25,000',
    'off' => '',
    'serial_number' => '110'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
