<?php
// for ($i=1; $i <5; $i++) { 
//     for ($j=5; $j >$i ; $j--) { 
//        echo "&nbsp;&nbsp";
//     }
    
//     for ($l=0; $l <($i * 2)-1 ; $l++) { 
//         echo "*";
//     }
//     echo "<br/>";
// }


for ($i=1; $i <=4; $i++) { 
   for ($j=1; $j<=(2*4)-1; $j++) { 
     if($j >=4-($i-1) && $j<=4+($i-1)){
          echo "*";
     }else{
        echo "&nbsp;&nbsp";
     }
   }
   echo "<br/>";
}



$pattern = "";
$n=4;
for($i=1;$i<$n;$i++){
   for($j=1;$j<(2*$n)-1;$j++){
       //echo $i+$j>=($n+1);
       if($i+$j>=($n+1) && $i >=($j-$n)+1){ 
         echo "*";
       }else{
         echo "&nbsp&nbsp";
       }
   }
   echo "<br>";
}


?>