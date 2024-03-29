-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-03-29 10:10:40
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `phppractice`
--

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '1234'),
(9, 'ggg', '0808'),
(15, 'kkk', '5623'),
(16, '1', '1');

--
-- 傾印資料表的資料 `footer`
--

INSERT INTO `footer` (`id`, `author`, `email`) VALUES
(1, '劉俊吾', 'a4264428@gmail.com');

--
-- 傾印資料表的資料 `header`
--

INSERT INTO `header` (`id`, `title`) VALUES
(1, 'PHP 超級牛逼');

--
-- 傾印資料表的資料 `index_image`
--

INSERT INTO `index_image` (`id`, `image`, `display`) VALUES
(3, 'index_image.jpg', '0'),
(4, 'admin_img.jpeg', '1'),
(13, 'full-1.jpeg', '0'),
(14, 'FB_IMG_1685605261379.jpg', '0'),
(15, 'full.jpeg', '0'),
(16, 'full-3.jpeg', '0'),
(17, 'FB_IMG_1685605313737.jpg', '0'),
(18, 'FB_IMG_1685605247824.jpg', '0'),
(19, '1667146265695.jpg', '0'),
(20, '31fXudQ.png', '0');

--
-- 傾印資料表的資料 `index_text`
--

INSERT INTO `index_text` (`id`, `age`, `school`, `interest`) VALUES
(1, 19, '中央大學資訊工程學系', '戰車世界、動漫');

--
-- 傾印資料表的資料 `visit_number`
--

INSERT INTO `visit_number` (`id`, `quantity`) VALUES
(1, '10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
