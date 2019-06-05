-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2019 г., 11:36
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `anime`
--
CREATE DATABASE IF NOT EXISTS `anime` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `anime`;

-- --------------------------------------------------------

--
-- Структура таблицы `anime`
--

CREATE TABLE `anime` (
  `anime_id` int(10) NOT NULL,
  `anime_name` varchar(300) NOT NULL,
  `anime_img` varchar(300) NOT NULL,
  `anime_text` varchar(300) NOT NULL,
  `anime_type` varchar(300) NOT NULL,
  `anime_year` varchar(300) NOT NULL,
  `anime_author` varchar(300) NOT NULL,
  `anime_genre` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `anime`
--

INSERT INTO `anime` (`anime_id`, `anime_name`, `anime_img`, `anime_text`, `anime_type`, `anime_year`, `anime_author`, `anime_genre`) VALUES
(1, 'За гранью / Kyoukai no Kanata', 'img/8295.jpg', 'Мир делится на два лагеря - Ёму, чудовища, причиняющие вред всему живому и Потусторонцы, которые сражаются с ними, защищая этот мир. Акихито Канбара находится между этими мирами, он полукровка: наполовину человек, наполовину Ёму, к тому же, наделённый бессмертием. Кажется, это прекрасно, но если бы ', '', '2013', '', 'приключения, мистика'),
(2, 'Хёка / Hyouka', 'img/893.jpg', 'Главный герой Хотаро Орэки равнодушный ко всем и вся вступает в клуб классической литературы. Со слов сестры, клубу нужен участник, чтобы спасти его от закрытия, а это означает, что героя никто не будет беспокоить. Но стоило только нашему герою открыть дверь литературого клуба, как его встречает обв', '', '2012', '', 'детектив, повседневность, романтика, школа'),
(3, 'Класс убийц / Ansatsu Kyoushitsu', 'img/1746.jpg', 'В книгах написано «чти учителя своего», но скажите честно: разве вам в школе не попадались педагоги, которых хотелось чем-то от души приголубить… с летальным исходом? Вы-то наверняка удержались, а вот ребятам из 3-го «Е» японской школы «Кунугигаока» сдерживаться противопоказано. Ведь у них не обычны', '', '2015', '', 'комедия, школа'),
(4, 'Код Гиасс: Восстание Лелуша', 'img/406.jpg', 'Сын императора Британии, принц Лелуш Британский, после смерти своей матери проникается ненавистью к отцу и своей родине. Когда Великая Британская Империя колонизирует Японию, Лелуш, находившийся там, оказывается в списках мёртвых. И ему это крайне выгодно, получив силу короля, заставляющую любого см', '', '2017', '', 'драма, меха, супер сила, фантастика, экшен'),
(5, 'Атака Титанов 3 / Shingeki no Kyojin Season 3', 'img/6831.jpg', 'Стены уже давно не являются железной гарантией безопасности. Но теперь появился новый вопрос, кто вообще их соорудил, ведь они сделаны из брони гигантов, то есть, получается, гиганты защищают нас от гигантов?   Ходят слухи, что пала ещё одна стена и чудовища прорвались в мирные поселения, отряды бой', '', '2018', '', 'драма, приключения, сёнен, фэнтези, экшен'),
(6, 'Фейри Тейл 3', 'img/1534881065_02.jpg', 'Создатели аниме \"Хвост Феи” решили порадовать нас очередным сезоном! Любимый многими сериал возвращается на наши с вами экраны уже осенью! Это произведение рассказывает о гильдии юных, но очень могущественных магов, которые называют себя \"Хвостом Феи”. Однажды девушка по имени Люси Хартфилия повстре', '', '2018', '', 'комедия, приключения, сёнен, фэнтези'),
(7, 'Волейбол / Хайкю!!', 'img/1395754537_1.jpg', 'Еще одно восхитительное аниме про спорт снятое по манге. На этот раз сюжетной игрой будет волейбол, что не может не радовать. Эту прелестную игру, вы еще не видели с такой стороны, с какой ее видит наш главный герой - Хината Шоуё. Он выдался не высокого роста, как это принято в волейболе, но смотря ', '', '2014', '', 'комедия, повседневность, спорт');

-- --------------------------------------------------------

--
-- Структура таблицы `bookmark`
--

CREATE TABLE `bookmark` (
  `bookmark_id` int(10) NOT NULL,
  `bookmark_id_anime` int(10) NOT NULL,
  `bookmark_id_users` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bookmark`
--

INSERT INTO `bookmark` (`bookmark_id`, `bookmark_id_anime`, `bookmark_id_users`) VALUES
(7, 1, 0),
(8, 4, 1),
(9, 6, 1),
(13, 6, 2),
(14, 2, 3),
(15, 2, 1),
(16, 3, 4),
(18, 7, 4),
(19, 6, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE `coments` (
  `coments_id` int(10) NOT NULL,
  `coments_text` varchar(300) NOT NULL,
  `coments_id_anime` int(10) NOT NULL,
  `coments_id_users` int(10) NOT NULL,
  `coments_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coments`
--

INSERT INTO `coments` (`coments_id`, `coments_text`, `coments_id_anime`, `coments_id_users`, `coments_datetime`) VALUES
(4, '			efwefcew		', 4, 2, '2010-03-19 13:06:00'),
(5, '				dalsmfo	', 4, 1, '2010-03-19 13:47:00'),
(6, '					wmodq', 3, 1, '2010-03-19 13:52:00'),
(7, '					fsfsegesg', 6, 1, '2011-03-19 12:16:00'),
(8, '					fesfsegseg', 6, 2, '2011-03-19 12:17:00'),
(9, '					esggs', 6, 0, '2011-03-19 12:17:00'),
(10, '					fsfsef', 6, 2, '2011-03-19 12:17:00'),
(11, '	efwefewfw				', 6, 0, '2011-03-19 12:18:00'),
(12, '				ssegsrg	', 4, 2, '2011-03-19 12:20:00'),
(13, '				dwd	', 4, 0, '2011-03-19 12:21:00'),
(14, '				fsfsefse	', 4, 2, '2011-03-19 12:22:00'),
(15, '		wefewf			', 4, 2, '2011-03-19 12:22:00'),
(16, '		wr3rwr			', 4, 2, '2011-03-19 12:22:00'),
(17, '				hfhdr	', 1, 2, '2011-03-19 12:23:00'),
(18, '					rghergre', 2, 0, '2011-03-19 12:25:00'),
(19, '			sdsds		', 4, 2, '2019-03-14 17:14:00');

-- --------------------------------------------------------

--
-- Структура таблицы `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(10) NOT NULL,
  `timetable_weekday` int(10) NOT NULL,
  `timetable_id_anime` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `timetable_weekday`, `timetable_id_anime`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 2, 4),
(4, 5, 5),
(5, 2, 6),
(6, 2, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `users_id` int(10) NOT NULL,
  `users_name` varchar(300) NOT NULL,
  `users_login` varchar(300) NOT NULL,
  `users_password` varchar(300) NOT NULL,
  `users_img` varchar(300) NOT NULL,
  `users_mail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_login`, `users_password`, `users_img`, `users_mail`) VALUES
(2, '2', '2', '2', 'img/6.jpg', '2'),
(3, '3', '3', '3', 'img/2.jpg', '3'),
(4, 'Dima', 'Basad', '1', '1234.PNG', '1'),
(5, 'Dima', 'basad', '1', '1234.PNG', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `video_id` int(10) NOT NULL,
  `video_video` varchar(300) NOT NULL,
  `video_id_anime` int(10) NOT NULL,
  `video_seria` int(10) NOT NULL,
  `video_img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`video_id`, `video_video`, `video_id_anime`, `video_seria`, `video_img`) VALUES
(1, 'video/123.mp4', 2, 1, ''),
(2, 'video/124.mp4', 2, 2, 'img/2.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`anime_id`);

--
-- Индексы таблицы `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`bookmark_id`);

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`coments_id`);

--
-- Индексы таблицы `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anime`
--
ALTER TABLE `anime`
  MODIFY `anime_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `bookmark_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `coments_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
