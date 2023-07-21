-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 11:19 PM
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
  `brand_name` char(50) NOT NULL,
  `image_src` varchar(255) DEFAULT NULL,
  `image_alt` varchar(255) DEFAULT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `image_src`, `image_alt`, `details`, `created_at`) VALUES
(1, 'Le Brarel', 'assets/images/brands/brand-QHRl43Db64b04fee980c499454920230713212638.png', 'le brarel', 'Brazilian company. Which will blow your mind!', '2023-07-05 12:22:39'),
(2, 'Something', 'assets/images/brands/brand-kvSA9NWM64b04fe1e9f2d77118220230713212625.png', 'something', 'Something is bigger than nothing.', '2023-07-05 12:22:39'),
(3, 'Costa brava', 'assets/images/brands/brand-ntLN6z7v64b04fd86b90e22160620230713212616.png', 'costa brava', 'Good Costa in the world', '2023-07-05 12:22:39'),
(4, 'Oceanic', 'assets/images/brands/brand-ykdSOuvY64b04fc56371698135020230713212557.png', 'oceanic', 'Ocean Titan ', '2023-07-05 12:22:39'),
(5, 'Fountain', 'assets/images/brands/brand-ak1NlXLK64b04fb6117b721440020230713212542.png', 'fountain', 'best feelings in spring', '2023-07-05 12:22:39'),
(6, 'Black Birds', 'assets/images/brands/brand-G0t753Rv64b04f580f5b881026520230713212408.png', 'black birds', 'Fly like birds. Strong like Egel', '2023-07-05 12:22:39'),
(21, 'Hugo', 'assets/images/brands/brand-OvKre6V164aaf282efc8320855020230709194642.png', 'hugo', 'okfasdf', '2023-07-09 17:46:42'),
(42, 'Mr Bookers', 'assets/images/brands/brand-TpUG3ozw64b0501e9a62764152220230713212726.png', 'mr bookers', 'Bookers Expert', '2023-07-13 19:27:26');

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
  `short_description` longtext DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `sub_sub_cat_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `featured_img` varchar(255) DEFAULT NULL,
  `gallery` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `additional_information` longtext DEFAULT NULL,
  `type` tinytext DEFAULT NULL,
  `offer_time` datetime DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `regular_price`, `discount_price`, `short_description`, `color`, `size`, `category_id`, `sub_category_id`, `sub_sub_cat_id`, `brand_id`, `featured_img`, `gallery`, `description`, `additional_information`, `type`, `offer_time`, `token`, `created_at`) VALUES
(1, 'Furniture', 'Butler Stool Ladder', '290.00', '251.99', 'Sed egestas, ante et vulputate volutpat, eros semper est, vitae luctus metus libero eu augue.', NULL, NULL, 1, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-1.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'sale', '0000-00-00 00:00:00', NULL, '2023-07-07 14:13:32'),
(2, 'Electronics', 'Bose - SoundSport wireless headphones', '179.99', '100.00', 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-2.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 'sale', '0000-00-00 00:00:00', NULL, '2023-07-07 14:13:34'),
(3, 'Furniture', 'Can 2-Seater Sofa frame charcoal', '300.00', NULL, 'Vitae luctus metus libero eu augue.', NULL, NULL, 1, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-3.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', NULL, '0000-00-00 00:00:00', NULL, '2023-07-07 14:13:38'),
(4, 'Clothes', 'Tan suede biker jacket', '240.00', NULL, 'Sed egestas, ante et vulputate volutpat, eros semper est, vitae luctus metus libero eu augue.', NULL, NULL, 2, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-4.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', NULL, '0000-00-00 00:00:00', NULL, '2023-05-27 15:51:50'),
(5, ' Laptops', 'MacBook Pro 13\" Display, i5', '1982.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-6.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 'top', '0000-00-00 00:00:00', NULL, '2023-05-27 15:24:37'),
(6, 'LED TV', 'Sony - Class LED 2160p Smart <br>4K Ultra HD', '1699.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-5.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 'top', '0000-00-00 00:00:00', NULL, '2023-05-27 15:24:42'),
(7, 'Audio', 'Bose - SoundLink Bluetooth Speaker', '79.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-7.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', NULL, '0000-00-00 00:00:00', NULL, '2023-05-27 15:30:35'),
(8, 'Tablets', 'Apple - 11 Inch iPad Pro <br>with Wi-Fi 256GB', '899.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-8.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'new', '0000-00-00 00:00:00', NULL, '2023-05-27 15:34:56'),
(9, 'Cell Phone', 'Google - Pixel 3 XL 128GB', '410.00', '350.00', 'Luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-9.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', 'top', '0000-00-00 00:00:00', NULL, '2023-05-27 15:48:33'),
(10, 'Sofas', 'Roots Sofa Bed', '1199.99', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 1, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-11.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', NULL, '0000-00-00 00:00:00', NULL, '2023-05-27 15:48:18'),
(11, 'Tables', 'Block Side Table/Trolley', '299.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 1, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-10.jpg', NULL, '<h3>Product Information</h3>\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\r\n                                            <ul>\r\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\r\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\r\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\r\n                                            </ul>\r\n\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', 'new', '0000-00-00 00:00:00', NULL, '2023-05-27 15:48:22'),
(12, 'Lighting', 'Carronade Large <br>Suspension Lamp', '931.00', '892.99', 'Luctus metus libero eu augue.', NULL, NULL, 1, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-12.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'sale', '0000-00-00 00:00:00', NULL, '2023-05-27 15:55:22'),
(13, 'Chairs', 'Wingback Chair', '210.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 1, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-13.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', NULL, '0000-00-00 00:00:00', NULL, '2023-05-27 15:55:23'),
(14, 'Shoes', 'Beige faux suede runner trainers', '64.00', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 2, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-14.jpg', NULL, '<h3>Product Information</h3>\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\r\n                                            <ul>\r\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\r\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\r\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\r\n                                            </ul>\r\n\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', NULL, '0000-00-00 00:00:00', NULL, '2023-05-27 16:10:42'),
(15, 'Accessories', 'Black boucle check scarf', '36.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 2, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-15.jpg', NULL, '<h3>Product Information</h3>\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\r\n                                            <ul>\r\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\r\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\r\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\r\n                                            </ul>\r\n\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', 'new', '0000-00-00 00:00:00', NULL, '2023-05-27 16:10:42'),
(16, 'T-Shirts', 'Carronade Large <br>Suspension Lamp', '56.00', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 2, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-16.jpg', NULL, '<h3>Product Information</h3>\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\r\n                                            <ul>\r\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\r\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\r\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\r\n                                            </ul>\r\n\r\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\r\n\r\n                                            <h3>Fabric &amp; care</h3>\r\n                                            <ul>\r\n                                                <li>Faux suede fabric</li>\r\n                                                <li>Gold tone metal hoop handles.</li>\r\n                                                <li>RI branding</li>\r\n                                                <li>Snake print trim interior </li>\r\n                                                <li>Adjustable cross body strap</li>\r\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\r\n                                            </ul>\r\n\r\n                                            <h3>Size</h3>\r\n                                            <p>one size</p>', '', '0000-00-00 00:00:00', NULL, '2023-05-27 16:10:59'),
(17, 'Bags', 'Triple compartment cross body bag', '64.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 2, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-17.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', '', '0000-00-00 00:00:00', NULL, '2023-05-27 16:52:11'),
(18, 'Cooking Appliances', 'KitchenAid Professional 500 Series Stand\r\n                                Mixer', '299.99', '249.99', 'Luctus metus libero eu augue.', NULL, NULL, 4, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-18.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'sale', '0000-00-00 00:00:00', NULL, '2023-05-27 16:52:42'),
(19, 'Dinnerware', 'MoDRN Industrial 7 Piece', '40.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 4, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-19.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', '', '0000-00-00 00:00:00', NULL, '2023-05-27 16:52:48'),
(20, 'Cookware', 'Cuisinart French Classic 3 Piece', '44.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 4, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-20.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', '', '0000-00-00 00:00:00', NULL, '2023-05-27 16:52:44'),
(21, 'Cooking Appliances', 'KitchenAid - KSB1570WH Classic 5-Speed Blender', '75.00', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 4, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-21.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'new', '0000-00-00 00:00:00', NULL, '2023-05-27 16:52:46');
INSERT INTO `products` (`id`, `name`, `title`, `regular_price`, `discount_price`, `short_description`, `color`, `size`, `category_id`, `sub_category_id`, `sub_sub_cat_id`, `brand_id`, `featured_img`, `gallery`, `description`, `additional_information`, `type`, `offer_time`, `token`, `created_at`) VALUES
(22, 'Cameras', 'GoPro HERO Session Waterproof HD Action Camera', '210.99', '196.99', 'Luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/deals/product-2.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'Deal of the week', '0000-00-00 00:00:00', NULL, '2023-05-27 16:52:45'),
(23, 'Audio', 'Bose SoundLink Micro speaker', '110.99', '99.99', 'Luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/deals/product-1.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'Deal of the week', '0000-00-00 00:00:00', NULL, '2023-05-27 16:52:49'),
(24, 'Appliances', 'Neato Robotics', '399.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-13/products/product-6.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'new', '0000-00-00 00:00:00', NULL, '2023-05-27 17:10:35'),
(25, 'LED TV', 'Sceptre 50\" Class FHD (1080P) LED TV', '199.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-22.png', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 'sale', '0000-00-00 00:00:00', NULL, '2023-05-28 18:49:51'),
(26, 'Cooker', 'Red Cookware Set, 9 Piece', '24.95', NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-26.png', NULL, NULL, NULL, 'new', '0000-00-00 00:00:00', NULL, '2023-05-28 18:57:00'),
(27, 'Printer', 'Epson WorkForce WF-2750 All-in-One Wireless', '49.99', '40.02', NULL, NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-23.png', NULL, NULL, NULL, 'new', '0000-00-00 00:00:00', NULL, '2023-05-28 18:57:00'),
(28, 'Microwave Oven', 'Stainless Steel Microwave Oven', '64.84', '60.33', NULL, NULL, NULL, 3, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-25.png', NULL, NULL, NULL, 'new', '0000-00-00 00:00:00', NULL, '2023-05-28 18:57:00'),
(29, 'Beanbag', 'Fatboy Original Beanbag', '50.99', '49.99', NULL, NULL, NULL, 1, NULL, NULL, NULL, 'assets/images/demos/demo-14/products/product-24.png', NULL, NULL, NULL, 'new', '0000-00-00 00:00:00', NULL, '2023-05-28 18:57:00');

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
(1, 'Furniture', ''),
(2, 'Clothing', ''),
(3, 'Electronics', ''),
(4, 'Cooking', 'Good Category');

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
(2, 5, 'Oshadhado hoise! bakita thi thaklei hoy!', 1, 1, '2023-07-08 07:10:58'),
(3, 2, 'good product', 5, 1, '2023-07-08 07:11:01'),
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
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `details` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cat_id`, `name`, `details`) VALUES
(35, 3, 'Laptops &amp; Computers', ''),
(36, 3, 'Cell Phones', ''),
(37, 3, 'TV &amp; Video', ''),
(38, 3, 'Digital Cameras', ''),
(39, 1, 'Bedroom', ''),
(40, 1, 'Office', ''),
(41, 1, 'Living Room', ''),
(42, 1, 'Kitchen &amp; Dining', ''),
(43, 4, 'Cookware', ''),
(44, 4, 'Dinnerware &amp; Tabletop', ''),
(46, 4, 'Cooking Appliances', ''),
(47, 2, 'Women', ''),
(48, 2, 'Men', '');

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

