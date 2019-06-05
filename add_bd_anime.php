<?php
	$con = mysqli_connect('127.0.0.1','root','','anime');
	$query = mysqli_query($con, "INSERT INTO anime (anime_text,anime_name,anime_type,anime_year,anime_img) 
		VALUES ('". $_POST['text']."',
				'" . $_POST['name'] . "', 
				'" . $_POST['type'] . "', 
				'" . $_POST['year'] . "', 
				'img/" . $_FILES['img']['name'] . "')");
	move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
	header("Location: http://hv/site/add_anime.php");
?>