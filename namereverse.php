

<?php
		require 'person.php'; 
		
		$a_person = new Person();
		$a_person->first_Name = 'James';
		$a_person->middle_Name = 'locus';
		$a_person->last_Name = 'Scott';
			
		echo $a_person->get_full_name()."<br/>";
		echo $a_person->get_reverse_name();	

?>


