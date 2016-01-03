-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2015 at 07:39 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(127) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) NOT NULL,
  `visitor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `visitor`) VALUES
(2, 'School', 'c5d65-school.png', 0),
(3, 'Hospital', '528f2-hospital.png', 0),
(4, 'Doctor', '', 0),
(5, 'Industries', '', 0),
(6, 'Mandi', '', 0),
(7, 'News', '', 0),
(8, 'Traveller', '9fb36-travel.png', 0),
(13, 'Theater', 'ed1b5-theater.png', 0),
(17, 'College', '5daef-college.png', 0),
(18, 'Hotel', '21489-hotel.png', 0),
(19, 'Agriculture instrument', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(19, 'Bali'),
(20, 'Falna'),
(18, 'Pali'),
(21, 'Sirohi'),
(1, 'Sumerpur');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `telephone_business` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `categories_id` int(11) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `profession`, `description`, `address`, `telephone_business`, `mobile`, `email`, `website`, `photo`, `status`, `created_at`, `updated_at`, `categories_id`, `seo_title`, `seo_keyword`, `seo_description`, `seo_url`) VALUES
(1, 'Govt hospital', 'rajkiya mehata hospital', '', 'Rajkiya mehta hospital sumerpur', '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, NULL, NULL, NULL, NULL),
(2, 'Vikram Parihar', 'software engineer', 'php developer at mumbai , and working in mediatech intractive solution since 2014', 'shio vatica colony near hero honda show room sumerpur pali', '02933255565', '9022349606', 'pariharvikram1989@gmail.com', 'http://webrocom.net', '15268-11022012203.jpg', 1, '0000-00-00 00:00:00', '2015-05-22 21:34:53', 2, 'vikram parihar software engg in sumerpur', 'vikram parihar, sumerpur software ', 'vikram parihar is a software engineer in sumerpur`', 'vikram-parihar-sumerpur-software-engineer-1432323293'),
(3, 'Vikram Parihar', 'software engineer', 'ok this is nice description', 'shiv vatica colony', '02933255565', '9022349606', 'mahadevgaur786@gmail.com', 'http://webrocom.net\\', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 'vikram parihar software engg in sumerpur', 'vikram parihar, sumerpur software', 'vikram parihar is a software engineer in sumerpur`', 'seo-nice-url'),
(4, 'Asdas', 'asdasd', 'asdas', 'dadsasd', '02933255565', 'jaya', 'jayantpariharca@gmail.com', 'java', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 'asdas', 'asdas', 'asdas', 'asdasdas-adsasd'),
(5, 'Tanuj', 'software engineer', 'ok ', 'yes', '02933255565', '9022349606', 'mahadevgaur786@gmail.com', 'http://webrocom.net', '', 1, '2015-05-22 00:00:00', '2015-05-22 00:00:00', 5, 'asdas', 'asdas', 'asdas', 'seo-nice-url-as'),
(7, 'Vikram', 'software engineer', 'asda', 'asdas', '02933255565', '9022349606', 'mahadevgaur786@gmail.com', 'http://webrocom.net', '', 1, '2015-05-22 21:23:54', '2015-05-22 21:23:54', 3, 'asdas', 'asdas', 'asdas', 'asdasdas-adsasd1432322634'),
(11, 'Test', 'test', 'test', 'test', '02933255565', '9022349606', 'mahadevgaurAS786@gmail.com', 'http://webrocom.net', '', 1, '2015-05-23 09:57:19', '2015-05-23 09:57:19', 3, 'asdas', 'asdas', 'asdas', 'asdasdas adsasd');

-- --------------------------------------------------------

--
-- Table structure for table `example_3`
--

CREATE TABLE IF NOT EXISTS `example_3` (
  `id` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mandi_shop`
--

CREATE TABLE IF NOT EXISTS `mandi_shop` (
  `id` int(11) NOT NULL,
  `shop_no` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_owner` varchar(127) NOT NULL,
  `shop_details` text NOT NULL,
  `shop_contact` varchar(12) NOT NULL,
  `shop_address` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `seo_description` varchar(255) NOT NULL,
  `seo_url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mandi_shop`
--

INSERT INTO `mandi_shop` (`id`, `shop_no`, `shop_name`, `shop_owner`, `shop_details`, `shop_contact`, `shop_address`, `status`, `categories_id`, `created_at`, `updated_at`, `seo_title`, `seo_keyword`, `seo_description`, `seo_url`) VALUES
(6, 1, 'Vira Ram Suresh Kumar', 'vira ram', 'ok', '9022349606', 'dasdf', 1, 6, '2015-05-23 10:24:04', '2015-05-23 10:24:04', 'seo title', 'keyword', 'ok', 'seo nice url');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_header` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `news_type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `seo_tile` varchar(255) NOT NULL,
  `seo_description` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `seo_url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `sub_header`, `content`, `author`, `source`, `posted_by`, `image`, `news_type`, `created_at`, `updated_at`, `seo_tile`, `seo_description`, `seo_keyword`, `seo_url`) VALUES
(2, 'title 2', 'new title sub header', '<p>hi this is new topic again</p>\r\n', 'vikram parihar', 'new ITY', 'city poral', 'c6b50-1465142.jpg', '9', '0000-00-00 00:00:00', '2015-06-06 21:28:36', 'my seo', 'asdas', 'asdas', 'asdasdas-adsasd'),
(5, 'My First News', 'new set at sumerpur', '<blockquote>\r\n<p>hi this is vikram parihar</p>\r\n</blockquote>\r\n', 'vikram parihar', 'new ITY', 'city poral', 'd6b5d-img_20141026_152340322.jpg', '9', '0000-00-00 00:00:00', '2015-06-06 20:31:36', 'my seo', 'asdas', 'asdasasdas', 'asdasdas-adsasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `newsCategory`
--

CREATE TABLE IF NOT EXISTS `newsCategory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `visitor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsCategory`
--

INSERT INTO `newsCategory` (`id`, `name`, `visitor`) VALUES
(2, 'Entertainment', 0),
(6, 'Politics', 0),
(7, 'General', 0),
(8, 'Business', 0),
(9, 'Commercial', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(127) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `classification` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `keyword`, `author`, `description`, `classification`, `publisher`) VALUES
(1, 'index', 'sumperur portal, all information about sumerpur and related business and people', 'sumerpur, sumerpur city, sumerpur business, sumerpur mandi, sumerpur rajasthan', 'vikram parihar', 'sumerpur portal is general purpose informational portal related to your people, business, industries, and achievements.', '', 'vikram parihar, kuldeep agarwal, city portal '),
(2, 'category', 'sumperur portal, all information about sumerpur and related business and people', 'sumerpur, sumerpur city, sumerpur business, sumerpur mandi, sumerpur rajasthan', 'vikram parihar', 'city portal contain all type of information about the people lives in sumerpur', 'college, school, hospitlas, ', 'vikram parihar, kuldeep agarwal, city portal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_url` (`seo_url`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `example_3`
--
ALTER TABLE `example_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mandi_shop`
--
ALTER TABLE `mandi_shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop_no` (`shop_no`),
  ADD UNIQUE KEY `seo_url` (`seo_url`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_url` (`seo_url`),
  ADD KEY `news_type` (`news_type`);

--
-- Indexes for table `newsCategory`
--
ALTER TABLE `newsCategory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `example_3`
--
ALTER TABLE `example_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `mandi_shop`
--
ALTER TABLE `mandi_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newsCategory`
--
ALTER TABLE `newsCategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_category` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
