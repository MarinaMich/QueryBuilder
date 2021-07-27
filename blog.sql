-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 27 2021 г., 12:27
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.11

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
  `title` varchar(60) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`) VALUES
(1, 'Цитата 1', 'Хорошие друзья, хорошие книги и спящая совесть - вот идеальная жизнь.'),
(2, 'Цитата 2', 'Только то и приятно, что трудно достать.'),
(3, 'Цитата 3', 'Глупости получаются случайно, а потом становятся лучшими моментами в жизни.'),
(4, 'Цитата 4', 'Именно потому, что не было никакого запрета, все его греховные желания исчезли и потеряли свою привлекательность.'),
(6, 'Цитата 5', 'Самые дорогие галстуки носят те кому бы лучше подошла обычная веревка.'),
(7, 'Цитата 6', 'Чужого клеща каждый охаять может, а по мне и этот хорош.'),
(8, 'Цитата 7', 'Нет ничего проще чем бросить курить, я это делал тысячу раз.'),
(10, 'Цитата 8', 'Если хочешь, чтобы человек что-нибудь сделал, пусть даст зарок, что не станет делать этого во веки веков. Вернейший способ!'),
(13, 'ddd', 'gggg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
