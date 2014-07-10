<?php

 //declaring a class
 class User
 {
 var $name = '';
 var $email = '';
 
 function __construct($name="FTFL",$email="lict@ftfl.com")
 {
	$this->name = $name;
	$this->email = $email;
 }
 function getName()
 {
	return $this->name;
 }
 
 }
 
 //initiating a object
 $user1 = new User();
 //$user1->name = 'FTFL1';
 
 $user2 = new User('a','d@c.com'); 
 //$user2->name = 'FTFL2'; 
 
 
 //var_dump($user1);
 //var_dump($user2);
  
 echo $user1->getName();
 echo $user2->getName();
 
 

?>
