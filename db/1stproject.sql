-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 08:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1stproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(56) NOT NULL,
  `email` varchar(78) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'mission sharma', 'mission.ghimire16@gmail.com', '2147483647', 'hello'),
(2, 'mission sharma', 'mission.ghimire16@gmail.com', '2147483647', 'ghujiko'),
(3, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'gvhbjk'),
(4, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'bnm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(3, 'mission', 'mission.ghimire@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(12, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'imadol,lalitpur', 'netbanking', 'Zenfone Max Pro(2)', '30000'),
(13, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'imadol,lalitpur', 'cod', 'Huawei 10 Pro(2147483647)', '7.5E+30'),
(14, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'imadol,lalitpur', 'cod', 'vivo mobile(1), lenga(2)', '232000'),
(15, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'imadol,lalitpur', 'netbanking', 'laptop(1)', '1000000'),
(16, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'imadol,lalitpur', 'cod', 'shoes(1), r15 v3 bike(1)', '501000'),
(17, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'imadol,lalitpur', 'cod', 'laptop(1), Earphone(1)', '505000'),
(18, 'ramesh sir', 'rameshsir@gmail.com', '9897978997890', 'imadol,lalitpur', 'cod', 'laptop(1), Earphone(1), r15 v3 bike(1)', '1005000'),
(19, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'imadol,lalitpur', 'cod', 'laptop(1), Earphone(1)', '505000'),
(20, 'mission sharma', 'mission.ghimire16@gmail.com', '9860956889', 'imadol,lalitpur', 'netbanking', 'lenga(2), Earphone(1)', '205000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(11, 'Earphone', '5000', 1, 'c2.jpg', 'ear100'),
(12, 'vivo mobile', '32000', 1, 'c1.jpg', 'vivo100'),
(13, 'lenga', '100000', 2, 'p6.jpg', 'lenga100'),
(15, 'cannon 200d', '80000', 1, 'Canon-EOS-200D-II-dual-lens-kit.jpg', 'cannon'),
(16, 'watch', '6000', 1, 'watch4.jpg', 'watch'),
(17, 'r15 v3 bike', '500000', 1, 'p10.jpg', 'r15'),
(18, 'shoes', '1000', 1, 'product-11.jpg', 'shoes'),
(21, 'laptop (dell)', '25000', 1, '6t8Zh249QiFmVnkQdCCtHK.jpg', 'a0Wes'),
(24, ' Sunglasses', '500', 1, 'wp3117193.jpg', 'A3ESg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
