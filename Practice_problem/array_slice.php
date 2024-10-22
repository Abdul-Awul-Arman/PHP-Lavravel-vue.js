<?php
$numbers = [3, 5, 7, 9, 11, 13, 15, 17];
// Use array_slice() to extract the middle three elements
$index = (count($numbers) / 2) - 1;

 $newarray=array_slice($numbers,$index,2);

 print_r($newarray);

//second_problem


