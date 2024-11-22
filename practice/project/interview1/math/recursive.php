<?php
$num = 0;
 function printNum($n){
    GLOBAL $num;
    if($n < 10){
        $num++;
        echo $num;
        printNum($num);
    }
     
 }
 printNum(1);
?>