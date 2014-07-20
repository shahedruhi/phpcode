
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
		require 'calculator.php'; 
		$a_calculation = new Calculator();
		

		if (isset($_GET['firstnoText']) && isset($_GET['secondnoText']))
		{
			$first_no = $_GET['firstnoText'];
			$second_no = $_GET['secondnoText']; 	
		}
				
			
		if(isset($_GET['addButtion']))
		{	
			
			echo "Addition is: ". $a_calculation->do_add( $first_no, $second_no);		

		}
		else if(isset($_GET['subtractButtion']))
		{
			
			echo "Subtraction is: ". $a_calculation->do_subtract( $first_no, $second_no);		

		}
		else if(isset($_GET['multiplyButtion']))
		{

			echo "Multiplication is: ". $a_calculation->do_multiply( $first_no, $second_no);

		}
		else if(isset($_GET['divideButtion']))
		{
			
			echo "Division is: ". $a_calculation->do_divide( $first_no, $second_no);

		}
	?>

</body>
</html>	
