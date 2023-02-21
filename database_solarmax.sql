-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 07:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_solarmax`
--

-- --------------------------------------------------------

--
-- Table structure for table `invite_code`
--

CREATE TABLE `invite_code` (
  `ID` int(11) NOT NULL,
  `code` int(12) NOT NULL,
  `madeby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `ItemBarcode` bigint(11) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `OurBarcode` int(15) NOT NULL,
  `DetailsOnItem` varchar(500) NOT NULL,
  `barcodeimg` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `combindedBarcode` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `ItemName`, `ItemBarcode`, `CompanyName`, `OurBarcode`, `DetailsOnItem`, `barcodeimg`, `count`, `combindedBarcode`) VALUES
(9, 'AC Unit ', 1, 'SolarMax', 11515, 'adawdwa', 'Barcodes/115154378barcode.jpg', 150, 0),
(10, 'AC Unit ', 1, 'SolarMax', 11515, 'efsefse', 'Barcodes/115154378barcode.jpg', 150, 0),
(11, 'AC Unit ', 1, 'SolarMax', 11515, 'wdad', 'Barcodes/115154378barcode.jpg', 150, 0),
(12, 'dawdaw', 5397063704378, 'SolarMax', 11515, 'dwada', 'Barcodes/115154378barcode.jpg', 150, 0),
(13, 'AC Unit ', 5397063704378, 'dawda', 11515, 'awdawdaw', 'Barcodes/115154378barcode.jpg', 150, 115154378),
(14, 'SolarPanel', 0, 'Trina Solar', 11515, 'something to do with solar', 'Barcodes/115153351barcode.jpg', 10, 115153351),
(15, 'Somet', 171613487157816, 'SolarMax', 11515, 'ss', 'Barcodes/115157816barcode.jpg', 10, 115157816);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `PartNumber` int(11) NOT NULL,
  `ProductLabel` varchar(255) NOT NULL,
  `StartingInventory` int(11) NOT NULL,
  `InventoryReceived` int(11) NOT NULL,
  `InventoryShipped` int(11) NOT NULL,
  `InventoryOnHand` int(11) NOT NULL,
  `MinimumRequired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'primary user id',
  `firstname` varchar(255) NOT NULL COMMENT 'first name of user',
  `lastname` varchar(255) NOT NULL COMMENT 'last name of user',
  `username` varchar(255) NOT NULL COMMENT 'username of user ',
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remember_me` varchar(255) NOT NULL,
  `inventory_number` varchar(11) NOT NULL,
  `activated` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `remember_me`, `inventory_number`, `activated`, `admin`) VALUES
(1, 'Ethen', 'Greenberg', 'Ethen', '$argon2id$v=19$m=16,t=2,p=1$cWRuMlRKOWs1QVFvTlp2UA$gfzNG2GoWiJx6yvd7DpYVA', 'ethengreenberg@outlook.com', 'on', '9cdfacb57c7', 0, 1),
(2, 'Ethen', 'Greenberg', 'NotAdmin', '$argon2id$v=19$m=65536,t=4,p=1$eVh2Q2JvQmQ4V0tpRGJ5Uw$31jSqIuJUZ1DvN5o8s50aGJWPr48jsG4NCDgHtSLMjI', 'Ethen@gg.com', 'on', '9711095ed7e', 0, 0),
(3, 'Tyler', 'Testing', 'ceotyler', '$argon2id$v=19$m=65536,t=4,p=1$Ym9laE9YU1VLS0JWSmUxaA$DxI8EJMQEIPs58TZoU7Bd+joD/dpcEeD+eznSSbTnXw', 'tyler@getsolarmax.com', 'on', 'a61a12d1bc9', 0, 0),
(4, 'wrw', 'ewfwef', 'wfeefwf', '$argon2id$v=19$m=65536,t=4,p=1$OFk2STh3S2kxd2JSdHZpQg$vUeV4cABa+3sIPWdfxS1cOmhfabhY27jSDem2Y94pyk', 'gg@gg.com', 'on', '959c4470e74', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invite_code`
--
ALTER TABLE `invite_code`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invite_code`
--
ALTER TABLE `invite_code`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary user id', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
