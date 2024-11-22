<?php

function isPrime($num){
     if($num <=1){
        return false;
     }
    for ($i=2; $i <=$num; $i++) { 
        if($num%$i==0){
            return false;
        }
    }
    return true;
}
if(isPrime(4)){
    echo "true";
}else{
    echo "false";
}
?>