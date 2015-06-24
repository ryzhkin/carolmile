-- phpMyAdmin SQL Dump
-- version 4.2.0-beta1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 25 2015 г., 23:26
-- Версия сервера: 5.1.40-community
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `carolmile`
--

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(2, '127.0.0.1', 'admin admin', '$2y$08$XhIepSVXwOgUBpYMFA0OL.eFtEW.0FnwY0qkX5tKmvwKEgwaB./9S', NULL, 'admin', NULL, NULL, NULL, 'kSoX4BfTNDdab.CkVi8eL.', 1429818329, 1429989194, 1, 'Admin', 'Admin', 'Carolmile', '12345678');

--
-- Дамп данных таблицы `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(4, 2, 1),
(5, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
