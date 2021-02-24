-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2021 at 11:59 AM
-- Server version: 5.7.28
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `bodys` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `types` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `date` date NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `who` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `bodys`, `picture`, `types`, `status`, `views`, `date`, `comments`, `sort`, `who`, `created_date`) VALUES
(1, 'title1', '<p>bodys</p>', 'ball-6030f803e7e63.jpeg', 1, 1, -2, '2021-01-28', 'comments', 1, 1, '2021-01-28 21:00:00'),
(2, 'title2', '<p>bodys</p>', '6-6027f68a93a43.jpeg', 0, 1, -4, '2021-01-28', 'comments', 2, 1, '2021-01-28 21:00:00'),
(3, 'tets', '<p>asfASF</p>', '7-6027f6919dfce.jpeg', 0, 1, 0, '2021-02-13', 'ASFASF', 1, 1, '2021-02-13 20:08:32'),
(4, 'zsd', '<p>sdgsg</p>', 'bathuu-6027f69a1db6a.jpeg', 0, 1, 0, '2021-02-13', 'sh', 2, 1, '2021-02-13 23:55:13'),
(5, 'asfasf', '<p>asf</p>', 'news-450x350-1-6030f81b8d54e.jpeg', 0, 1, 0, '2021-02-15', 'asf', 3, 1, '2021-02-14 00:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `back_image`
--

DROP TABLE IF EXISTS `back_image`;
CREATE TABLE IF NOT EXISTS `back_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `who` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `back_image`
--

INSERT INTO `back_image` (`id`, `image`, `status`, `who`, `created_date`) VALUES
(2, '1-603141ca4ed9d.jpeg', 1, 1, '2021-02-21 01:30:48'),
(9, 'favicon-60314737d8f09.png', 1, 1, '2021-02-21 01:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact_user`
--

DROP TABLE IF EXISTS `contact_user`;
CREATE TABLE IF NOT EXISTS `contact_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_user`
--

INSERT INTO `contact_user` (`id`, `lastname`, `firstname`, `phone`, `email`, `status`, `created_date`) VALUES
(1, 'afg', 'asdg', 65465, 'adg@sdf.hj', 0, '2021-02-20 20:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

DROP TABLE IF EXISTS `interview`;
CREATE TABLE IF NOT EXISTS `interview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `bodys` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `types` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `date` date NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `who` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `title`, `bodys`, `picture`, `types`, `status`, `views`, `date`, `comments`, `sort`, `who`, `created_date`) VALUES
(1, 'Ярилцлага', '<p>Дэлгэрэнгүй</p>', 'news-350x223-4-603104394a9dc.jpeg', 0, 1, 0, '2021-02-14', 'Тайлбар', 1, 1, '2021-02-14 01:49:04'),
(2, 'Ярилцлага1', '<p>Үндсэн хэсэг</p>', '1-6028e0bcf0ef3.jpeg', 0, 1, 0, '2021-02-14', 'Тайлбар', 2, 1, '2021-02-14 15:53:53'),
(3, 'Ярилцлага-', '<p>Дэлгэрэнгүй</p>', '3-6028e0d6401d9.jpeg', 0, 1, 0, '2021-02-14', 'Товч тайлбар', 3, 1, '2021-02-14 15:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `module`, `icon`, `action`, `type`, `sub_menu_id`) VALUES
(1, 'Мэдээ', 'ik-menu', 'news', 'menu', 0),
(2, 'Нийтлэл', 'ik-file-text', 'article', 'menu', 0),
(3, 'Ярилцлага', 'ik-message-square', 'interview', 'menu', 0),
(21, 'Нэмэлт', 'ik-settings', '', 'subMenu', 0),
(22, 'Үндсэн зураг', '', 'backImage', 'category', 21),
(23, 'Алдааны мэдээ', '', 'error', 'category', 21),
(24, 'Бүртгэлтэй хэрэглэгчид', 'ik-user', 'users', 'menu', 0),
(26, 'Цаг агаар', 'ik-cloud-rain', 'weather', 'menu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `bodys` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `types` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `date` date NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `who` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `bodys`, `picture`, `types`, `status`, `views`, `date`, `comments`, `sort`, `who`, `created_date`) VALUES
(1, 'F', '<p>ASF</p>', '1-6030fc95de2e2.jpeg', 1, 1, 0, '2021-02-20', 'sf', 1, 1, '2021-02-20 20:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `description`) VALUES
(1, 'super admin', 'Хөгжүүлэгчийн хандах эрх'),
(2, 'admin', 'Удирдах эрх'),
(3, 'user', 'Харах эрх');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roles`) VALUES
(1, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$ak94b2I0VU4uZW1YVkRJWQ$bvfWGs1u25yDGG/7UuijbF7xlNtEJ7LVIEB8bozaP2M', '2'),
(8, 'super_admin@g.mn', '$argon2i$v=19$m=65536,t=4,p=1$S0t5YjVhTmhMWWtWMmJGag$psaRUlWiY5wFD88S+QEtxx+ZxgDYu6SWHaVK6ZNSl7s', '1'),
(11, 'user@g.mn', '$argon2i$v=19$m=65536,t=4,p=1$L3ptL2JYMHZvMlptV0gzVw$gbgUje008cVC2JvCojJ6j1s+ULZot4eZHzANs7AGDts', '3'),
(12, 'yanjinlkham.m@gmobile.mn', '$argon2id$v=19$m=65536,t=4,p=1$W9IL0BrWszYdSeLhtjs+eQ$2UvQOGpspIltMpO+ArDbN8pLVDhloLDD/cEdHiEVo1Q', '2'),
(13, 'zuunjargal.b@gmobile.mn', '$argon2id$v=19$m=65536,t=4,p=1$CqLCCWWtJtYsPDYiBrg07Q$HgzKZNpI16ocjRQzt0ujz9RMRCSdvCad0r4fuC6wCew', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

DROP TABLE IF EXISTS `user_permission`;
CREATE TABLE IF NOT EXISTS `user_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `module_id` (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_permission`
--

INSERT INTO `user_permission` (`id`, `user_id`, `module_id`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 0),
(5, 1, 5, 0),
(6, 1, 6, 0),
(7, 1, 7, 0),
(8, 1, 8, 0),
(9, 1, 9, 0),
(10, 1, 10, 0),
(11, 1, 11, 0),
(12, 1, 12, 0),
(13, 1, 13, 0),
(14, 1, 14, 0),
(15, 1, 15, 0),
(16, 1, 16, 0),
(17, 1, 17, 0),
(18, 1, 18, 0),
(19, 1, 19, 0),
(20, 1, 20, 0),
(21, 1, 21, 1),
(22, 1, 22, 1),
(23, 1, 23, 1),
(24, 1, 24, 1),
(36, 8, 1, 1),
(37, 8, 2, 1),
(38, 8, 3, 1),
(39, 8, 4, 1),
(40, 8, 5, 1),
(41, 8, 6, 1),
(42, 8, 7, 1),
(43, 8, 8, 1),
(44, 8, 9, 1),
(45, 8, 10, 1),
(46, 8, 11, 1),
(47, 8, 12, 1),
(48, 8, 13, 1),
(49, 8, 14, 1),
(50, 8, 15, 1),
(51, 8, 16, 1),
(52, 8, 17, 1),
(53, 8, 18, 1),
(54, 8, 19, 1),
(55, 8, 20, 1),
(56, 8, 21, 1),
(57, 8, 22, 1),
(58, 8, 23, 1),
(59, 8, 24, 1),
(65, 11, 1, 1),
(66, 11, 2, 1),
(67, 11, 3, 1),
(68, 11, 4, 1),
(69, 11, 5, 1),
(70, 11, 6, 1),
(71, 12, 1, 1),
(72, 12, 2, 1),
(73, 12, 3, 1),
(74, 12, 4, 1),
(75, 12, 5, 1),
(76, 12, 6, 1),
(77, 12, 7, 1),
(78, 12, 8, 1),
(79, 12, 9, 1),
(80, 12, 10, 1),
(81, 12, 11, 1),
(82, 12, 12, 1),
(83, 12, 13, 1),
(84, 12, 14, 1),
(85, 12, 15, 1),
(86, 12, 16, 1),
(87, 12, 17, 1),
(88, 12, 18, 1),
(89, 12, 19, 1),
(90, 12, 20, 1),
(91, 12, 21, 1),
(92, 12, 22, 1),
(93, 12, 23, 1),
(94, 12, 24, 1),
(95, 12, 25, 1),
(96, 13, 1, 1),
(97, 13, 2, 1),
(98, 13, 3, 1),
(99, 13, 4, 1),
(100, 13, 5, 1),
(101, 13, 6, 1),
(102, 13, 7, 1),
(103, 13, 8, 1),
(104, 13, 9, 1),
(105, 13, 10, 1),
(106, 13, 11, 1),
(107, 13, 12, 1),
(108, 13, 13, 1),
(109, 13, 14, 1),
(110, 13, 15, 1),
(111, 13, 16, 1),
(112, 13, 17, 1),
(113, 13, 18, 1),
(114, 13, 19, 1),
(115, 13, 20, 1),
(116, 13, 21, 1),
(117, 13, 22, 1),
(118, 13, 23, 1),
(119, 13, 24, 1),
(120, 13, 25, 1),
(121, 1, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

DROP TABLE IF EXISTS `weather`;
CREATE TABLE IF NOT EXISTS `weather` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
