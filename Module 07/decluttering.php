<?php

$array = ["roll" => 3, "name" => "abdulawularman","mother_name"=>"fathema","father_name="=>"abdulmomen" ,"address" => "sylhet", "occupation" => "software_engineer"];

$secondArray=array_splice($array,0,2);
print_r($secondArray).PHP_EOL;
print_r($array);
