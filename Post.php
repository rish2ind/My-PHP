<!DOCTYPE html>
<html>
<head>
	<title>POST in PHP</title>
	<style>
		#form{
			margin: 0px auto;
			background-color: lightgray;
			border: 1px solid black;
			width: 300px;
			padding: 14px;
			font-style: "Arial";
			font-size: 18px;
		}
		.input{
			font-size: 15px;
			padding: 12px;
			font-family: sans-serif;
			margin: 0px 8px 3px 14px;
			background-color: lightblue;
			border: none;
			border-bottom: 1px solid gray;
		}
		.submit{
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form id="form" action="welcome.php" method="POST">
		Name <input class="input" type="text" name="name"><br><br>
		Email <input class="input" type="email" name="email"><br><br>
		<input class="submit" type="submit" name="submit" value="Submit">
	</form>
</body>
</html>