<?php

require 'config.php';


$query = array(
	'id' => 10,
    'name' => "براش BH Cosmetics",
    'price' => '250,000',
    'off' => '',
    'serial_number' => '109'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
