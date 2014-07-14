
<html>
<head>
	<title>Session</title>
</head>
<body>
	<form action = "details.php" method = "GET">
		<input type = "submit" value = "See Details" name = 'submitButtion'>
	</form>	
	<?php
		require 'person.php';
		session_start();
		$person = new Person('James','Locust','Scott');
		$_SESSION['a_person'] = $person;		
	?>

</body>
</html>	
