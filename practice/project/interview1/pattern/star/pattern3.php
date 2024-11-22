<?php
 for ($i=1; $i <=5 ; $i++) { 
    for ($j=1; $j <=5 ; $j++) { 
        if($j <=(5-$i)){
           echo "&nbsp;&nbsp";
        }else{
            echo"*";
        }
    }  
    echo "<br/>";
 }


?>