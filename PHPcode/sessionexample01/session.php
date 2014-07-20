<?php

//$a_number = 100;
session_start();
//$a_number = $_SESSION['number1'];
$_SESSION['number1'] = $_SESSION['number1'] + 10;
echo $_SESSION['number1'];

?>