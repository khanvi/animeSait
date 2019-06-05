<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="ui/jquery-ui.css">
</head>
<body>

	<div style="height: 200px; width: 1175px; margin: 0 auto; padding: 30px">
		<?php 	$con = mysqli_connect('127.0.0.1','root','','anime');
				if ($_GET['user'] > 0){
					$query_users = mysqli_query($con,'SELECT * FROM users WHERE users_id = "' . $_GET['user'] .'"');
					$res_users = $query_users->fetch_assoc();
		?>
		<div class="row">
			<img <?php echo 'src="'. $res_users['users_img'] .'"' ?> style="width: 100px;
			height: 100px" class="rounded-circle mr-2">
			<h2 class="mt-2"> <?php echo $res_users['users_name'] ?> </h2>
			<a href="index.php" style="margin-left: auto; text-decoration: none ;height:50px" class="btn btn-warning"> exit </a>
		</div>
		<?php
				}
				else {
			?>
			<div class="mb-2">
				<button class="btn btn-warning">
					<a href="reg.php" style="text-decoration: none; color: black;">регистрация</a>
				</button>
			</div>
			<form method="POST" action="check.php">
				<div class=" rounded row bg-secondary" style="width: 510px; padding: 10px">
					<div class="mr-2 bg-warning rounded" style="padding: 10px;">вход</div>
					<input name="mail_or_login" placeholder="Логин или e-mail" class="form-control mb-1" style="width: 180px">
					<input type="password" name="password" class="form-control mb-1 ml-2" style="width: 160px" placeholder="Пароль">
					<button class="btn btn-dark ml-2" style="width: 60px;">OK</button>
				</div>
				<?php if($_GET['user'] == 'нет'){echo'
				<p class="mt-2 bg-danger rounded text-white" style="padding: 10px; width: 210px">
					нет такого пользователя</p>';} ?>
			</form>
			<?php
			}
			?>
	</div>
	<div class="row" style="width: 1175px; margin:auto;">
		<div class="bg-light" style="width: 880px">
			<div style="height: 50px; text-align: center; margin-bottom: 10px">
					<ul class="row main">
						<li><a id="activelink0" href="">ГЛАВНАЯ</a></li>
						<li><a id="activelink1" <?php echo 'href="anime_post.php?user='. $_GET['user'] .'"'?>>АНИМЕ</a></li>
						<li><a id="activelink2" <?php echo 'href="timetable.php?user='. $_GET['user'] .'"'?>>РАСПИСАНИЕ</a></li>
						<li><a id="activelink3" <?php echo 'href="profile.php?user='. $_GET['user'] .'"'?>>ПРОФИЛЬ</a></li>
						<li><a id="activelink4" <?php echo 'href="tips.php?user='. $_GET['user'] .'"'?>>АНИМЕ СОВЕТЫ</a></li>
					</ul>
			</div>
			 <div class="jumbotron jumbotron-fluid"  style="background-image: url(img/lol.jpg); background-size: 100%" id="banner">       
		        <div class="parallax text-center">
		            <div class="parallax-pattern-overlay">
		                <div class="container text-center" id="size-banner">
		                    <h2 class="display-2">ANIME</h2>
		                    <h3 class="learn">Наш аниме сайт открыт</h3>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="jumbotron jumbotron-fluid"  style="background-image: url(img/15.jpg); background-size: 100%" id="banner">       
		        <div class="parallax text-center">
		            <div class="parallax-pattern-overlay">
		                <div class="container text-center" id="size-banner">
		                    <h2 class="display-2">ANIME</h2>
		                    <h3 class="learn">Он открыт для всех</h3>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="jumbotron jumbotron-fluid"  style="background-image: url(img/123.png); background-size: 70%" id="banner">       
		        <div class="parallax text-center">
		            <div class="parallax-pattern-overlay">
		                <div class="container text-center" id="size-banner">
		                    <h2 class="display-2">ANIME</h2>
		                    <h3 class="learn"> Урааа !!!</h3>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="bg-dark" style="width: 280px; margin-left: 15px; padding: 10px; box-sizing: border-box; height: 1160px">
			<div class="" style="width: 260px;">
				<input class="form-control" style="width: 100%; height: 30px;" placeholder="Найти аниме по названию" id="search" name="search" >
				<input class="user_lol" style="display: none" <?php echo 'value="'.$_GET['user'].'"' ?> >
				<?php $query = mysqli_query($con,"SELECT * FROM anime");
		$number = $query->num_rows;
				for($i=1;$i<=3;$i++){ $res = $query->fetch_assoc();?>
					<div style="width:260px;height: 350px;margin: 10px">
						<a <?php echo 'href="anime.php?anime_id='. $res['anime_id'] . '&user='.$_GET['user'].'"' ?> style="margin-left: auto; margin-right: auto; text-decoration: none;" class="pp2">
							<div style="width: 240px; margin-bottom: 10px; height: 340px">
								<div class="anime_info2">
									<h5 class="anime_name2">
										<?php echo $res['anime_name'] ?>
									</h5>
									<span class="anime_text2">
										<?php echo $res['anime_text'] ?>
									</span>
								</div>
								<img border="0" <?php echo 'src="' . $res['anime_img'] . ' "' ?> width="240" height="340" class="anime_kk2">
							</div>
						</a>
					</div>
				<?php } ?>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="ui/jquery-ui.js"></script>
				<script>
					var user_lol = document.querySelector('.user_lol')
					$(function(){

						$("#search").autocomplete({
							source: 'search.php',
							minLength: 3,
							select: function( event, ui ){
								window.location = 'plus.php?search=' + encodeURIComponent(ui.item.value) + '&user=' + user_lol.value;
							}
						});

					});
				</script>
				<script type="text/javascript">	
					let info2= document.querySelectorAll('.anime_info2');
					let kk2= document.querySelectorAll('.anime_kk2');
					let pp2= document.querySelectorAll('.pp2');
					for(let i=0;i<kk2.length;i++){
						pp2[i].onmouseover = function() {
							kk2[i].style.display = 'none';
							info2[i].style.display = 'block';
						}
						pp2[i].onmouseout = function() {
							kk2[i].style.display = 'block';
							info2[i].style.display = 'none';
						}
					}
				</script>
			</div>
		</div>
	</div>
</body>
</html>