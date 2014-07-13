
<html>
<head>
	<title>Number of seconds, minutes, hours, days, months and years calculator from the unix time</title>
</head>
<body>
	<form action = "timecalculatorfromunix.php" method = "GET">
		<table border="1" style="width:300px">
			<tr>
				<td>Enter A Date</td>
				<td><input type = 'text' name = 'dateText'> <br /></td>
			</tr>
		    <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Show" name = 'submitButtion'><br /></td>
		    </tr>
		</table>
	</form>	
	<?php
		require 'timepassed.php'; 
		if(isset($_GET['submitButtion']))
		{
			$an_input = new Time();
			$an_input->input_Date = $_GET['dateText'];
			
			$total_seconds = $an_input->get_total_seconds();

			$total_minutes = $an_input->get_total_minutes();

			$total_hours = $an_input->get_total_hours();

			$total_days = $an_input->get_total_days();

			$total_months = $an_input->get_total_months();

			$total_years = $an_input->get_total_years();


			echo "Total Seconds: ". $total_seconds ."<br/>";
			echo "Total Minutes: ". $total_minutes ."<br/>";
			echo "Total Hours: ". $total_hours ."<br/>";
			echo "Total Days: ". $total_days ."<br/>";
			echo "Total Months: ". $total_months ."<br/>";
			echo "Total Years: ". $total_years;				

		}
	?>

</body>
</html>	
