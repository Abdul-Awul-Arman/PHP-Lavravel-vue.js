<?php
$numbers = [45, 12, 78, 4, 23, 89, 1];
// Use sort() to sort the array in ascending order

asort($numbers);

print_r($numbers);

// for ($i = 0; $i < count($numbers); $i++) {
//     echo $numbers[$i] . PHP_EOL;
// }

foreach($numbers as $value){
    echo $value.PHP_EOL;
}
