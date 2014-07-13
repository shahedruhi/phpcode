
<html>
<head>
	<title>Circle Diameter Perimeter Area Calculator</title>
</head>
<body>
	<form action = "circle_diameter_perimeter_area_calculator.php" method = "GET">
		<table border="1" style="width:300px">
			<tr>
				<td>Enter Radius</td>
				<td><input type = 'text' name = 'radiusText'> <br /></td>
			</tr>
		    <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Show" name = 'submitButtion'><br /></td>
		    </tr>
		</table>
	</form>	
	<?php
		require 'circle.php'; 
		if(isset($_GET['submitButtion']))
		{
			$a_circle = new DiameterPerimeterAreaCalculator();
			$a_circle->circle_Radius = $_GET['radiusText'];
			
			$circle_diameter = $a_circle->get_diameter();

			$circle_perimeter = $a_circle->get_perimeter();

			$circle_area = $a_circle->get_area(); 

			echo "Diameter: ". $circle_diameter ."<br/>";
			echo "Perimeter: ". $circle_perimeter ."<br/>";
			echo "Area: ". $circle_area;		

		}
	?>

</body>
</html>	
