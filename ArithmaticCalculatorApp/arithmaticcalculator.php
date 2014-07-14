
<html>
<head>
	<title>Arithmatic Calculator</title>
</head>
<body>
	<form action = "arithmaticcalculator.php" method = "GET">
		<table border="1" style="width:300px">
			<tr>
				<td>First No : </td>
				<td><input type = 'text' name = 'firstnoText'> <br /></td>
			</tr>
			<tr>
				<td>Second No : </td>
				<td><input type = 'text' name = 'secondnoText'> <br /></td>
			</tr>
		    <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Add" name = 'addButtion'><br /></td>
		    </tr>
		     <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Subtract" name = 'subtractButtion'><br /></td>
		    </tr>
		     <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Multiply" name = 'multiplyButtion'><br /></td>
		    </tr>
		     <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Divide" name = 'divideButtion'><br /></td>
		    </tr>
		</table>
	</form>	
	<?php
		require 'calculation.php'; 
		//$a_calculation = new Calculation();
		//$a_calculation->first_No = $_GET['firstnoText'];
		//$a_calculation->second_No = $_GET['secondtnoText'];

		if(isset($_GET['addButtion']))
		{	
			$a_calculation = new Calculation();
			$a_calculation->first_No = $_GET['firstnoText'];
		    $a_calculation->second_No = $_GET['secondnoText'];
			$addition_result = $a_calculation->get_adddition(); 

			echo "Addition is: ". $addition_result;		

		}
		else if(isset($_GET['subtractButtion']))
		{
			$a_calculation = new Calculation();
			$a_calculation->first_No = $_GET['firstnoText'];
		    $a_calculation->second_No = $_GET['secondnoText'];	
			$subtraction_result = $a_calculation->get_subtraction(); 

			echo "Subtraction is: ". $subtraction_result;		

		}
		else if(isset($_GET['multiplyButtion']))
		{
			
			$a_calculation = new Calculation();
			$a_calculation->first_No = $_GET['firstnoText'];
		    $a_calculation->second_No = $_GET['secondnoText'];				
			$multiplication_result = $a_calculation->get_multiplication(); 

			echo "Multiplication is: ". $multiplication_result;		

		}
		else if(isset($_GET['divideButtion']))
		{
			
			$a_calculation = new Calculation();
			$a_calculation->first_No = $_GET['firstnoText'];
		    $a_calculation->second_No = $_GET['secondnoText'];			
			$division_result = $a_calculation->get_division(); 

			echo "Division is: ". $division_result;		

		}
	?>

</body>
</html>	
