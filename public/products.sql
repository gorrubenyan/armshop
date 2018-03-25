-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 04 2018 г., 06:44
-- Версия сервера: 5.6.13
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'iPhone', 1700, 'nkar.jpg', 'Shat lav katu e ays heraxos@'),
(2, 'Car', 120, 'nkar2.jpg', 'Shat lav Car e ays heraxos@'),
(3, 'Ball', 150, 'nkar3.jpg', 'Shat lav Gndak e ays heraxos@'),
(4, 'Bicycle', 290, 'hecaniv.jpg', 'Wonderful bicicle which is capeble to resist everything'),
(13, 'Erkrord avton', 75000, 'nkar2.jpg', 'Hankarc cahrneq zavasko brak uni:'),
(14, 'BMW X5', 5000, 'bmw x5.jpg', 'BMW x5: \r\nVerjin serndi VAZ 2107:\r\nUni argelakman hamakarg, 4 hat anvadox, xek: Miak xndiry ayn e, vor chuni sharjich ev poxancman tup:\r\nMakanuny jeyran e:'),
(15, 'Acer', 500, 'apple comp2.jpg', 'Վերջին սերնդի նոութբուք, աշխատում է հիանալի: Գնելուց հետո ես խնդիրների դեպքում ետ չեմ վերադարձնի ձեր գումարը:'),
(16, 'Shun', 500, 'Cat03.jpg', 'Shat lav uxt gzox e:'),
(17, 'PN Nokia', 500, 'iphone x.jpg', 'Hianali qar e: Karox eq ogtagorcel jri mej, karox eq popoq kam pnduk jardel eranov: '),
(18, 'Mercedes', 20000, 'mersedes.jpg', 'Hianali niva e: Yuxy vren, (i nkati unem matori vren yuxot a), uni 4 dur, voroncic 2-y chi bacvum:'),
(19, 'Pentium 4', 200, 'apple comp.jpg', 'Hianali hamakargich e, uni ram, bayc 500mb, chuni HDD:'),
(20, 'Samsung galaxy s8', 500, 'galaxy.jpg', 'Hianali pult e, karoxanum e karavarel cankacac sarqavorum:');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
