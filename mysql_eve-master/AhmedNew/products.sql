-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 08:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` tinyint(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Nokia', 'Bangladesh', '017205'),
(4, 'Symphony', 'Bangladesh', '017209'),
(5, 'Huawe', 'Bangladesh', '017204'),
(6, 'Matarla', 'Bangladesh', '0172099');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `log_manu_del` AFTER DELETE ON `manufacturer` FOR EACH ROW BEGIN
DELETE FROM product
    WHERE product.manufacturer_id = old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` tinyint(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'nokiaPC', 5000, 1),
(2, 'nokiaV5', 5070, 1),
(3, 'nokiaH5', 5000, 1),
(8, 'symphonyPC', 5000, 4),
(9, 'symphonyV5', 5070, 4),
(10, 'symphonyH5', 5000, 4),
(11, 'huawe20', 5009, 5),
(12, 'huawe28', 6099, 5),
(13, 'martala45', 4059, 6),
(14, 'martala47', 5079, 6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_view`
-- (See below for the actual view)
--
CREATE TABLE `products_view` (
`id` tinyint(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_view_2`
-- (See below for the actual view)
--
CREATE TABLE `products_view_2` (
`id` tinyint(11)
,`name` varchar(50)
,`price` int(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_details`
-- (See below for the actual view)
--
CREATE TABLE `product_details` (
`id` tinyint(11)
,`ProductName` varchar(50)
,`price` int(5)
,`ManufacturerName` varchar(50)
,`address` varchar(250)
);

-- --------------------------------------------------------

--
-- Structure for view `products_view`
--
DROP TABLE IF EXISTS `products_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_view`  AS  select `product`.`id` AS `id`,`product`.`name` AS `name`,`product`.`price` AS `price`,`product`.`manufacturer_id` AS `manufacturer_id` from `product` where `product`.`price` > 5000 ;

-- --------------------------------------------------------

--
-- Structure for view `products_view_2`
--
DROP TABLE IF EXISTS `products_view_2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_view_2`  AS  select `product`.`id` AS `id`,`product`.`name` AS `name`,`product`.`price` AS `price` from `product` where `product`.`price` > 5000 ;

-- --------------------------------------------------------

--
-- Structure for view `product_details`
--
DROP TABLE IF EXISTS `product_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_details`  AS  select `product`.`id` AS `id`,`product`.`name` AS `ProductName`,`product`.`price` AS `price`,`manufacturer`.`name` AS `ManufacturerName`,`manufacturer`.`address` AS `address` from (`product` join `manufacturer`) where `product`.`manufacturer_id` = `manufacturer`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
