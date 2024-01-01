-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 01, 2024 at 09:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forgot_pass_`
--

-- --------------------------------------------------------

--
-- Table structure for table `architectural`
--

CREATE TABLE `architectural` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `architectural`
--

INSERT INTO `architectural` (`ID`, `Name`) VALUES
('A1', 'Arch 1.jpeg'),
('A10', 'arch 10.jpg'),
('A11', 'arch 11.jpeg'),
('A2', 'arch 2.jpeg'),
('A3', 'arch 3.jpg'),
('A4', 'arch 4.jpg'),
('A5', 'arch 5.jpg'),
('A6', 'arch 6.jpg'),
('A7', 'arch 7.jpg'),
('A8', 'arch 8.jpg'),
('A9', 'arch 9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`ID`, `Name`) VALUES
('F1', 'fashion 1.jpg'),
('F10', 'fashion 10.jpeg'),
('F11', 'fashion 11.jpg'),
('F12', 'fashion 12.jpg'),
('F13', 'fashion 13.jpg'),
('F14', 'fashion 14.jpg'),
('F15', 'fashion 15.jpeg'),
('F16', 'fashion 16.jpg'),
('F17', 'fashion 17.jpg'),
('F18', 'fashion 18.jpg'),
('F19', 'fashion 19.jpeg'),
('F2', 'fashion 2.jpg'),
('F20', 'fashion 20.jpg'),
('F21', 'fashion 21.jpg'),
('F22', 'fashion 22.jpg'),
('F3', 'fashion 3.jpg'),
('F4', 'fashion 4.jpg'),
('F5', 'fashion 5.jpg'),
('F6', 'fashion 6.jpeg'),
('F7', 'fashion 7.jpeg'),
('F8', 'fashion 8.jpeg'),
('F9', 'fashion 9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portrait`
--

CREATE TABLE `portrait` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portrait`
--

INSERT INTO `portrait` (`ID`, `Name`) VALUES
('P1', 'portrait 1.png'),
('P10', 'portrait 10.jpg'),
('P11', 'portrait 11'),
('P12', 'portrait 12.jpeg'),
('P13', 'portrait 13.jpg'),
('P2', 'portrait 2.jpg'),
('P3', 'portrait 3.jpg'),
('P4', 'portrait 4.jpg'),
('P5', 'portrait 5.jpg'),
('P6', 'portrait 6.jpg'),
('P7', 'portrait 7.jpg'),
('P8', 'portrait  8.jpg'),
('P9', 'portrait 9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Username`, `Email`, `Age`, `Password`) VALUES
('farah', 'farahmagdi464@gmail.com', 20, '8cb2237d0679ca88db6464eac60da96345513964'),
('ali', 'alihazem74@gmail.com', 30, 'fc1200c7a7aa52109d762a9f005b149abef01479'),
('alaa', 'alaa@gmail.com', 23, '51eac6b471a284d3341d8c0c63d0f1a286262a18'),
('magdy', 'magdy@gmail.com', 23, '8cc981aa1ecd37ee3376cacc031a214e24416c28'),
('amr', 'amrdaba@gmail.com', 40, '35139ef894b28b73bea022755166a23933c7d9cb'),
('zeina', 'zeina@gmail.com', 90, '51eac6b471a284d3341d8c0c63d0f1a286262a18'),
('ghada', 'ghada@gmail.com', 33, 'd85af420149fa728e27266dd8cc7503fb21cdec7');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`ID`, `Name`) VALUES
('W1', 'wedding 1new.jpg'),
('W10', 'wedding 10.jpg'),
('W11', 'wedding 11.jpg'),
('W12', 'wedding 12.jpg'),
('W13', 'wedding 13.jpg'),
('W14', 'wedding 14.jpg'),
('W15', 'wedding 15.jpg'),
('W16', 'wedding 16.jpeg'),
('W17', 'wedding 7.jpg'),
('W2', 'wedding 2.jpg'),
('W3', 'wedding 3.jpg'),
('W4', 'wedding 4.jpg'),
('W5', 'wedding 5.jpeg'),
('W6', 'wedding 6.jpg'),
('W7', 'wedding 7.jpeg'),
('W8', 'wedding 8.jpg'),
('W9', 'wedding 9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `wildlife`
--

CREATE TABLE `wildlife` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wildlife`
--

INSERT INTO `wildlife` (`ID`, `Name`) VALUES
('W4', 'wildlife 4.jpeg'),
('WL 9', 'wildlife 9.jpg'),
('WL1', 'wild 1.jpeg'),
('WL10', 'wildlife 10.jpg'),
('WL11', 'wildlife 11.jpg'),
('WL12', 'wildlife 12.jpg'),
('WL13', 'wildlife 13.jpg'),
('WL2', 'wild 2.jpeg'),
('WL3', 'wildlife 3.jpg'),
('WL5', 'wildlife 5.jpg'),
('WL6', 'wildlife 6.jpeg'),
('WL7', 'wildlife 7.jpg'),
('WL8', 'wildlife 8.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `architectural`
--
ALTER TABLE `architectural`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `portrait`
--
ALTER TABLE `portrait`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD UNIQUE KEY `Username` (`Username`,`Email`) USING HASH;

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wildlife`
--
ALTER TABLE `wildlife`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
