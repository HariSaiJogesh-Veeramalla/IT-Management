-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 06:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it management`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(5) NOT NULL,
  `title` varchar(122) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(122) NOT NULL,
  `status` int(1) NOT NULL,
  `sort` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `img`, `status`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Our Commitment', '					                	We are a dedicated group of professionals, committed to delivering value for you. You will get what we have promised you. We donï¿½t make false promises and donï¿½t hide anything from you. When we make the commitment, you will get the delivery- no excuses.					                ', 'Engrologo.jpg', 1, 1, '2021-06-18 02:59:26', '2021-06-18 03:08:29'),
(3, 'Our Vision', '					                	To stay ahead among our rivals in the transport and logistics industry by providing world-class and innovative moving solutions to our clients. We wish to become the top choice of our customers when they are looking for a reliable, affordable and professional transporter.					                ', 'foujifertilizerlogo.jpg', 2, 2, '2021-06-18 03:00:59', '2021-06-18 03:12:22'),
(4, 'Our Mission', '					                						                	Stay responsive to consumers requirement, find innovative and flexible solutions and strive to achieve customer satisfaction with our performance, honesty, and integrity. We aim to achieve our esteemed patrons trust and develop a lasting relationship with them..					                					                ', 'psologo.png', 3, 3, '2021-06-18 03:01:22', '2021-06-18 03:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(232) NOT NULL,
  `ip` varchar(25) NOT NULL,
  `role` varchar(35) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `ip`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'truckAdmin', 'admin', 'project', '::1', '', 1, '0000-00-00 00:00:00', '2021-06-11 18:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `update_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `sort`, `status`, `created_at`, `update_on`) VALUES
(1, 'Orcale', 1, 1, '2023-02-27 09:45:21.907172', '2023-02-27 09:45:21.907172'),
(2, 'Micsosoft', 1, 1, '2023-02-27 09:45:44.690037', '2023-02-27 09:45:44.690037'),
(4, 'CCNA', 1, 1, '2023-02-27 09:46:01.820985', '2023-02-27 09:46:01.820985');

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `subject` varchar(77) NOT NULL,
  `message` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `veh_id` int(8) NOT NULL,
  `name` varchar(55) NOT NULL,
  `price` float NOT NULL,
  `distance` float NOT NULL,
  `totalamount` float NOT NULL,
  `img` varchar(122) NOT NULL,
  `start_loc` varchar(55) NOT NULL,
  `end_loc` varchar(55) NOT NULL,
  `dated` date NOT NULL,
  `status` int(1) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `cnic` varchar(70) NOT NULL,
  `loadtype` varchar(100) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `date_time` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `veh_id`, `name`, `price`, `distance`, `totalamount`, `img`, `start_loc`, `end_loc`, `dated`, `status`, `cname`, `phone`, `cnic`, `loadtype`, `weight`, `date_time`, `created_at`, `updated_at`) VALUES
(13, 2, '22 Wheeler', 90, 2000, 180000, '22 Wheeler.jpg', 'karachi', 'Islamabad', '2021-07-11', 2, 'Faheem', '03037691392', '31235-65432054-7', 'Industrial Goods', '30 TON', '14-07-2021 -11pm', '2021-07-11 01:40:06', '2021-07-11 01:40:44'),
(14, 5, 'Shazor', 45, 45, 2025, 'Mini 4.jpg', 'Okara', 'Sahiwal', '2021-07-11', 2, 'Ahsan', '03042345657', '36032-12232422-1', 'Agriculture', '1 TON', '14-07-2021 -11pm', '2021-07-11 09:22:05', '2021-07-11 09:35:58'),
(15, 6, '16 Wheeler', 70, 0, 0, '16 Wheeler.jpg', 'Pakpattan', 'Multan', '2021-07-11', 1, 'Aslam', '03231234564', '36502-12124422-1', 'Industrial Goods', '10 TON', '15-07-2021 -10pm', '2021-07-11 09:23:47', '2021-07-11 09:23:47'),
(16, 3, '12 Wheeler', 70, 32, 2240, 'Medium 2.jpg', 'Depalpur', 'Rajowal', '2021-07-11', 3, 'Ghafoor', '03042345657', '36505-6884054-7', 'Home Furniture', '8 TON', '16-09-2021 -9am', '2021-07-11 09:25:19', '2021-07-11 09:36:22'),
(17, 3, '12 Wheeler', 101, 67, 6767, 'Medium 2.jpg', 'Kamlia', 'Sahiwal', '2022-09-03', 3, '', '03216931180', '556566666666666', 'Home Furniture', '678', '67-98-9', '2022-09-03 13:22:46', '2022-09-13 12:04:15'),
(18, 2, '22 Wheeler', 90, 0, 0, '22 Wheeler.jpg', '', '', '2022-09-13', 2, 'Faisal', '03216931180', '556566666666666', 'Home Furniture', '678', '67-98-9', '2022-09-13 11:53:15', '2022-09-13 11:58:32'),
(19, 3, '12 Wheeler', 70, 0, 0, 'Medium 2.jpg', 'Kamlia', 'Sahiwal', '2022-09-13', 1, 'Faisal', '03216931180', '556566666666666', 'Home Furniture', '678', '6-9-9', '2022-09-13 12:06:32', '2022-09-13 12:06:32'),
(20, 8, 'dr', 30, 4, 120, 'WhatsApp_Image_2022-08-30_at_6.37.25_PM-removebg-preview.png', 'DHQ', 'Sahiwal Medical College', '2022-09-13', 2, 'Faisal', '03216931180', '556566666666666', 'Others', '678', '6-9-9', '2022-09-13 12:12:15', '2022-09-13 12:13:41'),
(21, 9, 'Faisal', 7, 34, 456, 'Screenshot (1).png', 'Kamlia', 'Sahiwal', '2022-10-14', 1, 'Faisal', '03216931180', '556566666666666', 'Industrial Goods', '678', '6-9-9', '2022-10-12 10:49:57', '2022-10-12 10:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(122) NOT NULL,
  `company` varchar(122) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `city` varchar(55) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `company`, `phone`, `city`, `status`) VALUES
