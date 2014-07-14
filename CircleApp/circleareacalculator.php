
<html>
<head>
	<title>Circle Area Calculator</title>
</head>
<body>
	<form action = "circleareacalculator.php" method = "GET">
		<table border="1" style="width:300px">
			<tr>
				<td>Radius of Circle</td>
				<td><input type = 'text' name = 'radiusText'> <br /></td>
			</tr>
		    <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Area" name = 'submitButtion'><br /></td>
		    </tr>
		</table>
	</form>	
	<?php
		require 'circle.php'; 
		if(isset($_GET['submitButtion']))
		{
			$a_circle = new Circle();
			$a_circle->circle_Radius = $_GET['radiusText'];

			$circle_area = $a_circle->get_area(); 

			echo "Area: ". $circle_area;		

		}
	?>

</body>
</html>	
