<?php

require 'config.php';


$query = array(
	'id' => 6,
    'name' => "برق لب قرصی",
    'price' => '20,000',
    'off' => '',
    'serial_number' => '105'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