--
-- Dumping data for table `sub_sub_cat`
--

INSERT INTO `sub_sub_cat` (`id`, `name`, `sub_cat_id`, `details`) VALUES
(38, 'Desktop Computers', 35, ''),
(39, 'Monitors', 35, ''),
(40, 'Laptops', 35, ''),
(41, 'iPad &amp; Tablets', 35, ''),
(42, 'Hard Drives &amp; Storage', 35, ''),
(43, 'Printers &amp; Supplies', 35, ''),
(44, 'Computer Accessories', 35, ''),
(45, 'TVs', 37, ''),
(46, 'Home Audio Speakers', 37, ''),
(47, 'Projectors', 37, ''),
(48, 'Media Streaming Devices', 37, ''),
(49, 'Carrier Phones', 36, ''),
(50, 'Unlocked Phones', 36, ''),
(51, 'Phone &amp; Cellphone Cases', 36, ''),
(52, 'Cellphone Chargers', 36, ''),
(53, 'Digital SLR Cameras', 38, ''),
(54, 'Sports &amp; Action Cameras', 38, ''),
(55, 'Camcorders', 38, ''),
(56, 'Camera Lenses', 38, ''),
(57, 'Photo Printer', 38, ''),
(58, 'Digital Memory Cards', 38, ''),
(59, 'Camera Bags, Backpacks &amp; Cases', 38, ''),
(60, 'Beds, Frames &amp; Bases', 39, ''),
(61, 'Dressers', 39, ''),
(62, 'Nightstands', 39, ''),
(63, 'Kids&#039; Beds &amp; Headboards', 39, ''),
(64, 'Armoires', 39, ''),
(65, 'Coffee Tables', 41, ''),
(66, 'Chairs', 41, ''),
(67, 'Tables', 41, ''),
(68, 'Futons &amp; Sofa Beds', 41, ''),
(69, 'Cabinets &amp; Chests', 41, ''),
(70, 'Office Chairs', 40, ''),
(71, 'Desks', 40, ''),
(72, 'Bookcases', 40, ''),
(73, 'File Cabinets', 40, ''),
(74, 'Breakroom Tables', 40, ''),
(75, 'Dining Sets', 42, ''),
(76, 'Kitchen Storage Cabinets', 42, ''),
(77, 'Bakers Racks', 42, ''),
(78, 'Dining Chairs', 42, ''),
(79, 'Dining Room Tables', 42, ''),
(80, 'Bar Stools', 42, ''),
(81, 'Cookware Sets', 43, ''),
(82, 'Pans, Griddles &amp; Woks', 43, ''),
(83, 'Pots', 43, ''),
(84, 'Skillets &amp; Grill Pans', 43, ''),
(85, 'Kettles', 43, ''),
(86, 'Soup &amp; Stockpots', 43, ''),
(87, 'Plates', 44, ''),
(88, 'Cups &amp; Mugs', 44, ''),
(89, 'Trays &amp; Platters', 44, ''),
(90, 'Coffee &amp; Tea Serving', 44, ''),
(91, 'Salt &amp; Pepper Shaker', 44, ''),
(92, 'Microwaves', 46, ''),
(93, 'Coffee Makers', 46, ''),
(94, 'Mixers &amp; Attachments', 46, ''),
(95, 'Slow Cookers', 46, ''),
(96, 'Toasters &amp; Ovens', 46, ''),
(97, 'Air Fryers', 46, ''),
(98, 'New Arrivals', 47, ''),
(99, 'Best Sellers', 47, ''),
(100, 'Trending', 47, ''),
(101, 'Clothing', 47, ''),
(102, 'Shoes', 47, ''),
(103, 'Bags', 47, ''),
(104, 'Accessories', 47, ''),
(105, 'Jewlery &amp; Watches', 47, ''),
(106, 'Sale', 47, ''),
(107, 'New Arrivals', 48, ''),
(108, 'Best Sellers', 48, ''),
(109, 'Trending', 48, ''),
(110, 'Clothing', 48, ''),
(111, 'Shoes', 48, ''),
(112, 'Bags', 48, ''),
(113, 'Accessories', 48, ''),
(114, 'Jewlery &amp; Watches', 48, '');

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
(1, 'Ashraf', 'Uzzaman', 'WebCoder Ashraf', '1736- Janatabag, Rayerbag', '111/32', 'Bangladesh', 'Dhaka', 'Dhaka', '1236', '01749931891', 'ashraf.uzzaman04082004@gmail.com', 'd5ca69a859c445ad53328a214f283ee9', 'companyzhorCJiE64a5bd8d18ad362991020230705205925.png', 'admin', '2023-07-05 18:59:25'),
(2, 'Asif', 'Abir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01955517560', 'asif.abir001@gmail.com', '6e6f90eeab713b48981f3effb909c1d8', NULL, 'admin', '2023-07-08 07:12:33');

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
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `sub_sub_cat_id` (`sub_sub_cat_id`),
  ADD KEY `brand_id` (`brand_id`);

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sub_sub_cat`
--
ALTER TABLE `sub_sub_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`sub_sub_cat_id`) REFERENCES `sub_sub_cat` (`id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
