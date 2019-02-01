<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
	<style>
		#first{
			background-color: lightblue;
		}
		#second{
			background-color: lightgray;
			color: blue;
		}
	</style>
</head>
<body><div id="first">
	<p style="text-align: center; font-size: 40px; color: red;">Built-In Functions</p>
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
		<h1>Using sha1()</h1>	
		<?php 
			$password = "My Password";
			echo "Before : $password <br>";

			$password = sha1($password);
			echo "After : $password";
		?>
</div>
<div id="second">
	<p style="text-align: center; font-size: 40px; color: red;">Custom Functions</p>
	<?php
		function myIndia(){
			echo "India is my Country, and it is very strong and powerfull";
		}
		$nationalist = true;
		if ($nationalist) {
			myIndia();
		}
		else{
			echo "You are antinationalist";
		}
	?>
</div>
</body>
</html>