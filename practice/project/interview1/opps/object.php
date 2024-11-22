<?php
 
 $class = array(
      (object)array('name'=>'badru','age'=>20),
      (object)array('name'=>'rahul','age'=>10),
      (object)array('name'=>'arman','age'=>40),
      (object)array('name'=>'chetan','age'=>24)
 );

//  echo "<pre>";
//  print_r($class);
foreach( $class as $k=>$v){
   echo "<pre>";
 print_r($v->name);
}

