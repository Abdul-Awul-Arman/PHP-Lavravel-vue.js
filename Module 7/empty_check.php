<?php

$name =0;


if (isset($name)) {
    echo "name is set";
} else {
    echo "name is uset";
}

echo "\n";

if (empty($name)) {
    echo "name is empty";
} else {
    echo "name is unempty";
}
echo "\n";

    if(isset($name) && (is_numeric($name) || $name !="")){
        echo "not empty";
    }
    else{
        echo "empty";
    }