<?php
	$con = mysqli_connect('127.0.0.1','root','','anime');
	$query = mysqli_query($con, "INSERT INTO coments (coments_id_anime,coments_id_users,coments_text,coments_datetime) 
		VALUES ('". $_GET['anime_id']."',
				'" . $_GET['user'] . "',
				'" . $_POST['text'] . "', 
				'" . date("y.m.d H:i") . "')");
	header("Location: http://hv/site/anime.php?user=".$_GET['user'].'&anime_id='.$_GET['anime_id']);
?>