<?php

$str = "ana";
$strArr = str_split($str);
$rev = array_reverse($strArr);
$revStr = implode($rev);
if($str==$revStr){
 echo "palidrom";
}else{
 echo "not palidrom";
}
