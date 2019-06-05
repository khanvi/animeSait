<?php
	$con = mysqli_connect('127.0.0.1','root','','anime');
	$query = mysqli_query($con, "INSERT INTO bookmark (bookmark_id_anime,bookmark_id_users) 
		VALUES ('". $_GET['anime_id']."',
				'" . $_GET['user'] . "')");
	header("Location: http://hv/site/anime.php?user=".$_GET['user'].'&anime_id='.$_GET['anime_id']);
?>