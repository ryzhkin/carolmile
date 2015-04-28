-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2015 г., 13:26
-- Версия сервера: 5.5.25
-- Версия PHP: 5.4.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `carolmile`
--

--
-- Дамп данных таблицы `albom`
--

INSERT INTO `albom` (`albom_id`, `title`, `cover`) VALUES
(2, 'Albom - 1', '18fc8-1-1402500685-why-go-christ-the-redeemer__square.jpg'),
(3, 'Albom - 2', '0bc0c-3-1396022147-island_kandolhu-1219__square.jpg'),
(4, 'Albom - 3', '2ff5e-b1dnr5tiuaasn33.jpg'),
(5, 'Albom - 4', '7f7f5-de40e936763fa1077cf614272cbc5921.jpg'),
(6, 'Albom - 5', '9fb1a-intense-pearl-shoal-waterfall-china_408x408.jpg'),
(7, 'Albom - 6', '44206-ray-orange-circ.jpg'),
(8, 'Albom - 7', '049a0-run-all-night-gq-16mar15-rex-hp_b_408x408.jpg'),
(9, 'Albom - 8', '9182f-south-east-asia-highlighting-cambodia.jpg');

--
-- Дамп данных таблицы `albom_track`
--

INSERT INTO `albom_track` (`albom_id`, `track_id`, `priority`) VALUES
(2, 1, 0),
(2, 2, 1),
(3, 3, 0),
(3, 4, 1),
(4, 5, 0),
(4, 6, 1),
(5, 6, 0),
(6, 1, 0),
(6, 2, 1),
(6, 3, 2),
(6, 4, 3),
(6, 5, 4),
(6, 6, 5),
(7, 1, 0),
(7, 2, 1),
(7, 3, 2),
(7, 4, 3),
(7, 5, 4),
(7, 6, 5),
(8, 1, 0),
(8, 2, 1),
(8, 3, 2),
(8, 4, 3),
(8, 5, 4),
(8, 6, 5),
(9, 1, 0),
(9, 2, 1),
(9, 3, 2),
(9, 4, 3),
(9, 5, 4),
(9, 6, 5);

--
-- Дамп данных таблицы `track`
--

INSERT INTO `track` (`track_id`, `title`, `mp3`) VALUES
(1, 'Have You Ever Seen The Rain', 'ec4b2-have-you-ever-seen-the-rain.mp3'),
(2, 'Hey Jude', '3103b-hey-jude.mp3'),
(3, 'Kwitka Duscha', '78f09-kwitka-duscha.mp3'),
(4, 'Odin Wzgliad Nazad', '787e7-odin-wzgliad-nazad.mp3'),
(5, 'Skrypal', '689c2-skrypal.mp3'),
(6, 'The Best', 'ba56e-the-best.mp3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
