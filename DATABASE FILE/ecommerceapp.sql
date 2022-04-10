-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2022 at 09:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerceapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(10, 'sweta', 'sweta@gmail.com', '$2y$10$wLFSW1etoy8O0ZD3l1xkzuVjdJOlsDLNGzSUuWTSqNbNmqH4aXNVu', '1'),
(11, 'Admin', 'admin@gmail.com', '$2y$10$Dxd9kw45eZ4Xj2C.VIr/QuCikVbTSZxKB0mAx8.qc1gejtuXbUZ/6', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'OnePlus+'),
(7, 'Excl'),
(8, 'Aduro'),
(9, 'Dr. Martens'),
(10, 'Hot Toys');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(1, 4, '::1', 4, 1),
(2, 1, '::1', 7, 1),
(3, 2, '::1', 7, 1),
(7, 4, '::1', 8, 1),
(8, 1, '::1', 9, 1),
(9, 2, '::1', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cartItem`
--

CREATE TABLE `cartItem` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` text DEFAULT NULL,
  `Time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartItem`
--

INSERT INTO `cartItem` (`id`, `user_id`, `name`, `description`, `image`, `Time`) VALUES
(78, 9, 'OnePlus 8T', 'On spec-sheet, the OnePlus 8T boasts plenty of improvements from its predecessor i.e. the OnePlus 8. For instance, its 6.55-inch 1080p OLED display now comes with a faster 120Hz refresh rate. In comparison, the OnePlus 8 had a 90Hz refresh rate. This upgrade seems huge. However, users will agree that you canâ€™t really find much of a difference between 90Hz to 120Hz on a smartphone screen.', '1616500410_OnePlus-8T-5G-Lunar-Silver-8GB-RAM-128GB-Storage-image-4.jpg', '2021-11-15 21:33:58.680932'),
(90, 13, 'Samsung Galaxy S21 Ultra', 'This is a demo', '1616492395_Samsung-Galaxy-S21-Ultra-1608287647-0-0.jpg', '2021-11-16 11:39:23.512275'),
(103, 9, 'OnePlus 8T', 'On spec-sheet, the OnePlus 8T boasts plenty of improvements from its predecessor i.e. the OnePlus 8. For instance, its 6.55-inch 1080p OLED display now comes with a faster 120Hz refresh rate. In comparison, the OnePlus 8 had a 90Hz refresh rate. This upgrade seems huge. However, users will agree that you canâ€™t really find much of a difference between 90Hz to 120Hz on a smartphone screen.', '1616500410_OnePlus-8T-5G-Lunar-Silver-8GB-RAM-128GB-Storage-image-4.jpg', '2021-11-16 16:32:36.720792'),
(105, 9, 'Aduro Wireless Headphones', 'Amazing Bluetooth headphones sound with aptX technology. High-quality built-in microphone with Bluetooth 5.0 technology', '1616502854_hdphn.jpg', '2021-11-16 16:42:15.988988'),
(106, 9, 'Samsung Galaxy S21 Ultra', 'This is a demo', '1616492395_Samsung-Galaxy-S21-Ultra-1608287647-0-0.jpg', '2021-11-16 21:02:29.575625'),
(107, 9, 'Iphone 12 Pro Max', '5G goes Pro. A14 Bionic rockets past every other smartphone chip. The Pro camera system takes low-light photography to the next level â€” with an even bigger jump on iPhone 12 Pro Max. And Ceramic Shield delivers four times better drop performance.', '1616499931_iph12pm.jpg', '2021-11-16 21:02:37.867120'),
(108, 14, 'Iphone 12 Pro Max', '5G goes Pro. A14 Bionic rockets past every other smartphone chip. The Pro camera system takes low-light photography to the next level â€” with an even bigger jump on iPhone 12 Pro Max. And Ceramic Shield delivers four times better drop performance.', '1616499931_iph12pm.jpg', '2021-11-20 21:11:58.314302'),
(111, 9, 'HK Hynix 2GB DDR 2 RAM', 'All the Description about this product will be visible here', 'p3.jpeg', '2021-11-22 18:39:47.713878'),
(121, 14, 'One plus', 'All the description about this product will be visible here', '1616500410_OnePlus-8T-5G-Lunar-Silver-8GB-RAM-128GB-Storage-image-4.jpg', '2022-01-12 17:10:28.595904');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Electronics'),
(3, 'Home & Kitchen'),
(4, 'Tools & Home Improvement'),
(5, 'CDs & Vinyl'),
(6, 'Clothings'),
(12, 'Mobiles'),
(13, 'Automotive Parts & Accessories'),
(14, 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `donated_products`
--

CREATE TABLE `donated_products` (
  `product_id` int(20) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `house` varchar(255) DEFAULT NULL,
  `Time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donated_products`
--

INSERT INTO `donated_products` (`product_id`, `user_id`, `name`, `phone`, `title`, `description`, `image`, `state`, `city`, `pincode`, `house`, `Time`) VALUES
(38, 9, 'sweta choudhary', '6355835642', 'Sonic 500W Power Supply', 'I Will Describe It Later', 'p1.jpeg', 'Maharashtra', 'Mumbai', 396191, '305,balaji appt/vapi', '2021-11-15 15:24:22.160592'),
(39, 9, 'sweta choudhary', '6355835642', 'Western Digital 2TB Hard Drive', 'I will Describe it Later.  All The Description Will be visible here', 'p2.jpeg', 'Odisha', 'Bhubaneswar', 342767, '305,balaji appt', '2021-11-22 15:24:22.160592'),
(40, 14, 'Rivanah Banerjee', '9586414845', 'HK Hynix 2GB DDR 2 RAM', 'All the Description about this product will be visible here', 'p3.jpeg', 'Odisha', 'Bhubaneswar', 396345, '305,balaji appt', '2021-11-22 15:24:22.160592'),
(41, 14, 'Rivanah Banerjee', '9586414845', 'Asus P5 Motherboard', 'All the description about this product will be visible here', 'p4.jpeg', 'Kerala', 'kochi', 396191, '305,balaji appt', '2021-11-22 15:24:22.160592'),
(42, 14, 'Rivanah Banerjee', '9586414845', 'Intel I3 2nd Generation', 'All the description about this product will be visible here', 'p5.jpeg', 'Maharashtra', 'Mumbai', 396234, '305,balaji appt', '2021-11-22 15:24:22.160592'),
(43, 13, 'Muskan choudhary', '9586412345', 'PDP-11 CPU Board', 'All the description about this product will be visible here', 'p6.jpg', 'Odisha', 'Bhubaneswar', 396191, '305,balaji appt', '2021-11-22 15:24:22.160592'),
(44, 14, 'Rivanah Banerjee', '9586414845', 'One plus', 'All the description about this product will be visible here', '1616500410_OnePlus-8T-5G-Lunar-Silver-8GB-RAM-128GB-Storage-image-4.jpg', 'Odisha', 'Bhubaneswar', 396191, '305,balaji appt/vapi', '2021-11-22 18:43:56.396362');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed'),
(2, 1, 2, 1, '9L434522M7706801A', 'Completed'),
(3, 1, 3, 1, '9L434522M7706801A', 'Completed'),
(4, 1, 1, 1, '8AT7125245323433N', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `Time` datetime(6) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `Time`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(4, '2021-11-14 10:59:17.000000', 12, 2, 'Samsung Galaxy S21 Ultra', 155000, 10, 'This is a demo', '1616492395_Samsung-Galaxy-S21-Ultra-1608287647-0-0.jpg', 'samsung, s21, s21 ultra'),
(5, '2021-11-14 10:59:32.000000', 12, 6, 'OnePlus 8T', 86000, 13, 'On spec-sheet, the OnePlus 8T boasts plenty of improvements from its predecessor i.e. the OnePlus 8. For instance, its 6.55-inch 1080p OLED display now comes with a faster 120Hz refresh rate. In comparison, the OnePlus 8 had a 90Hz refresh rate. This upgrade seems huge. However, users will agree that you canâ€™t really find much of a difference between 90Hz to 120Hz on a smartphone screen.', '1616500410_OnePlus-8T-5G-Lunar-Silver-8GB-RAM-128GB-Storage-image-4.jpg', 'one plus, oneplus8'),
(10, '2021-11-16 11:00:28.000000', 2, 8, 'Aduro Wireless Headphones', 4100, 6, 'Amazing Bluetooth headphones sound with aptX technology. High-quality built-in microphone with Bluetooth 5.0 technology', '1616502854_hdphn.jpg', 'headphone, aduro'),
(11, '2021-11-11 11:00:44.000000', 6, 9, 'Dr. Martens Mens Patch', 16000, 3, 'Color: Grey/Charcoal/Dark Grey', '1616503181_Dr. Martens.jpg', 'dr martens, shoes'),
(19, '2021-11-02 11:00:14.000000', 6, 7, 'Mens Hoodie', 3500, 4, 'Colors: Black/White/Maroon', '1616504885_menshoodie.jpg', 'hood, hoodie'),
(20, '2021-11-10 10:59:52.000000', 14, 10, 'Thanos Hot Toys', 8150, 19, 'Thanos sixth scale collectible figure.', '1616506942_thanos-hottoys.jpg', 'thanos, marvel, toys, hot toys'),
(21, '2021-11-14 10:53:19.000000', 12, 2, 'Samsung Galaxy Z Fold 2', 249999, 5, 'Last yearâ€™s Galaxy Fold was a sort of experiment in the field of foldable phones. The idea was an innovative one but the phone faced a lot of durability issues. Its launch was postponed multiple times because of Samsungâ€™s inability to solve all the problems. Samsung will likely avoid those situations with its successor.', '1616500092_sm-zfold.jpg', 'samsung, mobile, galaxy fold'),
(22, '2021-11-14 10:56:51.000000', 12, 3, 'Iphone 12 Pro Max', 187000, 7, '5G goes Pro. A14 Bionic rockets past every other smartphone chip. The Pro camera system takes low-light photography to the next level â€” with an even bigger jump on iPhone 12 Pro Max. And Ceramic Shield delivers four times better drop performance.', '1616499931_iph12pm.jpg', 'apple, iphone , mobile ,phone');

-- --------------------------------------------------------

--
-- Table structure for table `recycle_requests`
--

CREATE TABLE `recycle_requests` (
  `product_id` int(20) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `house` varchar(255) DEFAULT NULL,
  `Time` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recycle_requests`
--

INSERT INTO `recycle_requests` (`product_id`, `user_id`, `name`, `phone`, `title`, `description`, `image`, `state`, `city`, `pincode`, `house`, `Time`) VALUES
(1, 14, 'RivanahBanerjee', '9586414845', 'nnnmm', 'All the description about this product will be visible here', '1616500092_sm-zfold.jpg', 'Maharashtra', 'Mumbai', 396191, '305,balaji appt/vapi', '2021-11-23 11:31:17.241922');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`) VALUES
(9, 'sweta ', 'choudhary', 'sweta@gmail.com', '5f0f9a64edc6732f18d753e73454e918', '6355835642'),
(13, 'muskan', 'choudhary', 'muskan@gmail.com', 'b877cde9eaa35c74affa7b9f9d7b6f90', '9586412345'),
(14, 'Rivanah', 'Banerjee', 'rivanah@gmail.com', '92e92f4ac1be1b362cb9bb01b2f75608', '9586414845');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartItem`
--
ALTER TABLE `cartItem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `donated_products`
--
ALTER TABLE `donated_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`),
  ADD KEY `fk_product_brand` (`product_brand`);

--
-- Indexes for table `recycle_requests`
--
ALTER TABLE `recycle_requests`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cartItem`
--
ALTER TABLE `cartItem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donated_products`
--
ALTER TABLE `donated_products`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `recycle_requests`
--
ALTER TABLE `recycle_requests`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
