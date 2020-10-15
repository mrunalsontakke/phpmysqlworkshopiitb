-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 11:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `rollno` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `php` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `rollno`, `username`, `email`, `password`, `php`, `mysql`, `html`, `total`, `percent`) VALUES
(13, 'Mrunal sontakke', 10, 'mrunal', 'mrunalsontakke.41@gmail.com', '17df7d6d8962e647951681e28bb7e9af', 97, 95, 90, 282, 94),
(14, 'admin', 0, 'admin', '', 'admin', 0, 0, 0, 0, 0),
(16, 'smriti kumar', 20, 'smriti', 'smriti12@gmail.com', '5e69a056ca9204816c86bbed98e441e5', 88, 79, 90, 257, 85.6667);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
