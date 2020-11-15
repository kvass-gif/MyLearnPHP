-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 15 2020 р., 23:34
-- Версія сервера: 10.4.14-MariaDB
-- Версія PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `tutorials`
--

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `article` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `price`, `photo`, `article`) VALUES
(1, 'Samsung Galaxy S20', 'Екран (6.5\", Super AMOLED, 2400x1080) / Samsung Exynos 990 (2 x 2.73 ГГц + 2 x 2.5 ГГц + 4 x 2.0 ГГц) / потрійна основна камера: 12 Мп + 12 Мп + 8 Мп, фронтальна: 32 Мп / RAM 6 ГБ / 128 ГБ вбудованої пам\'яті + microSD (до 1 ТБ) / 3G / LTE / GPS / підтримка 2 SIM-карток (Nano-SIM) / Android 10 / 4500 мА·год', '17999', 'http://localhost:8080/Homework/Homework9_mod4/photo/samsung_galaxy_s20_red_sm_g980fzrdsek_images_16848966345.jpg', '250226346'),
(2, 'Apple iPhone 12', 'Стандарт зв\'язку\r\n2G (GPRS/EDGE)\r\n3G (WCDMA/UMTS/HSPA)\r\n4G (LTE)\r\n5G\r\nДіагональ екрана\r\n6.1\r\nКількість мегапікселів основної камери\r\n12 Мп + 12 Мп\r\nКількість мегапікселів фронтальної камери\r\n12 Мп\r\nРоздільна здатність відео\r\n2532x1170\r\nВбудована пам\'ять\r\n128 ГБ\r\nОпераційна система\r\niOS\r\nПроцесор\r\nApple A14 Bionic\r\nКількість СІМ-карток\r\n2\r\nТип матриці\r\nOLED (Super Retina XDR)\r\nРозміри СІМ-картки\r\nNano-SIM\r\neSIM\r\nМаксимальний обсяг підтримуваної карти пам\'яті\r\nНемає', '33999', 'http://localhost:8080/Homework/Homework9_mod4/photo/245162293_images_20299810101.jpg', '245162293'),
(3, 'Samsung Galaxy M31', 'Екран (6.4\", Super AMOLED, 2340х1080) / Samsung Exynos 9611 (4 x 2.3 ГГц + 4 x 1.7 ГГц) / квадро основна камера: 64 Мп + 8 Мп + 5 Мп + 5 Мп, фронтальна 32 Мп / RAM 6 ГБ / 128 ГБ вбудованої пам\'яті + microSD (до 512 ГБ) / 3G / LTE / GPS / ГЛОНАСС / BDS / Galileo / підтримка 2 SIM-карток (Nano-SIM) / Android 10 (Q) / 6000 мА·год', '6499', 'http://localhost:8080/Homework/Homework9_mod4/photo/samsung_galaxy_m31_6_128gb_blue_images_16893927576.jpg\r\n', '175401451'),
(4, 'Apple iPhone SE', 'Екран (4.7\", IPS, 1334x750) / Apple A13 Bionic / основна камера: 12 Мп, фронтальна камера: 7 Мп / 64 ГБ вбудованої пам\'яті / 3G / LTE / GPS / Nano-SIM, eSIM / iOS 13', '14499', 'http://localhost:8080/Homework/Homework9_mod4/photo/apple_iphone_se_64gb_white_images_17801797603.png', '205228429'),
(5, 'Realme 6', 'Екран (6.5\", IPS, 2400x1080) / Mediatek Helio G90T (2.05 ГГц) / основна квадрокамера: 64 Мп + 8 Мп + 2 Мп + 2 Мп, фронтальна камера: 16 Мп / RAM 8 ГБ / 128 ГБ вбудованої пам\'яті + microSD (до 256 ГБ) / 3G / LTE / GPS / підтримка 2 SIM-карток (Nano-SIM) / Android 10 / 4300 мА·год', '6699', 'http://localhost:8080/Homework/Homework9_mod4/photo/copy_realme_2001000187010_5eb175f306cd2_images_18099243415.jpg', '210650707');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
