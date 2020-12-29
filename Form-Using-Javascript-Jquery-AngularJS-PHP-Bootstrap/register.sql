-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 04:14 PM
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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(4) NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Contact No.` bigint(10) NOT NULL,
  `Email ID` varchar(50) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `DOJ` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `First Name`, `Last Name`, `Contact No.`, `Email ID`, `DOB`, `DOJ`, `Password`, `Department`) VALUES
(10, 'Saurabh', 'Dhawale', 8693005021, 'saurabh2702@ymail.com', '26/03/1999', '28/11/2016', '', 'Developer'),
(11, 'Ritika', 'Jagtap', 7021896548, 'ritu@ymail.com', '27/02/1998', '26/02/2013', '', 'IT Dept\r\n'),
(12, 'Karthik', 'G', 8964020341, 'karthikrocks@gmail.com', '27/02/1999', '27/03/2008', '', 'Networking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
