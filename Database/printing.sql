-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 08:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printing`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(9000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `instragram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`, `email`, `phone`, `address`, `facebook`, `twiter`, `instragram`) VALUES
('hendrik-cornelissen-jpTT_SAU034-unsplash.jpg', 'hiuyii', '<p>kaniya</p>', 'an@gmail.com', 713664071, 'Neluwa', 'https://www.facebook.com/', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nic` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `email`, `address`, `password`, `nic`) VALUES
(2, 'Kanishka Dew Sandaruwan', 783664071, 'kanishkadewsandaruwan@gmail.com', 'Banwalgodalla, Kosmulla', 'e10adc3949ba59abbe56e057f20f883e', '962670426V'),
(5, '', 0, 'admin', '', 'e10adc3949ba59abbe56e057f20f883e', '');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `header_image` varchar(255) NOT NULL,
  `header_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`header_image`, `header_title`) VALUES
('header-bg.png', 'White Catchers Gift Wall decor');

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `image_id` int(11) NOT NULL,
  `galary_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`image_id`, `galary_image`) VALUES
(24, 'archie-fantom-lCe_aHkPxss-unsplash.jpg'),
(25, 'gersey-vargas-ijuTwBjQZww-unsplash.jpg'),
(26, 'hendrik-cornelissen-jpTT_SAU034-unsplash.jpg'),
(27, 'daniel-klein-Qx8_d5dGhrs-unsplash.jpg'),
(28, 'smith.png');

-- --------------------------------------------------------

--
-- Table structure for table `getorder`
--

CREATE TABLE `getorder` (
  `order_id` int(11) NOT NULL,
  `service_id` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sample_image` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `created_image` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `dedline` date NOT NULL,
  `customer_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getorder`
--

INSERT INTO `getorder` (`order_id`, `service_id`, `description`, `sample_image`, `amount`, `status`, `payment`, `created_image`, `order_date`, `dedline`, `customer_id`) VALUES
(2, 2, 'ssss', 'sandra-willims.png', 1500, 'Accepted', 'Paid', 'smith.png', '2021-06-05 06:18:38', '2021-06-11', 2),
(3, 5, 'ddsds', 'store-bg.png', 0, 'Accepted', 'Pending', 'Pending', '2021-06-05 06:19:13', '2021-06-18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `msg_read` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`, `msg_read`) VALUES
(2, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'tjgj', '2020-12-24 12:17:24', 'Reded'),
(10, 'hghghg', 'kanishkadewsandaruwan@gmail.com', 'hghgh', 'hghghghg', '2021-06-05 06:17:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `title`, `description`, `unit`, `price`, `image`, `available`) VALUES
(1, 'White Catchers Gift Wall decor', '<p>sasasasas</p>', 'Per Page', 150, 'etienne-boulanger-C5yfbvMWxC8-unsplash.jpg', 'Yes'),
(2, 'Prone Rice', '<p>ggggggggg</p>', 'Per Design', 25000, 'archie-fantom-lCe_aHkPxss-unsplash.jpg', 'Yes'),
(4, 'Logitec Keyboard', '<p>fdfd</p>', 'Per Design', 1500, 'smith.png', 'Yes'),
(5, 'Handmade Dream  Catchers  for vehicle', '<p>aaa</p>', 'Per Page', 850, 'sandra-willims.png', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `getorder`
--
ALTER TABLE `getorder`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `getorder`
--
ALTER TABLE `getorder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
