-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2019 г., 17:29
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'travel'),
(2, 'food'),
(3, 'cars'),
(6, 'php');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `answer` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `postid`, `userid`, `title`, `description`, `date`, `answer`) VALUES
(3, 337, 48, 'Ирина запись', 'qqqqqqqq', '2019-05-25 17:41:07', 'Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте '),
(4, 339, 45, 'Ирина запись', '111', '2019-06-18 12:22:11', 'цесс нужно запустить. Понять что к чему. И на базе'),
(5, 339, 45, 'Ирина запись2', 'Ирина запись2Ирина запись2Ирина запись2Ирина запись2', '2019-06-18 12:23:49', '888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 888 '),
(6, 339, 49, 'Здохздох', 'Здохлер Здохлери на балерина Здохлер Здохлери на балерина Здохлер Здохлери на балерина Здохлер Здохлери на балерина Здохлер Здохлери на балерина Здохлер Здохлери на балерина ', '2019-06-19 10:00:07', 'У меня для юзера и пользователя используется один и тот же view.\r\nВ самом view идёт проверка на наличие сессии, если есть то к комментарию добавляются  кнопки добавить, редактировать удалить .\r\nЕсли нет сессии-  то нет к'),
(7, 339, 45, 'Каракатица', 'Каракатица Каракатица Каракатица Каракатица Каракатица Каракатица Каракатица Каракатица ', '2019-06-19 12:31:41', 'У меня для юзера и пользователя используется один и тот же view.\r\nВ самом view идёт проверка на наличие сессии, если есть то к комментарию добавляются  кнопки добавить, редактировать удалить .\r\nЕсли нет сессии-  то нет кУ меня для юзера и пользователя используется один и тот же view.\r\nВ самом view идёт проверка на наличие сессии, если есть то к комментарию добавляются  кнопки добавить, редактировать удалить .\r\nЕсли нет сессии-  то нет кУ меня для юзера и пользователя используется один и тот же view.\r\nВ самом view идёт проверка на наличие сессии, если есть то к комментарию добавляются  кнопки добавить, редактировать удалить .\r\nЕсли нет сессии-  то нет к'),
(8, 343, 45, 'terhwgerthg', 'terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg terhwgerthg ', '2019-06-19 12:48:05', NULL),
(9, 337, 45, '337', 'bbv', '2019-06-20 21:49:05', NULL),
(10, 338, 45, 'Заголовок комментарияШкряха', 'оловок комментарияШкряха оловок комментарияШкряха оловок комментарияШкряха оловок комментарияШкряха оловок комментарияШкряха оловок комментарияШкряха ', '2019-06-20 22:04:22', 'оловок комментарияШкряха '),
(11, 337, 47, 'Отличный пост ', 'Отличный пост Отличный пост Отличный пост Отличный пост Отличный пост Отличный пост Отличный пост Отличный пост ', '2019-06-20 22:09:45', NULL),
(12, 337, 47, 'Заголовок комментариякомплименте ', 'Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте Заголовок комментариякомплименте ', '2019-06-20 22:47:20', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `imglogo` varchar(255) NOT NULL,
  `img1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `imglogo`, `img1`, `img2`, `postid`) VALUES
(1, '5ce2f42600e45.jpg', '5ce2f4263a7e3.jpg', '5ce2f4265cc4c.jpg', 337),
(2, '5ce2f82f51924.jpg', '5ce2f82f7f934.jpg', '5ce2f82fa4324.jpg', 338),
(3, '5ce2f8ad8f392.jpg', '5ce2f8adb0963.jpg', 'default_foto.jpg', 339),
(4, '5ce2f8fc55f35.jpg', '5ce2f8fc77642.jpg', '5ce2f8fc9e214.jpg', 340),
(5, '5ce2f9a929b45.jpg', '5ce2f9a948821.jpg', '5ce2f9a96b91b.jpg', 341),
(6, '5ce2f9d050280.jpg', '5ce2f9d06fae2.jpg', '5ce2f9d0922e0.jpg', 342),
(7, '5d0a2ce11e6c3.jpg', '5d0a2ce138214.jpg', '5d0a2ce1505da.jpg', 343),
(8, '5d0cbbcda30bb.jpg', '5d0cbbcdc34bf.jpg', '5d0cbbcde43d6.jpg', 344),
(9, '5d0ce889ebc70.jpg', '5d0ce88a11cb7.jpg', '5d0ce88a33105.jpg', 345);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `category`, `date`) VALUES
(337, 'Статья 1', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Stet clita kasd gubergren, no sea takimata sanctusest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam voluptua. At vero eos et accusam.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam voluptua. At vero eos et accusam.\r\n\r\ndolor sit amet\r\nconsetetur sadipscing\r\nLorem ipsum\r\nsed diam voluptua\r\nLorem ipsum dolor sit amet, elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, . At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest Lorem ipsum dolor sit amet. dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam voluptua. At vero eos et accusam.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. sanctusest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam voluptua. At vero eos et accusam.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat\r\nLorem ipsum dolor sit amet, ST consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, voluptua. At vero eos et accusam.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam voluptua. At vero eos et accusam.\r\n\r\n', 'travel', '2019-05-20 18:38:29'),
(338, 'Статья 2', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Stet clita kasd gubergren, no sea takimata sanctusest Lorem ipsum d\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit \r\nLorem ipsum dolor sit amet, elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, . At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest Lorem ipsum dolor sit amet. dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam voluptua. At vero eos et accusam.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. sanctusest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam voluptua. At vero eos et accusam.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat\r\nLorem ipsum dolor sit amet, ST consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, voluptua. At vero eos et accusam.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam voluptua. At vero eos et accusam.\r\n\r\n', 'travel', '2019-05-20 18:55:43'),
(339, 'Заголовок 3', '	<h3 class=\"text-brand\">At vero accusam et\r\n								justo duo dolores et ea rebum.</h3>\r\n							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor\r\n								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Stet clita kasd gubergren, no sea\r\n								takimata sanctusest\r\n								Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised\r\n								diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam\r\n								voluptua. At vero eos et accusam.\r\n							</p>\r\n\r\n							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor\r\n								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et\r\n								justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest\r\n								Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised\r\n								diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam\r\n								voluptua. At vero eos et accusam.\r\n							</p>\r\n							<ol>\r\n								<li>dolor sit amet</li>\r\n								<li>consetetur sadipscing</li>\r\n								<li>Lorem ipsum</li>\r\n								<li>sed diam voluptua</li>\r\n							</ol>\r\n							<p>Lorem ipsum dolor sit amet, elitr, sed diam nonumy eirtempor\r\n								invidunt ut labore et dolore magna aliquyam erat, . At vero accusam et\r\n								justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest\r\n								Lorem ipsum dolor sit amet. dolor sit amet, consetetur sadipscing elised\r\n								diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam\r\n								voluptua. At vero eos et accusam.\r\n							</p>', 'food', '2019-05-20 18:57:49'),
(340, 'Статья 4', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor\r\n								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et\r\n								justo duo dolores et ea rebum. sanctusest\r\n								Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised\r\n								diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam\r\n								voluptua. At vero eos et accusam.\r\n							</p>\r\n							<del class=\"text-muted \">Lorem ipsum dolor sit amet, consetetur sadipscing elised\r\n								diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat\r\n							</del>\r\n							<p>Lorem ipsum dolor sit amet, <abbr title=\"ShapedTheme\">ST</abbr> consetetur sadipscing elitr, sed diam\r\n								nonumy eirtempor\r\n								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et\r\n								justo duo dolores et ea rebum. Stet clita kasd gubergren,\r\n								voluptua. At vero eos et accusam.\r\n							</p>\r\n\r\n							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor\r\n								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et\r\n								justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest\r\n								Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised\r\n								diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam\r\n								voluptua. At vero eos et accusam.\r\n							</p>', 'food', '2019-05-20 18:59:08'),
(341, 'Статья 5', '\r\n							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed\r\n								tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et\r\n								justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem\r\n								ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy\r\n								eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.\r\n							</p>\r\n							<h3 class=\"text-brand\">At vero accusam et\r\n								justo duo dolores et ea rebum.</h3>\r\n							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor\r\n								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Stet clita kasd gubergren, no sea\r\n								takimata sanctusest\r\n								Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised\r\n								diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam\r\n								voluptua. At vero eos et accusam.\r\n							</p>\r\n\r\n							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor\r\n								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et\r\n								justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest\r\n								Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised\r\n								diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam\r\n								voluptua. At vero eos et accusam.\r\n							</p>', 'cars', '2019-05-20 19:02:01'),
(342, 'Статья 6', 'Полезность в том, что когда проект большой и в разных местах его есть ссылка на маршрут, то при изменении маршрута не нужно бегать по всем представлениям проекта и менять его.\r\nДав имя и расставив в проекте, при изменении только во фронтконтроллере всё везде будет норм работать\r\nВ хэдере и футере есть же одинаковые ссылки. \r\nКороче без параметров всё пучком. А с ними накак не разберусь)', 'php', '2019-05-20 19:02:40'),
(343, 'Статья с Ваней', 'He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.He loves to do different home-made things and share to the world.', 'travel', '2019-06-19 12:38:56'),
(344, 'Шкибобабские острова', '12:00\r\nВ Грузии последние события называют попыткой госпереворота и продуманной провокацией\r\n12:05\r\nДепутат Госдумы Сергей Гаврилов прокомментировал ситуацию в Грузии\r\n12:07\r\nДональд Трамп едва не развязал войну на Ближнем Востоке', 'cars', '2019-06-21 11:13:17'),
(345, 'ттпро', 'вот дока по роутеру. Что я не так делаю?\r\n$r->addRoute(\'GET\', \'/single-page[/{id:\\d+}]\', [\'App\\controllers\\PostController\', \'getOnePost\']); вот это работает, $id передает нормально\r\nГлупый мальчишка )))))  $name )))))\r\nВсетаки непередаваемое ощущение, когда получается задуманное ))) Из за этого и становятся програмисатми ))))\r\nВсе. Сделал Блог! вот дока по роутеру. Что я не так делаю?\r\n$r->addRoute(\'GET\', \'/single-page[/{id:\\d+}]\', [\'App\\controllers\\PostController\', \'getOnePost\']); вот это работает, $id передает нормально\r\nГлупый мальчишка )))))  $name )))))\r\nВсетаки непередаваемое ощущение, когда получается задуманное ))) Из за этого и становятся програмисатми ))))\r\nВсе. Сделал Блог! ', 'travel', '2019-06-21 14:24:09');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT '0',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`, `img`) VALUES
(48, 'denishm117@yandex.ru', '$2y$10$ozb0E7qvu9g36tDHzNeoUelU3xbTQ42Hb12EinQi2OaEt46a.Khba', 'Василий', 0, 1, 1, 6, 1558802620, 1558804015, 0, 'default_foto.jpg'),
(46, 'eglobus080@gmail.com', '$2y$10$WivCpoqklXPoO9dhvryebuZFiEMiW4pOncpNCo.iMQq0Q7AWjdJR6', 'Ден', 0, 1, 1, 0, 1558256895, 1561068493, 0, 'default_foto.jpg'),
(47, 'eglobus0801@gmail.com', '$2y$10$rURmRbwXT6W/rvI9Rekmv.aM4PCr2Y1Yp7TM7sLOERRkFYN8v89/C', 'Денисий', 0, 1, 1, 6, 1558470694, 1561070822, 0, '5ce4602685976.jpg'),
(45, 'denishm116@yandex.ru', '$2y$10$I/mo1IUcn4xu0hDlKp9VKO6Juwlb4c6l8OxgnRNGy0YhHJqH7oH8G', 'Денис', 0, 1, 1, 5, 1558207753, 1561070859, 0, '5ce05d09320be.jpg'),
(49, 'zeglobus080@gmail.com', '$2y$10$Hy3ym1SRQVYyIlCtCaA3Fu.h.N.BTQWfSDwecMoi1LYp1c1mQ8Eri', 'Здохлер', 0, 1, 1, 6, 1560935647, 1560935686, 0, 'default_foto.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_confirmations`
--

INSERT INTO `users_confirmations` (`id`, `user_id`, `email`, `selector`, `token`, `expires`) VALUES
(1, 1, 'denishm116@yandex.ru', 'Cm-t-XNy4VJ5F664', '$2y$10$BykVtaMimFc4zAhA0d4LkuWjLssgC9a7/ZVW9.50JcpD5J2YjuRUu', 1557476066),
(2, 2, 'denishm117@yandex.ru', 'mQACfjwE_ipHVrpc', '$2y$10$hCTlDwRfznGUPOK88fKDX.OwMvUtlWPTpnJ/EumOl726zc7Ff4KvG', 1557476212),
(4, 4, 'zemlak.renee@hotmail.com', '7v_Hu0OdnDnyLfEv', '$2y$10$xO/leBKcrIEX7iQ/gcVWiudI4uTWuZvRlOAwhY4pT9tOr7U5NBpB2', 1557518085),
(5, 5, 'rempel.friedrich@gutkowski.net', '_rEPs4Q1gMSGLMQ5', '$2y$10$ZcD99jDaRssSl3SrplUAge0rikJNScDEw2bYkA9EBtp8QwrVlEwOS', 1557518085);

-- --------------------------------------------------------

--
-- Структура таблицы `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('QduM75nGblH2CDKFyk0QeukPOwuEVDAUFE54ITnHM38', 44.965, 1558101420, 1558641420),
('PZ3qJtO_NLbJfRIP-8b4ME4WA3xxc6n9nbCORSffyQ0', 0.018435, 1558098742, 1558530742),
('HIJQJPUQ2qyyTt0Q7_AuZA0pXm27czJnqpJsoA5IFec', 49, 1557390455, 1557462455),
('TP2dnwoAkla7R8zGKim-sfb4ICyJx9szc_R4Q2Nxd5U', 29, 1557390455, 1557462455),
('57ciPgPCsxAUaWz99WbngxtMrKLPoM0-jU1vKQxQZv0', 29, 1557390455, 1557462455);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Индексы таблицы `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
