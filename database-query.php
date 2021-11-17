<?php

require 'config.php';


$query = array(
	'id' => 4,
    'name' => "برق لب لامپی",
    'price' => '23,000',
    'off' => '',
    'serial_number' => '104'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
