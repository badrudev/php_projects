<?php
 function fib($n){
    $counter = 0;
    $series = '';
    $first = 0;
    $sec = 1;
    while($counter < $n){
        $series .=$first;
        $third = $first + $sec;
        $first = $sec;
        $sec = $third;
        if($counter < ($n -1)){
            $series .=', ';
        }
        $counter++;
    }
     return $series;
 }

 echo fib(10);

 // PHP code to get the Fibonacci series
// Recursive function for fibonacci series.
function Fibonacci($number){
      
    // if and else if to generate first two numbers
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    // Recursive Call to get the upcoming numbers
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
  
// Driver Code
$number = 10;
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),' ';
}



$count=0;
$length=7;
$prev = [0];
while($count < $length){
 if($count < 2){
   echo $count;
   array_push($prev,$count);
 }else{
   $len = count($prev);
   $val = $prev[$len-2] + $prev[$len-1];
   echo $val;
   array_push($prev,$val);
  
 }
 $count++;
}
?>