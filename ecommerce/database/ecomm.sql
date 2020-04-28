-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 03:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Broderie anglaise', 'eng'),
(2, 'Chinese embroidery', 'c'),
(3, 'Moroccan broidery', 'm'),
(4, 'Indian broidery', 'i'),
(5, 'African broidery', 'a'),
(6, 'Other types', 'o');


-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
`id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(1, 1, 'Sleeve V-Neck broderie anglaise', 'eng', 24.99, 'Vneck.jpg', '2019-12-09', 2),
(2, 1, 'Balloon-sleeve broderie anglaise cotton' , 'eng1',149.99, 'sle.jpg', '2019-05-10', 3),
(3, 6, 'Gold embroidered brooch', 'o', 177.99, 'ga.jpg', '2018-05-12', 1),
(4, 6, 'Gold embroidered clutch and corset',  'o1' ,299.99 , 'gw.jpg', '2019-05-10', 3),
(5, 2, 'Red brocade embroided tassel chinese wedding dress' ,  'c' , 599.99, 'ccc1.jpg', '2019-07-09', 3),
(6, 2, 'Embroided plated jacket-chinese embroidery' ,  'c1' , 499.99 , 'ccc2.jpg' , '0000-00-00', 0),
(7, 6, 'Embroided sleeveless Midi dress(crewel embroidery)'  ,  'o2' , 199.99 , 'crewel2.jpg' , '0000-00-00', 0),
(8, 6, 'Blossom dress(crewel embroidery)',  'o3' , 399.99 , 'crewel1.jpg' , '0000-00-00', 0),
(9, 6, 'Multicolor blazer jacket(crazy patchwork embroidery)' ,  'o4' , 119.99 , 'crazyp1.jpg' , '0000-00-00', 0),
(10, 6, 'Checked shirt(craszy patchwork embroidery)' , 'o5' , 19.99 , 'crazyp2.jpg' , '2018-05-10', 1),
(11, 3, 'Moroccan hooded cape cloack',  'm' , 299.99 , 'fes1.jpg' , '2018-05-12', 1),
(12, 3, 'Modern Berber Dress',  'm1' , 399.99 , 'fes2.jpg' , '2018-05-12', 3),
(13, 4, 'Dark Sari embroided(aari work)' ,  'i' , 499.99 , 'aari1.jpg' , '2018-05-12 ',2),
(14, 4, 'Blouse embroided with aari work' ,  'i1' ,599.99, 'aari2.jpg' , '2018-05-10', 13),
(15, 6, 'Unique necklace(stumpwork)',  'o6' ,199.99, 'stump2.jpg', '2018-07-09', 1),
(16, 6, 'Blossom dress(stumpwork)',  'o7' , 599.99 , 'stump1.jpg', '2018-07-09', 1),
(17, 6, 'Blossom white dress embroided with cross stitch' ,  'o8' , 499.99 , 'cross2.jpg', '2018-07-09', 1),
(18, 6, 'Blossom dress embroided with cross stitch' ,  'o9' , 239.99 , 'cross1.jpg', '2018-07-09', 1),
(19, 6, 'Handmade embroided dress' ,  'o10' , 239.99 ,  'count2.jpg', '2018-07-09', 1),
(20, 6, 'Light grey Handmade embroided dress' ,  'o11' , 699.99 , 'count1.jpg', '2018-07-09', 1),
(21, 4, 'Grey Gota Patti hand (badla work)' ,  'i2' , 429.99 , 'badla2.jpg', '2018-07-09', 1),
(22, 4, 'Dasky pink chikankari (badla work)' ,  'i3' , 499.99 , 'badla1.jpg', '2018-07-09', 1),
(23, 6, 'Wedding dress(scale fish)' ,  'o12' , 599.99 , 'fish2.jpg', '2018-07-09', 1),
(24, 6, 'Scale dress' ,  'o13' , 499.99 , 'fish1.jpg', '2018-07-09', 1),
(25, 6, 'Bargello bag' ,  'o14' , 199.99 , 'bargello2.jpg', '2018-07-09', 1),
(26, 6, 'Phone case covered with stitch(bargello)' ,  'o15' , 19.99 , 'bargello1.jpg', '2018-07-09', 1),
(27, 6, 'Embroided dress(needle point)' , 'o16' , 229.99, 'needle2.jpg', '2018-07-09', 1),
(28, 6, 'Embroided lace top(needle point)' , 'o17' , 129.99,'needle1.jpg', '2018-07-09', 0),
(29, 5, 'Print geometric coat and pants ' ,  'a' , 429.99 , 'africa2.jpg' , '2019-05-10', 3)
;


-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 9, 'PAY-1RT494832H294925RLLZ7TZA', '2018-05-10'),
(10, 9, 'PAY-21700797GV667562HLLZ7ZVY', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$0SHFfoWzz8WZpdu9Qw//E.tWamILbiNCX7bqhy3od0gvK5.kSJ8N2', 1, 'Code', 'Projects', '', '', 'thanos1.jpg', 1, '', '', '2018-05-01'),
(9, 'harry@den.com', '$2y$10$Oongyx.Rv0Y/vbHGOxywl.qf18bXFiZOcEaI4ZpRRLzFNGKAhObSC', 0, 'Harry', 'Den', 'Silay City, Negros Occidental', '09092735719', 'male2.png', 1, 'k8FBpynQfqsv', 'wzPGkX5IODlTYHg', '2018-05-09'),
(12, 'christine@gmail.com', '$2y$10$ozW4c8r313YiBsf7HD7m6egZwpvoE983IHfZsPRxrO1hWXfPRpxHO', 0, 'Christine', 'becker', 'demo', '7542214500', 'female3.jpg', 1, '', '', '2018-07-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






SET AUTOCOMMIT = 0;
START TRANSACTION;
DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;