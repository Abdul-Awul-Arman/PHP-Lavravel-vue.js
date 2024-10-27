<?php
//     $students = ['John', 'Alice', 'Bob', 'Emma', 'Charles'];
// // Use in_array() to check if 'Alice' is in the array

//    if(in_array("Alice",$students,true)){
//        echo "Alic is available";
//    }
//    else{
//         echo "Alic is not available";
//    }

$shoppingList = ['eggs', 'bread', 'butter', 'milk', 'cheese'];
// Use in_array() to check for 'milk' and 'bread'

if (in_array('milk', $shoppingList, true) && in_array('bread', $shoppingList, true)) {

    echo "All item are there";
} else {
    echo "All item is not there";
}
