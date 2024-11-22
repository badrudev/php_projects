<?php

class Capsul {
     protected $SBI = "SBI";
     function __construct($acc){
         $this->acc = $acc;
     }

     function bank(){
         echo "my back is $this->SBI and my account no. $this->acc";
     }
}

$cap = new Capsul('234453');
$cap->bank();

?>