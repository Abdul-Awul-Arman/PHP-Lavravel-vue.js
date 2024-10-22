<?php
$employees = [
    'John' => 'Manager',
    'Doe' => 'Developer',
    'Smith' => 'Designer',
    'Jane' => 'Tester'
];
// Use array_splice() to remove the second employee (Doe => Developer)

$ans = array_splice($employees, 1, 1);

print_r($employees);

//second_problem

$cities = [
    'New York' => 8419600,
    'Los Angeles' => 3980400,
    'Chicago' => 2716000,
    'Houston' => 2328000
];
// Use array_splice() to replace the last two cities with 'Phoenix' => 1690000 and 'Philadelphia' => 1584000

    $ans=array_splice($cities,-2,2,["Phoenix" => 1690000, 'Philadelphia' => 1584000]);

    print_r($cities);

