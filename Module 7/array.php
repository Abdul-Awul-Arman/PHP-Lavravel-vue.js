<?php

// $arry=array("arman","nur","shad","rahat");

// foreach($arry as $item){
//     echo "$item ";
// }


//Associative array

// $arman=[
//     "name"=>"arman",
//     "roll"=>"50",
// ];

// // print_r($arman["name"]);

// foreach($arman as $key=>$value){
//     echo $value;
// }

$arman = ["age" => 22, "name" => "arman", "city" => "sylhet"];

// $values = array_values($arman);
// $values = array_keys($arman);

// $ans= array_key_exists("age",$arman);
// $ans= array_search("arman",$arman);

// $ans=array_flip($arman);
$ans=asort($arman);


 
print_r($ans) ;

// foreach ($values as $ans) {
//   echo "$ans ";
// }
