-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2021 at 07:36 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysite`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `company` varchar(255) NOT NULL,
  `Telephone` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`, `company`, `Telephone`) VALUES
(19, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2020-12-12', 'admin', 0),
(16, 'Chathura Manohara', 'chathura.madura1999@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-12-12', 'XYZ', 702534588),
(20, 'Madura Chamodara', 'madura9999@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', '2020-12-12', 'XYZ', 714662643),
(18, 'Chathura Manohara', 'chathura.madura11@gmail.com', '1a7deff530331d8ff5fde2a20fc500bb', '2020-12-12', 'XYZ', 702534588),
(14, 'Madura Chamodara', 'madura99@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-12', 'XYZ', 714662643);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
