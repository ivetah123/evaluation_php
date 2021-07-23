-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 12:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE `instruments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(2000) DEFAULT NULL,
  `type` enum('guitar','drum','bass','') DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`id`, `name`, `brand_name`, `price`, `photo`, `type`, `description`) VALUES
(1, 'mandolina', 'ergo', 3, 'https://icon2.cleanpng.com/20190622/aez/kisspng-mandolin-guitar-banjo-musical-instruments-string-i-banjo-gold-tone-png-transparente-stickpng-5d0eab62dbff16.0601441815612424669011.jpg', 'guitar', 'frjlezgrfezbgjbrfejzgfbnrjefjrleafkjrleafrajefgbjreabgfjrleabgre'),
(2, 'contrabass', 'violo', 0, 'https://pics.clipartpng.com/Contrabass_PNG_Clipart-885.png', '', 'frjlezgrfezbgjbrfejzgfbnrjefjrleafkjrleafrajefgbjreabgfjrleabgre'),
(3, 'bongo', 'real', 4, 'https://assets.stickpng.com/images/5a9d5b5f9fc609199d0ff0ba.png', 'drum', 'frjlezgrfezbgjbrfejzgfbnrjefjrleafkjrleafrajefgbjreabgfjrleabgre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruments`
--
ALTER TABLE `instruments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
