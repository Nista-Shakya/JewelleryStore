-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 04:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangle`
--

CREATE TABLE `bangle` (
  `Id` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bangle`
--

INSERT INTO `bangle` (`Id`, `Image`, `Name`, `Price`, `Details`) VALUES
(1, 'ProductImages/Bangle/B1.jpg', 'Gold Bangle', 50000, 'Weight-11.695gm\r\n24 Carat'),
(2, 'ProductImages/Bangle/B2.jpg', 'Silver Bracelet', 7000, 'Weight-14.754gm'),
(3, 'ProductImages/Bangle/B4.jpg', 'Bracelet', 25000, 'Weight-3.032gm\r\n24 Carat'),
(4, 'ProductImages/Bangle/B5.jpg', 'Bangle', 22000, 'Weight-17.881gm\r\n22 Carat'),
(5, 'ProductImages/Bangle/B6.jpg', 'Bangle', 30000, 'Weight-23.304gm'),
(6, 'ProductImages/Bangle/B7.jpg', 'Bangle', 26000, 'Weight-2.560gm\r\n24 Carat');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Details` varchar(255) NOT NULL,
  `User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Image`, `Name`, `Price`, `Details`, `User`) VALUES
(44, 'ProductImages/Earring/E4.jpg', 'Diamond Earring', 30000, 'Weight-3.488 with stone', 7),
(46, 'ProductImages/Earring/E5.jpg', 'Gold Earring', 40000, 'Weight-4.635', 7),
(50, 'ProductImages/Pendent/P8.png', 'Pendent', 20000, 'Weight-3.841gm\r\n24 Carat', 2),
(51, 'ProductImages/Necklace/N3.jpg', 'Necklace', 30000, 'Weight-0.443gm\r\n24 Carat', 2),
(52, 'ProductImages/Earring/E2.jpg', 'Gold Earring', 23000, 'Weight-3.110gm\r\n\r\n', 2),
(53, 'ProductImages/Pendent/P4.png', 'Ganesh Pendent', 15000, 'Weight-3.015gm\r\n24 Carat', 7);

-- --------------------------------------------------------

--
-- Table structure for table `earring`
--

CREATE TABLE `earring` (
  `Id` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `earring`
--

INSERT INTO `earring` (`Id`, `Image`, `Name`, `Price`, `Details`) VALUES
(1, 'ProductImages/Earring/E2.jpg', 'Gold Earring', 23000, 'Weight-3.110gm\r\n\r\n'),
(2, 'ProductImages/Earring/E6.jpg', 'Gold Earring', 12000, 'Weight-6.960gm'),
(3, 'ProductImages/Earring/E4.jpg', 'Diamond Earring', 30000, 'Weight-3.488gm with stone'),
(4, 'ProductImages/Earring/E7.jpg', 'Gold Earring', 16000, 'Weight-3.910gm'),
(5, 'ProductImages/Earring/E5.jpg', 'Gold Earring', 40000, 'Weight-4.635gm'),
(6, 'ProductImages/Earring/EL.jpg', 'Earring', 15000, 'Weight-3.417gm with stone');

-- --------------------------------------------------------

--
-- Table structure for table `necklace`
--

CREATE TABLE `necklace` (
  `Id` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `necklace`
--

INSERT INTO `necklace` (`Id`, `Image`, `Name`, `Price`, `Details`) VALUES
(1, 'ProductImages/Necklace/N1.jpg', 'Gold Necklace', 35000, 'Weight-0.373gm\r\n24 Carat'),
(2, 'ProductImages/Necklace/N2.jpg', 'Necklace', 30000, 'Weight-0.524gm\r\n24 Carat'),
(3, 'ProductImages/Necklace/N3.jpg', 'Necklace', 30000, 'Weight-0.443gm\r\n24 Carat'),
(4, 'ProductImages/Necklace/N4.jpg', 'Necklace', 25000, 'Weight-0.466gm\r\n24 Carat'),
(5, 'ProductImages/Necklace/N5.jpg', 'Necklace', 26000, 'Weight-0.443gm\r\n24 Carat'),
(6, 'ProductImages/Necklace/N6.jpg', 'Necklace', 50000, 'Weight-0.314gm\r\n24 Carat'),
(7, 'ProductImages/Necklace/N7.jpg', 'Necklace', 2000, '');

-- --------------------------------------------------------

--
-- Table structure for table `pendent`
--

CREATE TABLE `pendent` (
  `Id` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendent`
