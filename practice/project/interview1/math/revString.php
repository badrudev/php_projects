<?php
$str = "badru";
//strrev($str);
$strArr =  str_split($str);
$len = count($strArr);

for ($i=($len-1); $i>=0; $i--) { 
   echo $strArr[$i];
}
?>