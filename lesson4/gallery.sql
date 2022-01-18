-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 18 2022 г., 22:21
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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
