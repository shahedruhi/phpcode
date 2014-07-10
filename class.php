<?php

 //declaring a class
 class User
 {
 var $name = 'FTFL';
 var $email = '';
 
 
 function getName(){
	return "FTFL2";
 
 }
 
 
 }
 
 //initiating a object
 $user = new User();
 
 //var_dump($user);
 
 echo $user->name;
 echo $user->getName();
 
 

?>