(1, 'Ahmad Raza', 'ahmadraza.aryain@hotmail.com', '123456', 'TruckSheikh', '923004095659', 'Sahiwal', 1),
(2, 'faheem', 'faheem@gmail.com', 'fahm', 'pepsi', '03027241900', 'sahiwal', 1),
(3, 'abc', 'abc@gmail.com', 'abd', 'aaa', '03042345657', 'turky', 1),
(4, 'Kitab', 'book@gmail.com', 'book', 'Book', '03231234564', 'ABC', 1),
(5, 'Hafiz', 'hafiz@gmail.com', '1122', 'Cock', '03031234567', 'Okara', 1),
(6, 'Faisal', 'Faisal@gmail.com', '123456', 'swl', '03216931180', 'swl', 1),
(7, 'Siddique Akar', 'siddique@gmail.com', '1234', 'It', '03216931180', 'swl', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(44) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(122) NOT NULL,
  `sort` int(3) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sitedetails`
--

CREATE TABLE `sitedetails` (
  `id` int(2) NOT NULL,
  `sitename` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `address` varchar(66) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `phone1` varchar(22) DEFAULT NULL,
  `timing` text DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `logo` varchar(133) DEFAULT NULL,
  `logo1` varchar(77) DEFAULT NULL,
  `favicon` varchar(77) DEFAULT NULL,
  `link1` varchar(133) DEFAULT NULL,
  `link2` varchar(131) DEFAULT NULL,
  `link3` varchar(132) DEFAULT NULL,
  `link4` varchar(135) DEFAULT NULL,
  `whatsapp` varchar(25) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `timing_detail` text DEFAULT NULL,
  `api` text DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitedetails`
--

INSERT INTO `sitedetails` (`id`, `sitename`, `email`, `address`, `phone`, `phone1`, `timing`, `city`, `logo`, `logo1`, `favicon`, `link1`, `link2`, `link3`, `link4`, `whatsapp`, `about`, `timing_detail`, `api`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Order Loader', 'order@loader.com.pk', '   RAILWAY ROAD SAHIWAL-PAKISTAN', '+92 41 871 8441-3', '', '', 'Sahiwal', 'logo.png', '', 'favicon.png', 'https://twitter.com/', 'https://facebook.com/', 'https://instagram.com', '03037691392', NULL, 'About the company\r\nOrderload, a leading transport and logistics service provider is introducing a truly innovative, modern and high-tech online platform to book the truck in a few simple steps', 'sds', '', 1, '0000-00-00 00:00:00', '2021-07-10 10:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `site_seo`
--

CREATE TABLE `site_seo` (
  `id` int(3) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `owner` varchar(125) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_seo`
--

INSERT INTO `site_seo` (`id`, `title`, `description`, `keywords`, `owner`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OrderLoader', 'Truck & Loader Portal', 'Truck, loaders, Loader, Shahzoor, Cary Diba, Ven, Car', 'Orderloader', 1, '2020-05-25 12:09:16', '2021-07-03 16:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(3) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `pic_alt` varchar(70) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `title2` varchar(56) DEFAULT NULL,
  `title3` varchar(55) DEFAULT NULL,
  `description` varchar(220) DEFAULT NULL,
  `sort` int(3) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `pic`, `pic_alt`, `title`, `title2`, `title3`, `description`, `sort`, `status`, `created_at`, `updated_at`) VALUES
(12, 'download.jpg', NULL, NULL, NULL, NULL, 'ddd', NULL, 0, '2023-02-27 15:54:50', '2023-02-27 15:55:20'),
(15, 'limpact-de-la-cybercriminalité.jpeg', '', 'dd', '', '', NULL, 1, 1, '2023-02-27 16:05:45', '2023-02-27 16:05:45'),
(16, 'limpact-de-la-cybercriminalité.jpeg', '', 'www', '', '', NULL, 1, 1, '2023-02-27 16:07:20', '2023-02-27 16:07:20'),
(17, 'istockphoto-1337180384-1024x1024.jpg', '', 'ddd', '', '', NULL, 1, 1, '2023-02-27 16:09:14', '2023-02-27 16:09:14'),
(18, 'download.jpg', '', 'ddd', '', '', NULL, 1, 1, '2023-02-27 16:10:56', '2023-02-27 16:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(6) NOT NULL,
  `title` varchar(55) NOT NULL,
  `img` varchar(88) NOT NULL,
  `website` varchar(88) NOT NULL,
  `status` int(1) NOT NULL,
  `sort` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `title`, `img`, `website`, `status`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Pepsi', 'pepsilogo.png', '', 1, 1, '2021-06-14 13:54:09', '2021-06-14 13:54:09'),
(2, 'Fouji Fertilizer', 'foujifertilizerlogo.jpg', '', 1, 3, '2021-06-14 13:57:40', '2021-06-14 13:57:40'),
(3, 'PSO', 'psologo.png', '', 1, 3, '2021-06-14 13:58:35', '2021-06-14 13:58:35'),
(4, 'Engro', 'Engrologo.jpg', '', 1, 5, '2021-06-14 13:59:07', '2021-06-14 13:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `torder`
--

CREATE TABLE `torder` (
  `id` int(11) NOT NULL,
  `v_category` varchar(30) NOT NULL,
  `f_charges` int(50) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `p_loc` varchar(40) NOT NULL,
  `d_loc` varchar(49) NOT NULL,
  `phone` varchar(33) NOT NULL,
  `loadtype` varchar(33) NOT NULL,
  `description` text NOT NULL,
  `loadlimit` varchar(12) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5),
  `update_on` timestamp(4) NOT NULL DEFAULT current_timestamp(4) ON UPDATE current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `torder`
--

INSERT INTO `torder` (`id`, `v_category`, `f_charges`, `pic`, `p_loc`, `d_loc`, `phone`, `loadtype`, `description`, `loadlimit`, `status`, `created_at`, `update_on`) VALUES
(5, '22 Wheeler', 40, '22 Wheeler.jpg', 'karachi', 'Islamabad', '03036534323', 'Industrial Goods', 'For Heavy Load', '100 TON', 1, '2021-07-11 01:11:47.66994', '2021-07-11 02:25:20.8470'),
(6, 'Heavy Duty Loader', 33, '14 Wheeler.jpg', 'Sahiwal', 'Melsi', '03036534323', 'Home Furniture', 'Book for Heavy dutyload', '30 TON', 1, '2021-07-11 09:27:51.67930', '2021-07-11 09:27:51.6793'),
(7, 'Mini Loader', 7500, 'Mini 5.jpg', 'Faislabad', 'Melsi', '03042345657', 'Agriculture', 'For Mini Load', '1 TON', 1, '2021-07-11 09:34:06.63950', '2021-07-11 09:34:06.6395'),
(8, 'Heavy Duty Loader', 50, '1.PNG', 'Sahiwal', 'Kamalia', '03216931180', 'Home Furniture', 'batool', '45', 1, '2022-09-13 12:02:04.51218', '2022-09-13 12:02:04.5121');

-- --------------------------------------------------------

--
-- Table structure for table `tregister`
--

CREATE TABLE `tregister` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(122) NOT NULL,
  `company` varchar(122) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `city` varchar(55) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tregister`
--

INSERT INTO `tregister` (`id`, `name`, `email`, `password`, `company`, `phone`, `city`, `status`) VALUES
(1, 'saim', 'saim@gmail.com', 'kia', 'pepsi', '0302122322', 'Karachi', 1),
(2, 'Hafeez', 'hafeez@gmail.com', '1234', 'Moto', '2413124123', 'Lahore', 1),
(3, 'hafeez', 'siddiqueakbar@gmail.com', '12345', 'swl', '03216931180', 'swl', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(13) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `model` varchar(60) NOT NULL,
  `price` int(100) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `sort` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_on` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `menu_id`, `name`, `model`, `price`, `description`, `img`, `sort`, `status`, `created_at`, `updated_on`) VALUES
(11, 11, 'IT Hardware', '1.1', 4, 'aaaa', '1.jpg', 0, 1, '0000-00-00 00:00:00.000000', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getintouch`
--
ALTER TABLE `getintouch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitedetails`
--
ALTER TABLE `sitedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_seo`
--
ALTER TABLE `site_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `torder`
--
ALTER TABLE `torder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tregister`
--
ALTER TABLE `tregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `torder`
--
ALTER TABLE `torder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tregister`
--
ALTER TABLE `tregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
