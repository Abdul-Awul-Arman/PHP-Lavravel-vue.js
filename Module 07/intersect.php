<?php

// $employee1Skills = ['PHP', 'JavaScript', 'SQL', 'HTML', 'CSS'];
// $employee2Skills = ['JavaScript', 'Python', 'SQL', 'Ruby', 'CSS'];
// Use array_intersect() to find common skills
// $result = array_intersect($employee1Skills, $employee2Skills);
// $result = array_diff($employee2Skills, $employee1Skills);
// print_r($result);

// $first_array = [10, 5, 3, 4];
// $second_array = [7, 5, 2, 4];

// $result = array_diff_assoc($first_array, $second_array);

// print_r($result);

$store1 = [
    'milk' => 1.50,
    'bread' => 2.00,
    'cheese' => 3.00,
    'butter' => 2.50
];

$store2 = [
    'bread' => 2.00,
    'cheese' => 2.80,
    'butter' => 2.50,
    'yogurt' => 1.50,
];
// Use array_intersect() to find items with the same price in both stores

// $result = array_intersect_assoc($store1, $store2);
$result = array_diff_assoc($store1, $store2);

print_r($result);
