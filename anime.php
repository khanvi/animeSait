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
	<?php
		$con = mysqli_connect('127.0.0.1','root','','anime');
		$query = mysqli_query($con,"SELECT * FROM anime WHERE anime_id = '" . $_GET['anime_id'] . "'");
		$res = $query->fetch_assoc();
	?>
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
						<li><a id="activelink0" <?php echo 'href="index.php?user='. $_GET['user'] .'"'?>>ГЛАВНАЯ</a></li>
						<li><a id="activelink1" <?php echo 'href="anime_post.php?user='. $_GET['user'] .'"'?>>АНИМЕ</a></li>
						<li><a id="activelink2" <?php echo 'href="timetable.php?user='. $_GET['user'] .'"'?>>РАСПИСАНИЕ</a></li>
						<li><a id="activelink3" <?php echo 'href="profile.php?user='. $_GET['user'] .'"'?>>ПРОФИЛЬ</a></li>
						<li><a id="activelink4" <?php echo 'href="tips.php?user='. $_GET['user'] .'"'?>>АНИМЕ СОВЕТЫ</a></li>
					</ul>
			</div>
			<div class="row" style="padding: 10px 20px; margin-bottom: 10px">
				
				<div style="width: 470px">
					<h1 class="release-title">
						<?php echo $res['anime_name']; ?>
					</h1>
					<hr class="poloska-detail" style="margin-top: 7px; margin-bottom: 7px; border-top: 2px solid #d3d3d3;">
					<b>Год:</b> <?php echo $res['anime_year']; ?> <br>
					<b>Тип:</b> <?php echo $res['anime_type']; ?> <br>
					<b>Жанры:</b> <?php echo $res['anime_genre']; ?> <br>
					<hr class="poloska-detail" style="margin-top: 7px; margin-bottom: 7px; border-top: 2px solid #d3d3d3;">
					<p class="detail-description" style="font-size: 15.7px;">
						<?php echo $res['anime_text']; ?>
					</p>
					<div>
						<?php if($_GET['user'] >0){ 
							$query_bookmark = mysqli_query($con,"SELECT * FROM bookmark
						WHERE bookmark.bookmark_id_anime='". $_GET['anime_id'] . "' AND 
						bookmark.bookmark_id_users='".$_GET['user']. "'");
							if($query_bookmark->num_rows>0){
							?>
							<form method="POST" <?php echo 'action="delete_bookmark.php?user='. 
					$_GET['user'] . '&anime_id='.$_GET['anime_id']. '"'?> class="mb-2">
								<button class="btn btn-danger">
									удалить закладки
								</button>
							</form>
							<?php } 
							else {
							?>
							<form method="POST" <?php echo 'action="add_bookmark.php?anime_id='. 
					$_GET['anime_id'] . '&user='.$_GET['user']. '"'?> class="mb-2">
								<button class="btn btn-success">
									добавить закладки
								</button>
							</form>
						<?php }
					}?>
					</div>
				</div>
				
				<div style="width: 350px; margin-left: 50px; height: 500px">
					<img class="w-100" <?php echo 'src="' . $res['anime_img'] . ' "' ?> >
				</div>
			</div>
<!--видео-->
			<div style="padding: 10px 20px;">
				<?php 
					$video_query = mysqli_query($con,"SELECT * FROM video WHERE video_id_anime = '" . $_GET['anime_id'] . "'");
					$video_number = $video_query->num_rows;
		 		?>
 				<form id="myForm">
 				<div class="slider">
    				<div class="slider__wrapper">
						<?php for($i=1;$i<=$video_number;$i++){
						$video_res = $video_query->fetch_assoc(); ?>
						<div class="slider__item ">
					  	 	<input class ="pp btn btn-dark" id="username" type="submit" <?php echo'value="'.$i.'"'?> style="width: 100px;height: 40px">
					  	 </div>
					  	<?php } ?>
					</div>
					<a class="slider__control slider__control_left" href="#" role="button"></a>
				    <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
				</div>
				</form>
				<div id="content" <?php if($video_number!=0){
				echo'style="height: 580px;width: 840px; background: black; padding: 5px;"';} ?>></div>
				<script>
					'use strict';
    var multiItemSlider = (function () {
      return function (selector, config) {
        var
          _mainElement = document.querySelector(selector), // основный элемент блока
          _sliderWrapper = _mainElement.querySelector('.slider__wrapper'), // обертка для .slider-item
          _sliderItems = _mainElement.querySelectorAll('.slider__item'), // элементы (.slider-item)
          _sliderControls = _mainElement.querySelectorAll('.slider__control'), // элементы управления
          _sliderControlLeft = _mainElement.querySelector('.slider__control_left'), // кнопка "LEFT"
          _sliderControlRight = _mainElement.querySelector('.slider__control_right'), // кнопка "RIGHT"
          _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), // ширина обёртки
          _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width), // ширина одного элемента    
          _positionLeftItem = 0, // позиция левого активного элемента
          _transform = 0, // значение транфсофрмации .slider_wrapper
          _step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
          _items = []; // массив элементов
        // наполнение массива _items
        _sliderItems.forEach(function (item, index) {
          _items.push({ item: item, position: index, transform: 0 });
        });

        var position = {
          getMin: 0,
          getMax: _items.length - 1,
        }

        var _transformItem = function (direction) {
          if (direction === 'right') {
            if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) >= position.getMax) {
              return;
            }
            if (!_sliderControlLeft.classList.contains('slider__control_show')) {
              _sliderControlLeft.classList.add('slider__control_show');
            }
            if (_sliderControlRight.classList.contains('slider__control_show') && (_positionLeftItem + _wrapperWidth / _itemWidth) >= position.getMax) {
              _sliderControlRight.classList.remove('slider__control_show');
            }
            _positionLeftItem++;
            _transform -= _step;
          }
          if (direction === 'left') {
            if (_positionLeftItem <= position.getMin) {
              return;
            }
            if (!_sliderControlRight.classList.contains('slider__control_show')) {
              _sliderControlRight.classList.add('slider__control_show');
            }
            if (_sliderControlLeft.classList.contains('slider__control_show') && _positionLeftItem - 1 <= position.getMin) {
              _sliderControlLeft.classList.remove('slider__control_show');
            }
            _positionLeftItem--;
            _transform += _step;
          }
          _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
        }

        // обработчик события click для кнопок "назад" и "вперед"
        var _controlClick = function (e) {
          var direction = this.classList.contains('slider__control_right') ? 'right' : 'left';
          e.preventDefault();
          _transformItem(direction);
        };

        var _setUpListeners = function () {
          // добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
          _sliderControls.forEach(function (item) {
            item.addEventListener('click', _controlClick);
          });
        }

        // инициализация
        _setUpListeners();

        return {
          right: function () { // метод right
            _transformItem('right');
          },
          left: function () { // метод left
            _transformItem('left');
          }
        }

      }
    }());

    var slider = multiItemSlider('.slider')

				let pp= document.querySelectorAll('.pp');
				for(let i=0;i<pp.length;i++){
					pp[i].onclick = function(){
						$(document).ready(function(){
						
							$('#myForm').submit(function(){
								$.ajax({
									type: "POST",
									url: "greetings.php",
									data: "username="+$(pp[i]).val()+"&id_anime=2",
									success: function(html){
										$("#content").html(html);
								   }
								});
								return false;
							});
							
						});
					}
				}
				</script>
			</div>
