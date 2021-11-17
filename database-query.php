<?php

require 'config.php';


$query = array(
	'id' => 7,
    'name' => "بالم لب آبمیوه ای",
    'price' => '27,000',
    'off' => '',
    'serial_number' => '106'
);

try{
    update_goods($query);
    echo 'successful';
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
