-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2025 at 09:23 PM
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
-- Database: `artgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artworks`
--

CREATE TABLE `artworks` (
  `id` int(50) NOT NULL,
  `artistid` int(50) NOT NULL,
  `title` varchar(256) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `depth` varchar(50) NOT NULL,
  `category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artworks`
--

INSERT INTO `artworks` (`id`, `artistid`, `title`, `price`, `image`, `height`, `width`, `depth`, `category`) VALUES
(3, 1, 'Ensemble Xvii', 1444, 'img/7481320-HSC00001-6.jpg', '39', '39', '14', 2),
(4, 1, '26 juillet 2021', 500, 'img/9584103-DABRTBAM-6.jpg', '59', '59', '3', 2),
(6, 1, 'Power and Rhythm - Limited', 4400, 'img/8851717-XYOEEDRL-6.jpg', '35', '35', '2', 1),
(7, 4, '\"Tip Me Over\" HD Metal Pri', 565, 'img/5120825-HSC00001-6.jpg', '16', '24', '5', 1),
(8, 4, 'Thorn - Limited Edition of 15', 1004, 'img/4375883-HSC00002-6.jpg', '24', '24', '1', 1),
(9, 4, 'Tomorrow, Series 20 #44', 920, 'img/4467061-HSC00923-6.jpg', '27', '18', '4', 4),
(10, 4, 'Etude de baigneuse 2', 660, 'img/8103047-AOOSNMXX-6.jpg', '15', '14', '1', 4),
(11, 5, 'UNTITLED', 600, 'img/8737175-QJNPYGAL-6.jpg', '45', '24', '4', 4),
(12, 5, 'Sgraffito 1071 \"ATLANTIS\"', 570, 'img/4268407-HSC00001-6.jpg', '24', '14', '4', 4),
(13, 5, 'Prince (framed 55x55cm)', 1022, 'img/9658881-KGLFCDLW-6.jpg', '15', '15', '2', 5),
(14, 5, 'Head 83.2022', 147, 'img/8131649-PMSXPVFQ-6.jpg', '14', '41', '1', 5),
(21, 8, 'The world', 700, 'img/7481320-HSC00001-6.jpg', '45', '14', '12', 3),
(22, 1, 'POP', 45870, 'img/9584103-DABRTBAM-6.jpg', '55', '77', '11', 5),
(24, 12, 'jhhglfigiugd', 10, 'img/1122634-HSC00001-6.jpg', '45', '24', '1', 2),
(25, 14, 'AA', 100, 'img/10170689-PWUGUCTE-6.jpg', '12', '13', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `artid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`artid`, `userid`, `id`) VALUES
(6, 11, 25),
(15, 12, 28),
(10, 1, 29),
(7, 1, 30),
(3, 12, 33),
(9, 12, 34),
(6, 13, 35);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `artid` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `userid`, `artid`, `price`, `time`) VALUES
(1, 1, 2, 70, '2024-05-02'),
(2, 1, 3, 65, '2024-05-02'),
(3, 1, 4, 1212, '2024-05-02'),
(4, 7, 2, 1014, '2024-05-02'),
(5, 7, 3, 1400, '2024-05-02'),
(6, 7, 11, 600, '2024-05-02'),
(7, 1, 14, 147, '2024-05-09'),
(8, 8, 9, 920, '2024-05-09'),
(9, 8, 12, 570, '2024-05-09'),
(10, 8, 10, 660, '2024-05-09'),
(11, 15, 25, 100, '2024-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `artid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`artid`, `userid`, `id`) VALUES
(10, 7, 3),
(11, 1, 7),
(9, 1, 9),
(10, 1, 10),
(14, 1, 11),
(7, 12, 14),
(6, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `artid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`artid`, `userid`, `id`) VALUES
(8, 1, 2),
(1, 11, 5),
(1, 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `message`) VALUES
(2, 'joseph@gmail.com', 'ccccdscdscsdcscds'),
(4, 'amr25@gmail.com', 'asdsaassdds'),
(6, 'josephss@gmail.com', 'sdddfsdfsdfsdfsdfdsffds'),
(7, 'joseph@gmail.com', '419');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(256) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `artid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`name`, `email`, `review`, `rating`, `artid`) VALUES
('joseph', 'joseph@gmail.com', 'vxcvxcv', '4', 2),
('joseph', 'joseph@gmail.com', 'asc', '5', 2),
('men', 'joseph@admin.com', 'adsdasd', '5', 2),
('men', 'josephalfa2s5@gmail.com', 'cxvxcvxcvxc', '5', 2),
('joseph', 'cw@dcd.com', 'cvbcvbcvb', '5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(250) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `category`) VALUES
(1, 'JosephO', 'joseph@gmail.com', '01228375515', 'cairo', '11', 1),
(2, 'joseph', 'joseph@admin.com', '01228375515', 'cairo-Egypt', '12', 0),
(4, 'EL SISI', 'elsisi@gmail.com', '01228375515', 'cairo-Egypt', '12345', 1),
(5, 'Kevien', 'kevien@gmail.com', '01228375515', 'cairo-Egypt', '12345', 1),
(8, 'josephsd', 'cd@gmail.com', '01228375515', 'cairo-Egypt', '12', 1),
(9, 'joseph', 'sssswq@gmail.com', '01228375515', 'cairo-Egypt', '11', 1),
(11, 'mohammed', 'medo123@gmail.com', '01228375516', 'cairo-Egypt', 'plmqaz', 0),
(12, 'reem', 'reem@gmail.com', '01153805818', 'gkuytuyrdf', '1234', 1),
(13, 'joseph', 'mo@gmail.com', '01228375515', 'cairo-Egypt', '11', 0),
(14, 'Amr', 'amr@gmail.com', '12344', '1233', '1234', 1),
(15, 'bhaa', 'bhaa@gmail.com', '123', '123\r\n', '1234', 0),
(16, 'joseph', 'joseph1@gmail.com', '01228375515', 'cairo-Egypt', '11111111', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
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
-- AUTO_INCREMENT for table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
