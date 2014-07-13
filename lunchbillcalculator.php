
<html>
<head>
	<title>Lunch Bill Calculator</title>
</head>
<body>
	<form action = "lunchbillcalculator.php" method = "GET">
		<table border="1" style="width:300px">
			<tr>
				<td>You have taken</td>
		    </tr>
			<tr>
				<td>Rice</td>
				<td><input type = 'text' name = 'riceunitText'> <br /></td>
				<td>unit. (20 tk/unit)</td>
			</tr>
			<tr>
				<td>Vegetable</td>
				<td><input type = 'text' name = 'vegetableunitText'> <br /></td>
				<td>unit. (30 tk/unit)</td>
			</tr>
			<tr>
				<td>Fish</td>
				<td><input type = 'text' name = 'fishunitText'> <br /></td>
				<td>unit. (80 tk/unit)</td>
			</tr>
			<tr>
				<td>Meat</td>
				<td><input type = 'text' name = 'meatunitText'> <br /></td>
				<td>unit. (120 tk/unit)</td>
			</tr>	 
			<tr>
				<td>VAT</td>
				<td><input type = 'text' name = 'vatText'> <br /></td>
				<td>% of Gross Total</td>
			</tr>
		    <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Show Bill" name = 'submitButtion'><br /></td>
		    </tr>
		</table>
	</form>	
	<?php
		require 'customerlunch.php'; 
		if(isset($_GET['submitButtion']))
		{
			$a_customer = new BillCalculator ();
			$a_customer->rice_Unit = $_GET['riceunitText'];
			$a_customer->vegetable_Unit = $_GET['vegetableunitText'];
			$a_customer->fish_Unit = $_GET['fishunitText'];
			$a_customer->meat_Unit = $_GET['meatunitText'];
			$a_customer->bill_Vat = $_GET['vatText'];

			$gross_total = $a_customer->get_gross_total();

			$a_customer->gross_total = $gross_total;

			$payable_amount = $a_customer->get_payable_amount(); 

			echo "Gross Total: ". $gross_total."<br/>";
			echo "Payable Amount (Gross Total + VAT): ". $payable_amount;

		}
	?>

</body>
</html>	