<!--комменты-->
			<div style="padding: 10px 20px;">
				<div class="bg-primary text-white pl-1 font-italic">
					<?php echo 'количество комментариев' ?>
				</div>
				<form method="POST" 
				<?php echo 'action="add_coments.php?anime_id='. $_GET['anime_id'] . '&user='.$_GET['user']. '"'?> class="mb-2">
					<textarea class="form-control form-control-lg mb-2" id="exampleFormControlTextarea1" rows="3" name="text" placeholder="текст">
					</textarea>
					<button class="btn btn-primary">OK</button>
				</form>
				<?php
					$query_coments = mysqli_query($con,"SELECT * FROM anime 
						INNER JOIN coments ON anime.anime_id = coments.coments_id_anime 
						INNER JOIN users   ON users.users_id = coments.coments_id_users
						WHERE coments.coments_id_anime='". $_GET['anime_id'] ."'ORDER BY coments_datetime DESC");
					$number = $query_coments->num_rows;
					for($i=0;$i<$number;$i++){
						$res_coments = $query_coments->fetch_assoc();
				?>
					<div class="row">
						<div style="width: 50px; height: 50px">
							<img <?php echo 'src="' . $res_coments['users_img'] . ' "' ?> class="rounded-circle" style="width: 40px; height: 40px">
						</div>
						<div class="width: 100%">
							<h6>
								<?php echo $res_coments['users_name'] ?>
							</h6>
							<h5 class="font-italic">
								<?php echo $res_coments['coments_text'] ?>
							</h5>
							<p style="text-align: right;">
								<?php echo date("d.m.y H:i",strtotime($res_coments['coments_datetime']));  
								//?>
							</p>
						</div>
					</div>
				<?php
					}
				?>
			</div>

		</div>
		<div class="bg-dark" style="width: 280px; margin-left: 15px; padding: 10px; box-sizing: border-box; height: 1860px">
			<div class="" style="width: 260px;">
				<input class="form-control" style="width: 100%; height: 30px;" placeholder="Найти аниме по названию" id="search" name="search" >
				<input class="user_lol" style="display: none" <?php echo 'value="'.$_GET['user'].'"' ?> >
				<?php $query = mysqli_query($con,"SELECT * FROM anime");
		$number = $query->num_rows;
				for($i=1;$i<=5;$i++){ $res = $query->fetch_assoc();?>
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
								window.location = 'search.php?search=' + encodeURIComponent(ui.item.value) + '&user=' + user_lol.value;
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