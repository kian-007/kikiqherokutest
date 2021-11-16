<?php

require 'config.php';


$query = array(
	'id' => 2,
    'name' => 'فیس براش چکشی',
    'price' => '48,000',
    'off' => '',
    'serial_number' => '102'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
