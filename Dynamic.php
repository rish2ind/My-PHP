<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Webpage</title>
	<style>
		h1{
			color: green;
		}
		p{
			background-color: #ddd;
			width: 200px;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: #ddd;">Dynamic Webpage</h1>
	<?php $my_name = "Rishabh Mathur";
			$fav_color = "Blue";
			$my_birth  = 1998;

			$today = date("F j, Y");
			$this_year = date("Y");

			$my_age = ($this_year - $my_birth);
			?>

	<h1>My Name : <h4><p> <?php echo $my_name; ?></p></h4></h1>	
	<h1>Favorite : <h4><p> <?php echo $fav_color; ?></p></h4></h1>	
	<h1>My Age : <h4><p> <?php echo $my_age; ?></p></h4></h1>	<h1>Today's Date : <h4><p> <?php echo $today; ?></p></h4></h1>	
</body>
</html>