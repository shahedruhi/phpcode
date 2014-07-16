

<?php
		require 'person.php'; 
		
		$a_person = new Person('james', 'locus', 'Scott');

//		$a_person->set_first_name('James');
		//$a_person->set_middle_name('Locus');
		//$a_person->set_last_name('Scott');
			
		echo $a_person->get_full_name()."<br/>";
		echo $a_person->get_reverse_name();	

?>


