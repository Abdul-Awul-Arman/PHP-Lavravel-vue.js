<?php
// $vegetableString = "carrot, brinjal, tomato";

// $vegetableArray = explode(",", $vegetableString);
// $vegetableArray = ['carrot', 'brinjal', 'tomato'];

// $vegetableStringNew = join("", $vegetableArray);

// echo $vegetableString;

// $array = ["apple", "banana", "cherry"];
// $string = join(", ", $array);

// echo $string;
// $array = ["apple", "banana", "cherry"];
// $string = implode(", ", $array);

// echo $string;

//multiple delimeter

$vegetableString = ["carrot", "brinjal", "tomato", "potato"];

// $multipleAns = preg_split('/(, |,)/', $vegetableString);

// print_r($multipleAns);

$coded = implode(" this  is ", $vegetableString);

// echo $vegetableString[0];

echo $coded;

// print_r($vegetableString);
