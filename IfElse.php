<!DOCTYPE html>
<html>
<head>
	<title>If else</title>
	<style>
		p{
			font-style: italic;
			text-align: center;
			color: green;
			background-color: #d3a34a;
		}
	</style>
</head>
<body>
	<p>
		<?php
		$a = 79;
		$b = 60;
		if ($a < $b) {
			echo "$a is alwayes less then $b";
		}
		else {
			echo "OK $b is less then $a";
		}
		?>
	</p>
</body>
</html>