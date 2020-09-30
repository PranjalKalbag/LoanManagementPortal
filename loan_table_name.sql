-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 10:44 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwpda`
--

-- --------------------------------------------------------

--
-- Table structure for table `loan_table_name`
--

CREATE TABLE `loan_table_name` (
  `loan_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `loan_type` varchar(50) NOT NULL,
  `loan_amount` int NOT NULL,
  `emi` int NOT NULL,
  `tenure` int NOT NULL,
  `opening_date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loan_table_name`
--

INSERT INTO `loan_table_name` (`loan_id`, `customer_id`, `loan_type`, `loan_amount`, `emi`, `tenure`, `opening_date`, `status`) VALUES
('L1112', 'CUST112', 'Home', 1000000, 10000, 120, '2016-10-12', 'Completed'),
('L1133', 'CUST114', 'Personal', 40000, 6000, 12, '2016-10-13', 'New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan_table_name`
--
ALTER TABLE `loan_table_name`
  ADD PRIMARY KEY (`loan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
