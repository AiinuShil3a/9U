-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 03:44 PM
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
-- Database: `tournament`
--

-- --------------------------------------------------------

--
-- Table structure for table `athletes`
--

CREATE TABLE `athletes` (
  `Athlete_ID` int(11) NOT NULL,
  `Athlete_Name` varchar(255) DEFAULT NULL,
  `University_ID` int(11) DEFAULT NULL,
  `Sport_ID` int(11) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `athletes`
--

INSERT INTO `athletes` (`Athlete_ID`, `Athlete_Name`, `University_ID`, `Sport_ID`, `Age`, `Gender`) VALUES
(3, 'John Doe', 1, 1, 21, 'Male'),
(4, 'Jane Smith', 1, 2, 23, 'Female'),
(5, 'Bob Johnson', 1, 3, 22, 'Male'),
(6, 'Alice Brown', 2, 1, 20, 'Female'),
(7, 'Charlie Davis', 2, 2, 24, 'Male'),
(8, 'Eva Wilson', 2, 3, 21, 'Female'),
(9, 'David Taylor', 3, 1, 22, 'Male'),
(10, 'Emily White', 3, 2, 23, 'Female'),
(11, 'Frank Miller', 3, 3, 20, 'Male'),
(12, 'Grace Anderson', 4, 1, 24, 'Female'),
(13, 'Henry Wilson', 4, 2, 21, 'Male'),
(14, 'Isabel Garcia', 4, 3, 22, 'Female'),
(15, 'John Doe', 5, 1, 21, 'Male'),
(16, 'Jane Smith', 5, 2, 23, 'Female'),
(17, 'Bob Johnson', 5, 3, 22, 'Male'),
(18, 'Alice Brown', 6, 1, 20, 'Female'),
(19, 'Charlie Davis', 6, 2, 24, 'Male'),
(20, 'Eva Wilson', 6, 3, 21, 'Female'),
(21, 'David Taylor', 7, 1, 22, 'Male'),
(22, 'Emily White', 7, 2, 23, 'Female'),
(23, 'Frank Miller', 7, 3, 20, 'Male'),
(24, 'Grace Anderson', 8, 1, 24, 'Female'),
(25, 'Henry Wilson', 8, 2, 21, 'Male'),
(26, 'Isabel Garcia', 8, 3, 22, 'Female'),
(27, 'Oliver Davis', 9, 1, 23, 'Male'),
(28, 'Penelope Clark', 9, 2, 20, 'Female'),
(29, 'Quincy Harris', 9, 3, 24, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `Match_ID` int(11) NOT NULL,
  `Sport_ID` int(11) DEFAULT NULL,
  `University_ID` int(11) DEFAULT NULL,
  `Score` varchar(50) DEFAULT NULL,
  `Match_Date` date DEFAULT NULL,
  `Team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`Match_ID`, `Sport_ID`, `University_ID`, `Score`, `Match_Date`, `Team`) VALUES
(1, 1, 1, '1', '2023-12-25', 'A'),
(2, 1, 2, '1', '2023-12-25', 'A'),
(3, 1, 3, '1', '2023-12-25', 'A'),
(4, 1, 4, '1', '2023-12-25', 'A'),
(5, 1, 5, '3', '2023-12-25', 'B'),
(6, 1, 6, '3', '2023-12-25', 'B'),
(7, 1, 7, '3', '2023-12-25', 'B'),
(8, 1, 8, '3', '2023-12-25', 'B'),
(9, 1, 9, '0', '2023-12-25', 'Substitution'),
(10, 2, 1, '0', '2023-12-26', 'Substitution'),
(11, 2, 2, '4', '2023-12-26', 'A'),
(12, 2, 3, '1', '2023-12-26', 'B'),
(13, 2, 4, '4', '2023-12-26', 'A'),
(14, 2, 5, '1', '2023-12-26', 'B'),
(15, 2, 6, '1', '2023-12-26', 'B'),
(16, 2, 7, '4', '2023-12-26', 'A'),
(17, 2, 8, '1', '2023-12-26', 'B'),
(18, 2, 9, '4', '2023-12-26', 'A'),
(19, 3, 1, '1', '2023-12-27', 'A'),
(20, 3, 2, '1', '2023-12-27', 'A'),
(21, 3, 3, '2', '2023-12-27', 'B'),
(22, 3, 4, '1', '2023-12-27', 'A'),
(23, 3, 5, '2', '2023-12-27', 'B'),
(24, 3, 6, '2', '2023-12-27', 'B'),
(25, 3, 7, '0', '2023-12-27', 'Substitution'),
(26, 3, 8, '1', '2023-12-27', 'A'),
(27, 3, 9, '2', '2023-12-27', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `Sport_ID` int(11) NOT NULL,
  `Sport_Name` varchar(255) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`Sport_ID`, `Sport_Name`, `image`) VALUES
(1, 'Football', 'https://th.bing.com/th/id/OIP.XQYZmReY7MAx6GXdvrvlXgHaE8?rs=1&pid=ImgDetMain'),
(2, 'Basketball', 'https://th.bing.com/th/id/R.dbd14e6fdf34a7084040f3e6659e4019?rik=rP%2bmY9JsiTOLoA&riu=http%3a%2f%2fmedia.npr.org%2fassets%2fimg%2f2013%2f03%2f05%2fistock_000002780724medium_wide-992e39ecd1433fbf21f2db063e5e75ddffc4ab13-s6-c30.jpg&ehk=xXUdHEl2TwxyZmPQ6uiM2ZALtgjHTb56pbctJLamdc0%3d&risl=&pid=ImgRaw&r=0'),
(3, 'Petanque', 'https://th.bing.com/th/id/OIP.n3PnX1w3tWQVNBdx1T82cwHaEK?rs=1&pid=ImgDetMain');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `University_ID` int(11) NOT NULL,
  `University_Name` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`University_ID`, `University_Name`, `Location`) VALUES
(1, 'Suan Dusit University', 'Bangkok'),
(2, 'Dhonburi Rajabhat University', 'Bangkok'),
(3, 'Valaya Alongkorn Rajabhat University under the Royal Patronage', 'Pathum Thani'),
(4, 'Nakhon Pathom Rajabhat University', 'Nakhon Pathom'),
(5, 'Rajabhat Rajanagarindra University', '\r\nChachoengsao'),
(6, 'Phranakhon Rajabhat University', 'Bangkok'),
(7, 'Chandrakasem Rajabhat University', 'Bangkok'),
(8, 'Phranakhon Si Ayutthaya Rajabhat University', 'Nakhon Si Ayutthaya'),
(9, 'Bansomdejchaopraya Rajabhat University.', 'Bangkok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athletes`
--
ALTER TABLE `athletes`
  ADD PRIMARY KEY (`Athlete_ID`),
  ADD KEY `Sport_ID` (`Sport_ID`),
  ADD KEY `University_ID` (`University_ID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`Match_ID`),
  ADD KEY `Sport_ID` (`Sport_ID`),
  ADD KEY `University_ID` (`University_ID`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`Sport_ID`) USING BTREE;

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`University_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athletes`
--
ALTER TABLE `athletes`
  MODIFY `Athlete_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `Match_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `athletes`
--
ALTER TABLE `athletes`
  ADD CONSTRAINT `athletes_ibfk_1` FOREIGN KEY (`University_ID`) REFERENCES `universities` (`University_ID`),
  ADD CONSTRAINT `athletes_ibfk_2` FOREIGN KEY (`Sport_ID`) REFERENCES `sports` (`Sport_ID`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`Sport_ID`) REFERENCES `sports` (`Sport_ID`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`University_ID`) REFERENCES `universities` (`University_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
