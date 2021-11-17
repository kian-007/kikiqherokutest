<?php

require 'config.php';


$query = array(
	'id' => 9,
    'name' => "براش فانتزی 4تیکه",
    'price' => '60,000',
    'off' => '',
    'serial_number' => '108'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
