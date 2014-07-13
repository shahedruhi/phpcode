
<html>
<head>
	<title>Simple Interest Calculator</title>
</head>
<body>
	<form action = "calculator.php" method = "GET">
		Pricipal Amount      <input type = 'text' name = 'pricipalAmountText'> <br />
		Annual Interest Rate <input type = 'text' name = 'annualInterestText'> <br />
		Time Period          <input type = 'text' name = 'timePeriodText'> <br />
		<input type = "submit" name = 'submitButtion'> <br />
	</form>	
	<?php
		require 'interestcalculator.php'; 
		if(isset($_GET['submitButtion']))
		{
			$an_input = new InterestCalculator ();
			$an_input->principal_Amount = $_GET['pricipalAmountText'];
			$an_input->annual_interest_rate = $_GET['annualInterestText'];
			$an_input->time_period = $_GET['timePeriodText'];

			$total_amount = $an_input->get_total_amount(); 

			echo $an_input->principal_Amount. ' '. $an_input->annual_interest_rate. ' '. $an_input->time_period. ' Result'.' '. $total_amount;
		}
	?>

</body>
</html>	