--

INSERT INTO `pendent` (`Id`, `Image`, `Name`, `Price`, `Details`) VALUES
(1, 'ProductImages/Pendent/P1.jpg', 'Pendent', 13000, 'Weight-3.712gm\r\n22 Carat'),
(2, 'ProductImages/Pendent/P8.png', 'Pendent', 20000, 'Weight-3.841gm\r\n24 Carat'),
(3, 'ProductImages/Pendent/P3.png', 'Ganesh Pendent', 25000, 'Weight-5.323gm\r\n24 Carat'),
(4, 'ProductImages/Pendent/P4.png', 'Ganesh Pendent', 15000, 'Weight-3.015gm\r\n24 Carat'),
(5, 'ProductImages/Pendent/P2.png', 'Pendent', 25000, 'Weight-3.037gm\r\n22 Carat'),
(6, 'ProductImages/Pendent/P6.png', 'Pendent', 12000, 'Weight-3.054gm\r\n24 Carat');

-- --------------------------------------------------------

--
-- Table structure for table `ring`
--

CREATE TABLE `ring` (
  `Id` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ring`
--

INSERT INTO `ring` (`Id`, `Image`, `Name`, `Price`, `Details`) VALUES
(1, 'ProductImages/Ring/R1.jpg', 'Ring', 20000, 'Weight-4.319gm\r\n22 Carat'),
(2, 'ProductImages/Ring/R2.jpg', 'Gold Ring', 20000, 'Weight-6.964gm\r\n24 Carat'),
(3, 'ProductImages/Ring/R3.jpg', 'Gold Ring', 25000, 'Weight-3.889gm\r\n22 Carat'),
(4, 'ProductImages/Ring/R4.jpg', 'Gold Ring', 26000, 'Weight-2.721gm\r\n22 Carat'),
(5, 'ProductImages/Ring/R5.jpg', 'Gold Ring', 16000, 'Weight-2.510gm\r\n22 Carat'),
(6, 'ProductImages/Ring/R6.jpg', 'Diamond Ring', 15000, 'Weight-8.621gm with Diamond\r\n22 Carat'),
(7, 'ProductImages/Ring/R7.jpg', 'Gold Ring', 21000, 'Weight-12.881gm\r\n22 Carat'),
(8, 'ProductImages/Ring/R8.jpg', 'Gold Ring', 22000, 'Weight-2.819gm\r\n22 Carat'),
(9, 'ProductImages/Ring/R9.jpg', 'Gold Ring', 24000, 'Weight-2.885gm\r\n24 Carat'),
(10, 'ProductImages/Ring/R10.jpg', 'Gold Ring', 25000, 'Weight-2.020gm\r\n22 Carat'),
(11, 'ProductImages/Ring/R11.jpg', 'Emerald Gold Ring', 25000, 'Weight-6.446gm\r\n24 Carat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangle`
--
ALTER TABLE `bangle`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `earring`
--
ALTER TABLE `earring`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `necklace`
--
ALTER TABLE `necklace`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pendent`
--
ALTER TABLE `pendent`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ring`
--
ALTER TABLE `ring`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangle`
--
ALTER TABLE `bangle`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `earring`
--
ALTER TABLE `earring`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `necklace`
--
ALTER TABLE `necklace`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendent`
--
ALTER TABLE `pendent`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ring`
--
ALTER TABLE `ring`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
