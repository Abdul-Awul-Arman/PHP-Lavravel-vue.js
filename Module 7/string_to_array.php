<?php
// string to array
// $name = explode(". ", "aramn.nur.rahat. araft");
$name = preg_split('/, |,|,  /', "aramn,nur,rahat, araft,  masrafe");

var_dump($name);
// echo $name[0];

// array to string
// $arry = join(",", $name);

// var_dump($arry);

echo count($name);
