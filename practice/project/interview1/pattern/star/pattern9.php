<?php

for ($i=1; $i < 9; $i++) { 
    for ($j=1; $j <9; $j++) { 
       
        if($i%2!==0){
            if($j%2==0){
                echo "* &nbsp;&nbsp;";
            }else{
                 echo "+ &nbsp;&nbsp;";
            }
        }else{
            if($j%2==0){
                echo "+ &nbsp;&nbsp;";
            }else{
                 echo "* &nbsp;&nbsp;";
            }
        }
        

       
    }
    echo "<br/>";
}

?>