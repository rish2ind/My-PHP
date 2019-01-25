<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>
	<h1>Using sort()</h1>
		<?php 
			$dinner = array("Dal", "Chawal", "Roti", "Papad");
			sort($dinner);
			foreach($dinner as $taste){
				echo "$taste <br>";
			}
		?>
	<h1>Using rsort()</h1>	
		<?php 
			$sports = array("Hockey", "Kabaddi", "Cricket", "Football");
			rsort($sports);
			foreach($sports as $games){
				echo "$games <br>";
			}
		?>
</body>
</html>