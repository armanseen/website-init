-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 25, 2020 at 03:43 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

DROP TABLE IF EXISTS `user_information`;
CREATE TABLE IF NOT EXISTS `user_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `email`, `password`) VALUES
(1, 'johnknopfler7788@gmail.com', '8dd4afd0d1d6114ac4c8b5a1a913c1e6'),
(3, 'armansinaie1380@gmail.com', 'f1cfcd30a9d1ebd3ea460d53f3b1f79a'),
(4, 'dfaf@dsf.csd', 'f1cfcd30a9d1ebd3ea460d53f3b1f79a'),
(5, 'gamebet.irr@gmail.com', '853c0b52c0d9acf4718af8259d02ff15'),
(6, 'Hell@gmail.com', '2f3f91545c9df63f0a399bb77c359215');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
