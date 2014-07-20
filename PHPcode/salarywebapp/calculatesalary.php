
<html>
<head>
	<title>Employee Salary Calculator</title>
</head>
<body>
	<form action = "calculatesalary.php" method = "GET">
		<table border="1" style="width:300px">
			<tr>
				<td>Employee Name</td>
				<td><input type = 'text' name = 'employeeNameText'> <br /></td>
		    </tr>
		    <tr>
				<td>Basic Amount</td>
				<td><input type = 'text' name = 'basicAmountText'> <br /></td>
		    </tr>
		    <tr>
				<td>House Rent</td>
				<td><input type = 'text' name = 'houseRentText'> <br /></td>
				<td> % of Basic Amount</td>
		    </tr>
		    <tr>
				<td>Medical Allowence</td>
				<td><input type = 'text' name = 'medicalAllowenceText'> <br /></td>
				<td> % of Basic Amount</td>
		    </tr>
		    <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Show Me Salary" name = 'submitButtion'><br /></td>
		    </tr>
		</table>
	</form>	
	<?php
		require 'employeesalary.php'; 
		if(isset($_GET['submitButtion']))
		{
			$an_employee = new SalaryCalculator ();
			$an_employee->employee_name = $_GET['employeeNameText'];
			$an_employee->basic_amount = $_GET['basicAmountText'];
			$an_employee->house_rent= $_GET['houseRentText'];
			$an_employee->medical_allowence = $_GET['medicalAllowenceText'];

			$total_salary = $an_employee->get_total_salary(); 

			echo $an_employee->employee_name. ', Your Total Salary is: '. $total_salary;
		}
	?>

</body>
</html>	
