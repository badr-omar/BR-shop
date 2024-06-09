-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `br_shope`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_cost` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
  `user_id` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(108) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_image2` varchar(255) DEFAULT NULL,
  `product_image3` varchar(255) DEFAULT NULL,
  `product_image4` varchar(255) DEFAULT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_special_offer` int(2) DEFAULT NULL,
  `product_color` varchar(108) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_price`, `product_special_offer`, `product_color`) VALUES
(1, 'Men\'s Fashion T-Shirt', 'T-Shirt', 'The Gilden Ultra Cotton T-shirt is made from a substant 6.0 or .per sq. yd.fabric constructed from 100% cotton, this classic fit preshrunk jersay knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and shoulder, and a seem', 'f1.jpg', 'f2.jpg', 'f3.jpg', 'f4.jpg', 800.00, 10, 'multi color'),
(2, 'Cartoon Astronaut T-shrit', 'T-Shirt', 'The Gilden Ultra Cotton T-shirt is made from a substant 6.0 or .per sq. yd.fabric constructed from 100% cotton, this classic fit preshrunk jersay knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and shoulder, and a seem', 'f2.jpg', 'f1.jpg', 'f3.jpg', 'f4.jpg', 900.00, 10, 'multi color'),
(3, 'Cartoon Astronaut T-shrit', 'T-Shirt', 'The Gilden Ultra Cotton T-shirt is made from a substant 6.0 or .per sq. yd.fabric constructed from 100% cotton, this classic fit preshrunk jersay knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and shoulder, and a seem', 'f3.jpg', 'f1.jpg', 'f2.jpg', 'f4.jpg', 900.00, 10, 'multi color'),
(4, 'Cartoon Astronaut T-shrit', 'T-Shirt', 'The Gilden Ultra Cotton T-shirt is made from a substant 6.0 or .per sq. yd.fabric constructed from 100% cotton, this classic fit preshrunk jersay knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and shoulder, and a seem', 'f4.jpg', 'f1.jpg', 'f2.jpg', 'f1.jpg', 900.00, 10, 'multi color'),
(5, 'Cartoon Astronaut T-shrit', 'women T-Shirt', 'The Gilden Ultra Cotton T-shirt is made from a substant 6.0 or .per sq. yd.fabric constructed from 100% cotton, this classic fit preshrunk jersay knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and shoulder, and a seem', 'f5.jpg', 'f6.jpg', 'f7.jpg', 'f8.jpg', 1000.00, 10, 'multi color'),
(6, 'Cartoon Astronaut T-shrit', 'women T-Shirt', 'The Gilden Ultra Cotton T-shirt is made from a substant 6.0 or .per sq. yd.fabric constructed from 100% cotton, this classic fit preshrunk jersay knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and shoulder, and a seem', 'f6.jpg', 'f5.jpg', 'f7.jpg', 'f8.jpg', 1100.00, 10, 'multi color'),
(7, 'Cartoon Astronaut T-shrit', 'women T-Shirt', 'The Gilden Ultra Cotton T-shirt is made from a substant 6.0 or .per sq. yd.fabric constructed from 100% cotton, this classic fit preshrunk jersay knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and shoulder, and a seem', 'f7.jpg', 'f5.jpg', 'f6.jpg', 'f8.jpg', 950.00, 10, 'multi color'),
(8, 'Cartoon Astronaut T-shrit', 'women T-Shirt', 'The Gilden Ultra Cotton T-shirt is made from a substant 6.0 or .per sq. yd.fabric constructed from 100% cotton, this classic fit preshrunk jersay knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and shoulder, and a seem', 'f8.jpg', 'f6.jpg', 'f5.jpg', 'f7.jpg', 950.00, 10, 'multi color'),
(9, 'RUNFALCON 3.0 SHOES', 'shoes', 'Shoe, outer covering for the foot, usually of leather with a stiff or thick sole and heel, and generally (distinguishing it from a boot) reaching no higher than the ankle.', 'sh1.jpg', 'sh2.jpg', 'sh3.jpg', 'sh4.jpg', 1000.00, 0, 'white'),
(10, 'RUNFALCON 3.0 SHOES', 'shoes', 'Shoe, outer covering for the foot, usually of leather with a stiff or thick sole and heel, and generally (distinguishing it from a boot) reaching no higher than the ankle.', 'sh2.jpg', 'sh1.jpg', 'sh3.jpg', 'sh4.jpg', 1500.00, 0, 'white'),
(11, 'RUNFALCON 3.0 SHOES', 'shoes', 'Shoe, outer covering for the foot, usually of leather with a stiff or thick sole and heel, and generally (distinguishing it from a boot) reaching no higher than the ankle.', 'sh3.jpg', 'sh2.jpg', 'sh1.jpg', 'sh4.jpg', 1200.00, 0, 'white'),
(12, 'RUNFALCON 3.0 SHOES', 'shoes', 'Shoe, outer covering for the foot, usually of leather with a stiff or thick sole and heel, and generally (distinguishing it from a boot) reaching no higher than the ankle.', 'sh4.jpg', 'sh2.jpg', 'sh3.jpg', 'sh1.jpg', 1500.00, 0, 'white'),
(13, 'RUNFALCON 3.0 SHOES', 'shoes', 'Shoe, outer covering for the foot, usually of leather with a stiff or thick sole and heel, and generally (distinguishing it from a boot) reaching no higher than the ankle.', 'sh5.jpg', 'sh2.jpg', 'sh3.jpg', 'sh4.jpg', 1000.00, 0, 'white'),
(14, 'RUNFALCON 3.0 SHOES', 'shoes', 'Shoe, outer covering for the foot, usually of leather with a stiff or thick sole and heel, and generally (distinguishing it from a boot) reaching no higher than the ankle.', 'sh6.jpg', 'sh1.jpg', 'sh3.jpg', 'sh4.jpg', 1500.00, 0, 'white'),
(15, 'RUNFALCON 3.0 SHOES', 'shoes', 'Shoe, outer covering for the foot, usually of leather with a stiff or thick sole and heel, and generally (distinguishing it from a boot) reaching no higher than the ankle.', 'sh7.jpg', 'sh2.jpg', 'sh1.jpg', 'sh4.jpg', 1200.00, 0, 'white'),
(16, 'RUNFALCON 3.0 SHOES', 'shoes', 'Shoe, outer covering for the foot, usually of leather with a stiff or thick sole and heel, and generally (distinguishing it from a boot) reaching no higher than the ankle.', 'sh8.jpg', 'sh2.jpg', 'sh3.jpg', 'sh1.jpg', 1500.00, 0, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(108) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'aa', 'a@d.d', '73882ab1fa529d7273da0db6b49cc4f3'),
(2, 'aaa', 'a@gm.com', '73882ab1fa529d7273da0db6b49cc4f3'),
(3, 'ss', 's@w.s', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
(4, 'q', 'a@a.a', '96e79218965eb72c92a549dd5a330112'),
(5, 'w', 'a@a.ad', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
(6, 'a', 'a@a.aaa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
(7, 's', 'sa@a.a', 'af15d5fdacd5fdfea300e88a8e253e82'),
(8, 'sss', 'a@q.ee', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
(9, 'a', 'aa@ss.cc', '73882ab1fa529d7273da0db6b49cc4f3'),
(10, 'ss', 'q@dd.dd', 'af15d5fdacd5fdfea300e88a8e253e82'),
(11, 'w', 'w@ss.dd', 'af15d5fdacd5fdfea300e88a8e253e82'),
(12, 'w', 'w@ss.dds', 'af15d5fdacd5fdfea300e88a8e253e82'),
(13, 's', 'sss@ww.j', '73882ab1fa529d7273da0db6b49cc4f3'),
(14, 's', 's@er.c', '73882ab1fa529d7273da0db6b49cc4f3'),
(15, 's', 'w@e.d', '73882ab1fa529d7273da0db6b49cc4f3'),
(16, 's', 'sw@eed.d', 'f63f4fbc9f8c85d409f2f59f2b9e12d5'),
(17, 's', 'w@er.dd', '96e79218965eb72c92a549dd5a330112'),
(18, 'a', 'b@b.b', '96e79218965eb72c92a549dd5a330112'),
(19, 'q', 'q@qq.l', '96e79218965eb72c92a549dd5a330112'),
(20, 'q', 'qs@s.s', 'e3ceb5881a0a1fdaad01296d7554868d'),
(21, 'admin', 'admin@BR.com', '96e79218965eb72c92a549dd5a330112'),
(22, '', '', '96e79218965eb72c92a549dd5a330112'),
(23, 'aaaqa', 'admin@gmail.com', '96e79218965eb72c92a549dd5a330112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UX_Constraint` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
