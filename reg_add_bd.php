<?php
	$con = mysqli_connect('127.0.0.1','root','','anime');
	$query = mysqli_query($con, "INSERT INTO users (users_name,users_login,users_mail,users_img,users_password) 
		VALUES ('". $_POST['name']."',
				'". $_POST['login']."',
				'". $_POST['mail']."',
				'". $_FILES['img']['name']."',
				'" . $_POST['password']. "')");
	move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
	header("Location: http://hv/site/index.php");
?>