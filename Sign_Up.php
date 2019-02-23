<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<h1>Sign Up</h1>
	<form action="SignUp.php>" method="POST">
		<p><label>Username</label></p>
		<input type="text" name="username" placeholder="Your Username">

		<p><label>Email Id</label></p>
		<input type="email" name="email" placeholder="Your Email id">

		<p><label>Password</label></p>
		<input type="password" name="pwd" placeholder="Your Password">

		<input type="submit" name="submit" value="Register">
	</form>
		<h1>Login</h1>
	<form action="" method="POST"><p><label>Username</label></p> 
		<input type="text" name="username" placeholder="Your Username">

		<p><label>Password</label></p>
		<input type="password" name="pwd" placeholder="Your Password">

		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>