-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 28 2022 г., 18:44
-- Версия сервера: 8.0.27-0ubuntu0.20.04.1
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `almdev_db_gb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  `session_id` varchar(48) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_id` int NOT NULL,
  `count` int NOT NULL,
  `order_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `session_id`, `product_id`, `count`, `order_id`) VALUES
(6, 0, 'u60o5qnjh9etno3d0u1lchlb74', 6, 4, 3),
(7, 0, 'u60o5qnjh9etno3d0u1lchlb74', 2, 2, 4),
(8, 0, 'u60o5qnjh9etno3d0u1lchlb74', 3, 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_small` varchar(100) NOT NULL,
  `img_big` varchar(100) NOT NULL,
  `raiting` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img_small`, `img_big`, `raiting`) VALUES
(1, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 3),
(2, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 4),
(3, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 8),
(4, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(5, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(6, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(7, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(8, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(9, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(10, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(11, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(12, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(13, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(14, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(15, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(16, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(17, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(18, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(19, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(20, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(21, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(22, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(23, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(24, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(25, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(26, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(27, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(28, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(29, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(30, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(31, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(32, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(33, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(34, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(35, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(36, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(37, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(38, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(39, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(40, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(41, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(42, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0),
(43, 'изображение 1', '/lesson4/img/1.jpg', '/lesson4/img/1.jpg', 0),
(44, 'изображение 2', '/lesson4/img/2.jpg', '/lesson4/img/2.jpg', 0),
(45, 'изображение 3', '/lesson4/img/3.webp', '/lesson4/img/3.webp', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `status` int NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `status`, `date`, `user_id`) VALUES
(3, 1, '2021-12-28 14:56:14', 1),
(4, 1, '2021-12-28 14:57:24', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `img_small` varchar(25) NOT NULL,
  `img_big` varchar(25) NOT NULL,
  `sort` int NOT NULL DEFAULT '500',
  `active` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img_small`, `img_big`, `sort`, `active`) VALUES
(1, 'Mango  People  T-shirt 1', '', 514, 'product1.jpg', 'product.jpg', 900, 'Y'),
(2, 'Mango  People  T-shirt 2', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 52, 'product2.jpg', 'product.jpg', 500, 'Y'),
(3, 'Mango People T-shirt 3', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 53, 'product3.jpg', 'product.jpg', 500, 'Y'),
(4, 'Mango People T-shirt 4', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 54, 'product4.jpg', 'product.jpg', 500, 'Y'),
(5, 'Mango People T-shirt 5', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 55, 'product5.jpg', 'product.jpg', 500, 'Y'),
(6, 'Mango People T-shirt 6', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 56, 'product6.jpg', 'product.jpg', 500, 'Y'),
(7, 'Mango People T-shirt 7', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 57, 'product7.jpg', 'product.jpg', 500, 'Y'),
(8, 'Mango People T-shirt 8', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', 58, 'product8.jpg', 'product.jpg', 500, 'Y'),
(9, 'name', 'Test', 515, 'product6.jpg', 'product.jpg', 500, 'Y');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `active` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `date`, `name`, `email`, `description`, `active`) VALUES
(1, '2021-12-15', 'Name', 'morozovkrd@gmail.com', '', 'Y');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `last_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(25) NOT NULL,
  `active` char(1) NOT NULL DEFAULT 'Y',
  `role` char(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `login`, `password`, `email`, `active`, `role`) VALUES
(1, 'Alexander', 'Morozov', 'morozov', 'qweRTY123~', 'morozovkrd@gmail.com', 'Y', 'user'),
(2, 'Admin', '', 'admin', 'qweRTY123~', 'morozovkrd@gmail.com', 'Y', 'admin'),
(4, NULL, NULL, 'test', 'QWErty123~', 'morozovkrd@gmail.com', 'Y', 'user'),
(5, NULL, NULL, 'morozov123', 'morozov123', 'morozov123@morozov123.ru', 'Y', 'user'),
(6, NULL, NULL, 'test', 'test', 'test@test.ru', 'Y', 'user'),
(7, NULL, NULL, 'test2', 'test2', 'test2@test2.ru', 'Y', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
