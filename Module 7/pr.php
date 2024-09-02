<?php

function fun(int $a,int $b)
{
    if($a==10 || $b==10){
        return "True";
    }
    else if($a+$b==10){
        return "True";
    }
    else{
        return "False";
    }
   
}

$ans=fun(23,3);
echo $ans;

