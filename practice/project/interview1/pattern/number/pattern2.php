<?php
$num = 1;
for ($i=1; $i <=5 ; $i++) { 
    $num = $num;
    for ($j=1; $j<=$i ; $j++) { 
       echo $num;
       $num++;
    }
    echo "<br/>";
}
?>