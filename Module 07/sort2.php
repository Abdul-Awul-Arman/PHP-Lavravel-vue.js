<?php
// $numbers = [45, 12, 78, 4, 23, 89, 1];
$numbers = ["AA","aa","bbb","cCc","sss"];

sort($numbers, SORT_STRING|SORT_FLAG_CASE);

print_r($numbers);


