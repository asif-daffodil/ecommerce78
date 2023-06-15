-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 11:11 AM
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
(2, 'assets/images/demos/demo-14/banners/banner-3.png', 'Banner img desc', 'Deal of the Day', 'Headphones Up To 30% Off', '#'),
(3, 'assets/images/demos/demo-14/banners/banner-7.jpg', 'Banner img desc', 'Spring Sale is Coming', 'Floral T-shirts and Vests, Spring Sale', 'javascript:void(0)'),
(4, 'assets/images/demos/demo-14/banners/banner-8.jpg', 'Banner img desc', 'Amazing Value', 'Upgrade and Save, On The Latest Apple Devices', 'javascript:void(0)');

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
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `section` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_numbers` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `section`, `email`, `phone_numbers`) VALUES
(1, 'Start a Conversation', 'ashraf.uzzaman04082004@gmail.com', '+1 987-876-6543');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `section` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `section`, `address`) VALUES
(1, 'Office', '1 New York Plaza, New York, NY 10004, USA');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `regular_price` decimal(10,2) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `featured_img` varchar(255) DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `additional_information` text DEFAULT NULL,
  `type` tinytext DEFAULT NULL,
  `offer_time` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `regular_price`, `discount_price`, `short_description`, `color`, `size`, `category_id`, `featured_img`, `gallery`, `description`, `additional_information`, `type`, `offer_time`, `created_at`) VALUES
(1, 'Furniture', 'Butler Stool Ladder', '290.00', '251.99', 'Sed egestas, ante et vulputate volutpat, eros semper est, vitae luctus metus libero eu augue.', NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-1.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'sale', 1, '2023-05-27 15:24:23'),
(2, 'Electronics', 'Bose - SoundSport wireless headphones', '179.99', '100.00', 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-2.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 'sale', 0, '2023-05-27 15:24:31'),
(3, 'Furniture', 'Can 2-Seater Sofa frame charcoal', '300.00', NULL, 'Vitae luctus metus libero eu augue.', NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-3.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', NULL, 0, '2023-05-27 15:30:30'),
(4, 'Clothes', 'Tan suede biker jacket', '240.00', NULL, 'Sed egestas, ante et vulputate volutpat, eros semper est, vitae luctus metus libero eu augue.', NULL, NULL, 2, 'assets/images/demos/demo-14/products/product-4.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', NULL, 0, '2023-05-27 15:51:50'),
(5, ' Laptops', 'MacBook Pro 13\" Display, i5', '1982.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-6.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 'top', 0, '2023-05-27 15:24:37'),
(6, 'LED TV', 'Sony - Class LED 2160p Smart <br>4K Ultra HD', '1699.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-5.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 'top', 0, '2023-05-27 15:24:42'),
(7, 'Audio', 'Bose - SoundLink Bluetooth Speaker', '79.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-7.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', NULL, 0, '2023-05-27 15:30:35'),
(8, 'Tablets', 'Apple - 11 Inch iPad Pro <br>with Wi-Fi 256GB', '899.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-8.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'new', 0, '2023-05-27 15:34:56'),
(9, 'Cell Phone', 'Google - Pixel 3 XL 128GB', '410.00', '350.00', 'Luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-9.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', 'top', 0, '2023-05-27 15:48:33'),
(10, 'Sofas', 'Roots Sofa Bed', '1199.99', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-11.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', NULL, 0, '2023-05-27 15:48:18'),
(11, 'Tables', 'Block Side Table/Trolley', '299.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-10.jpg', NULL, '<h3>Product Information</h3>\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\r\n                                            <ul>\r\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\r\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\r\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\r\n                                            </ul>\r\n\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', 'new', 0, '2023-05-27 15:48:22'),
(12, 'Lighting', 'Carronade Large <br>Suspension Lamp', '931.00', '892.99', 'Luctus metus libero eu augue.', NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-12.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'sale', 0, '2023-05-27 15:55:22'),
(13, 'Chairs', 'Wingback Chair', '210.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-13.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', NULL, 0, '2023-05-27 15:55:23'),
(14, 'Shoes', 'Beige faux suede runner trainers', '64.00', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 2, 'assets/images/demos/demo-14/products/product-14.jpg', NULL, '<h3>Product Information</h3>\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\r\n                                            <ul>\r\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\r\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\r\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\r\n                                            </ul>\r\n\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', NULL, 0, '2023-05-27 16:10:42'),
(15, 'Accessories', 'Black boucle check scarf', '36.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 2, 'assets/images/demos/demo-14/products/product-15.jpg', NULL, '<h3>Product Information</h3>\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\r\n                                            <ul>\r\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\r\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\r\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\r\n                                            </ul>\r\n\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', 'new', 0, '2023-05-27 16:10:42'),
(16, 'T-Shirts', 'Carronade Large <br>Suspension Lamp', '56.00', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 2, 'assets/images/demos/demo-14/products/product-16.jpg', NULL, '<h3>Product Information</h3>\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\r\n                                            <ul>\r\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\r\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\r\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\r\n                                            </ul>\r\n\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', '', 0, '2023-05-27 16:10:59'),
(17, 'Bags', 'Triple compartment cross body bag', '64.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 2, 'assets/images/demos/demo-14/products/product-17.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', '', 0, '2023-05-27 16:52:11'),
(18, 'Cooking Appliances', 'KitchenAid Professional 500 Series Stand\r\n                                Mixer', '299.99', '249.99', 'Luctus metus libero eu augue.', NULL, NULL, 4, 'assets/images/demos/demo-14/products/product-18.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'sale', 0, '2023-05-27 16:52:42'),
(19, 'Dinnerware', 'MoDRN Industrial 7 Piece', '40.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 4, 'assets/images/demos/demo-14/products/product-19.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', '', 0, '2023-05-27 16:52:48'),
(20, 'Cookware', 'Cuisinart French Classic 3 Piece', '44.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 4, 'assets/images/demos/demo-14/products/product-20.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', '', 0, '2023-05-27 16:52:44'),
(21, 'Cooking Appliances', 'KitchenAid - KSB1570WH Classic 5-Speed Blender', '75.00', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 4, 'assets/images/demos/demo-14/products/product-21.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'new', 0, '2023-05-27 16:52:46');
INSERT INTO `products` (`id`, `name`, `title`, `regular_price`, `discount_price`, `short_description`, `color`, `size`, `category_id`, `featured_img`, `gallery`, `description`, `additional_information`, `type`, `offer_time`, `created_at`) VALUES
(22, 'Cameras', 'GoPro HERO Session Waterproof HD Action Camera', '210.99', '196.99', 'Luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/deals/product-2.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'Deal of the week', 0, '2023-05-27 16:52:45'),
(23, 'Audio', 'Bose SoundLink Micro speaker', '110.99', '99.99', 'Luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/deals/product-1.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'Deal of the week', 1, '2023-05-27 16:52:49'),
(24, 'Appliances', 'Neato Robotics', '399.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-13/products/product-6.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'new', 0, '2023-05-27 17:10:35'),
(25, 'LED TV', 'Sceptre 50\" Class FHD (1080P) LED TV', '199.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-22.png', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'sale', 0, '2023-05-28 18:49:51'),
(26, 'Cooker', 'Red Cookware Set, 9 Piece', '24.95', NULL, NULL, NULL, NULL, 4, 'assets/images/demos/demo-14/products/product-26.png', NULL, NULL, NULL, 'new', 0, '2023-05-28 18:57:00'),
(27, 'Printer', 'Epson WorkForce WF-2750 All-in-One Wireless', '49.99', '40.02', NULL, NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-23.png', NULL, NULL, NULL, 'new', 0, '2023-05-28 18:57:00'),
(28, 'Microwave Oven', 'Stainless Steel Microwave Oven', '64.84', '60.33', NULL, NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-25.png', NULL, NULL, NULL, 'new', 0, '2023-05-28 18:57:00'),
(29, 'Beanbag', 'Fatboy Original Beanbag', '50.99', '49.99', NULL, NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-24.png', NULL, NULL, NULL, 'new', 0, '2023-05-28 18:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`) VALUES
(1, 'Furniture', NULL),
(2, 'Clothing', NULL),
(3, 'Electronics', NULL),
(4, 'Cooking', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `product_id`, `user_id`, `created_at`) VALUES
(1, 4, 'Valo hoise kintu problem ase!', 1, 1, '2023-05-27 07:48:18'),
(2, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 1, 2, '2023-05-27 08:02:01'),
(3, 2, 'good product', 5, 2, '2023-05-27 09:22:26'),
(4, 3, 'Valo hoise kintu problem ase!', 1, 1, '2023-05-27 07:48:18'),
(5, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 1, 2, '2023-05-27 08:02:01'),
(6, 3, 'good product', 14, 2, '2023-05-27 09:22:26'),
(7, 4, 'Valo hoise kintu problem ase!', 18, 1, '2023-05-27 07:48:18'),
(8, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 8, 2, '2023-05-27 08:02:01'),
(9, 2, 'good product', 6, 2, '2023-05-27 09:22:26'),
(10, 3, 'Valo hoise kintu problem ase!', 12, 1, '2023-05-27 07:48:18'),
(11, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 21, 2, '2023-05-27 08:02:01'),
(12, 3, 'good product', 6, 2, '2023-05-27 09:22:26'),
(13, 4, 'Valo hoise kintu problem ase!', 3, 1, '2023-05-27 07:48:18'),
(14, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 3, 2, '2023-05-27 08:02:01'),
(15, 2, 'good product', 10, 2, '2023-05-27 09:22:26'),
(16, 3, 'Valo hoise kintu problem ase!', 1, 1, '2023-05-27 07:48:18'),
(17, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 3, 2, '2023-05-27 08:02:01'),
(18, 3, 'good product', 21, 2, '2023-05-27 09:22:26'),
(19, 4, 'Valo hoise kintu problem ase!', 4, 1, '2023-05-27 07:48:18'),
(20, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 2, 2, '2023-05-27 08:02:01'),
(21, 2, 'good product', 5, 2, '2023-05-27 09:22:26'),
(22, 3, 'Valo hoise kintu problem ase!', 16, 1, '2023-05-27 07:48:18'),
(23, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 10, 2, '2023-05-27 08:02:01'),
(24, 3, 'good product', 14, 2, '2023-05-27 09:22:26'),
(25, 1, 'Oshadhado hoise! bakita thi thaklei hoy!', 3, 2, '2023-05-27 08:02:01'),
(26, 3, 'good product', 21, 2, '2023-05-27 09:22:26'),
(27, 1, 'Valo hoise kintu problem ase!', 4, 1, '2023-05-27 07:48:18'),
(28, 1, 'Oshadhado hoise! bakita thi thaklei hoy!', 2, 2, '2023-05-27 08:02:01'),
(29, 1, 'good product', 5, 2, '2023-05-27 09:22:26'),
(30, 1, 'Valo hoise kintu problem ase!', 16, 1, '2023-05-27 07:48:18'),
(31, 1, 'Oshadhado hoise! bakita thi thaklei hoy!', 10, 2, '2023-05-27 08:02:01'),
(32, 1, 'good product', 14, 2, '2023-05-27 09:22:26'),
(33, 4, 'Oshadhado hoise! bakita thi thaklei hoy!', 1, 2, '2023-05-27 08:02:01'),
(34, 3, 'good product', 5, 2, '2023-05-27 09:22:26'),
(35, 5, 'good product', 14, 2, '2023-05-27 09:22:26'),
(36, 5, 'Valo hoise kintu problem ase!', 4, 1, '2023-05-27 07:48:18'),
(37, 2, 'Valo hoise kintu problem ase!', 1, 1, '2023-05-27 07:48:18'),
(38, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 2, 2, '2023-05-27 08:02:01'),
(39, 1, 'Oshadhado hoise! bakita thi thaklei hoy!', 3, 2, '2023-05-27 08:02:01'),
(40, 5, 'good product', 5, 2, '2023-05-27 09:22:26'),
(41, 2, 'good product', 14, 2, '2023-05-27 09:22:26'),
(42, 5, 'good product', 29, 1, '2023-05-27 09:22:26'),
(43, 4, 'Valo hoise kintu problem ase!', 28, 1, '2023-05-27 07:48:18'),
(44, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 25, 2, '2023-05-27 08:02:01'),
(45, 2, 'good product', 27, 2, '2023-05-27 09:22:26'),
(46, 3, 'Valo hoise kintu problem ase!', 27, 1, '2023-05-27 07:48:18'),
(47, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 24, 2, '2023-05-27 08:02:01'),
(48, 3, 'good product', 14, 2, '2023-05-27 09:22:26'),
(49, 1, 'Oshadhado hoise! bakita thi thaklei hoy!', 28, 2, '2023-05-27 08:02:01'),
(50, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 14, 2, '2023-05-27 08:02:01'),
(51, 3, 'good product', 4, 2, '2023-05-27 09:22:26'),
(52, 4, 'Valo hoise kintu problem ase!', 17, 1, '2023-05-27 07:48:18'),
(53, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 17, 2, '2023-05-27 08:02:01'),
(54, 2, 'good product', 16, 2, '2023-05-27 09:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_returns_rules`
--

CREATE TABLE `shipping_returns_rules` (
  `id` int(11) NOT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `section` varchar(20) DEFAULT NULL,
  `facebook_link` varchar(255) NOT NULL DEFAULT 'javascript:void(0)',
  `twitter_link` varchar(255) NOT NULL DEFAULT 'javascript:void(0)',
  `instagram_link` varchar(255) NOT NULL DEFAULT 'javascript:void(0)',
  `youtube_link` varchar(255) NOT NULL DEFAULT 'javascript:void(0)',
  `pinterest_link` varchar(255) NOT NULL DEFAULT 'javascript:void(0)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `section`, `facebook_link`, `twitter_link`, `instagram_link`, `youtube_link`, `pinterest_link`) VALUES
(1, 'Social', 'https://www.facebook.com/ashraf.uzmahim/', 'https://twitter.com/ashraf_uz_mahim', 'https://www.instagram.com/ashrafuzzaman04/', 'https://www.youtube.com/@webcoderashraf', 'https://www.pinterest.com/AshrafUzzaman04/');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `count_value` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `title`, `count_value`, `unit`) VALUES
(1, 'Happy Customer', 40, 'k+'),
(2, 'Years in Business', 20, '+'),
(3, 'Return Clients', 95, '%'),
(4, 'Awards Won', 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_cat`
--

CREATE TABLE `sub_sub_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `photo`, `facebook_url`, `twitter_url`, `instagram_url`) VALUES
(1, 'Samanta Grey', 'Founder & CEO', 'assets/images/team/about-2/member-1.jpg', '#', '#', '#'),
(2, 'Bruce Sutton', 'Sales & Marketing Manager', 'assets/images/team/about-2/member-2.jpg', '#', '#', '#'),
(3, 'Janet Joy', 'Product Manager', 'assets/images/team/about-2/member-3.jpg', '#', '#', '#'),
(4, 'Mark Pocket', 'Product Manager', 'assets/images/team/about-2/member-4.jpg', '#', '#', '#'),
(5, 'Damion Blue', 'Sales & Marketing Manager', 'assets/images/team/about-2/member-5.jpg', '#', '#', '#'),
(6, 'Lenard Smith', 'Product Manager', 'assets/images/team/about-2/member-6.jpg', '#', '#', '#'),
(7, 'Rachel Green', 'Product Manager', 'assets/images/team/about-2/member-7.jpg', '#', '#', '#'),
(8, 'David Doe', 'Product Manager', 'assets/images/team/about-2/member-8.jpg', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `house` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `role` char(5) NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `company_name`, `street_address`, `house`, `country`, `city`, `state`, `zip`, `phone`, `email`, `password`, `images`, `role`, `created_at`) VALUES
(1, 'Yousuf', 'Molla', 'Khan', NULL, NULL, NULL, NULL, NULL, NULL, '01712121212', 'yousuf@molla.com', '$2y$10$Zb/q6iYpjJEwJ9AwlNRKz.ExYHabmJpWpFZmOtsf1uuiNQb2p9WNi', NULL, 'user', '2023-06-06 14:49:14'),
(2, 'Siam', 'Chattapaddhay', 'Niyamot', NULL, NULL, NULL, NULL, NULL, NULL, '01946464646', NULL, '$2y$10$bMiofhZ5H3zLymtGR5kmA.zskWNHJV9x/LLdnGCLSTHEauV8g1tQu', NULL, 'user', '2023-06-08 07:30:03'),
(28, 'Asif', 'Abir', '', '9 Sher-E-Bangla Road', '9', 'Bangladesh', 'Dhaka', '', '1209', '01955517560', 'abir@dipti.com.bd', '$2y$10$Kh6/eRPMr4rqZXszgAy11eMJXlKJ1NNA1ZLQln3CGGcWL4fBLKG9.', 'company7eKSTm5q648ab7ac4b90937525820230615090308.jpg', 'admin', '2023-06-15 07:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `shipping_returns_rules`
--
ALTER TABLE `shipping_returns_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `sub_sub_cat`
--
ALTER TABLE `sub_sub_cat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_cat`
--
ALTER TABLE `sub_sub_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `product_categories` (`id`);

--
-- Constraints for table `sub_sub_cat`
--
ALTER TABLE `sub_sub_cat`
  ADD CONSTRAINT `sub_sub_cat_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
