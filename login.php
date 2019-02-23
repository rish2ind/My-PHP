<?php
	$conn = mysqli_connect("localhost", "root", "", "demo");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php
	if(isset($_POST['submit'])){
		$uname = $_POST['name'];
		$pass = $_POST['pwd'];

		$sql = "select * from loginform where user='".$uname."' AND pass='".$pass."'";
		$result=mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)==1) {
			echo "You have successfully logged in ";
			exit();
		}
		else{
			echo "Wrong username or password";
			exit();
		}
	}

?>
	<form action="#" method="POST">
		<p><label>Name</label></p>
		<input type="text" name="name">

		<p><label>Password</label></p>
		<input type="Password" name="pwd">

		
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>