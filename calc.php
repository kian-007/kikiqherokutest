<?php

$mainprice = isset($_GET['mainprice']) ? $_GET['mainprice'] : 0;
$num = isset($_GET['num']) ? $_GET['num'] : 0;

$final_price =  $mainprice*$num;
echo $final_price." تومان";