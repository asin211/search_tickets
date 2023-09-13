-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2023 at 11:50 AM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `ticket_id` int NOT NULL,
  `customerName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `flight` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ticketPrice` double(12,2) NOT NULL,
  `departureDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ticket`
--

INSERT INTO `tbl_ticket` (`ticket_id`, `customerName`, `flight`, `ticketPrice`, `departureDate`) VALUES
(1, 'Tracey', 'SQ285', 230.00, '2023-05-01'),
(2, 'Beckham', 'MU779', 1987.00, '2023-05-02'),
(3, 'George', 'NZ941', 78.00, '2023-05-01'),
(4, 'Smith', 'VS7663', 128.00, '2023-06-02'),
(5, 'Williams', 'QF143', 45.00, '2023-05-31'),
(6, 'Hillary', 'NZ634', 120.00, '2023-08-17'),
(7, 'Justin', 'NZ574', 98.00, '2021-08-09'),
(8, 'Jessica', 'JQ240', 199.00, '2021-08-09'),
(9, 'Jennfier', 'QF8526', 999.00, '2021-08-08'),
(10, 'Cynthia', '3C821', 298.00, '2021-08-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  MODIFY `ticket_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
