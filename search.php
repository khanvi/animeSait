<?php

$db = mysqli_connect('127.0.0.1','root','','anime');
function search_autocomplete(){
	global $db;
	$search = trim(mysqli_real_escape_string($db, $_GET['term']));
	$query = "SELECT anime_name FROM anime WHERE anime_name LIKE '%{$search}%' OR anime_text LIKE '%{$search}%' LIMIT 10";
	$res = mysqli_query($db, $query);
	$result_search = array();
	while($row = mysqli_fetch_assoc($res)){
		$result_search[] = array('label' => $row['anime_name']);
	}
	return $result_search;
}

if(!empty($_GET['term'])){
	$search = search_autocomplete();
	exit( json_encode($search) );
}

if(!empty($_GET['search'])){
	$query_anime = mysqli_query($db,'SELECT * FROM anime WHERE anime_name = "' . $_GET['search'] .'"');
	$red = mysqli_fetch_assoc($query_anime);
	header("Location: http://hv/site/anime.php?user=".$_GET['user'].'&anime_id='.$red['anime_id']);
}

?>