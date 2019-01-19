<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
	<style>
		ul{
			list-style: none;
			font-size: 25px;
			line-height: 30px;
			color: #ff0000;
			text-shadow: 2px 2px 9px red;
		}
		small{
			color: #444444;
			background-color: #ddd; 
			text-align: center;
			padding: 2px;
		}
	</style>
</head>
<body>
	<?php $games  = array("Hockey", "Cricket", "Badminton", "Football", "Shooting" );
		$today = date("F j, Y");
		$my_name = "Rishabh Mathur";
	?>
	<h1 style="text-align: center; color: #ddd;">Array</h1>
		<h2><p style="margin-left: 45px;">Some of games are : </p></h2>
	<ul>
		<li><?php echo $games[0]; ?></li>
		<li><?php echo $games[1]; ?></li>
		<li><?php echo $games[2]; ?></li>
		<li><?php echo $games[3]; ?></li>
		<li><?php echo $games[4]; ?></li>
	</ul>

	<small> &copy; <?php echo $today; ?>  | <?php echo $my_name; ?></small>
</body>
</html>