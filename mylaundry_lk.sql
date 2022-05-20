-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 09:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mylaundry.lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiryID` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `respond` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiryID`, `date`, `name`, `email`, `message`, `respond`) VALUES
(89, '2022-05-01', 'Sirimal', 'sirimal@gmail.com', 'How to buy a package ?', 0),
(90, '2022-05-02', 'Navidu', 'navidu@gmail.com', 'Do you deliver to galle ?', 0),
(91, '2022-05-03', 'Martin', 'martin@gmail.com', 'I want a refund for my order!', 0),
(92, '2022-05-04', 'Kanchana', 'malinda@gmail.com', 'Best service but can you hurry up my order', 0),
(93, '2022-05-05', 'Nimali', 'Nimali@gmail.com', 'Can\'t wait', 0),
(94, '2022-05-06', 'Nirmali', 'Nirmali@gmail.com', 'Sooo well', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(4, 'Shirt|Wash', 'shirt-wash', 100.00, '../images/shirt.jpg'),
(11, 'Shirt|Press', 'shirt-press', 150.00, '../images/shirt.jpg'),
(12, 'Shirt|Dry', 'shirt-dry', 200.00, '../images/shirt.jpg'),
(13, 'T-Shirt|Wash', 'tshirt-wash', 100.00, '../images/tshirt.jpg'),
(14, 'T-Shirt|Press', 'tshirt-press', 150.00, '../images/tshirt.jpg'),
(15, 'T-Shirt|Dry', 'tshirt-dry', 200.00, '../images/tshirt.jpg'),
(18, 'Short|Wash', 'short-wash', 200.00, '../images/short.jpg'),
(19, 'Short|Press', 'short-press', 250.00, '../images/short.jpg'),
(20, 'Short|Dry', 'short-dry', 300.00, '../images/short.jpg'),
(21, 'Blouse|Wash', 'blouse-wash', 150.00, '../images/blouse.jpg'),
(28, 'Blouse|Press', 'blouse-press', 200.00, '../images/blouse.jpg'),
(29, 'Blouse|Dry', 'blouse-dry', 250.00, '../images/blouse.jpg'),
(30, 'Frock|Wash', 'frock-wash', 150.00, '../images/frock.jpg'),
(31, 'Frock|Press', 'frock-press', 200.00, '../images/frock.jpg'),
(32, 'Frock|Dry', 'frock-dry', 250.00, '../images/frock.jpg'),
(33, 'Skirt|Wash', 'skirt-wash', 200.00, '../images/skirt.jpg'),
(34, 'Skirt|Press', 'skirt-press', 250.00, '../images/skirt.jpg'),
(35, 'Skirt|Dry', 'skirt-dry', 250.00, '../images/skirt.jpg'),
(36, 'Trouser|Wash', 'trouser-wash', 250.00, '../images/trouser.jpg'),
(37, 'Trouser|Press', 'trouser-press', 300.00, '../images/trouser.jpg'),
(38, 'Trouser|Dry', 'trouser-dry', 350.00, '../images/trouser.jpg'),
(39, 'Underwear|Wash', 'underwear-wash', 250.00, '../images/underwear.jpg'),
(40, 'Underwear|Press', 'underwear-press', 300.00, '../images/underwear.jpg'),
(41, 'Underwear|Dry', 'underwear-dry', 350.00, '../images/underwear.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
