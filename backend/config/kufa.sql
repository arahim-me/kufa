-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2024 at 03:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `short-bio` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `long-bio` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `banner-img` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.jpg',
  `about-img` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `cel` int DEFAULT NULL,
  `pass` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `cel`, `pass`, `avatar`) VALUES
(22, 'ABDUR RAHIM', 'kypogedo@mailinator.com', 1738906615, 'fabd4e13749108fe77d52e19b36fac5bb1d8763e', '22-11-09-2024-1726077860.jpg'),
(28, 'Noel Walls', 'doqokew@mailinator.com', NULL, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL),
(29, 'Murphy Craig', 'soqaquqek@mailinator.com', NULL, 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '29-12-09-2024-1726109106.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `status`) VALUES
(16, 'Bashundhara', '11-09-2024-1726078332.png', 'active'),
(17, 'Bashundhara', '11-09-2024-1726087419.png', 'active'),
(18, 'Fresh', '11-09-2024-1726087439.png', 'active'),
(19, 'Incepta', '11-09-2024-1726087462.png', 'active'),
(20, 'Square', '11-09-2024-1726087481.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int NOT NULL,
  `degree` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ratio` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree`, `year`, `ratio`, `status`) VALUES
(1, 'html', '2018', '90', 'active'),
(2, 'CSS', '2018', '85', 'active'),
(3, 'JS', '2019', '80', 'active'),
(4, 'React Js', '2022', '80', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `description`, `icon`, `status`) VALUES
(3, 'Happy Client', ' 120', 'fab fa-angellist', 'active'),
(4, 'Year of Experience', ' 4 ', 'fab fa-sketch', 'active'),
(5, 'Project done', ' 300', 'far fa-flag', 'active'),
(6, 'Coffee', '  1000', 'fas fa-glass-cheers', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `address`, `icon`, `status`) VALUES
(1, 'Facebook', 'https://facebook.com/arahim.me', 'fab fa-facebook', 'active'),
(2, 'Instagram', 'https://instagram/arahim.me', 'fab fa-instagram', 'active'),
(3, 'Linkedin', 'https://linkedin.com/arahim-me', 'fab fa-linkedin', 'active'),
(4, 'Twitter', 'https://twitter.com/arahim-me', 'fab fa-twitter', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `category`, `description`, `image`, `status`) VALUES
(6, 'Learning management system', 'fullstack development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', '11-09-2024-1726086198.jpg', 'active'),
(7, 'Portfolio Website', 'UI/ UX Design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', '11-09-2024-1726086239.jpg', 'active'),
(8, 'Backend development', 'backend development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', '11-09-2024-1726086283.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `status`) VALUES
(1, 'web design', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 'fas fa-desktop', 'active'),
(2, 'Web Development', '    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.    ', 'fab fa-php', 'active'),
(9, 'UI/UX Design', '  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', 'fas fa-mobile-alt', 'active'),
(11, 'Facebook marketing', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fab fa-facebook', 'active'),
(12, 'Instagram marketing', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fab fa-instagram', 'active'),
(13, 'Graphic Design', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'far fa-edit', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.jpg',
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `text`, `image`, `status`) VALUES
(4, 'Mark Zukerberg', 'CEO/facebook', 'Abdur Rahim is a greate developer.', '11-09-2024-1726087304.jpg', 'active'),
(5, 'Bill Gates', 'CEO/ Microsoft', 'Abdur Rahim is a greate developer.', '11-09-2024-1726087382.jpg', 'active');

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
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
