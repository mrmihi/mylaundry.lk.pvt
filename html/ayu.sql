-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 04:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT/;
/!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS/;
/!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION/;
/!40101 SET NAMES utf8mb4/;

--
-- Database: mylaundry.lk
--

-- --------------------------------------------------------

--
-- Table structure for table notifications
--

CREATE TABLE notifications (
  Number int(4) NOT NULL,
  Notification varchar(80) NOT NULL,
  Date date NOT NULL,
  Time time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table notifications
--

INSERT INTO notifications (Number, Notification, Date, Time) VALUES
(1, 'Order confirmed', '2022-05-04', '04:40:00'),
(4, 'You have Successfully registered.', '2022-05-28', '09:40:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table notifications
--
ALTER TABLE notifications
  ADD PRIMARY KEY (Number);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table notifications
--
ALTER TABLE notifications
  MODIFY Number int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT/;
/!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS/;
/!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION/;