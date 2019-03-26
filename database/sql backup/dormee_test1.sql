-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 04:04 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dormee_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'cleanliness', '2019-03-16 18:15:58', '2019-03-16 18:15:58'),
(2, 'safety', '2019-03-16 18:15:58', '2019-03-16 18:15:58'),
(3, 'ambiance', '2019-03-16 18:15:58', '2019-03-16 18:15:58'),
(4, 'facilities', '2019-03-16 18:15:58', '2019-03-16 18:15:58'),
(5, 'access_to_transport', '2019-03-16 18:15:58', '2019-03-16 18:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `boarder_schedules`
--

CREATE TABLE `boarder_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `boarder_id` int(10) UNSIGNED NOT NULL,
  `schedule` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dorms`
--

CREATE TABLE `dorms` (
  `id` int(10) UNSIGNED NOT NULL,
  `landlord_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genders` enum('Male','Female','Mixed','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `curfew` time NOT NULL DEFAULT '10:00:00',
  `rooms` enum('1','2','3','4+') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_permit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dorms`
--

INSERT INTO `dorms` (`id`, `landlord_id`, `status`, `name`, `genders`, `curfew`, `rooms`, `address`, `business_permit`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '232', 'Female', '10:00:00', '1', '223', '232', '23', '23.00', '2019-03-16 16:00:19', '2019-03-16 16:23:45'),
(2, 2, 0, 'Sophia Edwards', 'Male', '00:00:11', '1', 'Madison Avenue 123', '1111111111', '121', '122.00', '2019-03-16 20:35:13', '2019-03-16 20:35:13'),
(3, 2, 0, 'Sophia Edwards', 'Male', '00:12:12', '1', 'Madison Avenue 123', '1211212', '121', '121.00', '2019-03-16 20:37:03', '2019-03-16 20:37:03'),
(4, 2, 0, 'Sophia Edwards', 'Male', '00:12:12', '1', 'Madison Avenue 123', '1211212', '121', '121.00', '2019-03-16 20:37:27', '2019-03-16 20:37:27'),
(5, 2, 0, 'Sophia Edwards', 'Male', '00:12:12', '1', 'Madison Avenue 123', '1211212', '121', '121.00', '2019-03-16 20:39:00', '2019-03-16 20:39:00'),
(6, 2, 0, 'Sophia Edwards', 'Male', '00:12:12', '1', 'Madison Avenue 123', '1211212', '121', '121.00', '2019-03-16 20:40:13', '2019-03-16 20:40:13'),
(7, 2, 0, 'Sophia Edwards', 'Male', '00:12:12', '1', 'Madison Avenue 123', '1211212', '121', '121.00', '2019-03-16 20:40:37', '2019-03-16 20:40:37'),
(8, 2, 0, 'Sophia Edwards', 'Male', '00:12:12', '1', 'Madison Avenue 123', '1211212', '121', '121.00', '2019-03-16 20:43:09', '2019-03-16 20:43:09'),
(9, 2, 0, 'Sophia Edwards', 'Male', '00:12:12', '1', 'Madison Avenue 123', '1211212', '121', '121.00', '2019-03-16 20:43:56', '2019-03-16 20:43:56'),
(10, 2, 0, '1212', 'Male', '00:00:01', '1', '1212', '11111111111', '11', '1.00', '2019-03-16 21:14:45', '2019-03-16 21:14:45'),
(11, 2, 0, 'Sophia Edwards21', 'Mixed', '02:32:33', '1', 'Madison Avenue 123232', '121222', '232', '23.00', '2019-03-16 21:20:52', '2019-03-16 21:20:52'),
(12, 2, 0, 'Sophia Edwards21', 'Mixed', '02:32:33', '1', 'Madison Avenue 123232', '121222', '232', '23.00', '2019-03-16 21:22:20', '2019-03-16 21:22:20'),
(13, 2, 0, '121', 'Female', '00:12:12', '1', '1212', '12121212', '1212', '1212.00', '2019-03-16 21:24:37', '2019-03-16 21:24:37'),
(14, 2, 0, '121', 'Female', '00:12:12', '1', '1212', '12121212', '1212', '1212.00', '2019-03-16 21:26:12', '2019-03-16 21:26:12'),
(15, 2, 0, '121211', 'Male', '00:12:12', '1', '212', '111111111', '111111111', '1.00', '2019-03-16 21:26:29', '2019-03-16 21:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `dorm_attributes`
--

CREATE TABLE `dorm_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `dorm_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dorm_attributes`
--

INSERT INTO `dorm_attributes` (`id`, `dorm_id`, `attribute_id`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '2019-03-16 21:22:20', '2019-03-16 21:22:20'),
(2, 13, 1, '2019-03-16 21:24:37', '2019-03-16 21:24:37'),
(3, 14, 1, '2019-03-16 21:26:12', '2019-03-16 21:26:12'),
(4, 15, 1, '2019-03-16 21:26:29', '2019-03-16 21:26:29'),
(5, 15, 2, '2019-03-16 21:26:29', '2019-03-16 21:26:29'),
(6, 15, 3, '2019-03-16 21:26:29', '2019-03-16 21:26:29'),
(7, 15, 4, '2019-03-16 21:26:30', '2019-03-16 21:26:30'),
(8, 15, 5, '2019-03-16 21:26:30', '2019-03-16 21:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `dorm_boarders`
--

CREATE TABLE `dorm_boarders` (
  `id` int(10) UNSIGNED NOT NULL,
  `dorm_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dorm_filters`
--

CREATE TABLE `dorm_filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dorm_filters`
--

INSERT INTO `dorm_filters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'roommates', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(2, 'guests_allowed', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(3, 'pets', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(4, 'kitchen', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(5, 'electric_fan', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(6, 'air_con', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(7, 'laundromat', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(8, 'internet', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(9, 'tv', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(10, 'closet', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(11, 'parking', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(12, 'elevator', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(13, 'wi_fi', '2019-03-16 18:20:53', '2019-03-16 18:20:53'),
(14, 'bathroom', '2019-03-16 18:20:53', '2019-03-16 18:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `dorm_photos`
--

CREATE TABLE `dorm_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `dorm_id` int(10) UNSIGNED NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_type` enum('main','secondary') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dorm_photos`
--

INSERT INTO `dorm_photos` (`id`, `dorm_id`, `photo`, `photo_type`, `created_at`, `updated_at`) VALUES
(1, 10, 'public\\images\\users\\2019-03-17-coconut_design_elements_vector_graphic_571945.jpg', 'main', '2019-03-16 21:14:46', '2019-03-16 21:14:46'),
(2, 15, 'public\\images\\users\\2019-03-17-cover.jpg.png', 'main', '2019-03-16 21:26:30', '2019-03-16 21:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `activity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_03_13_1_create_roommate_filters_table', 1),
(24, '2015_03_13_2_create_dorm_filters_table', 1),
(25, '2016_03_14_3_create_occupations_table', 1),
(26, '2017_03_13_4_create_ratings_table', 1),
(27, '2018_02_11_5_create_attributes_table', 1),
(28, '2020_03_14_6_create_user_types_table', 1),
(29, '2020_10_12_7_create_users_table', 1),
(30, '2021_10_12_8_create_password_resets_table', 1),
(31, '2023_03_13_9_create_dorms_table', 1),
(32, '2023_03_16_10_create_dorm_attributes_table', 1),
(33, '2023_04_13_11_create_dorm_boarders_table', 1),
(34, '2024_03_13_12_create_user_dorm_applications_table', 1),
(35, '2024_03_13_13_create_logs_table', 1),
(36, '2025_03_14_14_create_dorm_photos_table', 1),
(37, '2026_03_14_15_create_specific_dorm_filters_table', 1),
(38, '2027_03_14_16_create_specific_roommate_filters_table', 1),
(39, '2028_03_13_17_create_user_dorm_attribute_ratings_table', 1),
(40, '2029_03_13_18_create_user_bookmarks_table', 1),
(41, '2030_03_13_19_create_user_dorm_reviews_table', 1),
(42, '2031_03_14_20_create_user_dorm_reports_table', 1),
(43, '2032_03_14_21_create_boarder_schedules_table', 1),
(44, '2034_03_14_22_create_user_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `occupations`
--

CREATE TABLE `occupations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occupations`
--

INSERT INTO `occupations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Student', '2019-03-15 06:59:34', '2019-03-15 06:59:34'),
(2, 'Employee', '2019-03-15 06:59:34', '2019-03-15 06:59:34'),
(3, 'Other', '2019-03-15 06:59:39', '2019-03-15 06:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-03-17 05:23:56', '2019-03-17 05:23:56'),
(2, 2, '2019-03-17 05:23:56', '2019-03-17 05:23:56'),
(3, 3, '2019-03-17 05:23:56', '2019-03-17 05:23:56'),
(4, 4, '2019-03-17 05:23:56', '2019-03-17 05:23:56'),
(5, 5, '2019-03-17 05:23:56', '2019-03-17 05:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `roommate_filters`
--

CREATE TABLE `roommate_filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specific_dorm_filters`
--

CREATE TABLE `specific_dorm_filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `dorm_id` int(10) UNSIGNED NOT NULL,
  `filter_id` int(10) UNSIGNED NOT NULL,
  `value` tinyint(4) DEFAULT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specific_dorm_filters`
--

INSERT INTO `specific_dorm_filters` (`id`, `dorm_id`, `filter_id`, `value`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 2, NULL, NULL, '2019-03-16 20:37:03', '2019-03-16 20:37:03'),
(2, 4, 2, NULL, NULL, '2019-03-16 20:37:27', '2019-03-16 20:37:27'),
(3, 5, 2, NULL, NULL, '2019-03-16 20:39:00', '2019-03-16 20:39:00'),
(4, 6, 2, NULL, NULL, '2019-03-16 20:40:13', '2019-03-16 20:40:13'),
(5, 7, 2, NULL, NULL, '2019-03-16 20:40:38', '2019-03-16 20:40:38'),
(6, 8, 2, NULL, NULL, '2019-03-16 20:43:09', '2019-03-16 20:43:09'),
(7, 9, 2, NULL, NULL, '2019-03-16 20:43:56', '2019-03-16 20:43:56'),
(8, 10, 5, NULL, NULL, '2019-03-16 21:14:45', '2019-03-16 21:14:45'),
(9, 11, 2, NULL, NULL, '2019-03-16 21:20:52', '2019-03-16 21:20:52'),
(10, 11, 6, NULL, NULL, '2019-03-16 21:20:52', '2019-03-16 21:20:52'),
(11, 11, 9, NULL, NULL, '2019-03-16 21:20:52', '2019-03-16 21:20:52'),
(12, 11, 10, NULL, NULL, '2019-03-16 21:20:52', '2019-03-16 21:20:52'),
(13, 12, 2, NULL, NULL, '2019-03-16 21:22:20', '2019-03-16 21:22:20'),
(14, 12, 6, NULL, NULL, '2019-03-16 21:22:20', '2019-03-16 21:22:20'),
(15, 12, 9, NULL, NULL, '2019-03-16 21:22:20', '2019-03-16 21:22:20'),
(16, 12, 10, NULL, NULL, '2019-03-16 21:22:20', '2019-03-16 21:22:20'),
(17, 13, 3, NULL, NULL, '2019-03-16 21:24:37', '2019-03-16 21:24:37'),
(18, 13, 6, NULL, NULL, '2019-03-16 21:24:37', '2019-03-16 21:24:37'),
(19, 13, 7, NULL, NULL, '2019-03-16 21:24:37', '2019-03-16 21:24:37'),
(20, 14, 3, NULL, NULL, '2019-03-16 21:26:12', '2019-03-16 21:26:12'),
(21, 14, 6, NULL, NULL, '2019-03-16 21:26:12', '2019-03-16 21:26:12'),
(22, 14, 7, NULL, NULL, '2019-03-16 21:26:12', '2019-03-16 21:26:12'),
(23, 15, 8, NULL, NULL, '2019-03-16 21:26:29', '2019-03-16 21:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `specific_roommate_filters`
--

CREATE TABLE `specific_roommate_filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `roommate_id` int(10) UNSIGNED NOT NULL,
  `filter_id` int(10) UNSIGNED NOT NULL,
  `value` tinyint(4) NOT NULL,
  `frequency` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_flagged` tinyint(4) NOT NULL DEFAULT '0',
  `user_type_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation_id` int(10) UNSIGNED NOT NULL,
  `is_roommate` tinyint(4) NOT NULL DEFAULT '0',
  `birthdate` date NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_flagged`, `user_type_id`, `username`, `email`, `password`, `first_name`, `last_name`, `gender`, `occupation_id`, `is_roommate`, `birthdate`, `phone`, `address`, `about`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'admin', 'gokagav@virtual-email.com', '$2y$10$JhRH4bl913UbBjX5qfy5qu9tMoueM5m/DfoXqDl1BcQ/sDRzmzOCC', 'ere', 'erer', 'Male', 1, 0, '2019-03-28', '1212', '1212', '1212', 'msari.PNG', 'fNQi4KTvs6ndayBBDyQf7BTbZAVaYJgI16pHjNEoq3Xlok1zoHjHyxdQwIuF', '2019-03-14 23:51:17', '2019-03-14 23:51:17'),
(2, 0, 2, 'lulu', 'goggles@zep-hyr.com', '$2y$10$TMugNvNWEILu0u0FWzx1xOq9Vsvj0ybBgs9G47Knq46wXLUOz.VHC', 'Sophia', 'Edwards', 'Female', 2, 0, '2019-03-13', '232', 'Madison Avenue 123', '2323', 'public\\images\\users\\2019-03-16-coconut_design_elements_vector_graphic_571945.jpg', 'YPE1VPAu2UbXyy5N18b7ldrHlgKMpiMuSoIOJvn91NPeWlhS80Sxliz6Ae3a', '2019-03-15 20:11:51', '2019-03-15 20:11:51'),
(5, 0, 2, 'aaa', 'goggles@zep-hyr.co', '$2y$10$vr3VqQodqa35PHFOb.LImOnHx1YG7.jWaxUw7WJ9k8bW19ntwRGLi', 'Sophia', 'Edwards', 'Male', 2, 0, '2019-03-22', '23232', 'Madison Avenue 123', '232323', 'public\\images\\users\\2019-03-16-cover.jpg.png', 'GE9uBkaK5MYJTcD7H7wwIu9qYlsScG1DUNork3u4zJLBhLBw95kZuwhODqD0', '2019-03-15 20:14:31', '2019-03-15 20:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_bookmarks`
--

CREATE TABLE `user_bookmarks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `dorm_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_dorm_applications`
--

CREATE TABLE `user_dorm_applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `dorm_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `is_verified` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_dorm_attribute_ratings`
--

CREATE TABLE `user_dorm_attribute_ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `dorm_attribute_id` int(10) UNSIGNED NOT NULL,
  `rating` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `rating_id` int(10) UNSIGNED DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_dorm_attribute_ratings`
--

INSERT INTO `user_dorm_attribute_ratings` (`id`, `user_id`, `dorm_attribute_id`, `rating`, `rating_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, '1', 1, '2019-03-16 21:26:29', '2019-03-16 21:26:29'),
(2, 2, 5, '1', 1, '2019-03-16 21:26:29', '2019-03-16 21:26:29'),
(3, 2, 6, '1', 1, '2019-03-16 21:26:30', '2019-03-16 21:26:30'),
(4, 2, 7, '1', 1, '2019-03-16 21:26:30', '2019-03-16 21:26:30'),
(5, 2, 8, '1', 1, '2019-03-16 21:26:30', '2019-03-16 21:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_dorm_reports`
--

CREATE TABLE `user_dorm_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `dorm_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_dorm_reviews`
--

CREATE TABLE `user_dorm_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `dorm_id` int(10) UNSIGNED NOT NULL,
  `review` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `recepient_id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2019-03-15 06:59:02', '2019-03-15 06:59:02'),
(2, 'Landlord', '2019-03-15 06:59:02', '2019-03-15 06:59:02'),
(3, 'Boarder', '2019-03-15 06:59:14', '2019-03-15 06:59:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boarder_schedules`
--
ALTER TABLE `boarder_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `boarder_schedules_boarder_id_foreign` (`boarder_id`);

--
-- Indexes for table `dorms`
--
ALTER TABLE `dorms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dorms_landlord_id_foreign` (`landlord_id`);

--
-- Indexes for table `dorm_attributes`
--
ALTER TABLE `dorm_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dorm_attributes_dorm_id_foreign` (`dorm_id`),
  ADD KEY `dorm_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `dorm_boarders`
--
ALTER TABLE `dorm_boarders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dorm_boarders_dorm_id_foreign` (`dorm_id`),
  ADD KEY `dorm_boarders_user_id_foreign` (`user_id`);

--
-- Indexes for table `dorm_filters`
--
ALTER TABLE `dorm_filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dorm_photos`
--
ALTER TABLE `dorm_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dorm_photos_dorm_id_foreign` (`dorm_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupations`
--
ALTER TABLE `occupations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roommate_filters`
--
ALTER TABLE `roommate_filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specific_dorm_filters`
--
ALTER TABLE `specific_dorm_filters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specific_dorm_filters_dorm_id_foreign` (`dorm_id`),
  ADD KEY `specific_dorm_filters_filter_id_foreign` (`filter_id`);

--
-- Indexes for table `specific_roommate_filters`
--
ALTER TABLE `specific_roommate_filters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specific_roommate_filters_roommate_id_foreign` (`roommate_id`),
  ADD KEY `specific_roommate_filters_filter_id_foreign` (`filter_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_type_id_foreign` (`user_type_id`),
  ADD KEY `users_occupation_id_foreign` (`occupation_id`);

--
-- Indexes for table `user_bookmarks`
--
ALTER TABLE `user_bookmarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_bookmarks_user_id_foreign` (`user_id`),
  ADD KEY `user_bookmarks_dorm_id_foreign` (`dorm_id`);

--
-- Indexes for table `user_dorm_applications`
--
ALTER TABLE `user_dorm_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_dorm_applications_user_id_foreign` (`user_id`),
  ADD KEY `user_dorm_applications_dorm_id_foreign` (`dorm_id`),
  ADD KEY `user_dorm_applications_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `user_dorm_attribute_ratings`
--
ALTER TABLE `user_dorm_attribute_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_dorm_attribute_ratings_user_id_foreign` (`user_id`),
  ADD KEY `user_dorm_attribute_ratings_dorm_attribute_id_foreign` (`dorm_attribute_id`),
  ADD KEY `user_dorm_attribute_ratings_rating_id_foreign` (`rating_id`);

--
-- Indexes for table `user_dorm_reports`
--
ALTER TABLE `user_dorm_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_dorm_reports_user_id_foreign` (`user_id`),
  ADD KEY `user_dorm_reports_dorm_id_foreign` (`dorm_id`),
  ADD KEY `user_dorm_reports_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `user_dorm_reviews`
--
ALTER TABLE `user_dorm_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_dorm_reviews_user_id_foreign` (`user_id`),
  ADD KEY `user_dorm_reviews_dorm_id_foreign` (`dorm_id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_messages_sender_id_foreign` (`sender_id`),
  ADD KEY `user_messages_recepient_id_foreign` (`recepient_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `boarder_schedules`
--
ALTER TABLE `boarder_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dorms`
--
ALTER TABLE `dorms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dorm_attributes`
--
ALTER TABLE `dorm_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dorm_boarders`
--
ALTER TABLE `dorm_boarders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dorm_filters`
--
ALTER TABLE `dorm_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dorm_photos`
--
ALTER TABLE `dorm_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `occupations`
--
ALTER TABLE `occupations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roommate_filters`
--
ALTER TABLE `roommate_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specific_dorm_filters`
--
ALTER TABLE `specific_dorm_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `specific_roommate_filters`
--
ALTER TABLE `specific_roommate_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_bookmarks`
--
ALTER TABLE `user_bookmarks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_dorm_applications`
--
ALTER TABLE `user_dorm_applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_dorm_attribute_ratings`
--
ALTER TABLE `user_dorm_attribute_ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_dorm_reports`
--
ALTER TABLE `user_dorm_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_dorm_reviews`
--
ALTER TABLE `user_dorm_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boarder_schedules`
--
ALTER TABLE `boarder_schedules`
  ADD CONSTRAINT `boarder_schedules_boarder_id_foreign` FOREIGN KEY (`boarder_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `dorms`
--
ALTER TABLE `dorms`
  ADD CONSTRAINT `dorms_landlord_id_foreign` FOREIGN KEY (`landlord_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `dorm_attributes`
--
ALTER TABLE `dorm_attributes`
  ADD CONSTRAINT `dorm_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `dorm_attributes_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`);

--
-- Constraints for table `dorm_boarders`
--
ALTER TABLE `dorm_boarders`
  ADD CONSTRAINT `dorm_boarders_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`),
  ADD CONSTRAINT `dorm_boarders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `dorm_photos`
--
ALTER TABLE `dorm_photos`
  ADD CONSTRAINT `dorm_photos_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `specific_dorm_filters`
--
ALTER TABLE `specific_dorm_filters`
  ADD CONSTRAINT `specific_dorm_filters_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`),
  ADD CONSTRAINT `specific_dorm_filters_filter_id_foreign` FOREIGN KEY (`filter_id`) REFERENCES `dorm_filters` (`id`);

--
-- Constraints for table `specific_roommate_filters`
--
ALTER TABLE `specific_roommate_filters`
  ADD CONSTRAINT `specific_roommate_filters_filter_id_foreign` FOREIGN KEY (`filter_id`) REFERENCES `roommate_filters` (`id`),
  ADD CONSTRAINT `specific_roommate_filters_roommate_id_foreign` FOREIGN KEY (`roommate_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_occupation_id_foreign` FOREIGN KEY (`occupation_id`) REFERENCES `occupations` (`id`),
  ADD CONSTRAINT `users_user_type_id_foreign` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`);

--
-- Constraints for table `user_bookmarks`
--
ALTER TABLE `user_bookmarks`
  ADD CONSTRAINT `user_bookmarks_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`),
  ADD CONSTRAINT `user_bookmarks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_dorm_applications`
--
ALTER TABLE `user_dorm_applications`
  ADD CONSTRAINT `user_dorm_applications_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_dorm_applications_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`),
  ADD CONSTRAINT `user_dorm_applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_dorm_attribute_ratings`
--
ALTER TABLE `user_dorm_attribute_ratings`
  ADD CONSTRAINT `user_dorm_attribute_ratings_dorm_attribute_id_foreign` FOREIGN KEY (`dorm_attribute_id`) REFERENCES `dorm_attributes` (`id`),
  ADD CONSTRAINT `user_dorm_attribute_ratings_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `ratings` (`id`),
  ADD CONSTRAINT `user_dorm_attribute_ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_dorm_reports`
--
ALTER TABLE `user_dorm_reports`
  ADD CONSTRAINT `user_dorm_reports_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_dorm_reports_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`),
  ADD CONSTRAINT `user_dorm_reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_dorm_reviews`
--
ALTER TABLE `user_dorm_reviews`
  ADD CONSTRAINT `user_dorm_reviews_dorm_id_foreign` FOREIGN KEY (`dorm_id`) REFERENCES `dorms` (`id`),
  ADD CONSTRAINT `user_dorm_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD CONSTRAINT `user_messages_recepient_id_foreign` FOREIGN KEY (`recepient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
