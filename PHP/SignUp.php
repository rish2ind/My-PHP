<?php
	$conn = mysqli_connect("localhost", "root", "", "registers");


	if(isset($_POST['Register'])){
		$user = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['pwd'];

		$sqlu = "select * from Login_Details where username = '$user'";
		$res_u = mysqli_query($conn, $sqlu);
		$sqle = "select * from Login_Details where username = '$email'";
		$res_e = mysqli_query($conn, $sqle);

		if(mysqli_num_rows($res_u)>0){
			echo "This username has already taken";
			?>
			<a href="Sign_Up.php">Click to go back</a>
			<?php
		}
		else if (mysqli_num_rows($res_e)>0) {
			echo "This email id has already taken";
			?>
			<a href="Sign_Up.php">Click to go back</a>
			<?php
		}
		else{
			$query = "insert into Login_Details (Username, Email, Password")values('$user', '$email', '$pass');
			$run = mysqli_query($conn, $query);

			if($run){
				?>
				<p>You sign up successfully...</p>
				<a href="Sign_Up.php">Click to go back</a>
				<?php
			}
			else{
				echo "Error:".mysqli_error($conn);
			}
		}
	}

?>