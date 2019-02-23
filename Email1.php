<?php
	$to = "mathur.rishabh123@gmail.com";
	$subject = "Response from website";
	$message = "Hello there, Im learning PHP";
	$header = "rishabhindian98@gmail.com";

	if(mail($to, $subject, $message, $header)){
		echo "Mail send Successfully";
	}
	else{
		"Can not send mail";
	}

?>