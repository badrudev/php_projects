<?php  
// $alpha = range('A', 'Z');  
// for ($i=5; $i>=1; $i--) {    
//   for($j=0; $j<=$i; $j++) {    
//      echo '-';    
//   }  
//   $j--;  
// for ($k=0; $k<=(5-$j); $k++) {    
//     echo $alpha[$k];   
// }    
// echo "<br>\n";  
// }  


for ($rows=1; $rows < 8 ; $rows++) { 
  echo '<tr>';
  for ($colum=1; $colum < 8; $colum++) { 
      $total = $rows + $colum;
      
      if($total % 2 ==0)
      {
          echo "<td width='40' height='40' bgcolor='#FFFFF'></td>";
          echo "&";
      }
      else
      {
          echo "<td width='40' height='40' bgcolor='#00000'></td>";
          echo "*";
      }
  }
  echo "<br/>";
  echo '</tr>';
} 