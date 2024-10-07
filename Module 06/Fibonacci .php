<?php
    $first=0;
    $second=1;
    $final=1;

    for($i=0;$i<=10;$i++)
    {
        echo $final.PHP_EOL;
        $first=$final;
        $second=$first+$final;
        $final=$second;
    }
?>