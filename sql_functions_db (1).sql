-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2026 at 02:49 PM
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
-- Database: `sql_functions_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `bonus` decimal(10,2) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `department`, `salary`, `bonus`, `hire_date`, `login_time`, `remarks`) VALUES
(1, 'Alice Johnson', 'HR', 30000.50, 2000.25, '2020-03-15', '2024-02-01 08:30:45', ' Good worker '),
(2, 'Bob Smith', 'IT', 45000.75, 3500.00, '2019-07-10', '2024-02-02 09:15:30', 'Excellent coder'),
(3, 'Charlie Brown', 'Finance', 50000.00, NULL, '2018-11-20', '2024-02-03 07:45:10', NULL),
(4, 'Diana Prince', 'Marketing', 42000.80, 1500.50, '2021-01-05', '2024-02-04 10:20:00', ' Creative '),
(5, 'Edward King', 'IT', 38000.00, 1000.00, '2022-06-25', '2024-02-05 11:00:00', 'Remote');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
