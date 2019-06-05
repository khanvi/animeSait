<?php 
	$con = mysqli_connect('127.0.0.1','root','','anime');
	$query_video = mysqli_query($con,'SELECT * FROM video WHERE video_id_anime = "' . $_REQUEST['id_anime'] .'" AND video_seria = "' . $_REQUEST['username'] .'"');
	$video_res = $query_video->fetch_assoc();
	//echo $video_res['video_id_anime'].'   ';
	echo '<p class="text-warning" style = "background: black;">серия: '.$video_res['video_seria'].'</div>';

	echo '<video class="video" width="830" height="530" controls="controls" poster="'.$video_res['video_img'].'">
			<source src="'.$video_res['video_video'].'" type='.'video/ogg; codecs="theora, vorbis"'.'>
		</video>';
 ?>