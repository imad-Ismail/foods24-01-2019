-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 10:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groente&fruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `user_id` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `imagelist` varchar(100) NOT NULL,
  `expire_date` date NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`user_id`, `product_id`, `title`, `description`, `imagelist`, `expire_date`, `product_type`, `contact`) VALUES
('6', 6, 'banan', 'lekker', 'dd9b474552b60929d73d.png', '2019-01-18', 'fruit', 'heartbeat-lolo@hotmail.com'),
('6', 7, 'tomat', 'mmmm', '67bfd7d834f0613d4605.jpeg', '2019-01-24', 'groenten', '0212211221');

-- --------------------------------------------------------

--
-- Table structure for table `ps_forgot`
--

CREATE TABLE `ps_forgot` (
  `forgot_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `timestamp` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `accept_phone` varchar(5) NOT NULL,
  `accept_address` varchar(5) NOT NULL,
  `accept_email` varchar(5) NOT NULL,
  `login method` varchar(10) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `house_number` varchar(5) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phone_number`, `postalcode`, `lat`, `long`, `accept_phone`, `accept_address`, `accept_email`, `login method`, `user_role`, `house_number`, `password`) VALUES
(6, 'Imad', 'Ismail', 'heartbeat-lolo@hotmail.com', '0620665148', '4811MJ', 0, 0, 'false', 'false', 'false', '', '', '06206', 'aaaa'),
(19, 'imado', 'medo', 'medo', '32165453210', '4811', 0, 0, '', '', '', '', '', '21', 'mmmm'),
(20, 'adje', 'dsds', 'adje', 'ukhyjhgf', 'jnmbhgf', 0, 0, '', '', '', '', '', 'hjg', 'aaaa'),
(21, 'adje', 'kjhf', 'adje@h', '51665', '15661', 0, 0, '', '', '', '', '', '16515', '$argon2i$v=19$m=131072,t=4,p=3$QllmVGVDUmtqWWVZN0ZrZg$9hF30ZlyHef6AsI1Kddw8c33Xb2mn+9mYHc/cEkpvZA'),
(22, 'adje', 'asdsda', 'adje@g', '123123', '123132', 0, 0, '', '', '', '', '', '31212', 'zzzz'),
(25, 'Imad', 'Ismail', 'imad@m1n.com', '0620665148', '4811MJ', 0, 0, 'true', 'false', 'false', '', '', '06206', 'zzzz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
