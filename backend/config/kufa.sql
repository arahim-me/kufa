-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 06:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kufa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Abdur Rahim', 'rahim.skilledit@gmail.com', 'c13213e61bdc6f7674407538e0f681c93676009d'),
(3, 'Abdur Rahim', 'rahim.skilledit@gmail.com', '55b379ef78b4e4377aa523fe1c71bd65c12d49e1'),
(4, 'Abdur Rahim', 'skilledit@gmail.com', 'c611a12b2f079b6d6153c3d6927c6808eda0aade'),
(5, 'fybiqy', 'sewunet@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(6, 'hydamewy', 'niqajy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(7, 'Maggie Ramirez', 'xiwi@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(8, 'Driscoll Odonnell', 'byva@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(9, 'Kirsten Mcdaniel', 'tukonavucy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(10, 'Nora Riggs', 'fasyci@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(11, 'Herrod Sears', 'nyker@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(12, 'Jonas Huffman', 'vazik@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(13, 'Harriet Bowen', 'bakisuzyn@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(14, 'Naomi Noel', 'gajof@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(15, 'Thane Mcdaniel', 'fasoc@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(16, 'Sasha Pope', 'hajexinihe@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(17, 'Regina Pope', 'duxadaw@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(18, 'Quon Nash', 'jutigy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(19, 'Lareina Knapp', 'hiluko@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(20, 'Robert Chan', 'fisyvuqy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(21, 'Rhoda Lang', 'siceqo@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `status`) VALUES
(15, 'Happy Family', '30-08-2024-1725035795.png', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `description`, `icon`, `status`) VALUES
(3, 'Happy Client', ' 120', 'fab fa-angellist', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `status`) VALUES
(1, 'web design', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 'fas fa-desktop', 'active'),
(2, 'Web Development', '    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.    ', 'fab fa-php', 'active'),
(9, 'UI/UX Design', '  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 'fas fa-mobile-alt', 'active'),
(11, 'Facebook marketing', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fab fa-facebook', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
