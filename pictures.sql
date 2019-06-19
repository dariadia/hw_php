-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2019 at 09:08 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lesson5hw`
--

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `src` text NOT NULL,
  `size` int(100) NOT NULL,
  `views` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `src`, `size`, `views`) VALUES
(1, 'pic1', 'images/1.jpg', 22, 142),
(2, 'pic2', 'images/2.jpg', 112, 102),
(3, 'pic3', 'images/3.jpg', 50, 2),
(4, 'pic4', 'images/4.jpg', 76, 54),
(5, 'pic5', 'images/5.jpg', 41, 3),
(6, 'pic6', 'images/6.jpg', 89, 5),
(7, 'pic7', 'images/7.jpg', 52, 3),
(8, 'pic8', 'images/8.jpg', 128, 64),
(9, 'pic9', 'images/9.jpg', 141, 15),
(10, 'pic10', 'images/10.jpg', 88, 16),
(11, 'pic11', 'images/11.jpg', 53, 14),
(12, 'pic12', 'images/12.jpg', 33, 25),
(13, 'pic13', 'images/13.jpg', 55, 6),
(14, 'pic14', 'images/14.jpg', 136, 4),
(15, 'pic15', 'images/15.jpg', 54, 41),
(16, 'pic16', 'images/16.jpg', 140, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
