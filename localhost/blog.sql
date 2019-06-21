-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 17 2019 г., 22:42
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
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `short_description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `like_num` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_main` varchar(255) NOT NULL,
  `img_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `short_description`, `like_num`, `category`, `img_main`, `img_1`, `img_2`, `date`) VALUES
(321, 'vwsewse', 'evrwsvewsvwws', 'sint et tempora sit perferendis quo dicta', 364, 'vwsevrwsevws', 'default_foto.jpg', 'default_foto.jpg', 'default_foto.jpg', '2019-05-17 12:52:29'),
(322, 'укеыр', 'ериериквртоекнотноьтьотьот', 'voluptas voluptas libero sit aliquam ex impedit', 102, 'риукверикувери', '5cdc38313b8eb.jpg', '5cdc383154931.jpg', 'default_foto.jpg', '2019-05-17 12:52:29'),
(325, 'wsgr', 'wrgwgr', 'et alias qui vero et aut sit', 857, 'rwgeg', '5cde8fb09b9da.jpg', 'default_foto.jpg', 'default_foto.jpg', '2019-05-17 12:52:29'),
(326, 'енота', 'нотьнеаотнотн', 'eligendi eum quia est asperiores aut fugit', 849, 'отенотенаоьт', '5cdeaea535013.jpg', '5cdeaea54c714.jpg', '5cdeaea560cdb.jpg', '2019-05-17 12:52:53');

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
(33, 'eglobus080@gmail.com', '$2y$10$2w7KSeoe3sfeZxxxUXVxqePd3Y9ty7lnFN1OQBM1mdwdQtK8N8lrC', 'Денис', 0, 1, 1, 0, 1558119489, NULL, 0, NULL);

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
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
