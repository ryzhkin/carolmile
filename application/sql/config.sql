SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `config` (`id`, `name`, `value`) VALUES
(1,	'Сайт включен',	'да'),
(2,	'Отсылать контакты на email №1',	'polina.kitzmann@gmail.com'),
(3,	'Отсылать контакты на email №2',	'fred.myketyn@gmail.com'),
(4,	'Отсылать контакты на email №3',	'');
