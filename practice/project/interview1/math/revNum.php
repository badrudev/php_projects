<?php

/* $number = -12345;
$array = str_split((string) $number);
$revArr = array_reverse($array);
$sign="";
if($number < 0){
 $sign = array_pop($revArr);
}
$revNum = (string) implode($revArr);
$res =  $sign.$revNum;
echo (int) $res; */


$number = -12345;
$revNum = 0;
$num = abs($number);

while($num > 0){
 $revNum  = $revNum * 10 + $num%10;
 $num = floor($num/10);
}
if($number > 0){
  echo $revNum;
}else{
  echo $revNum * -1;
}