-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 06:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ss`
--

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE `u_reg` (
  `u_id` int(20) NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `degree` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`u_id`, `cnic`, `fname`, `lname`, `dateofbirth`, `address`, `city`, `degree`, `gender`, `email`, `mobile`) VALUES
(51, '3460152666792', 'Salman', 'Asghar', '18-feb-1996', 'Cheema Colony Street #6 Sialkot Road', 'Wazirabad', 'BSCS', 'Male', 'admin@rabictraders.com', '03314548032'),
(52, '34601-5266679-2', 'Salman', 'Asghar', '18-feb-1996', 'Carrer de Guardia 14', 'Gujranwala', 'BIT', 'Female', 'iamsalmanasghar@gmail.com', '0331454803'),
(53, '3460152666792', 'aaaaSalman', 'Asghar', '18-feb-1996', 'Cheema Colony Street #6 Sialkot Road', 'Wazirabad', 'MSCS', 'female', 'salmanasghar12@hotmail.com', '0331454803'),
(54, '34601-5266679-2', 'Salman', 'Asghar', '18-feb-1996', 'Cheema Colony Street #6 Sialkot Road', 'Wazirabad', 'BCS', 'male', 'merayraza26@gmail.com', '03314548032'),
(55, '3460152666792', 'Muhammad', 'Salman', '18-feb-1996', 'Cheema Colony Street #6 Sialkot Road Wazirabad', 'Wazirabad', 'BCS', 'Male', 'iamsalmanasghar@gmail.com', '03314548034'),
(56, '34601-8961892-7', 'Muhammad', 'Salman', '18-feb-1996', 'Cheema Colony Street #6 Sialkot Road Wazirabad', 'Wazirabad', 'BSCS', 'male', 'iamsalmanasghar@gmail.com', '03314548034');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `u_reg`
--
ALTER TABLE `u_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `u_reg`
--
ALTER TABLE `u_reg`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
