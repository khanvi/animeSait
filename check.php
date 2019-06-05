<?php
	$con = mysqli_connect('127.0.0.1','root','','anime');
	$query = mysqli_query($con,'SELECT * FROM users WHERE users_password = "' . $_POST['password'] .
		'" and (users_login = "' . $_POST['mail_or_login'] .'" or users_mail = "' . $_POST['mail_or_login'] .'")'
	);
	if($query->num_rows != 0){
		header("Location: http://hv/site/index.php?user=".$query->fetch_assoc()['users_id']);
	}
	else {
		header("Location: http://hv/site/index.php?user=нет");
	}
?>