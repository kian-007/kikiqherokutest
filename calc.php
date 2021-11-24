<?php

$mainprice = isset($_POST['mainprice']) ? $_POST['mainprice'] : 0;
$num = isset($_POST['num']) ? $_POST['num'] : 0;

$final_price =  $mainprice*$num;
echo $final_price." تومان";