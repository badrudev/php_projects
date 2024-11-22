<?php
class Inherit {
     public $name;
     public $age;
     function __construct($name,$age){
         $this->name = $name;
         $this->age = $age;
     }

     function detail(){
         echo "your name is $this->name and your age is $this->age";
     }
}


class Child extends Inherit {
     function emp(){
        echo "my name is $this->name and my age is $this->age";
     }
}

$cls = new Child('adbr',20);
$cls->emp();

?>