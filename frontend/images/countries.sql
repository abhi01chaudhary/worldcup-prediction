-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 09:02 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rillcup`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_goals_count` int(11) DEFAULT NULL,
  `total_matches_played` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `round_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `flag_image`, `total_goals_count`, `total_matches_played`, `group_id`, `round_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Russia', 'image/flags/c8VLwZ_1526145656.download.png', NULL, NULL, 1, 1, 1, '2018-05-12 11:35:56', '2018-05-12 11:35:56'),
(2, 'S.Arabia', 'image/flags/GMkpon_1526145982.plus.png', NULL, NULL, 1, 1, 1, '2018-05-12 11:41:22', '2018-05-12 11:41:22'),
(3, 'Egypt', 'image/flags/McCWfc_1526147030.egypt.jpg', NULL, NULL, 1, 1, 1, '2018-05-12 11:58:50', '2018-05-12 11:58:50'),
(4, 'Uruguay', 'image/flags/BiRxvH_1526147149.urugway.png', NULL, NULL, 1, 1, 1, '2018-05-12 12:00:49', '2018-05-12 12:00:49'),
(5, 'Portugal', 'image/flags/etamMN_1526147917.portugal.png', NULL, NULL, 2, 1, 1, '2018-05-12 12:13:37', '2018-05-12 12:13:37'),
(6, 'Spain', 'image/flags/ZGuXOG_1526147935.spain.png', NULL, NULL, 2, 1, 1, '2018-05-12 12:13:55', '2018-05-12 12:13:55'),
(7, 'Morocco', 'image/flags/ibRPxQ_1526148039.morocco.png', NULL, NULL, 2, 1, 1, '2018-05-12 12:15:39', '2018-05-12 12:15:39'),
(8, 'Iran', 'image/flags/8DL3ta_1526148119.iran.png', NULL, NULL, 2, 1, 1, '2018-05-12 12:16:59', '2018-05-12 12:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_group_id_foreign` (`group_id`),
  ADD KEY `countries_round_id_foreign` (`round_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `countries_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `countries_round_id_foreign` FOREIGN KEY (`round_id`) REFERENCES `rounds` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
