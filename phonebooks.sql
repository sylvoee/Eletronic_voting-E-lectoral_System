-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 09:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_practice`
--

CREATE TABLE `tbl_practice` (
  `id` int(12) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `national_id` varchar(22) NOT NULL,
  `password` varchar(60) NOT NULL,
  `voted` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_practice`
--

INSERT INTO `tbl_practice` (`id`, `firstname`, `lastname`, `username`, `national_id`, `password`, `voted`) VALUES
(1, 'Sylvester', 'Osrr', 'ng48', '', '7e114e584c927c9ffa13d9fa900e844ad7cc5c89', 1),
(5, 'Sylvester Ose', 'Ose', 'ng49', '', '7e114e584c927c9ffa13d9fa900e844ad7cc5c89', 0),
(6, 'James Hope', 'Ose', '88977667', '', '7e114e584c927c9ffa13d9fa900e844ad7cc5c89', 1),
(8, 'john', 'sule', '5555', '5555', 'b7c40b9c66bc88d38a59e554c639d743e77f1b65', 1),
(9, 'hope', 'Aku', 'ng000', 'ng000', '18614ce3aac67698f37873670ee92756d195eaac', 0),
(10, 'gome', 'mary', 'ng999', 'ng999', 'c7939d1c1c29709281c1fbe2051e63b8c6fc80f2', 1),
(11, 'James', 'Jute', '112', '112ng', '1a10a4d84bfba03b59777d6d06d772ab6dd1c896', 0),
(12, 'James', 'Jute', '000ng', '000ng', '5e713847dfc627d5a2460668c9952842d6cd4dee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `id` int(15) NOT NULL,
  `PDP` int(15) NOT NULL,
  `APC` int(15) NOT NULL,
  `ANPP` int(15) NOT NULL,
  `HDP` int(15) NOT NULL,
  `UPD` int(15) NOT NULL,
  `NCP` int(15) NOT NULL,
  `ADC` int(15) NOT NULL,
  `UPP` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`id`, `PDP`, `APC`, `ANPP`, `HDP`, `UPD`, `NCP`, `ADC`, `UPP`) VALUES
(1, 19, 2, 4, 9, 9, 3, 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_practice`
--
ALTER TABLE `tbl_practice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_practice`
--
ALTER TABLE `tbl_practice`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
