<?php

require 'config.php';


$query = array(
	'id' => 2,
    'name' => 'کرم مرطوب کننده دست',
    'price' => '20,000',
    'off' => '',
    'serial_number' => '101'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
