<?php
	$con = mysqli_connect('127.0.0.1','root','','anime');
	$query = mysqli_query($con, "DELETE FROM bookmark WHERE bookmark_id_anime = '" . $_GET['anime_id'] ."' AND 
		bookmark_id_users = '" . $_GET['user'] ."'");
	header("Location: http://hv/site/anime.php?user=".$_GET['user'].'&anime_id='.$_GET['anime_id']);
?>