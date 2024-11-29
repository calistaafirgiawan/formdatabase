-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 01:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_tamu`
--

CREATE TABLE `db_tamu` (
  `ID TAMU` int(10) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ISI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_tamu`
--

INSERT INTO `db_tamu` (`ID TAMU`, `NAMA`, `EMAIL`, `ISI`) VALUES
(4, 'Calista', 'calista@gmail.com', 'hello! happy birthday yaa <3'),
(5, 'Nabila', 'nabila@gmail.com', 'yippiee a year older a year prettier'),
(6, 'Firgiawan', 'awan@gmail.com', 'hbd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_tamu`
--
ALTER TABLE `db_tamu`
  ADD PRIMARY KEY (`ID TAMU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_tamu`
--
ALTER TABLE `db_tamu`
  MODIFY `ID TAMU` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
