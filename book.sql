-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 10:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `product_code` varchar(25) NOT NULL,
  `fandom` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `product_img_name` varchar(100) NOT NULL DEFAULT 'no_image.jpg',
  `product_name` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  `product_qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `product_code`, `fandom`, `category`, `product_img_name`, `product_name`, `price`, `product_qty`) VALUES
(1, 'got-cloth-1', 'kid', 'kid', 'got-cloth-1.jpg', 'book 1', 200, 99),
(2, 'got-cloth-2', 'kid', 'kid', 'got-cloth-2.jpg', 'book 2', 200, 99),
(3, 'got-cloth-3', 'kid', 'kid', 'got-cloth-3.jpg', 'book 3', 150, 99),
(4, 'got-cloth-4', 'kid', 'kid', 'got-cloth-4.jpg', 'book 4', 79, 99),
(19, 'hg-cloth-01', 'teen', 'teen', 'hg-cloth-1.jpg', 'teen book1', 456, 99),
(20, 'hg-cloth-02', 'teen', 'teen', 'hg-cloth-2.jpg', 'teen book 2', 88, 99),
(21, 'hg-cloth-03', 'teen', 'teen', 'hg-cloth-3.jpg', 'teen book 3', 875, 99),
(53, '111', 'abcd', 'kid', 'no_image.jpg', 'chips', 111, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `prod_code` varchar(20) NOT NULL,
  `prod_img` varchar(250) NOT NULL,
  `prod_name` varchar(120) NOT NULL,
  `price` int(5) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `prod_code`, `prod_img`, `prod_name`, `price`, `name`) VALUES
(1, 'got-cloth-1', 'got-cloth-1.jpg', 'book 1', 500, ''),
(2, 'got-cloth-2', 'got-cloth-2.jpg', 'book 2', 500, ''),
(3, 'got-cloth-3', 'got-cloth-3.jpg', 'book 3', 500, ''),
(4, 'got-cloth-4', 'got-cloth-4.jpg', 'book 4', 750, ''),
(53, '88', '', 'fghj', 900, ''),
(54, '99', '', 'll', 5000, ''),
(55, '88j', '', 'fghj', 8888, ''),
(56, '333', '', 'kkkkkkkkkkkkk', 888, ''),
(59, '123', '', 'aaaaaa', 73, 'kk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(19, 'nunky', 'n@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
