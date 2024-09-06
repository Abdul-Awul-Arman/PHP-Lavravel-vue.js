<?php
$arry1 = ["arman", "arafat", "mashrafe", "nur", "rahat", "ahmad", "shad","ayaan"];
$arry2 = ["1" => "arman", "2" => "arafat", "3" => "mashrafe", "4" => "nur", "5" => "rahat", "6" => "ahmad", "7" => "shad", 30 => "ayaan"];

$merge1=array_slice($arry2,0,3,true);
$merge2=array_slice($arry2,3,null,true);

// $demo = array_merge($arry1, $arry2);
$demo2 = $merge1 + $merge2;

// print_r("$demo\n");
print_r($demo2);

echo count($arry1);
echo count($arry2);
