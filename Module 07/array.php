<?php
$foods = ["vegetable" => "brinjal,carrot,brocollli", "drinks" => "water,juice", "fruits" => "orange,banana,apple"];

// echo $foods["vegetable"];
    // foreach($foods as $key=>$value){
    //     echo $value.PHP_EOL;
    // }

    $keys=array_keys($foods);

    for($i=0;$i<count($keys);$i++){
        
        $key=$keys[$i];
        echo $foods[$key];
    }


