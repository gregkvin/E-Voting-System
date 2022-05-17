-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2019 at 11:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osis`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(15) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cid`, `name`, `class`, `photo`, `description`, `nickname`, `total`) VALUES
(1, 'Jasmine Amanda', '10A', 'candidateimg2.jpg', 'The ONE you need! | Observant. New. Eager.\r\n', 'MrBelfin.jpg', 102),
(2, 'Felicia Salvina', '10', 'candidateimg1.jpg', 'a valuable pursue,\r\na new point of view,\r\nwith number two', 'MrRonny.jpg', 111),
(3, 'Kimberley Janice', '11F', 'candidateimg3.jpg', 'Third Time\'s the Chance', 'MrDonny.jpg', 24);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(5) NOT NULL,
  `vote` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `vote`, `timestamp`) VALUES
(143, 1, '2019-04-04 08:23:55'),
(144, 1, '2019-04-04 09:03:44'),
(145, 2, '2019-04-04 09:03:51'),
(146, 1, '2019-04-04 09:04:09'),
(147, 3, '2019-04-04 09:04:14'),
(148, 2, '2019-04-04 09:04:18'),
(149, 1, '2019-04-04 09:04:21'),
(150, 3, '2019-04-04 09:04:25'),
(151, 2, '2019-04-04 09:04:28'),
(152, 1, '2019-04-04 09:04:31'),
(153, 3, '2019-04-04 09:04:34'),
(154, 2, '2019-04-04 09:04:36'),
(155, 2, '2019-04-04 09:04:38'),
(156, 2, '2019-04-04 09:04:41'),
(157, 3, '2019-04-04 09:04:59'),
(158, 1, '2019-04-04 09:05:01'),
(159, 3, '2019-04-04 09:05:16'),
(160, 3, '2019-04-04 09:05:19'),
(161, 3, '2019-04-04 09:05:22'),
(162, 3, '2019-04-04 09:05:24'),
(163, 3, '2019-04-04 09:05:27'),
(164, 3, '2019-04-04 09:05:29'),
(165, 3, '2019-04-04 09:05:31'),
(166, 3, '2019-04-04 09:05:33'),
(167, 3, '2019-04-04 09:05:35'),
(168, 3, '2019-04-04 09:05:38'),
(169, 3, '2019-04-04 09:05:40'),
(170, 3, '2019-04-04 09:05:44'),
(171, 3, '2019-04-04 09:05:46'),
(172, 3, '2019-04-04 09:05:48'),
(173, 2, '2019-04-04 09:05:50'),
(174, 1, '2019-04-04 09:05:53'),
(175, 2, '2019-04-04 09:05:56'),
(176, 1, '2019-04-04 09:05:58'),
(177, 3, '2019-04-04 09:06:01'),
(178, 2, '2019-04-04 09:12:50'),
(179, 3, '2019-04-04 09:12:55'),
(180, 1, '2019-04-04 09:12:58'),
(181, 3, '2019-04-04 09:13:01'),
(182, 2, '2019-04-04 09:13:05'),
(183, 2, '2019-04-04 09:44:45'),
(184, 3, '2019-04-04 09:44:49'),
(185, 1, '2019-04-04 09:44:51'),
(186, 2, '2019-04-04 09:44:55'),
(187, 3, '2019-04-04 09:44:57'),
(188, 3, '2019-04-04 09:44:59'),
(189, 2, '2019-04-04 09:56:33'),
(190, 3, '2019-04-04 09:56:38'),
(191, 1, '2019-04-04 09:56:41'),
(192, 2, '2019-04-04 09:56:44'),
(193, 2, '2019-04-04 09:56:48'),
(194, 2, '2019-04-04 10:12:14'),
(195, 3, '2019-04-04 10:12:17'),
(196, 1, '2019-04-04 10:12:20'),
(197, 2, '2019-04-04 10:12:23'),
(198, 3, '2019-04-04 10:12:25'),
(199, 1, '2019-04-04 10:12:28'),
(200, 3, '2019-04-04 10:12:34'),
(201, 3, '2019-04-04 10:59:23'),
(202, 1, '2019-04-04 10:59:27'),
(203, 2, '2019-04-04 10:59:30'),
(204, 3, '2019-04-04 10:59:32'),
(205, 1, '2019-04-04 10:59:35'),
(206, 2, '2019-04-04 10:59:38'),
(207, 3, '2019-04-04 10:59:40'),
(208, 1, '2019-04-04 11:00:29'),
(209, 1, '2019-04-04 11:00:52'),
(210, 1, '2019-04-05 07:28:16'),
(211, 2, '2019-04-05 07:28:33'),
(212, 2, '2019-04-05 07:28:39'),
(213, 2, '2019-04-05 07:49:50'),
(214, 3, '2019-04-05 08:41:23'),
(215, 3, '2019-04-05 10:27:26'),
(216, 1, '2019-04-05 10:27:29'),
(217, 2, '2019-04-05 10:27:32'),
(218, 3, '2019-04-05 10:27:34'),
(219, 2, '2019-04-05 10:27:37'),
(220, 1, '2019-04-05 10:27:40'),
(221, 1, '2019-04-05 15:03:03'),
(222, 2, '2019-04-06 11:01:21'),
(223, 3, '2019-06-18 05:14:37'),
(224, 3, '2019-06-18 05:14:45'),
(225, 3, '2019-06-18 05:14:47'),
(226, 3, '2019-06-18 05:15:39'),
(227, 1, '2019-06-18 05:15:43'),
(228, 2, '2019-06-18 05:15:51'),
(229, 3, '2019-06-18 05:15:56'),
(230, 2, '2019-06-18 05:15:58'),
(231, 3, '2019-06-18 05:16:34'),
(232, 3, '2019-06-18 05:16:38'),
(233, 3, '2019-06-18 05:16:43'),
(234, 1, '2019-06-18 05:18:35'),
(235, 2, '2019-06-18 05:18:48'),
(236, 3, '2019-06-18 05:18:50'),
(237, 3, '2019-06-18 05:18:52'),
(238, 3, '2019-06-18 05:18:54'),
(239, 1, '2019-06-18 05:19:10'),
(240, 1, '2019-06-20 05:30:36'),
(241, 2, '2019-06-20 05:30:43'),
(242, 3, '2019-06-20 05:30:46'),
(243, 2, '2019-06-20 05:31:58'),
(244, 3, '2019-06-20 05:32:01'),
(245, 1, '2019-06-20 05:32:06'),
(246, 3, '2019-06-20 05:32:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
