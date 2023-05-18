-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 11:11 AM
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
-- Database: `ecommers78`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `image_src` varchar(255) DEFAULT NULL,
  `image_alt` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `image_src`, `image_alt`, `subtitle`, `title`, `link`) VALUES
(1, 'assets/images/demos/demo-14/banners/banner-2.jpg', 'Banner img desc', 'Hottest Deals', 'Detox And Beautify For Spring Up To 20% Off', '#'),
(2, 'assets/images/demos/demo-14/banners/banner-3.png', 'Banner img desc', 'Deal of the Day', 'Headphones Up To 30% Off', '#');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `image_src` varchar(255) DEFAULT NULL,
  `image_alt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `image_src`, `image_alt`) VALUES
(1, 'assets/images/brands/1.png', 'Brand Name'),
(2, 'assets/images/brands/2.png', 'Brand Name'),
(3, 'assets/images/brands/3.png', 'Brand Name'),
(4, 'assets/images/brands/4.png', 'Brand Name'),
(5, 'assets/images/brands/5.png', 'Brand Name'),
(6, 'assets/images/brands/6.png', 'Brand Name'),
(7, 'assets/images/brands/7.png', 'Brand Name');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image_src` varchar(255) DEFAULT NULL,
  `image_alt` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image_src`, `image_alt`, `subtitle`, `title`, `price`, `text`, `link`) VALUES
(1, 'assets/images/demos/demo-14/slider/slide-1.jpg', 'Image Desc', 'New Arrivals', 'The New Way To Buy Furniture', NULL, 'Spring Collections 2019', 'category.html'),
(2, 'assets/images/demos/demo-14/slider/slide-2.jpg', 'Image Desc', 'Hottest Deals', 'Wherever You Go DJI Mavic 2 Pro', '$1,948.99', NULL, 'category.html'),
(3, 'assets/images/demos/demo-14/slider/slide-3.jpg', 'Image Desc', 'Limited Quantities', 'Refresh Your Wardrobe', NULL, 'Summer Collection 2019', 'category.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
