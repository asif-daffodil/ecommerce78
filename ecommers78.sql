-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 11:41 AM
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
(0, 'assets/images/demos/demo-14/banners/banner-2.jpg', 'Banner img desc', 'Hottest Deals', 'Detox And Beautify For Spring Up To 20% Off', '#'),
(5, 'assets/images/demos/demo-14/banners/banner-3.png', 'Banner img desc', 'Deal of the Day', 'Headphones Up To 30% Off', '#');

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
  `sale` tinyint(1) NOT NULL,
  `offer` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `regular_price`, `discount_price`, `short_description`, `color`, `size`, `category_id`, `featured_img`, `gallery`, `description`, `additional_information`, `sale`, `offer`, `created_at`) VALUES
(1, 'Butler Stool Ladder', '290.00', '251.99', 'Sed egestas, ante et vulputate volutpat, eros semper est, vitae luctus metus libero eu augue.', NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-1.jpg', NULL, '<h3>Product Information</h3>\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>\n                                            <ul>\n                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>\n                                                <li>Vivamus finibus vel mauris ut vehicula.</li>\n                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>\n                                            </ul>\n\n                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n\n                                            <h3>Fabric &amp; care</h3>\n                                            <ul>\n                                                <li>Faux suede fabric</li>\n                                                <li>Gold tone metal hoop handles.</li>\n                                                <li>RI branding</li>\n                                                <li>Snake print trim interior </li>\n                                                <li>Adjustable cross body strap</li>\n                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>\n                                            </ul>\n\n                                            <h3>Size</h3>\n                                            <p>one size</p>', 1, 1, '2023-05-27 09:18:50'),
(2, 'Bose - SoundSport wireless headphones', '179.99', '199.00', 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-2.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 1, 0, '2023-05-27 08:18:55'),
(3, 'Can 2-Seater Sofa frame charcoal', '300.00', NULL, 'Vitae luctus metus libero eu augue.', NULL, NULL, 1, 'assets/images/demos/demo-14/products/product-3.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 0, 0, '2023-05-27 08:33:55'),
(4, 'Tan suede biker jacket', '240.00', NULL, 'Sed egestas, ante et vulputate volutpat, eros semper est, vitae luctus metus libero eu augue.', NULL, NULL, 2, 'assets/images/demos/demo-14/products/product-4.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 0, 0, '2023-05-27 08:25:51'),
(5, 'MacBook Pro 13\" Display, i5', '1982.00', NULL, 'Sed egestas, vitae luctus metus libero eu augue.', NULL, NULL, 4, 'assets/images/demos/demo-14/products/product-6.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 2, 0, '2023-05-27 08:38:22'),
(6, 'Sony - Class LED 2160p Smart <br>4K Ultra HD', '1699.99', NULL, 'Luctus metus libero eu augue.', NULL, NULL, 3, 'assets/images/demos/demo-14/products/product-5.jpg', NULL, '<h3>Product Information</h3>\n', '<h3>Information</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>\n', 2, 0, '2023-05-27 08:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`) VALUES
(1, 'Furniture'),
(2, 'Clothes'),
(3, 'Electronics'),
(4, 'Accessories');

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
(3, 2, 'good product', 5, 2, '2023-05-27 09:22:26');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `company_name`, `street_address`, `house`, `country`, `city`, `state`, `zip`, `phone`, `email`, `password`, `images`, `created_at`) VALUES
(1, 'Yousuf', 'Molla', 'Khan', NULL, NULL, NULL, NULL, NULL, NULL, '01712121212', 'yousuf@molla.com', '123456', NULL, '2023-05-27 07:47:01'),
(2, 'Siam', 'Chattapaddhay', 'Niyamot', NULL, NULL, NULL, NULL, NULL, NULL, '01946464646', NULL, NULL, NULL, '2023-05-27 08:00:42');

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
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
