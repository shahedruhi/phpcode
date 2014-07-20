<?php

require 'person.php';
session_start();
$person = $_SESSION['a_person'];
echo $person->get_full_name();
echo $person->get_reverse_name();

?>

