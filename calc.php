<?php

$mainprice = isset($_GET['mainprice']) ? $_GET['mainprice'] : 0;
$num = isset($_GET['num']) ? $_GET['num'] : 0;

echo $mainprice*$num;