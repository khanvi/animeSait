<?php
	/*
	$con = mysqli_connect('127.0.0.1','root','','anime');
	$query = mysqli_query($con,"SELECT * FROM anime WHERE anime_genre LIKE '%".$_POST['genre']."%'" . 'AND anime_year ="'.$_POST['year'].'"');
	$num = $query->num_rows;
	for($i=0; $i<$num; $i++){
		$res = $query->fetch_assoc();
		echo $res['anime_genre'].' '.$res['anime_year']."<br></br>";
	}
	echo $_POST['year'].' '.$_POST['genre'];
	*/
	//header("Location: http://hv/site/index.php?user=нет");
	if($_POST['genre'] != 'Выберите жанр...' && $_POST['year'] != 'Выберите год...')
	{
	header('Location: http://hv/site/anime_post.php?user='.$_GET['user'].'&genre='.$_POST['genre'].'&year='.$_POST['year']);
		echo'1';
	}
	else if($_POST['genre'] != 'Выберите жанр...' && $_POST['year'] == 'Выберите год...')
	{
	header('Location: http://hv/site/anime_post.php?user='.$_GET['user'].'&genre='.$_POST['genre']);
		echo'2';
	}
	else if($_POST['genre'] == 'Выберите жанр...' && $_POST['year'] != 'Выберите год...')
	{
	header("Location: http://hv/site/anime_post.php?user=".$_GET['user'].'&year='.$_POST['year']);
		echo'3';
	}
	else {
	header("Location: http://hv/site/anime_post.php?user=".$_GET['user']);
		echo'4';
	}
?>