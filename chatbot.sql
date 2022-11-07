-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 07:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--
CREATE DATABASE IF NOT EXISTS `chatbot` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chatbot`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('MUDIT JAIN', '1muditain1@gmail.com', 'hi it\'s working fine'),
('MUDIT JAIN', '1muditain1@gmail.com', 'Hi'),
('MUDIT JAIN', '1muditain1@gmail.com', 'hi'),
('MUDIT JAIN', '1muditain1@gmail.com', 'hello'),
('MUDIT JAIN', '1muditain1@gmail.com', 'hello'),
('MUDIT JAIN', '1muditain1@gmail.com', 'hello'),
('MUDIT JAIN', '1muditain1@gmail.com', 'hello'),
('MUDIT JAIN', '1muditain1@gmail.com', 'agefhfnftrgef'),
('Name', '4muditjain4@gmail.com', 'hi'),
('abc', 'xyz@gmail.com', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `satisfy` varchar(255) NOT NULL,
  `relax` varchar(255) NOT NULL,
  `improve` varchar(255) NOT NULL,
  `favorite` varchar(255) NOT NULL,
  `measure` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `anotherses` varchar(255) NOT NULL,
  `recommend` varchar(255) NOT NULL,
  `follow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`firstname`, `lastname`, `satisfy`, `relax`, `improve`, `favorite`, `measure`, `experience`, `anotherses`, `recommend`, `follow`) VALUES
('MUDIT', 'Jain', '5', '5', 'everything is nice no need for improvement...', 'user experience of complete website', 'very satisfied', 'feeling better', 'Yes!', 'Yes!', 'Yes!');

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE `patientregistration` (
  `patient_id` int(255) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `patient_phone` bigint(10) NOT NULL,
  `patient_addr` text NOT NULL,
  `patient_bank` int(16) NOT NULL,
  `patient_pan` varchar(10) NOT NULL,
  `patient_mail` varchar(20) NOT NULL,
  `patient_username` varchar(20) NOT NULL,
  `patient_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`patient_id`, `patient_name`, `patient_phone`, `patient_addr`, `patient_bank`, `patient_pan`, `patient_mail`, `patient_username`, `patient_password`) VALUES
(15, 'Abhishek', 1234567890, ' Raj Uday 234', 2147483647, '1234567890', 'abhi@hmil.com', 'admin', 'm8bf5+Y='),
(16, 'Arpit', 7666610976, 'Bhat Mansion', 12345, '987', 'abcd@gmail.com', 'redhawk', 'm9HW6O8B'),
(17, 'calista', 2589631472, '4/2,rose building .wadala', 8947, '2436467897', 'rose21@gmail.com', 'melissa', 'nM7d+e0b41E='),
(18, 'Lokesh', 9029788504, 'SEC -13 , PALM BEACH ROAD', 0, '1234567890', 'abhi@hmil.com', 'lokesh', 'yw=='),
(19, 'ansh', 9819104641, 'fam', 2147483647, '1234567890', 'abhi@hmil.com', 'ansh', 'y5CB'),
(20, 'bhabalomkar421', 8828071232, 'bj', 1, '1', 'xyz@domain.com', '501807', 'yw=='),
(21, 'MUDIT JAIN', 9717490306, 'Near Chota Shiv Mandir', 123456789, '123456789', '1muditain1@gmail.com', 'mudit', 'l9fW5/xY41I='),
(23, 'MUDIT JAIN', 9716490306, 'Near Chota Shiv Mandir', 2147483647, 'ALOJ9584NJ', '1muditain1@gmail.com', 'mudiit', 'l9fW5/w='),
(24, 'MUDIT JAIN', 9715490306, 'Near Chota Shiv Mandir', 2121, '23456', '1muditain1@gmail.com', 'muddit', 'l9fW5/w='),
(27, 'MUDIT JAIN', 9717590306, 'Near Chota Shiv Mandir', 0, 'dfghjkl', '1muditain1@gmail.com', 'vhyfytrytvchr', 'ksfe4uc=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `patient_username` (`patient_username`),
  ADD UNIQUE KEY `patient_phone` (`patient_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `patient_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
