<!DOCTYPE html>
<html>
<head>
	<title>Sending Emails</title>
</head>
<body>
	<?php
		$to = "mathur.rishabh123@gmail.com";
		$message = "This is message";
		$header = "From: abcsomeone@gmail.com";
		$result = mail($to,  $message, $header);
		if ($result == true) {
			echo "Message sent successfully";
		}
		else {
			echo "Message could not send";
		}
	?>
	<form action="" method="POST">
		<p><label>Your Name</label></p>
		<input type="text" name="name" placeholder="Your name">
		<p><label>Your Name</label></p>
		<input type="text" name="name" placeholder="Your name">
		<p><textarea name="message" placeholder="Your text" rows="4" cols="5"></textarea></p>

		<input type="submit" name="submit" value="SEND">
	</form>
</body>
</html>