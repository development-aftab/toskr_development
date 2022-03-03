-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2022 at 02:37 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devcusto_toskr`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-10-28 13:24:41', '2021-10-28 13:24:41'),
(2, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-10-28 13:25:27', '2021-10-28 13:25:27'),
(3, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-10-28 13:25:40', '2021-10-28 13:25:40'),
(4, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-10-28 13:28:47', '2021-10-28 13:28:47'),
(5, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-10-28 14:22:09', '2021-10-28 14:22:09'),
(6, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-28 14:51:08', '2021-10-28 14:51:08'),
(7, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-28 14:51:41', '2021-10-28 14:51:41'),
(8, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-28 14:51:47', '2021-10-28 14:51:47'),
(9, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-28 14:55:48', '2021-10-28 14:55:48'),
(10, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-10-28 14:56:01', '2021-10-28 14:56:01'),
(11, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-10-28 15:35:47', '2021-10-28 15:35:47'),
(12, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-28 15:35:55', '2021-10-28 15:35:55'),
(13, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-28 15:40:56', '2021-10-28 15:40:56'),
(14, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-28 15:56:11', '2021-10-28 15:56:11'),
(15, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-29 11:30:53', '2021-10-29 11:30:53'),
(16, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-10-29 11:52:39', '2021-10-29 11:52:39'),
(17, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-29 16:53:49', '2021-10-29 16:53:49'),
(18, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-29 17:37:57', '2021-10-29 17:37:57'),
(19, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-29 18:26:53', '2021-10-29 18:26:53'),
(20, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-29 18:42:44', '2021-10-29 18:42:44'),
(21, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-29 19:32:40', '2021-10-29 19:32:40'),
(22, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-10-29 19:34:28', '2021-10-29 19:34:28'),
(23, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 11:24:59', '2021-11-01 11:24:59'),
(24, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 13:23:03', '2021-11-01 13:23:03'),
(25, 'js', 'LoggedOut', 13, 'App\\User', 13, 'App\\User', '[]', '2021-11-01 13:32:20', '2021-11-01 13:32:20'),
(26, 'asif', 'LoggedOut', 14, 'App\\User', 14, 'App\\User', '[]', '2021-11-01 13:33:37', '2021-11-01 13:33:37'),
(27, 'walid', 'LoggedOut', 15, 'App\\User', 15, 'App\\User', '[]', '2021-11-01 13:35:01', '2021-11-01 13:35:01'),
(28, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 13:35:08', '2021-11-01 13:35:08'),
(29, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 13:38:49', '2021-11-01 13:38:49'),
(30, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-01 13:39:04', '2021-11-01 13:39:04'),
(31, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-01 14:27:34', '2021-11-01 14:27:34'),
(32, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-01 15:06:08', '2021-11-01 15:06:08'),
(33, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 15:06:13', '2021-11-01 15:06:13'),
(34, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 15:08:03', '2021-11-01 15:08:03'),
(35, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-01 15:08:23', '2021-11-01 15:08:23'),
(36, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-01 15:25:42', '2021-11-01 15:25:42'),
(37, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 15:25:51', '2021-11-01 15:25:51'),
(38, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 15:41:37', '2021-11-01 15:41:37'),
(39, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-01 15:42:58', '2021-11-01 15:42:58'),
(40, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-01 15:45:30', '2021-11-01 15:45:30'),
(41, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 15:47:33', '2021-11-01 15:47:33'),
(42, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 17:22:03', '2021-11-01 17:22:03'),
(43, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 17:22:11', '2021-11-01 17:22:11'),
(44, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 17:23:47', '2021-11-01 17:23:47'),
(45, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-01 17:24:07', '2021-11-01 17:24:07'),
(46, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-01 19:07:25', '2021-11-01 19:07:25'),
(47, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-01 19:07:30', '2021-11-01 19:07:30'),
(48, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-01 19:34:16', '2021-11-01 19:34:16'),
(49, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-01 19:58:10', '2021-11-01 19:58:10'),
(50, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-01 19:58:18', '2021-11-01 19:58:18'),
(51, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-02 11:09:25', '2021-11-02 11:09:25'),
(52, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-02 11:09:37', '2021-11-02 11:09:37'),
(53, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-02 11:09:47', '2021-11-02 11:09:47'),
(54, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-02 11:12:11', '2021-11-02 11:12:11'),
(55, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-02 15:52:05', '2021-11-02 15:52:05'),
(56, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-02 15:52:11', '2021-11-02 15:52:11'),
(57, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-02 19:00:51', '2021-11-02 19:00:51'),
(58, 'aftab . ali', 'LoggedIn', 6, 'App\\User', 6, 'App\\User', '[]', '2021-11-02 19:00:58', '2021-11-02 19:00:58'),
(59, 'aftab . ali', 'LoggedOut', 6, 'App\\User', 6, 'App\\User', '[]', '2021-11-02 19:03:09', '2021-11-02 19:03:09'),
(60, 'ali', 'LoggedIn', 11, 'App\\User', 11, 'App\\User', '[]', '2021-11-02 19:03:23', '2021-11-02 19:03:23'),
(61, 'ali', 'LoggedOut', 11, 'App\\User', 11, 'App\\User', '[]', '2021-11-02 19:03:28', '2021-11-02 19:03:28'),
(62, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-02 19:03:37', '2021-11-02 19:03:37'),
(63, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-02 19:05:44', '2021-11-02 19:05:44'),
(64, 'aftab . ali', 'LoggedIn', 6, 'App\\User', 6, 'App\\User', '[]', '2021-11-02 19:05:53', '2021-11-02 19:05:53'),
(65, 'aftab . ali', 'LoggedOut', 6, 'App\\User', 6, 'App\\User', '[]', '2021-11-02 19:06:32', '2021-11-02 19:06:32'),
(66, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-02 19:06:43', '2021-11-02 19:06:43'),
(67, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-03 11:00:25', '2021-11-03 11:00:25'),
(68, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-03 11:59:11', '2021-11-03 11:59:11'),
(69, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-03 11:59:49', '2021-11-03 11:59:49'),
(70, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-03 12:14:29', '2021-11-03 12:14:29'),
(71, 'shareef', 'LoggedIn', 10, 'App\\User', 10, 'App\\User', '[]', '2021-11-03 12:14:37', '2021-11-03 12:14:37'),
(72, 'shareef', 'LoggedOut', 10, 'App\\User', 10, 'App\\User', '[]', '2021-11-03 12:15:25', '2021-11-03 12:15:25'),
(73, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-03 12:15:36', '2021-11-03 12:15:36'),
(74, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-03 15:17:41', '2021-11-03 15:17:41'),
(75, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-03 15:55:42', '2021-11-03 15:55:42'),
(76, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-03 15:55:51', '2021-11-03 15:55:51'),
(77, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-03 18:53:48', '2021-11-03 18:53:48'),
(78, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-04 18:02:05', '2021-11-04 18:02:05'),
(79, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-04 19:07:27', '2021-11-04 19:07:27'),
(80, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-04 19:07:34', '2021-11-04 19:07:34'),
(81, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-04 19:07:48', '2021-11-04 19:07:48'),
(82, 'aftab . ali', 'LoggedIn', 6, 'App\\User', 6, 'App\\User', '[]', '2021-11-04 19:08:49', '2021-11-04 19:08:49'),
(83, 'aftab . ali', 'LoggedOut', 6, 'App\\User', 6, 'App\\User', '[]', '2021-11-04 19:09:35', '2021-11-04 19:09:35'),
(84, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-04 19:09:47', '2021-11-04 19:09:47'),
(85, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-04 19:10:24', '2021-11-04 19:10:24'),
(86, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-04 19:10:39', '2021-11-04 19:10:39'),
(87, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-04 19:11:14', '2021-11-04 19:11:14'),
(88, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-04 19:23:06', '2021-11-04 19:23:06'),
(89, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-04 19:23:18', '2021-11-04 19:23:18'),
(90, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-04 19:43:20', '2021-11-04 19:43:20'),
(91, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-04 19:43:54', '2021-11-04 19:43:54'),
(92, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-04 19:44:11', '2021-11-04 19:44:11'),
(93, 'shareef', 'LoggedIn', 10, 'App\\User', 10, 'App\\User', '[]', '2021-11-04 19:44:17', '2021-11-04 19:44:17'),
(94, 'shareef', 'LoggedOut', 10, 'App\\User', 10, 'App\\User', '[]', '2021-11-04 19:44:35', '2021-11-04 19:44:35'),
(95, 'waqas', 'LoggedIn', 7, 'App\\User', 7, 'App\\User', '[]', '2021-11-04 19:44:43', '2021-11-04 19:44:43'),
(96, 'waqas', 'LoggedOut', 7, 'App\\User', 7, 'App\\User', '[]', '2021-11-04 19:45:02', '2021-11-04 19:45:02'),
(97, 'rashed', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2021-11-04 19:45:08', '2021-11-04 19:45:08'),
(98, 'rashed', 'LoggedOut', 8, 'App\\User', 8, 'App\\User', '[]', '2021-11-04 19:45:19', '2021-11-04 19:45:19'),
(99, 'imdad ali . qr', 'LoggedIn', 5, 'App\\User', 5, 'App\\User', '[]', '2021-11-04 19:45:26', '2021-11-04 19:45:26'),
(100, 'imdad ali . qr', 'LoggedOut', 5, 'App\\User', 5, 'App\\User', '[]', '2021-11-04 19:45:40', '2021-11-04 19:45:40'),
(101, 'ali', 'LoggedIn', 11, 'App\\User', 11, 'App\\User', '[]', '2021-11-04 19:45:46', '2021-11-04 19:45:46'),
(102, 'ali', 'LoggedOut', 11, 'App\\User', 11, 'App\\User', '[]', '2021-11-04 19:46:03', '2021-11-04 19:46:03'),
(103, 'kc', 'LoggedIn', 12, 'App\\User', 12, 'App\\User', '[]', '2021-11-04 19:46:09', '2021-11-04 19:46:09'),
(104, 'kc', 'LoggedOut', 12, 'App\\User', 12, 'App\\User', '[]', '2021-11-04 19:46:21', '2021-11-04 19:46:21'),
(105, 'walid', 'LoggedIn', 15, 'App\\User', 15, 'App\\User', '[]', '2021-11-04 19:46:40', '2021-11-04 19:46:40'),
(106, 'walid', 'LoggedOut', 15, 'App\\User', 15, 'App\\User', '[]', '2021-11-04 19:46:47', '2021-11-04 19:46:47'),
(107, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-04 19:46:55', '2021-11-04 19:46:55'),
(108, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-04 19:48:48', '2021-11-04 19:48:48'),
(109, 'rashed', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2021-11-04 19:48:59', '2021-11-04 19:48:59'),
(110, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-05 11:58:31', '2021-11-05 11:58:31'),
(111, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-05 12:30:47', '2021-11-05 12:30:47'),
(112, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-05 12:31:49', '2021-11-05 12:31:49'),
(113, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-05 19:03:44', '2021-11-05 19:03:44'),
(114, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-05 20:30:39', '2021-11-05 20:30:39'),
(115, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-08 11:07:39', '2021-11-08 11:07:39'),
(116, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-08 11:11:00', '2021-11-08 11:11:00'),
(117, 'aftab . ali', 'LoggedIn', 6, 'App\\User', 6, 'App\\User', '[]', '2021-11-08 11:11:07', '2021-11-08 11:11:07'),
(118, 'aftab . ali', 'LoggedOut', 6, 'App\\User', 6, 'App\\User', '[]', '2021-11-08 11:11:59', '2021-11-08 11:11:59'),
(119, 'ali', 'LoggedIn', 11, 'App\\User', 11, 'App\\User', '[]', '2021-11-08 11:16:13', '2021-11-08 11:16:13'),
(120, 'ali', 'LoggedOut', 11, 'App\\User', 11, 'App\\User', '[]', '2021-11-08 11:17:23', '2021-11-08 11:17:23'),
(121, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-08 11:17:37', '2021-11-08 11:17:37'),
(122, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-08 15:04:24', '2021-11-08 15:04:24'),
(123, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-08 15:04:29', '2021-11-08 15:04:29'),
(124, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 11:19:39', '2021-11-09 11:19:39'),
(125, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 11:53:39', '2021-11-09 11:53:39'),
(126, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 11:53:45', '2021-11-09 11:53:45'),
(127, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 14:57:43', '2021-11-09 14:57:43'),
(128, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-09 14:57:52', '2021-11-09 14:57:52'),
(129, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 15:26:34', '2021-11-09 15:26:34'),
(130, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-09 16:17:00', '2021-11-09 16:17:00'),
(131, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-09 16:17:04', '2021-11-09 16:17:04'),
(132, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 16:24:52', '2021-11-09 16:24:52'),
(133, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-09 16:25:06', '2021-11-09 16:25:06'),
(134, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-09 17:07:40', '2021-11-09 17:07:40'),
(135, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-09 17:07:58', '2021-11-09 17:07:58'),
(136, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-09 17:08:04', '2021-11-09 17:08:04'),
(137, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 17:08:11', '2021-11-09 17:08:11'),
(138, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 17:09:18', '2021-11-09 17:09:18'),
(139, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-09 17:17:04', '2021-11-09 17:17:04'),
(140, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 17:17:20', '2021-11-09 17:17:20'),
(141, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-09 17:51:07', '2021-11-09 17:51:07'),
(142, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 18:55:00', '2021-11-09 18:55:00'),
(143, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-09 18:55:07', '2021-11-09 18:55:07'),
(144, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-09 19:42:43', '2021-11-09 19:42:43'),
(145, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-09 19:42:48', '2021-11-09 19:42:48'),
(146, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-09 19:45:10', '2021-11-09 19:45:10'),
(147, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 19:45:24', '2021-11-09 19:45:24'),
(148, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-09 19:51:07', '2021-11-09 19:51:07'),
(149, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-09 19:51:20', '2021-11-09 19:51:20'),
(150, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 11:12:14', '2021-11-10 11:12:14'),
(151, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 11:12:45', '2021-11-10 11:12:45'),
(152, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-10 11:17:35', '2021-11-10 11:17:35'),
(153, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-10 11:27:38', '2021-11-10 11:27:38'),
(154, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-10 12:13:51', '2021-11-10 12:13:51'),
(155, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 12:13:59', '2021-11-10 12:13:59'),
(156, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-10 14:35:05', '2021-11-10 14:35:05'),
(157, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-10 15:48:13', '2021-11-10 15:48:13'),
(158, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 15:48:25', '2021-11-10 15:48:25'),
(159, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 16:07:45', '2021-11-10 16:07:45'),
(160, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-10 16:09:40', '2021-11-10 16:09:40'),
(161, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-10 16:15:35', '2021-11-10 16:15:35'),
(162, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 16:15:52', '2021-11-10 16:15:52'),
(163, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 18:23:51', '2021-11-10 18:23:51'),
(164, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-10 18:23:57', '2021-11-10 18:23:57'),
(165, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-10 18:33:21', '2021-11-10 18:33:21'),
(166, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 18:33:33', '2021-11-10 18:33:33'),
(167, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-10 18:56:38', '2021-11-10 18:56:38'),
(168, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-10 18:56:47', '2021-11-10 18:56:47'),
(169, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-10 19:48:56', '2021-11-10 19:48:56'),
(170, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 13:00:54', '2021-11-11 13:00:54'),
(171, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 13:10:04', '2021-11-11 13:10:04'),
(172, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-11 13:10:11', '2021-11-11 13:10:11'),
(173, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-11 13:11:05', '2021-11-11 13:11:05'),
(174, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 13:11:15', '2021-11-11 13:11:15'),
(175, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-11 15:04:04', '2021-11-11 15:04:04'),
(176, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-11 18:19:19', '2021-11-11 18:19:19'),
(177, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 18:42:46', '2021-11-11 18:42:46'),
(178, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 18:42:51', '2021-11-11 18:42:51'),
(179, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 18:43:56', '2021-11-11 18:43:56'),
(180, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-11 18:44:02', '2021-11-11 18:44:02'),
(181, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-11 18:54:33', '2021-11-11 18:54:33'),
(182, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 18:54:43', '2021-11-11 18:54:43'),
(183, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 18:57:45', '2021-11-11 18:57:45'),
(184, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 18:57:51', '2021-11-11 18:57:51'),
(185, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 18:58:04', '2021-11-11 18:58:04'),
(186, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-11 18:58:17', '2021-11-11 18:58:17'),
(187, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-11 19:01:05', '2021-11-11 19:01:05'),
(188, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-11 19:01:32', '2021-11-11 19:01:32'),
(189, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-11 19:03:34', '2021-11-11 19:03:34'),
(190, 'ali', 'LoggedIn', 11, 'App\\User', 11, 'App\\User', '[]', '2021-11-11 19:03:45', '2021-11-11 19:03:45'),
(191, 'ali', 'LoggedOut', 11, 'App\\User', 11, 'App\\User', '[]', '2021-11-11 19:03:53', '2021-11-11 19:03:53'),
(192, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-11 19:04:02', '2021-11-11 19:04:02'),
(193, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 11:30:38', '2021-11-12 11:30:38'),
(194, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-12 12:02:56', '2021-11-12 12:02:56'),
(195, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 12:32:25', '2021-11-12 12:32:25'),
(196, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-12 12:32:35', '2021-11-12 12:32:35'),
(197, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-12 14:45:03', '2021-11-12 14:45:03'),
(198, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 14:45:22', '2021-11-12 14:45:22'),
(199, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-12 14:47:28', '2021-11-12 14:47:28'),
(200, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 18:01:16', '2021-11-12 18:01:16'),
(201, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 18:01:23', '2021-11-12 18:01:23'),
(202, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 18:52:03', '2021-11-12 18:52:03'),
(203, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 19:10:58', '2021-11-12 19:10:58'),
(204, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 19:11:04', '2021-11-12 19:11:04'),
(205, 'waqas', 'LoggedIn', 16, 'App\\User', 16, 'App\\User', '[]', '2021-11-12 19:19:03', '2021-11-12 19:19:03'),
(206, 'waqas', 'LoggedOut', 16, 'App\\User', 16, 'App\\User', '[]', '2021-11-12 19:19:10', '2021-11-12 19:19:10'),
(207, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-12 19:22:28', '2021-11-12 19:22:28'),
(208, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-12 19:25:53', '2021-11-12 19:25:53'),
(209, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-12 19:37:44', '2021-11-12 19:37:44'),
(210, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-12 19:37:52', '2021-11-12 19:37:52'),
(211, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 19:38:07', '2021-11-12 19:38:07'),
(212, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-12 19:38:17', '2021-11-12 19:38:17'),
(213, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-12 19:38:24', '2021-11-12 19:38:24'),
(214, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-12 19:41:22', '2021-11-12 19:41:22'),
(215, 'Zk', 'LoggedOut', 17, 'App\\User', 17, 'App\\User', '[]', '2021-11-15 12:12:40', '2021-11-15 12:12:40'),
(216, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-15 12:24:06', '2021-11-15 12:24:06'),
(217, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-15 12:37:15', '2021-11-15 12:37:15'),
(218, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-15 12:38:21', '2021-11-15 12:38:21'),
(219, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-15 13:22:17', '2021-11-15 13:22:17'),
(220, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-15 15:58:58', '2021-11-15 15:58:58'),
(221, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-15 16:02:27', '2021-11-15 16:02:27'),
(222, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 16:05:44', '2021-11-15 16:05:44'),
(223, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 16:34:08', '2021-11-15 16:34:08'),
(224, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-15 16:34:19', '2021-11-15 16:34:19'),
(225, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-15 16:36:18', '2021-11-15 16:36:18'),
(226, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 16:36:27', '2021-11-15 16:36:27'),
(227, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 16:40:17', '2021-11-15 16:40:17'),
(228, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 16:40:22', '2021-11-15 16:40:22'),
(229, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-15 17:29:20', '2021-11-15 17:29:20'),
(230, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 19:20:26', '2021-11-15 19:20:26'),
(231, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-15 19:20:39', '2021-11-15 19:20:39'),
(232, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-15 19:29:58', '2021-11-15 19:29:58'),
(233, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 19:30:09', '2021-11-15 19:30:09'),
(234, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 19:40:57', '2021-11-15 19:40:57'),
(235, 'national', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-15 19:41:06', '2021-11-15 19:41:06'),
(236, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-15 19:41:22', '2021-11-15 19:41:22'),
(237, 'sam', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-15 19:41:35', '2021-11-15 19:41:35'),
(238, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-15 19:41:54', '2021-11-15 19:41:54'),
(239, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 19:42:07', '2021-11-15 19:42:07'),
(240, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-15 19:46:25', '2021-11-15 19:46:25'),
(241, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-16 08:55:57', '2021-11-16 08:55:57'),
(242, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-16 08:59:06', '2021-11-16 08:59:06'),
(243, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 09:03:35', '2021-11-16 09:03:35'),
(244, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 09:04:24', '2021-11-16 09:04:24'),
(245, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 09:04:29', '2021-11-16 09:04:29'),
(246, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 09:12:15', '2021-11-16 09:12:15'),
(247, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-16 09:12:32', '2021-11-16 09:12:32'),
(248, 'Admin', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-16 11:47:27', '2021-11-16 11:47:27'),
(249, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-11-16 12:01:18', '2021-11-16 12:01:18'),
(250, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 12:01:27', '2021-11-16 12:01:27'),
(251, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 12:05:23', '2021-11-16 12:05:23'),
(252, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 12:32:40', '2021-11-16 12:32:40'),
(253, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 12:51:27', '2021-11-16 12:51:27'),
(254, 'waqas', 'LoggedIn', 16, 'App\\User', 16, 'App\\User', '[]', '2021-11-16 12:51:59', '2021-11-16 12:51:59'),
(255, 'waqas', 'LoggedOut', 16, 'App\\User', 16, 'App\\User', '[]', '2021-11-16 12:52:08', '2021-11-16 12:52:08'),
(256, 'jojo', 'LoggedOut', 18, 'App\\User', 18, 'App\\User', '[]', '2021-11-16 13:04:34', '2021-11-16 13:04:34'),
(257, 'waqas', 'LoggedOut', 7, 'App\\User', 7, 'App\\User', '[]', '2021-11-16 13:15:27', '2021-11-16 13:15:27'),
(258, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 13:36:20', '2021-11-16 13:36:20'),
(259, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-16 14:31:47', '2021-11-16 14:31:47'),
(260, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-16 14:32:32', '2021-11-16 14:32:32'),
(261, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-17 18:39:42', '2021-11-17 18:39:42'),
(262, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-17 19:11:29', '2021-11-17 19:11:29'),
(263, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-18 11:14:03', '2021-11-18 11:14:03'),
(264, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-18 12:09:01', '2021-11-18 12:09:01'),
(265, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-11-18 12:52:44', '2021-11-18 12:52:44'),
(266, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-18 13:03:51', '2021-11-18 13:03:51'),
(267, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-18 13:06:21', '2021-11-18 13:06:21'),
(268, 'oxford grammar', 'LoggedOut', 19, 'App\\User', 19, 'App\\User', '[]', '2021-11-18 13:11:31', '2021-11-18 13:11:31'),
(269, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-18 13:11:53', '2021-11-18 13:11:53'),
(270, 'oxford grammar', 'LoggedOut', 19, 'App\\User', 19, 'App\\User', '[]', '2021-11-18 13:34:14', '2021-11-18 13:34:14'),
(271, 'john', 'LoggedOut', 20, 'App\\User', 20, 'App\\User', '[]', '2021-11-18 13:35:45', '2021-11-18 13:35:45'),
(272, 'oxford grammar', 'LoggedOut', 19, 'App\\User', 19, 'App\\User', '[]', '2021-11-18 15:32:44', '2021-11-18 15:32:44'),
(273, 'john', 'LoggedOut', 20, 'App\\User', 20, 'App\\User', '[]', '2021-11-18 19:42:11', '2021-11-18 19:42:11'),
(274, 'oxford grammar', 'LoggedOut', 19, 'App\\User', 19, 'App\\User', '[]', '2021-11-18 19:52:05', '2021-11-18 19:52:05'),
(275, 'kashan ali qureshi', 'LoggedOut', 21, 'App\\User', 21, 'App\\User', '[]', '2021-11-18 19:55:12', '2021-11-18 19:55:12'),
(276, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-11-19 12:51:37', '2021-11-19 12:51:37'),
(277, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-19 13:35:41', '2021-11-19 13:35:41'),
(278, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-30 01:02:41', '2021-11-30 01:02:41'),
(279, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-11-30 01:10:23', '2021-11-30 01:10:23'),
(280, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-11-30 03:58:30', '2021-11-30 03:58:30'),
(281, 'shareef', 'LoggedOut', 10, 'App\\User', 10, 'App\\User', '[]', '2021-12-03 23:28:56', '2021-12-03 23:28:56'),
(282, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-12-03 23:31:43', '2021-12-03 23:31:43'),
(283, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-12-03 23:40:02', '2021-12-03 23:40:02'),
(284, 'Tafsol', 'LoggedOut', 22, 'App\\User', 22, 'App\\User', '[]', '2021-12-03 23:44:35', '2021-12-03 23:44:35'),
(285, 'Muhammad', 'LoggedOut', 23, 'App\\User', 23, 'App\\User', '[]', '2021-12-04 00:15:32', '2021-12-04 00:15:32'),
(286, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-12-04 00:19:46', '2021-12-04 00:19:46'),
(287, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-12-07 03:02:33', '2021-12-07 03:02:33'),
(288, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-12-08 04:13:38', '2021-12-08 04:13:38'),
(289, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-12-09 01:11:50', '2021-12-09 01:11:50'),
(290, 'shareef', 'LoggedOut', 10, 'App\\User', 10, 'App\\User', '[]', '2021-12-09 01:15:20', '2021-12-09 01:15:20'),
(291, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-12-14 03:02:33', '2021-12-14 03:02:33'),
(292, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-12-14 03:08:10', '2021-12-14 03:08:10'),
(293, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-12-14 03:08:15', '2021-12-14 03:08:15'),
(294, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-12-17 04:58:15', '2021-12-17 04:58:15'),
(295, 'Admin', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2021-12-17 04:58:46', '2021-12-17 04:58:46'),
(296, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-12-17 04:59:21', '2021-12-17 04:59:21'),
(297, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-12-17 04:59:44', '2021-12-17 04:59:44'),
(298, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-12-22 17:31:55', '2021-12-22 17:31:55'),
(299, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-12-22 17:33:17', '2021-12-22 17:33:17'),
(300, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-12-22 17:37:27', '2021-12-22 17:37:27'),
(301, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-12-22 17:39:14', '2021-12-22 17:39:14'),
(302, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2021-12-23 00:12:42', '2021-12-23 00:12:42'),
(303, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-12-23 01:23:54', '2021-12-23 01:23:54'),
(304, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-12-23 01:26:42', '2021-12-23 01:26:42'),
(305, 'shareef', 'LoggedOut', 10, 'App\\User', 10, 'App\\User', '[]', '2021-12-23 04:18:52', '2021-12-23 04:18:52'),
(306, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2021-12-23 04:21:53', '2021-12-23 04:21:53'),
(307, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-12-23 04:25:15', '2021-12-23 04:25:15'),
(308, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2021-12-24 21:09:11', '2021-12-24 21:09:11'),
(309, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2021-12-24 21:10:11', '2021-12-24 21:10:11'),
(310, 'sam', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2022-01-04 01:43:31', '2022-01-04 01:43:31'),
(311, 'ali', 'LoggedOut', 11, 'App\\User', 11, 'App\\User', '[]', '2022-01-04 01:43:53', '2022-01-04 01:43:53'),
(312, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2022-01-04 01:45:34', '2022-01-04 01:45:34'),
(313, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2022-01-05 16:40:40', '2022-01-05 16:40:40'),
(314, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2022-01-09 18:54:09', '2022-01-09 18:54:09'),
(315, 'User', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2022-01-11 05:59:17', '2022-01-11 05:59:17'),
(316, 'User', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2022-01-11 05:59:46', '2022-01-11 05:59:46'),
(317, 'ali', 'LoggedOut', 11, 'App\\User', 11, 'App\\User', '[]', '2022-01-18 01:44:27', '2022-01-18 01:44:27'),
(318, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2022-01-18 02:49:30', '2022-01-18 02:49:30'),
(319, 'ali', 'LoggedOut', 11, 'App\\User', 11, 'App\\User', '[]', '2022-01-18 03:07:44', '2022-01-18 03:07:44'),
(320, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2022-01-18 03:29:33', '2022-01-18 03:29:33'),
(321, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2022-01-25 01:51:05', '2022-01-25 01:51:05'),
(322, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2022-01-25 01:51:15', '2022-01-25 01:51:15'),
(323, 'zuhi', 'LoggedIn', 4, 'App\\User', 4, 'App\\User', '[]', '2022-01-25 02:19:04', '2022-01-25 02:19:04'),
(324, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2022-01-25 02:25:05', '2022-01-25 02:25:05'),
(325, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2022-01-25 02:25:30', '2022-01-25 02:25:30'),
(326, 'zuhi', 'LoggedOut', 4, 'App\\User', 4, 'App\\User', '[]', '2022-01-25 02:26:07', '2022-01-25 02:26:07'),
(327, 'national', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2022-01-25 02:37:30', '2022-01-25 02:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `task_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `created_at`, `updated_at`, `deleted_at`, `task_id`, `employee_id`, `company_id`, `manager_id`, `Name`, `attachment`, `description`) VALUES
(32, '2021-11-18 13:01:07', '2021-11-18 13:01:07', NULL, '4', '4', 3, 4, 'Complaint (1).pdf', 'taskattachment/YTRlZlE3QC7WXq1Ps0zFg2K8AkjaB4cPMz7YjqDH.pdf', 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample \"zero-padded integers\":'),
(33, '2021-11-18 13:01:24', '2021-11-18 13:01:24', NULL, '4', '4', 3, 4, 'Tosker.pdf', 'taskattachment/WH3o7ua6beXsCg0QO4lDNLem6MuRu091E9paROn0.pdf', 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample \"zero-padded integers\":'),
(34, '2021-11-18 13:01:39', '2021-11-18 13:01:39', NULL, '4', '4', 3, 4, 'logo (1).png', 'taskattachment/xj709vh9TcV0kwe4Gt4CrBU0HKEgbIcsbsJGmVv1.png', 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample \"zero-padded integers\":'),
(35, '2021-11-18 13:02:00', '2021-11-18 13:02:00', NULL, '4', '4', 3, 4, 'Certificate (5).pdf', 'taskattachment/39w45zc02cGctx1VkKFPRFyW8ij3NmEs3ladOp0u.pdf', 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample \"zero-padded integers\":'),
(36, '2021-11-18 13:02:16', '2021-11-18 13:02:16', NULL, '4', '4', 3, 4, 'soccer-ball-with-denmark-national-flag-colors-vector-35742830.jpg', 'taskattachment/7OdloMAuUmEwaYOoEQMpSTjV3BvXTcK8PpABxVIq.jpeg', 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample \"zero-padded integers\":'),
(37, '2021-11-18 13:02:32', '2021-11-18 13:02:32', NULL, '4', '4', 3, 4, 'Safeguarding (admin).docx', 'taskattachment/rWIIVGNd1lTum3J8mwrm014pO7kWbUkk7PD5OabE.docx', 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample \"zero-padded integers\":'),
(38, '2021-12-03 23:22:23', '2021-12-03 23:22:23', NULL, '7', '4', 3, 4, 'Progressive World - Stage 2 (1) (1).pdf', 'taskattachment/tsnOXAAhn26YkEOLL4J17pj6dvUWOmgcXayuCv8t.pdf', NULL),
(39, '2021-12-03 23:52:05', '2021-12-03 23:52:05', NULL, '7', '4', 3, 4, '6DA439B1-5E8D-4D0C-A503-9FE6C19933A9.jpeg', 'taskattachment/rjinvP4BraOJAvvI0sRLFsXnjsVDlxHzJTDT826W.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `common_settings`
--

CREATE TABLE `common_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_logo_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `common_settings`
--

INSERT INTO `common_settings` (`id`, `created_at`, `updated_at`, `deleted_at`, `title`, `favicon`, `dashboard_logo`, `dashboard_logo_text`, `footer_text`) VALUES
(1, '2021-10-28 13:19:45', '2021-10-28 13:19:45', NULL, 'Tosker', 'AdminDashboard/default_logo.png', 'AdminDashboard/default_logo.png', 'AdminDashboard/default_logo_text.png', '2021 © Tosker form admin.');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `email`, `phone`, `message`, `state`) VALUES
(1, '2021-11-16 12:33:07', '2021-11-16 12:33:07', NULL, 'sam . ali', 'zuhi@yhoo.com', '0321321235', 'asdasdasdasd', 'ssss'),
(2, '2021-11-16 12:38:43', '2021-11-16 12:38:43', NULL, 'aliza ali', 'alizssz@admin.com', '0321321235', 'assssssssssssssssssssssssssssssssss', 'ssss'),
(3, '2021-11-16 12:46:30', '2021-11-16 12:46:30', NULL, 'zain . ali', 'zainzzzz@truck.com', '0321321235', 'sasddddddddddddddddd', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `coworker_requests`
--

CREATE TABLE `coworker_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `taski_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_manager` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coworker_requests`
--

INSERT INTO `coworker_requests` (`id`, `created_at`, `updated_at`, `deleted_at`, `taski_id`, `manager_id`, `user_id`, `status`, `task_manager`) VALUES
(1, '2021-12-09 01:11:40', '2021-12-09 01:12:40', NULL, '3', '4', '10', '1', '9'),
(2, '2021-12-14 03:14:39', '2021-12-14 03:15:10', NULL, '7', '4', '9', '1', '10');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `company_id`) VALUES
(1, '2021-10-29 13:09:19', '2021-10-29 13:09:19', NULL, 'Production', '3'),
(2, '2021-10-29 13:09:33', '2021-10-29 13:09:33', NULL, 'Research and Development', '3'),
(3, '2021-10-29 13:09:43', '2021-10-29 13:09:43', NULL, 'Purchasing', '3'),
(4, '2021-10-29 13:09:54', '2021-10-29 13:09:54', NULL, 'Marketing', '3'),
(5, '2021-10-29 13:10:10', '2021-10-29 13:10:10', NULL, 'Human Resource Management.', '3'),
(6, '2021-10-29 13:10:22', '2021-10-29 13:10:22', NULL, 'Accounting', '3'),
(7, '2021-10-29 17:58:58', '2021-10-29 17:58:58', NULL, 'JZ Department', '3'),
(8, '2021-11-18 13:14:10', '2021-11-18 13:14:10', NULL, 'Accounting', '19'),
(9, '2021-12-03 23:32:57', '2021-12-03 23:32:57', NULL, 'Sales', '22'),
(10, '2021-12-24 21:08:18', '2021-12-24 21:08:18', NULL, 'Demo Department', '3'),
(11, '2022-01-18 03:28:45', '2022-01-18 03:28:45', NULL, 'Samosa', '3');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_at`, `updated_at`, `deleted_at`, `question`, `answer`) VALUES
(1, '2021-11-15 13:49:44', '2021-11-15 13:49:44', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(2, '2021-11-15 13:50:56', '2021-11-15 13:50:56', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(3, '2021-11-15 13:51:13', '2021-11-15 13:51:13', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(4, '2021-11-15 13:51:22', '2021-11-15 13:51:22', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(5, '2021-11-15 13:49:44', '2021-11-15 13:49:44', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(6, '2021-11-15 13:50:56', '2021-11-15 13:50:56', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(7, '2021-11-15 13:51:13', '2021-11-15 13:51:13', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(8, '2021-11-15 13:51:22', '2021-11-15 13:51:22', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(9, '2021-11-15 13:51:22', '2021-11-15 13:51:22', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `created_at`, `updated_at`, `deleted_at`, `title`, `description`, `image`, `slug`) VALUES
(1, '2021-11-15 13:07:20', '2021-11-16 14:30:50', NULL, 'User friendly', 'Easy to use for people who are either new or professionals', 'features/MhaLIhMGB1zaciiBS20erIXGpwBbwRIlO0jX80yh.png', 'friendly_button'),
(2, '2021-11-15 13:10:07', '2021-11-15 13:10:07', NULL, 'User Friendly System', 'Tasking is very easy to use, besides that it also has many excellent features that other task managers don\'t have, so task management can be done easily', 'features/OcrGH2AlXxQ1DdmoW7rrjM2N83tQZFOKHWvuE1hx.png', 'friendly_title'),
(3, '2021-11-15 13:12:00', '2021-11-15 13:12:00', NULL, 'Trusted App', 'Official application that is trusted for security', 'features/MBbRZMMjfQKeHuSzSXyWgAmMKUHQGxrQTeka0bDd.png', 'Trusted_button'),
(4, '2021-11-15 13:12:39', '2021-11-15 13:12:39', NULL, 'Trusted App', 'Tasking is very easy to use, besides that it also has many excellent features that other task managers don\'t have, so task management can be done easily', 'features/bBW7jM4qr5L6BmXFLXNFH5UqzzmZfwZkUJEqtzU7.png', 'Trusted_title'),
(5, '2021-11-15 13:13:16', '2021-11-15 13:13:16', NULL, 'Flexiblility', 'Task can be opened on all existing devices', 'features/fa7IGkg5RyjYZaS5Yg4Uvr9oBUb8SqYUi6cXboID.png', 'Flexiblility_button'),
(6, '2021-11-15 13:14:02', '2021-11-15 13:14:02', NULL, 'Flexiblility', 'Tasking is very easy to use, besides that it also has many excellent features that other task managers don\'t have, so task management can be done easily', 'features/1UB9T0V3SR9n8AKcBJRY5WIywSxU4UFhvAUK3Ea9.png', 'Flexiblility_title'),
(7, '2021-11-15 13:14:46', '2021-11-15 13:14:46', NULL, '100% Free', 'This application is completely free, without any charge', 'features/LQ07FDDhx24sLlqaSwyTw3ZK6k8nFZQwbs8pLpCc.png', 'Free_button'),
(8, '2021-11-15 13:15:30', '2021-11-15 13:15:30', NULL, '100% Free System', 'Tasking is very easy to use, besides that it also has many excellent features that other task managers don\'t have, so task management can be done easily', 'features/RPRXy3RDnfoTwydVyJpjCJumhUodkLnxFRf4wPMz.png', 'Free_title');

-- --------------------------------------------------------

--
-- Table structure for table `group_chats`
--

CREATE TABLE `group_chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `members` text COLLATE utf8mb4_unicode_ci,
  `group_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_chats`
--

INSERT INTO `group_chats` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `admin_id`, `members`, `group_id`, `image`) VALUES
(8, '2021-11-09 13:00:47', '2021-11-17 19:01:20', '2021-11-17 19:01:20', 'texting', 4, '[\"9\",\"10\"]', '10990228', 'groupimage/P2rHQjCccEirgt7nYVuPTQpgA9zRxU7qaKTv8VOR.png'),
(9, '2021-11-09 13:41:51', '2021-11-17 19:39:31', NULL, 'testing', 4, '[\"9\"]', '10990229', 'groupimage/ULnbUv82KlZFcaIeaJmiiSUysVOj4VoIwne7UDK2.jpeg'),
(10, '2021-11-10 12:23:18', '2021-11-17 20:03:09', NULL, 'company meeting', 2, '[\"9\",\"10\"]', '109902210', 'groupimage/YwsNegCjsUinbkCd0m33wjQ39aFsUIFM0pCYXXpE.jpeg'),
(11, '2021-11-11 18:57:08', '2021-11-17 19:39:59', '2021-11-17 19:39:59', 'testing', 4, '[\"9\",\"10\"]', '109902211', 'groupimage/7MPGHFVjJwbR7TdNhEPw7tUpeqXYCEC02yXH6T22.png'),
(12, '2021-11-15 16:07:29', '2021-11-15 16:07:29', NULL, 'meeting', 4, '[\"9\",\"10\"]', '109902212', 'groupimage/oAhsj3bTsEqD4a6PZzhFsHNnbF4L1dyBHd4XTLpX.png'),
(13, '2021-11-18 16:50:01', '2021-11-18 16:50:01', NULL, 'texting', 6, '[\"21\"]', '109902213', 'groupimage/R0ADIguUuKMi7awGJyKDGDOdL90rgy58pJg4kEnE.png'),
(14, '2021-11-18 16:50:15', '2021-11-18 16:50:15', NULL, 'meeting', 6, '[\"21\"]', '109902214', 'groupimage/xixBqsikS2incRUdIxU0vxWdqcJThpLJ4HY7LLnn.png'),
(15, '2021-11-18 16:51:00', '2021-11-18 16:51:00', NULL, 'meeting to night', 6, '[\"21\"]', '109902215', 'groupimage/qGsP6CNMkku2N2Cv4yEvJUlPSmlSSE5rpXXpLVke.png'),
(16, '2021-11-30 07:39:50', '2021-11-30 07:40:03', NULL, 'group12', 4, '[\"9\",\"10\"]', '109902216', 'groupimage/ALygYznFHNcRP4CGlcPTITi2JjmQVe8lWLjLZ751.jpeg'),
(17, '2021-12-17 04:56:33', '2021-12-17 04:56:33', NULL, 'meeting', 3, '[\"10\",\"4\",9]', '109902217', 'groupimage/1MKX4gRe0mCMXtj9nOCUJQ5kOPUxIaMcm5yyEZDt.jpeg'),
(18, '2021-12-17 04:57:18', '2021-12-17 04:57:18', NULL, 'testing', 3, '[\"10\",9]', '109902218', 'groupimage/6a8aM3CcT95E42Azznjck18gjWaTjdecbyui5ws3.png'),
(19, '2021-12-17 04:57:47', '2021-12-17 04:57:47', NULL, 'hello', 3, '[\"10\",9]', '109902219', 'groupimage/kdKgiT5ZmpPtNoAXmeAp5rWCoZWTproYzFdDXlhl.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `created_at`, `updated_at`, `deleted_at`, `title`, `description`, `image`) VALUES
(1, '2021-11-15 12:51:53', '2022-01-18 03:41:38', NULL, 'Where teams connect to testteteetete', 'samosa samosa', 'homepage/MKnvOCTu5mPqC69lQ3onS6X23Mz62r7FDkEyw9Ht.png');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works`
--

CREATE TABLE `how_it_works` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works`
--

INSERT INTO `how_it_works` (`id`, `created_at`, `updated_at`, `deleted_at`, `title`, `description`, `image`) VALUES
(1, '2021-11-15 13:38:49', '2021-11-15 13:38:49', NULL, 'Work the way you want', 'Toskr help you get organized, track every minute and ensure projects are delivered on time.', 'howitwork/LF6N7avwyTJJCDVDkEHmBOzb6RXtBs9QfLULthso.png'),
(2, '2021-11-15 13:40:43', '2021-11-15 13:40:43', NULL, 'Create your profile', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'howitwork/tVM0Aiysb8raYhZ3Ckl4MonJMG7AISazYinVbjHx.png'),
(3, '2021-11-15 13:45:02', '2021-11-15 13:45:02', NULL, 'Explore ways', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'howitwork/gZOfiACJ8j5s6k31eZVBRLs8gw5BKLABYh7xOVT0.png'),
(4, '2021-11-15 13:45:32', '2021-11-15 13:45:32', NULL, 'Get the task done', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'howitwork/ZKhRbdS5nu3FJA3kuDjzmAKlngdBMmJ13Il5KAMx.png');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `created_at`, `updated_at`, `deleted_at`, `phone`, `email`) VALUES
(1, '2021-11-16 11:56:57', '2021-11-16 11:56:57', NULL, '+1 123 456 7890', 'info@dreamstaff.com');

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unique_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`id`, `created_at`, `updated_at`, `deleted_at`, `company_id`, `department_id`, `role_id`, `email`, `url`, `status`, `unique_code`) VALUES
(3, '2021-10-29 17:38:56', '2021-11-01 13:23:35', '2021-11-01 13:23:35', '3', '4', '5', 'ali@yopmail.com', 'register_employee/92597740', '0', '92597740'),
(4, '2021-10-29 17:39:52', '2021-11-01 13:26:34', '2021-11-01 13:26:34', '3', '4', '4', 'ks@yopmail.com', 'register_employee/85748702', '0', '85748702'),
(5, '2021-10-29 17:42:47', '2021-11-01 13:29:11', '2021-11-01 13:29:11', '3', '4', '4', 'js@yopmail.com', 'register_employee/25950615', '0', '25950615'),
(6, '2021-10-29 17:46:10', '2021-11-01 13:33:13', '2021-11-01 13:33:13', '3', '4', '4', 'asif@yopmail.com', 'register_employee/57368104', '0', '57368104'),
(7, '2021-10-29 17:46:58', '2021-11-01 13:34:54', '2021-11-01 13:34:54', '3', '4', '4', 'walid@yopmail.com', 'register_employee/14021953', '0', '14021953'),
(8, '2021-10-29 17:48:13', '2021-11-15 12:12:27', '2021-11-15 12:12:27', '3', '4', '4', 'zk@yopmail.com', 'register_employee/28595638', '0', '28595638'),
(9, '2021-10-29 17:50:17', '2021-10-29 17:50:17', NULL, '3', '4', '4', 'jz@yopmail.com', 'register_employee/45892161', '0', '45892161'),
(10, '2021-10-29 17:51:00', '2021-10-29 17:51:00', NULL, '3', '4', '4', 'jojo@yopmail.com', 'register_employee/50268997', '0', '50268997'),
(11, '2021-10-29 17:52:34', '2021-10-29 17:52:34', NULL, '3', '4', '4', 'hi@yopmail.com', 'register_employee/20306134', '0', '20306134'),
(12, '2021-10-29 17:53:41', '2021-10-29 17:53:41', NULL, '3', '4', '4', 'aat@tafsol.com', 'register_employee/12638547', '0', '12638547'),
(13, '2021-10-29 17:55:03', '2021-10-29 17:55:03', NULL, '3', '4', '4', 'zat@tafsol.com', 'register_employee/22893189', '0', '22893189'),
(14, '2021-11-01 11:37:01', '2021-11-01 11:37:01', NULL, '3', '1', '4', 'waqas@yopmail.com', 'register_employee/85590380', '0', '85590380'),
(15, '2021-11-01 11:39:30', '2021-11-01 11:39:30', NULL, '3', '1', '4', 'aftab@yopmail.com', 'register_employee/42104298', '0', '42104298'),
(16, '2021-11-01 11:43:33', '2021-11-01 11:43:33', NULL, '3', '1', '4', 'zuhi@yahoo.com', 'register_employee/63623598', '0', '63623598'),
(18, '2021-11-12 19:38:45', '2021-11-12 19:38:45', NULL, '3', '1', '4', 'john@student.com', 'register_employee/13569630', '0', '13569630'),
(19, '2021-11-12 19:40:30', '2021-11-12 19:40:30', NULL, '3', '1', '4', 'john@student.com', 'register_employee/15841241', '0', '15841241'),
(20, '2021-11-30 01:11:48', '2021-11-30 01:11:48', NULL, '3', '1', '5', 'james123@yopmail.com', 'register_employee/33056629', '0', '33056629'),
(21, '2021-11-30 01:14:34', '2021-11-30 01:14:34', NULL, '3', '1', '5', 'james123@yopmail.com', 'register_employee/77801202', '0', '77801202'),
(22, '2021-11-30 01:16:20', '2021-11-30 01:16:20', NULL, '3', '1', '5', 'james123@yopmail.com', 'register_employee/78798682', '0', '78798682'),
(23, '2021-11-30 01:16:54', '2021-11-30 01:16:54', NULL, '3', '1', '5', 'imdad123@yopmail.com', 'register_employee/29971926', '0', '29971926'),
(24, '2021-11-30 01:17:40', '2021-11-30 01:17:40', NULL, '3', '1', '5', 'james@yopmail.com', 'register_employee/96529813', '0', '96529813'),
(25, '2021-12-03 23:35:02', '2021-12-03 23:35:02', NULL, '22', '9', '5', 'mct@tafsol.com', 'register_employee/95651628', '0', '95651628');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_mes` int(11) DEFAULT '0',
  `from_user_id` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_by_sender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_by_receiver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `group_mes`, `from_user_id`, `to_user_id`, `content`, `status`, `viewed_by_sender`, `viewed_by_receiver`, `task_id`) VALUES
(1, '2021-11-02 18:43:33', '2021-11-02 18:43:33', NULL, NULL, 0, 4, NULL, 'asdasd', NULL, NULL, '0', NULL),
(2, '2021-11-02 18:43:47', '2021-11-02 18:43:47', NULL, NULL, 0, 4, NULL, 'asdasd', NULL, NULL, '0', NULL),
(3, '2021-11-02 18:50:28', '2021-11-02 18:50:28', NULL, NULL, 0, 4, 6, 'asdasd', NULL, NULL, '0', 2),
(4, '2021-11-02 18:50:28', '2021-11-02 18:50:28', NULL, NULL, 0, 6, 4, 'asdasd', NULL, NULL, '0', 2),
(5, '2021-11-02 19:40:44', '2021-11-02 19:40:44', NULL, NULL, 0, 4, 9, 'sadasdasd', NULL, NULL, '0', 3),
(6, '2021-11-02 19:45:35', '2021-11-02 19:45:35', NULL, NULL, 0, 4, 9, 'zxczxczxc', NULL, NULL, '0', 3),
(7, '2021-11-02 19:46:18', '2021-11-02 19:46:18', NULL, NULL, 0, 4, 9, 'sdasdasd', NULL, NULL, '0', 3),
(8, '2021-11-02 19:48:55', '2021-11-02 19:48:55', NULL, NULL, 0, 4, 9, 'asdasdasd', NULL, NULL, '0', 3),
(9, '2021-11-02 19:49:13', '2021-11-02 19:49:13', NULL, NULL, 0, 4, 9, 'asdasdasd', NULL, NULL, '0', 2),
(10, '2021-11-02 19:52:24', '2021-11-02 19:52:24', NULL, NULL, 1, 4, 10990221, 'asdasdasdad', NULL, NULL, '0', 2),
(11, '2021-11-02 20:01:46', '2021-11-02 20:01:46', NULL, NULL, 0, 4, 9, 'task 2 ka kam kaha tk?', NULL, NULL, '0', 3),
(12, '2021-11-03 12:48:04', '2021-11-03 12:48:04', NULL, NULL, 0, 9, 9, 'dddsfsdf', NULL, NULL, '0', 2),
(13, '2021-11-03 13:30:25', '2021-11-03 13:30:25', NULL, NULL, 0, 9, 4, 'khsadakldm', NULL, NULL, '0', 2),
(14, '2021-11-08 15:12:27', '2021-11-08 15:12:27', NULL, NULL, 0, 4, 9, 'asdasdasd', NULL, NULL, '0', 3),
(15, '2021-11-08 15:12:28', '2021-11-08 15:12:28', NULL, NULL, 0, 4, 9, NULL, NULL, NULL, '0', 3),
(16, '2021-11-08 20:12:32', '2021-11-08 20:12:32', NULL, NULL, 0, 4, 9, 'hjdhasjhdsajhd dfskjfhusd sdfhsdjfdsf sdkdjfsdfbskdbf klnsdsffnsddlkfnsldkf lkksklfknsdklkfn lksdflnsdfdlnsddfdsklf klsdsfknsdfnsdfn lksdflknsknfskldkfnslkdfn lkkslkfjfksdldfksdjfklsdff klkjsfjsdlkdkffjskdldfkskdlf kljflkksdjdfkklsdjflksdjfkdslkf sdfnklsdnfksldf klskdsflksdndfklsdndf ndklsffnsldkfnsldf klsksndffklsdnflkksddf slkdnklsdflsnsffklsf dfnfdsklkfnkdsfnsf lsdsfnsdnflsdksdnfsdkf sdskkffnsdsfslkdfnsd', NULL, NULL, '0', 2),
(17, '2021-11-08 20:12:48', '2021-11-08 20:12:48', NULL, NULL, 0, 4, 9, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', NULL, NULL, '0', 2),
(18, '2021-11-08 20:13:14', '2021-11-08 20:13:14', NULL, NULL, 0, 4, 9, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', NULL, NULL, '0', 2),
(19, '2021-11-08 20:13:40', '2021-11-08 20:13:40', NULL, NULL, 0, 4, 10, 'sdasdasdasdasd', NULL, NULL, '0', 2),
(20, '2021-11-09 12:56:26', '2021-11-09 12:56:26', NULL, NULL, 1, 4, 10990226, 'hello all', NULL, NULL, '0', 4),
(21, '2021-11-09 13:41:23', '2021-11-09 13:41:23', NULL, NULL, 0, 4, 9, 'hello', NULL, NULL, '0', 4),
(22, '2021-11-09 17:29:02', '2021-11-09 17:29:02', NULL, NULL, 0, 4, 9, 'zxczxczxc', NULL, NULL, '0', 5),
(23, '2021-11-09 17:29:05', '2021-11-09 17:29:05', NULL, NULL, 0, 4, 10, 'zxcxczxczxc', NULL, NULL, '0', 5),
(24, '2021-11-09 19:51:55', '2021-11-09 19:51:55', NULL, NULL, 0, 4, 10, 'sasdasdasdasd', NULL, NULL, '0', 5),
(25, '2021-11-09 19:51:57', '2021-11-09 19:51:57', NULL, NULL, 0, 4, 10, 'asdadasdasd', NULL, NULL, '0', 5),
(26, '2021-11-09 19:51:59', '2021-11-09 19:51:59', NULL, NULL, 0, 4, 10, 'asdadadadasd', NULL, NULL, '0', 5),
(27, '2021-11-09 19:52:01', '2021-11-09 19:52:01', NULL, NULL, 0, 4, 10, 'assdasdadasds', NULL, NULL, '0', 5),
(28, '2021-11-09 19:52:05', '2021-11-09 19:52:05', NULL, NULL, 0, 4, 9, 'asdassdasdasd', NULL, NULL, '0', 5),
(29, '2021-11-10 11:26:56', '2021-11-10 11:26:56', NULL, NULL, 0, 3, 10, 'hello please jaldi kam karo', NULL, NULL, '0', 2),
(30, '2021-11-10 11:27:18', '2021-11-10 11:27:18', NULL, NULL, 0, 3, 9, '?', NULL, NULL, '0', 2),
(31, '2021-11-10 12:13:04', '2021-11-10 12:13:04', NULL, NULL, 1, 3, 10990228, 'asdasdasd', NULL, NULL, '0', 4),
(32, '2021-11-10 16:04:29', '2021-11-10 16:04:29', NULL, NULL, 0, 3, 4, 'hello zuhi please complete your tasks', NULL, NULL, '0', 4),
(33, '2021-11-10 16:52:28', '2021-11-10 16:52:28', NULL, NULL, 0, 3, 4, 'asdasdasd', NULL, NULL, '0', 4),
(34, '2021-11-10 16:53:51', '2021-11-10 16:53:51', NULL, NULL, 1, 3, 10990228, 'hello', NULL, NULL, '0', 4),
(35, '2021-11-10 16:54:46', '2021-11-10 16:54:46', NULL, NULL, 1, 3, 10990228, 'sss', NULL, NULL, '0', 4),
(36, '2021-11-10 16:54:49', '2021-11-10 16:54:49', NULL, NULL, 1, 3, 10990228, 'sss', NULL, NULL, '0', 4),
(37, '2021-11-10 16:55:02', '2021-11-10 16:55:02', NULL, NULL, 1, 3, 10990228, 'sss', NULL, NULL, '0', 4),
(38, '2021-11-10 16:55:29', '2021-11-10 16:55:29', NULL, NULL, 1, 3, 10990228, 'sss', NULL, NULL, '0', 4),
(39, '2021-11-10 16:55:59', '2021-11-10 16:55:59', NULL, NULL, 1, 3, 10990229, 'h', NULL, NULL, '0', 4),
(40, '2021-11-10 16:58:18', '2021-11-10 16:58:18', NULL, NULL, 1, 3, 10990229, 'a', NULL, NULL, '0', 4),
(41, '2021-11-10 16:58:32', '2021-11-10 16:58:32', NULL, NULL, 1, 3, 10990228, 'ddd', NULL, NULL, '0', 4),
(42, '2021-11-10 18:23:47', '2021-11-10 18:23:47', NULL, NULL, 0, 4, 9, 'hello', NULL, NULL, '0', 4),
(43, '2021-11-10 18:32:49', '2021-11-10 18:32:49', NULL, NULL, 1, 3, 10990229, 'ssss', NULL, NULL, '0', 4),
(44, '2021-11-10 18:33:55', '2021-11-10 18:33:55', NULL, NULL, 1, 4, 10990229, 'sss', NULL, NULL, '0', 4),
(45, '2021-11-10 18:36:21', '2021-11-10 18:36:21', NULL, NULL, 1, 4, 10990228, 's', NULL, NULL, '0', 4),
(46, '2021-11-10 18:36:26', '2021-11-10 18:36:26', NULL, NULL, 1, 4, 10990228, 's', NULL, NULL, '0', 4),
(47, '2021-11-10 18:36:56', '2021-11-10 18:36:56', NULL, NULL, 1, 4, 10990228, 's', NULL, NULL, '0', 4),
(48, '2021-11-10 18:37:42', '2021-11-10 18:37:42', NULL, NULL, 1, 4, 10990228, 's', NULL, NULL, '0', 4),
(49, '2021-11-10 18:42:02', '2021-11-10 18:42:02', NULL, NULL, 1, 4, 10990228, 'sss', NULL, NULL, '0', 4),
(50, '2021-11-10 18:43:43', '2021-11-10 18:43:43', NULL, NULL, 1, 4, 10990228, 'sss', NULL, NULL, '0', 4),
(51, '2021-11-10 19:50:44', '2021-11-10 19:50:44', NULL, NULL, 0, 4, 9, 'afsadasd', NULL, NULL, '0', 4),
(52, '2021-11-10 19:50:54', '2021-11-10 19:50:54', NULL, NULL, 0, 4, 9, 'asdasdasds', NULL, NULL, '0', 4),
(53, '2021-11-10 19:51:07', '2021-11-10 19:51:07', NULL, NULL, 0, 4, 9, 'asdadasd', NULL, NULL, '0', 4),
(54, '2021-11-10 19:51:22', '2021-11-10 19:51:22', NULL, NULL, 0, 9, 4, 'asdasdasdasd', NULL, NULL, '0', 4),
(55, '2021-11-10 19:51:34', '2021-11-10 19:51:34', NULL, NULL, 0, 4, 9, 'asdadasd', NULL, NULL, '0', 4),
(56, '2021-11-10 19:52:01', '2021-11-10 19:52:01', NULL, NULL, 0, 4, 9, 'ssss', NULL, NULL, '0', 4),
(57, '2021-11-10 19:52:19', '2021-11-10 19:52:19', NULL, NULL, 0, 9, 4, 'sssss', NULL, NULL, '0', 4),
(58, '2021-11-10 19:52:33', '2021-11-10 19:52:33', NULL, NULL, 0, 9, 4, 'sssss', NULL, NULL, '0', 4),
(59, '2021-11-10 19:52:43', '2021-11-10 19:52:43', NULL, NULL, 0, 4, 9, 'sssssss', NULL, NULL, '0', 4),
(60, '2021-11-10 19:57:03', '2021-11-10 19:57:03', NULL, NULL, 1, 4, 10990228, 'zxczxczxc', NULL, NULL, '0', 4),
(61, '2021-11-16 14:59:04', '2021-11-16 14:59:04', NULL, NULL, 1, 4, 109902212, 'ZXZxZX', NULL, NULL, '0', 4),
(62, '2021-11-16 15:00:02', '2021-11-16 15:00:02', NULL, NULL, 1, 4, 109902212, 'dsfsdfsdf', NULL, NULL, '0', 4),
(63, '2021-11-17 18:40:37', '2021-11-17 18:40:37', NULL, NULL, 1, 3, 109902212, 'ccvvxcv', NULL, NULL, '0', 4),
(64, '2021-11-18 12:55:41', '2021-11-18 12:55:41', NULL, NULL, 1, 4, 109902212, 'ssss', NULL, NULL, '0', 4),
(65, '2021-11-18 16:10:51', '2021-11-18 16:10:51', NULL, NULL, 0, 20, 21, 'hello', NULL, NULL, '0', 6),
(66, '2021-11-18 17:57:13', '2021-11-18 17:57:13', NULL, NULL, 1, 20, 109902213, 'xz', NULL, NULL, '0', 6),
(67, '2021-11-18 17:57:34', '2021-11-18 17:57:34', NULL, NULL, 1, 20, 109902213, 'x', NULL, NULL, '0', 6),
(68, '2021-11-18 18:22:38', '2021-11-18 18:22:38', NULL, NULL, 0, 20, 21, '4', NULL, NULL, '0', 6),
(69, '2021-11-18 18:22:44', '2021-11-18 18:22:44', NULL, NULL, 1, 20, 109902215, '4', NULL, NULL, '0', 6),
(70, '2021-11-18 19:41:49', '2021-11-18 19:41:49', NULL, NULL, 0, 20, 19, 'hello', NULL, NULL, '0', 6),
(71, '2021-11-18 19:42:06', '2021-11-18 19:42:06', NULL, NULL, 1, 20, 109902213, 'sdasdasd', NULL, NULL, '0', 6),
(72, '2021-12-03 23:23:02', '2021-12-03 23:23:02', NULL, NULL, 0, 4, 10, 'Haan bhai shuru kardo', NULL, NULL, '0', 7),
(73, '2021-12-03 23:23:03', '2021-12-03 23:23:03', NULL, NULL, 0, 4, 10, 'Haan bhai shuru kardo', NULL, NULL, '0', 7),
(74, '2022-02-01 02:55:53', '2022-02-01 02:55:53', NULL, NULL, 0, 4, 9, 'Hi', NULL, NULL, '0', 2),
(75, '2022-02-01 02:55:54', '2022-02-01 02:55:54', NULL, NULL, 0, 4, 9, NULL, NULL, NULL, '0', 2);

-- --------------------------------------------------------

--
-- Table structure for table `message_vieweds`
--

CREATE TABLE `message_vieweds` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `task_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_group` int(11) DEFAULT NULL,
  `group_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_vieweds`
--

INSERT INTO `message_vieweds` (`id`, `created_at`, `updated_at`, `deleted_at`, `task_id`, `send_to`, `receiver`, `is_group`, `group_id`, `viewed`) VALUES
(1, '2021-11-10 16:52:28', '2021-11-30 07:39:15', NULL, '4', '3', '4', 0, NULL, '1'),
(10, '2021-11-10 18:23:47', '2021-11-11 18:53:23', NULL, '4', '4', '9', 0, NULL, '1'),
(12, '2021-11-10 18:32:49', '2021-11-30 07:40:21', NULL, '4', '3', '4', 1, '10990229', '1'),
(20, '2021-11-10 19:50:44', '2021-11-11 18:53:23', NULL, '4', '4', '9', 0, NULL, '1'),
(21, '2021-11-10 19:50:54', '2021-11-11 18:53:23', NULL, '4', '4', '9', 0, NULL, '1'),
(22, '2021-11-10 19:51:07', '2021-11-11 18:53:23', NULL, '4', '4', '9', 0, NULL, '1'),
(23, '2021-11-10 19:51:22', '2021-11-30 07:40:25', NULL, '4', '9', '4', 0, NULL, '1'),
(24, '2021-11-10 19:51:35', '2021-11-11 18:53:23', NULL, '4', '4', '9', 0, NULL, '1'),
(25, '2021-11-10 19:52:01', '2021-11-11 18:53:23', NULL, '4', '4', '9', 0, NULL, '1'),
(26, '2021-11-10 19:52:19', '2021-11-30 07:40:25', NULL, '4', '9', '4', 0, NULL, '1'),
(27, '2021-11-10 19:52:33', '2021-11-30 07:40:25', NULL, '4', '9', '4', 0, NULL, '1'),
(28, '2021-11-10 19:52:43', '2021-11-11 18:53:23', NULL, '4', '4', '9', 0, NULL, '1'),
(29, '2021-11-10 19:57:03', '2021-11-11 18:53:32', NULL, '4', '4', '9', 1, '10990228', '1'),
(30, '2021-11-10 19:57:03', '2021-11-10 19:57:03', NULL, '4', '4', '10', 1, '10990228', '0'),
(31, '2021-11-10 19:57:03', '2021-11-17 19:01:21', NULL, '4', '4', '3', 1, '10990228', '1'),
(32, '2021-11-16 14:59:04', '2021-11-16 14:59:04', NULL, '4', '4', '9', 1, '109902212', '0'),
(33, '2021-11-16 14:59:04', '2021-11-16 14:59:04', NULL, '4', '4', '10', 1, '109902212', '0'),
(34, '2021-11-16 14:59:04', '2021-11-19 12:57:57', NULL, '4', '4', '3', 1, '109902212', '1'),
(35, '2021-11-16 15:00:02', '2021-11-16 15:00:02', NULL, '4', '4', '9', 1, '109902212', '0'),
(36, '2021-11-16 15:00:02', '2021-11-16 15:00:02', NULL, '4', '4', '10', 1, '109902212', '0'),
(37, '2021-11-16 15:00:02', '2021-11-19 12:57:57', NULL, '4', '4', '3', 1, '109902212', '1'),
(38, '2021-11-17 18:40:37', '2021-11-17 18:40:37', NULL, '4', '3', '9', 1, '109902212', '0'),
(39, '2021-11-17 18:40:37', '2021-11-17 18:40:37', NULL, '4', '3', '10', 1, '109902212', '0'),
(40, '2021-11-17 18:40:37', '2021-11-30 07:40:20', NULL, '4', '3', '4', 1, '109902212', '1'),
(41, '2021-11-18 12:55:41', '2021-11-18 12:55:41', NULL, '4', '4', '9', 1, '109902212', '0'),
(42, '2021-11-18 12:55:41', '2021-11-18 12:55:41', NULL, '4', '4', '10', 1, '109902212', '0'),
(43, '2021-11-18 12:55:41', '2021-11-19 12:57:57', NULL, '4', '4', '3', 1, '109902212', '1'),
(44, '2021-11-18 16:10:51', '2021-11-18 16:10:51', NULL, '6', '20', '21', 0, NULL, '0'),
(45, '2021-11-18 17:57:13', '2021-11-18 17:57:13', NULL, '6', '20', '21', 1, '109902213', '0'),
(46, '2021-11-18 17:57:13', '2021-11-18 19:51:33', NULL, '6', '20', '19', 1, '109902213', '1'),
(47, '2021-11-18 17:57:34', '2021-11-18 17:57:34', NULL, '6', '20', '21', 1, '109902213', '0'),
(48, '2021-11-18 17:57:34', '2021-11-18 19:51:33', NULL, '6', '20', '19', 1, '109902213', '1'),
(49, '2021-11-18 18:22:38', '2021-11-18 18:22:38', NULL, '6', '20', '21', 0, NULL, '0'),
(50, '2021-11-18 18:22:44', '2021-11-18 18:22:44', NULL, '6', '20', '21', 1, '109902215', '0'),
(51, '2021-11-18 18:22:44', '2021-11-18 19:51:35', NULL, '6', '20', '19', 1, '109902215', '1'),
(52, '2021-11-18 19:41:49', '2021-11-18 19:51:32', NULL, '6', '20', '19', 0, NULL, '1'),
(53, '2021-11-18 19:42:06', '2021-11-18 19:42:06', NULL, '6', '20', '21', 1, '109902213', '0'),
(54, '2021-11-18 19:42:06', '2021-11-18 19:51:33', NULL, '6', '20', '19', 1, '109902213', '1'),
(55, '2021-12-03 23:23:02', '2021-12-03 23:28:29', NULL, '7', '4', '10', 0, NULL, '1'),
(56, '2021-12-03 23:23:03', '2021-12-03 23:28:29', NULL, '7', '4', '10', 0, NULL, '1'),
(57, '2022-02-01 02:55:53', '2022-02-01 02:55:53', NULL, '2', '4', '9', 0, NULL, '0'),
(58, '2022-02-01 02:55:54', '2022-02-01 02:55:54', NULL, '2', '4', '9', 0, NULL, '0');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_193651_create_roles_permissions_tables', 1),
(4, '2018_06_15_045804_create_profiles_table', 1),
(5, '2018_06_15_092930_create_social_accounts_table', 1),
(6, '2018_06_16_054705_create_activity_log_table', 1),
(7, '2020_03_20_050141_create_failed_jobs_table', 1),
(8, '2021_10_26_005405_create_common_settings_table', 1),
(9, '2021_10_28_192600_create_companies_table', 2),
(10, '2021_10_29_165402_create_departments_table', 3),
(11, '2021_10_29_165824_create_employees_table', 4),
(12, '2021_10_29_205510_create_invitations_table', 5),
(13, '2021_11_01_193239_create_tasks_table', 6),
(14, '2021_11_01_202145_create_task_categories_table', 7),
(15, '2021_11_02_003559_create_task_assigneds_table', 8),
(16, '2021_11_02_161416_create_task_details_table', 9),
(17, '2021_11_02_162026_create_attachments_table', 10),
(18, '2021_11_02_162621_create_messages_table', 11),
(19, '2021_11_02_170735_create_progres_table', 12),
(20, '2021_11_02_181635_create_user_insights_table', 13),
(21, '2021_11_02_181656_create_task_insights_table', 14),
(22, '2021_11_02_215729_create_group_chats_table', 15),
(23, '2021_11_10_211337_create_message_vieweds_table', 16),
(24, '2021_11_15_172537_create_home_pages_table', 17),
(25, '2021_11_15_172632_create_features_table', 18),
(26, '2021_11_15_172903_create_how_it_works_table', 19),
(27, '2021_11_15_173159_create_faqs_table', 20),
(28, '2021_11_15_173405_create_contacts_table', 21),
(29, '2021_11_15_223415_create_task_logs_table', 22),
(30, '2021_11_16_004938_create_social_media_table', 23),
(31, '2021_11_16_165322_create_information_table', 24),
(32, '2021_12_07_211315_create_coworker_requests_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'All Permission', NULL, '2021-10-28 13:19:45', '2021-10-28 13:19:45'),
(2, 'add-company', NULL, '2021-10-28 14:26:01', '2021-10-28 14:26:01'),
(3, 'edit-company', NULL, '2021-10-28 14:26:01', '2021-10-28 14:26:01'),
(4, 'view-company', NULL, '2021-10-28 14:26:01', '2021-10-28 14:26:01'),
(5, 'delete-company', NULL, '2021-10-28 14:26:01', '2021-10-28 14:26:01'),
(6, 'add-department', NULL, '2021-10-29 11:54:02', '2021-10-29 11:54:02'),
(7, 'edit-department', NULL, '2021-10-29 11:54:02', '2021-10-29 11:54:02'),
(8, 'view-department', NULL, '2021-10-29 11:54:02', '2021-10-29 11:54:02'),
(9, 'delete-department', NULL, '2021-10-29 11:54:02', '2021-10-29 11:54:02'),
(10, 'add-employee', NULL, '2021-10-29 11:58:24', '2021-10-29 11:58:24'),
(11, 'edit-employee', NULL, '2021-10-29 11:58:24', '2021-10-29 11:58:24'),
(12, 'view-employee', NULL, '2021-10-29 11:58:24', '2021-10-29 11:58:24'),
(13, 'delete-employee', NULL, '2021-10-29 11:58:24', '2021-10-29 11:58:24'),
(14, 'add-invitation', NULL, '2021-10-29 15:55:10', '2021-10-29 15:55:10'),
(15, 'edit-invitation', NULL, '2021-10-29 15:55:10', '2021-10-29 15:55:10'),
(16, 'view-invitation', NULL, '2021-10-29 15:55:10', '2021-10-29 15:55:10'),
(17, 'delete-invitation', NULL, '2021-10-29 15:55:10', '2021-10-29 15:55:10'),
(18, 'add-task', NULL, '2021-11-01 14:32:40', '2021-11-01 14:32:40'),
(19, 'edit-task', NULL, '2021-11-01 14:32:40', '2021-11-01 14:32:40'),
(20, 'view-task', NULL, '2021-11-01 14:32:40', '2021-11-01 14:32:40'),
(21, 'delete-task', NULL, '2021-11-01 14:32:40', '2021-11-01 14:32:40'),
(22, 'add-taskcategory', NULL, '2021-11-01 15:21:46', '2021-11-01 15:21:46'),
(23, 'edit-taskcategory', NULL, '2021-11-01 15:21:46', '2021-11-01 15:21:46'),
(24, 'view-taskcategory', NULL, '2021-11-01 15:21:46', '2021-11-01 15:21:46'),
(25, 'delete-taskcategory', NULL, '2021-11-01 15:21:46', '2021-11-01 15:21:46'),
(26, 'add-taskassigned', NULL, '2021-11-01 19:36:00', '2021-11-01 19:36:00'),
(27, 'edit-taskassigned', NULL, '2021-11-01 19:36:00', '2021-11-01 19:36:00'),
(28, 'view-taskassigned', NULL, '2021-11-01 19:36:00', '2021-11-01 19:36:00'),
(29, 'delete-taskassigned', NULL, '2021-11-01 19:36:00', '2021-11-01 19:36:00'),
(30, 'add-taskdetail', NULL, '2021-11-02 11:14:17', '2021-11-02 11:14:17'),
(31, 'edit-taskdetail', NULL, '2021-11-02 11:14:17', '2021-11-02 11:14:17'),
(32, 'view-taskdetail', NULL, '2021-11-02 11:14:17', '2021-11-02 11:14:17'),
(33, 'delete-taskdetail', NULL, '2021-11-02 11:14:17', '2021-11-02 11:14:17'),
(34, 'add-attachment', NULL, '2021-11-02 11:20:26', '2021-11-02 11:20:26'),
(35, 'edit-attachment', NULL, '2021-11-02 11:20:26', '2021-11-02 11:20:26'),
(36, 'view-attachment', NULL, '2021-11-02 11:20:26', '2021-11-02 11:20:26'),
(37, 'delete-attachment', NULL, '2021-11-02 11:20:26', '2021-11-02 11:20:26'),
(38, 'add-message', NULL, '2021-11-02 11:26:21', '2021-11-02 11:26:21'),
(39, 'edit-message', NULL, '2021-11-02 11:26:21', '2021-11-02 11:26:21'),
(40, 'view-message', NULL, '2021-11-02 11:26:21', '2021-11-02 11:26:21'),
(41, 'delete-message', NULL, '2021-11-02 11:26:21', '2021-11-02 11:26:21'),
(42, 'add-progre', NULL, '2021-11-02 12:07:35', '2021-11-02 12:07:35'),
(43, 'edit-progre', NULL, '2021-11-02 12:07:35', '2021-11-02 12:07:35'),
(44, 'view-progre', NULL, '2021-11-02 12:07:35', '2021-11-02 12:07:35'),
(45, 'delete-progre', NULL, '2021-11-02 12:07:35', '2021-11-02 12:07:35'),
(46, 'add-userinsight', NULL, '2021-11-02 13:16:36', '2021-11-02 13:16:36'),
(47, 'edit-userinsight', NULL, '2021-11-02 13:16:36', '2021-11-02 13:16:36'),
(48, 'view-userinsight', NULL, '2021-11-02 13:16:36', '2021-11-02 13:16:36'),
(49, 'delete-userinsight', NULL, '2021-11-02 13:16:36', '2021-11-02 13:16:36'),
(50, 'add-taskinsight', NULL, '2021-11-02 13:16:56', '2021-11-02 13:16:56'),
(51, 'edit-taskinsight', NULL, '2021-11-02 13:16:56', '2021-11-02 13:16:56'),
(52, 'view-taskinsight', NULL, '2021-11-02 13:16:56', '2021-11-02 13:16:56'),
(53, 'delete-taskinsight', NULL, '2021-11-02 13:16:56', '2021-11-02 13:16:56'),
(54, 'add-groupchat', NULL, '2021-11-02 16:57:29', '2021-11-02 16:57:29'),
(55, 'edit-groupchat', NULL, '2021-11-02 16:57:29', '2021-11-02 16:57:29'),
(56, 'view-groupchat', NULL, '2021-11-02 16:57:29', '2021-11-02 16:57:29'),
(57, 'delete-groupchat', NULL, '2021-11-02 16:57:29', '2021-11-02 16:57:29'),
(58, 'add-messageviewed', NULL, '2021-11-10 16:13:38', '2021-11-10 16:13:38'),
(59, 'edit-messageviewed', NULL, '2021-11-10 16:13:38', '2021-11-10 16:13:38'),
(60, 'view-messageviewed', NULL, '2021-11-10 16:13:38', '2021-11-10 16:13:38'),
(61, 'delete-messageviewed', NULL, '2021-11-10 16:13:38', '2021-11-10 16:13:38'),
(62, 'add-homepage', NULL, '2021-11-15 12:25:37', '2021-11-15 12:25:37'),
(63, 'edit-homepage', NULL, '2021-11-15 12:25:37', '2021-11-15 12:25:37'),
(64, 'view-homepage', NULL, '2021-11-15 12:25:37', '2021-11-15 12:25:37'),
(65, 'delete-homepage', NULL, '2021-11-15 12:25:37', '2021-11-15 12:25:37'),
(66, 'add-feature', NULL, '2021-11-15 12:26:32', '2021-11-15 12:26:32'),
(67, 'edit-feature', NULL, '2021-11-15 12:26:32', '2021-11-15 12:26:32'),
(68, 'view-feature', NULL, '2021-11-15 12:26:32', '2021-11-15 12:26:32'),
(69, 'delete-feature', NULL, '2021-11-15 12:26:32', '2021-11-15 12:26:32'),
(70, 'add-howitworks', NULL, '2021-11-15 12:29:03', '2021-11-15 12:29:03'),
(71, 'edit-howitworks', NULL, '2021-11-15 12:29:03', '2021-11-15 12:29:03'),
(72, 'view-howitworks', NULL, '2021-11-15 12:29:03', '2021-11-15 12:29:03'),
(73, 'delete-howitworks', NULL, '2021-11-15 12:29:03', '2021-11-15 12:29:03'),
(74, 'add-faq', NULL, '2021-11-15 12:31:59', '2021-11-15 12:31:59'),
(75, 'edit-faq', NULL, '2021-11-15 12:31:59', '2021-11-15 12:31:59'),
(76, 'view-faq', NULL, '2021-11-15 12:31:59', '2021-11-15 12:31:59'),
(77, 'delete-faq', NULL, '2021-11-15 12:31:59', '2021-11-15 12:31:59'),
(78, 'add-contact', NULL, '2021-11-15 12:34:05', '2021-11-15 12:34:05'),
(79, 'edit-contact', NULL, '2021-11-15 12:34:05', '2021-11-15 12:34:05'),
(80, 'view-contact', NULL, '2021-11-15 12:34:05', '2021-11-15 12:34:05'),
(81, 'delete-contact', NULL, '2021-11-15 12:34:05', '2021-11-15 12:34:05'),
(82, 'add-tasklog', NULL, '2021-11-15 17:34:16', '2021-11-15 17:34:16'),
(83, 'edit-tasklog', NULL, '2021-11-15 17:34:16', '2021-11-15 17:34:16'),
(84, 'view-tasklog', NULL, '2021-11-15 17:34:16', '2021-11-15 17:34:16'),
(85, 'delete-tasklog', NULL, '2021-11-15 17:34:16', '2021-11-15 17:34:16'),
(86, 'add-socialmedia', NULL, '2021-11-15 19:49:39', '2021-11-15 19:49:39'),
(87, 'edit-socialmedia', NULL, '2021-11-15 19:49:39', '2021-11-15 19:49:39'),
(88, 'view-socialmedia', NULL, '2021-11-15 19:49:39', '2021-11-15 19:49:39'),
(89, 'delete-socialmedia', NULL, '2021-11-15 19:49:39', '2021-11-15 19:49:39'),
(90, 'add-information', NULL, '2021-11-16 11:53:22', '2021-11-16 11:53:22'),
(91, 'edit-information', NULL, '2021-11-16 11:53:22', '2021-11-16 11:53:22'),
(92, 'view-information', NULL, '2021-11-16 11:53:22', '2021-11-16 11:53:22'),
(93, 'delete-information', NULL, '2021-11-16 11:53:22', '2021-11-16 11:53:22'),
(94, 'add-coworkerrequest', NULL, '2021-12-08 04:13:16', '2021-12-08 04:13:16'),
(95, 'edit-coworkerrequest', NULL, '2021-12-08 04:13:16', '2021-12-08 04:13:16'),
(96, 'view-coworkerrequest', NULL, '2021-12-08 04:13:16', '2021-12-08 04:13:16'),
(97, 'delete-coworkerrequest', NULL, '2021-12-08 04:13:16', '2021-12-08 04:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(4, 2),
(63, 2),
(64, 2),
(67, 2),
(68, 2),
(71, 2),
(72, 2),
(75, 2),
(76, 2),
(77, 2),
(80, 2),
(86, 2),
(87, 2),
(88, 2),
(91, 2),
(92, 2),
(6, 3),
(7, 3),
(8, 3),
(10, 3),
(11, 3),
(12, 3),
(22, 3),
(23, 3),
(24, 3),
(30, 3),
(32, 3),
(34, 3),
(36, 3),
(40, 3),
(18, 4),
(19, 4),
(20, 4),
(32, 4),
(34, 4),
(36, 4),
(40, 4),
(44, 4),
(96, 4),
(18, 5),
(19, 5),
(20, 5),
(32, 5),
(34, 5),
(36, 5),
(40, 5),
(44, 5),
(48, 5),
(52, 5);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `bio`, `gender`, `dob`, `pic`, `country`, `phone`, `state`, `city`, `address`, `postal`, `skype`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Male', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-10-28 13:19:45', '2021-10-28 13:19:45'),
(2, 2, NULL, 'Male', '2000-02-16', NULL, NULL, NULL, NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-10-28 13:19:45', '2021-10-28 13:19:45'),
(3, 3, NULL, 'Male', '2000-02-16', 'EQPDk31xCI.jpeg', NULL, NULL, NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-10-28 14:50:41', '2021-10-29 19:15:09'),
(4, 4, NULL, 'Male', '2000-02-16', '/ItZvSZefvbXXLaSiYrUBRKBG37okoMl1rNlLzmtn.png', NULL, '+1 123 456 7890', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, 'yelloman@yahoo.com', '2021-10-29 18:27:54', '2022-01-13 19:00:18'),
(5, 5, NULL, 'Male', '2000-02-16', 'x4cWWeBjRNpd9pgx5utqAabegGhjolCMaJ3fqYRS.jpeg', NULL, '0321321235', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-10-29 18:39:11', '2021-10-29 18:39:11'),
(6, 6, NULL, 'Male', '2000-02-16', 'mrLPjBPkmE.jpeg', NULL, '0321321235', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 12:33:28', '2021-11-02 19:06:26'),
(7, 7, NULL, 'Male', '2000-02-16', '/Pv5jwYezwNu3sjrb63pmN0MKzLEbUWVqHCtMEqzO.jpeg', NULL, '0321321235', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 12:38:23', '2021-11-01 12:38:23'),
(8, 8, NULL, 'Male', '2000-02-16', '/fdzAluwHQjtZlmgAklgxqBZjlcHmgvSMuDtQdajX.jpeg', NULL, '0333333300', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 12:39:23', '2021-11-01 12:39:23'),
(9, 9, NULL, 'Male', '1999-09-01', '/O7Wsp7cp2Nw43sh1ZSMXWIjZmin7MyhEeRew0y4o.jpeg', NULL, '03213212351', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 001،', NULL, NULL, '2021-11-01 13:02:51', '2021-11-18 12:52:05'),
(10, 10, NULL, 'Male', '2000-02-16', '/IIr7ipRtqdBQ7WTkhA2UGaNcjATgTeBQDFA6JyL7.png', NULL, '03000033333', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 13:21:48', '2021-11-01 13:21:48'),
(11, 11, NULL, 'Male', '2000-02-16', '/6HKmJJ3BSFEChVO7Yn3cZGpsJcPW07IHFZ9zv670.png', NULL, '0321321235', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 13:23:35', '2021-11-01 13:23:35'),
(12, 12, NULL, 'Male', '2000-02-16', '/fLbfGobhFsjbTR4C8S7d8Tq6maka3HLOq5WlwAY5.jpeg', NULL, '0321321235', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 13:26:34', '2021-11-01 13:26:34'),
(13, 13, NULL, 'Male', '0000-00-00', '/kE5EqDQYY67Qoow2Oz31lOBQrm0eSQw3xPYYdvmr.png', NULL, '123456', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 13:29:11', '2021-11-01 13:29:11'),
(14, 14, NULL, 'Male', '2000-02-16', '/Mz3PEMEITXAaMPDCvB9JRQKHEfAoVgfheT3NiePO.png', NULL, '0341313232', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 13:33:13', '2021-11-01 13:33:13'),
(15, 15, NULL, 'Male', '2000-02-16', '/EVdWlsmu9FCyFDJTYXaMH8rtD1FsVQvw86rAhcIX.png', NULL, '88888888', NULL, NULL, 'C - 32 / II / I، KDA Scheme No. 01،', NULL, NULL, '2021-11-01 13:34:54', '2021-11-01 13:34:54'),
(16, 16, NULL, NULL, NULL, '/Er7vP5IEJb38G0f1y8pm4Kw0qSNOQ3j5YvObs03l.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-12 19:18:15', '2021-11-12 19:18:15'),
(17, 17, NULL, NULL, NULL, '/fSGVav7X7cpy9h1YvKiPza2ykcebN8FpIWBa8Jz1.png', NULL, '123456', NULL, NULL, NULL, NULL, NULL, '2021-11-15 12:12:27', '2021-11-15 12:12:27'),
(18, 18, NULL, NULL, NULL, '/Fxs70vDTaVhOX0jp0vptawHiyakRfgBKPbTnx8Au.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-16 12:54:55', '2021-11-16 12:54:55'),
(19, 19, NULL, NULL, NULL, '/dPJwuxrxPJNiFToM0kxZV7iuyWJTfO7ZYawoBpwK.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-18 13:05:24', '2021-11-18 13:05:24'),
(20, 20, NULL, 'male', NULL, '/qmbYmMUs3bikXxgQ7GwImpsQjIOzxRZu13Jo9QvX.jpeg', NULL, '0341313131', NULL, NULL, NULL, NULL, 'yelloman@yahoo.com', '2021-11-18 13:30:25', '2021-11-18 16:06:52'),
(21, 21, NULL, NULL, NULL, '/aKifGb7BFM4SPGmKMz9TbFGr5GYYZORsz4TKJj4e.jpeg', NULL, '0321321235', NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', NULL, NULL, '2021-11-18 13:39:26', '2021-11-18 19:55:00'),
(22, 22, NULL, NULL, NULL, '/8ux7OaN1CWGsrLZUtjqtl9R6sPj7TI40ThKI5zSX.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-03 23:30:00', '2021-12-03 23:30:00'),
(23, 23, NULL, NULL, NULL, '/DkVjfcmQHNt4yRm6PmLua0ATiIJgl6TyMjGRuiMo.jpeg', NULL, '1313131', NULL, NULL, NULL, NULL, NULL, '2021-12-03 23:39:06', '2021-12-03 23:39:06'),
(24, 24, NULL, NULL, NULL, '/fgok0Zr2jgtZ4Q2SPdA6jkpHtgyRICmbFC74rJiu.jpeg', NULL, '12121', NULL, NULL, NULL, NULL, NULL, '2022-01-18 03:20:03', '2022-01-18 03:20:03'),
(25, 25, NULL, NULL, NULL, '/659ODXCivjOjhEkTYcrJ7XN8w14iGRy5ssoIEIkF.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-18 03:36:32', '2022-01-18 03:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '2021-10-28 13:19:45', '2021-10-28 13:19:45'),
(2, 'user', NULL, '2021-10-28 13:19:45', '2021-10-28 13:19:45'),
(3, 'company', NULL, '2021-10-28 13:28:20', '2021-10-28 13:28:20'),
(4, 'employee', NULL, '2021-10-28 13:28:40', '2021-10-28 13:28:40'),
(5, 'Manager', NULL, '2021-10-29 14:33:53', '2021-10-29 14:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(4, 8),
(4, 9),
(4, 10),
(5, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(3, 16),
(4, 17),
(3, 18),
(3, 19),
(5, 20),
(4, 21),
(3, 22),
(5, 23),
(4, 24),
(3, 25);

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `nam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `created_at`, `updated_at`, `deleted_at`, `nam`, `link`, `image`) VALUES
(1, '2021-11-15 20:06:55', '2021-11-16 09:04:13', NULL, 'facebook', 'https://www.facebook.com', 'socialmedia/MKM2peVWz0jGsYJwqarVT4CuQOlUDHrq09k2fso4.png'),
(2, '2021-11-15 20:15:37', '2021-11-15 20:15:37', NULL, 'instagram', 'https://www.instagram.com/', 'socialmedia/65DyqYOf0qbpSeHNpGoiOKAgln96RP1wm2VVHazz.png'),
(3, '2021-11-15 20:16:06', '2021-11-15 20:16:06', NULL, 'twitter', 'https://www.twitter.com/', 'socialmedia/RDPNmn6ZLPvQlQKLSWIiVaRfJrKwqdA1YKZzCYMB.png'),
(4, '2021-11-15 20:16:28', '2021-11-15 20:16:28', NULL, 'youtube', 'https://www.youtube.com/', 'socialmedia/1Ps0h4AmFSsdrwwFR2xErYSQOfiCez0H7ISS0wva.png');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'assigned',
  `bar_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `created_at`, `updated_at`, `deleted_at`, `company_id`, `manager_id`, `project_name`, `category`, `image`, `start_date`, `end_date`, `assign_to`, `priority`, `description`, `status`, `bar_link`) VALUES
(2, '2021-11-01 19:48:21', '2021-12-03 23:56:54', NULL, '3', '4', 'zuhair', '1', '', '2021-11-01', '2021-11-03', NULL, 'Medium', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'inProgress', '100'),
(3, '2021-11-02 15:05:36', '2021-11-08 16:57:07', NULL, '3', '4', 'Java', '1', '', '2021-11-01', '2021-11-06', NULL, 'High', 'xzczxczxc', 'completed', '100'),
(4, '2021-11-08 15:42:10', '2021-11-09 13:47:35', NULL, '3', '4', 'Java Delia', '1', '', '2021-11-10', '2021-11-13', NULL, 'High', 'testing', 'assigned', '40'),
(5, '2021-11-08 15:43:44', '2021-11-08 16:04:34', NULL, '3', '4', 'ramzi is best', '1', '', '2021-11-10', '2021-11-15', NULL, 'Medium', 'testing jbjkbkjbjkb kbkjbkjb', 'inProgress', '50'),
(6, '2021-11-18 15:33:35', '2021-11-18 19:36:22', NULL, '19', '20', 'php', '2', 'taskimages/gnRQxy7d9UDa3pY5tf7NXRjfDtawMtjyasAYdewq.pdf', '2021-11-19', '2021-11-22', NULL, 'Medium', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'completed', '100'),
(7, '2021-12-03 23:19:09', '2021-12-03 23:51:04', NULL, '3', '4', 'Demo Talal', '1', 'taskimages/XOv4fpndIb2HQIK0LFBpi62VoR9M2cejh6b5BJ3T.pdf', '2021-12-04', '2021-12-05', NULL, 'High', 'nlah blahafsf', 'assigned', '80'),
(8, '2022-01-18 00:10:48', '2022-01-18 00:10:48', NULL, '3', '11', 'Java Delia', '1', 'taskimages/Nr4cF9pI7sdPHHZ7FEylXlHLS7xFhGnsoKCvSyey.png', '2022-01-18', '2022-01-24', NULL, 'Medium', 'xsczxxczxczc', 'assigned', '0'),
(9, '2022-01-18 03:04:36', '2022-01-18 03:04:36', NULL, '3', '11', 'abc', '1', 'taskimages/9qh2wotlkJAFweZVICi35dsBd2Ye1ffPMiAe3Jmc.jpeg', '2022-01-19', '2022-01-28', NULL, 'High', 'abc', 'assigned', '0');

-- --------------------------------------------------------

--
-- Table structure for table `task_assigneds`
--

CREATE TABLE `task_assigneds` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `task_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_manager` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_assigneds`
--

INSERT INTO `task_assigneds` (`id`, `created_at`, `updated_at`, `deleted_at`, `task_id`, `employee_id`, `task_manager`) VALUES
(1, '2021-11-01 19:48:21', '2021-11-08 14:27:45', '2021-11-08 14:27:45', '2', '9', ''),
(2, '2021-11-01 19:48:21', '2021-11-08 14:27:45', '2021-11-08 14:27:45', '2', '10', ''),
(3, '2021-11-02 15:05:36', '2021-11-08 16:57:07', '2021-11-08 16:57:07', '3', '9', ''),
(4, '2021-11-08 14:27:45', '2021-11-08 14:30:51', '2021-11-08 14:30:51', '2', '9', ''),
(5, '2021-11-08 14:27:45', '2021-11-08 14:30:51', '2021-11-08 14:30:51', '2', '10', ''),
(6, '2021-11-08 14:30:51', '2021-11-08 14:31:01', '2021-11-08 14:31:01', '2', '9', ''),
(7, '2021-11-08 14:30:51', '2021-11-08 14:31:01', '2021-11-08 14:31:01', '2', '10', ''),
(8, '2021-11-08 14:31:01', '2021-11-08 14:31:29', '2021-11-08 14:31:29', '2', '9', ''),
(9, '2021-11-08 14:31:01', '2021-11-08 14:31:29', '2021-11-08 14:31:29', '2', '10', ''),
(10, '2021-11-08 14:31:29', '2021-11-08 14:39:34', '2021-11-08 14:39:34', '2', '9', ''),
(11, '2021-11-08 14:31:29', '2021-11-08 14:39:34', '2021-11-08 14:39:34', '2', '10', ''),
(12, '2021-11-08 14:39:34', '2021-11-08 14:48:16', '2021-11-08 14:48:16', '2', '9', ''),
(13, '2021-11-08 14:39:34', '2021-11-08 14:48:16', '2021-11-08 14:48:16', '2', '10', ''),
(14, '2021-11-08 14:48:16', '2021-11-08 15:00:01', '2021-11-08 15:00:01', '2', '9', ''),
(15, '2021-11-08 14:48:16', '2021-11-08 15:00:01', '2021-11-08 15:00:01', '2', '10', ''),
(16, '2021-11-08 15:00:01', '2021-11-17 20:00:31', '2021-11-17 20:00:31', '2', '9', ''),
(17, '2021-11-08 15:00:01', '2021-11-17 20:00:31', '2021-11-17 20:00:31', '2', '10', ''),
(18, '2021-11-08 15:42:10', '2021-11-09 13:47:35', '2021-11-09 13:47:35', '4', '9', ''),
(19, '2021-11-08 15:42:10', '2021-11-09 13:47:35', '2021-11-09 13:47:35', '4', '10', '0'),
(20, '2021-11-08 15:43:44', '2021-11-08 16:04:34', '2021-11-08 16:04:34', '5', '9', ''),
(21, '2021-11-08 15:43:44', '2021-11-08 16:04:34', '2021-11-08 16:04:34', '5', '10', ''),
(22, '2021-11-08 16:04:34', '2021-11-08 16:04:34', NULL, '5', '9', '0'),
(23, '2021-11-08 16:04:34', '2021-11-08 16:04:34', NULL, '5', '10', '1'),
(24, '2021-11-08 16:57:07', '2021-11-08 16:57:07', NULL, '3', '9', '1'),
(25, '2021-11-09 13:47:35', '2021-11-16 14:55:16', '2021-11-16 14:55:16', '4', '9', ''),
(26, '2021-11-09 13:47:35', '2021-11-16 14:55:16', '2021-11-16 14:55:16', '4', '10', ''),
(27, '2021-11-16 14:55:16', '2021-11-16 14:55:16', NULL, '4', '9', '0'),
(28, '2021-11-16 14:55:16', '2021-11-16 14:55:16', NULL, '4', '10', '1'),
(29, '2021-11-17 20:00:31', '2021-12-03 23:56:54', '2021-12-03 23:56:54', '2', '9', ''),
(30, '2021-11-17 20:00:31', '2021-12-03 23:56:54', '2021-12-03 23:56:54', '2', '10', ''),
(31, '2021-11-18 15:33:35', '2021-11-18 15:35:05', '2021-11-18 15:35:05', '6', '21', ''),
(32, '2021-11-18 15:35:05', '2021-11-18 19:23:54', '2021-11-18 19:23:54', '6', '21', ''),
(33, '2021-11-18 19:23:54', '2021-11-18 19:24:08', '2021-11-18 19:24:08', '6', '21', ''),
(34, '2021-11-18 19:24:08', '2021-11-18 19:36:22', '2021-11-18 19:36:22', '6', '21', ''),
(35, '2021-11-18 19:36:22', '2021-11-18 19:36:22', NULL, '6', '21', '1'),
(36, '2021-12-03 23:19:09', '2021-12-03 23:25:45', '2021-12-03 23:25:45', '7', '10', ''),
(37, '2021-12-03 23:25:45', '2021-12-03 23:51:04', '2021-12-03 23:51:04', '7', '10', ''),
(38, '2021-12-03 23:51:04', '2021-12-03 23:51:04', NULL, '7', '10', '1'),
(39, '2021-12-03 23:56:54', '2021-12-03 23:56:54', NULL, '2', '9', '0'),
(40, '2021-12-03 23:56:54', '2021-12-03 23:56:54', NULL, '2', '10', '1'),
(41, '2021-12-09 01:12:40', '2021-12-09 01:12:40', NULL, '3', '10', '0'),
(42, '2021-12-14 03:15:10', '2021-12-14 03:15:10', NULL, '7', '9', '0'),
(43, '2022-01-18 00:10:48', '2022-01-18 00:10:48', NULL, '8', '17', '1'),
(44, '2022-01-18 03:04:36', '2022-01-18 03:04:36', NULL, '9', '12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `task_categories`
--

CREATE TABLE `task_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_categories`
--

INSERT INTO `task_categories` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `company_id`, `satatus`) VALUES
(1, '2021-11-01 17:21:26', '2021-11-01 17:21:26', NULL, 'UI/UX Design', '3', '0'),
(2, '2021-11-18 13:32:24', '2021-11-18 13:32:24', NULL, 'error reporting', '19', '0'),
(3, '2021-11-18 13:32:44', '2021-11-18 13:32:44', NULL, 'Traits', '19', '0'),
(4, '2021-11-18 13:33:38', '2021-11-18 13:33:38', NULL, 'accountancy', '19', '0'),
(5, '2021-12-03 23:33:29', '2021-12-03 23:33:29', NULL, 'Ui Ux', '22', '0'),
(6, '2021-12-03 23:33:53', '2021-12-03 23:33:53', NULL, 'bohot sare', '22', '0'),
(7, '2021-12-24 21:08:55', '2021-12-24 21:08:55', NULL, 'Contracting Work', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `task_details`
--

CREATE TABLE `task_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `task_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `activity_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_details`
--

INSERT INTO `task_details` (`id`, `created_at`, `updated_at`, `deleted_at`, `task_id`, `employee_id`, `manager_id`, `activity_name`, `process`, `status`, `note`) VALUES
(5, '2021-11-09 14:29:34', '2021-11-16 14:55:25', NULL, '4', NULL, 4, 'testing sdadasd', '3', '[\"1\",\"2\"]', 'asdasdasdasdasd dasdasdasds'),
(6, '2021-11-09 18:37:47', '2021-11-09 18:37:47', NULL, '5', NULL, 4, 'develop dashboard', '1', '[\"1\"]', 'jaldi kam karo please'),
(7, '2021-11-10 20:02:23', '2021-11-10 20:02:33', NULL, '4', NULL, 9, 'testing sdadasd', '2', 'null', 'asdasdasdasdasd dasdasdasds'),
(8, '2021-11-15 16:12:24', '2022-01-09 19:21:18', NULL, '3', NULL, 4, 'testing', '2', '[\"1\"]', 'testing snakiolkokopkopskjdnasd'),
(9, '2021-11-18 15:36:26', '2021-11-18 15:43:34', NULL, '6', NULL, 20, 'develop dashboard', '2', '[\"1\"]', 'testing'),
(10, '2021-12-03 23:20:07', '2021-12-03 23:20:43', NULL, '7', NULL, 4, 'Logo design done', '4', '[\"3\"]', 'Ban gaya');

-- --------------------------------------------------------

--
-- Table structure for table `task_insights`
--

CREATE TABLE `task_insights` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_logs`
--

CREATE TABLE `task_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `task_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_logs`
--

INSERT INTO `task_logs` (`id`, `created_at`, `updated_at`, `deleted_at`, `task_id`, `activity_name`, `process`, `status`, `note`) VALUES
(1, '2021-11-15 17:42:44', '2021-11-15 17:42:44', NULL, '4', 'testing sdadasd', '2', '[\"1\",\"2\"]', 'asdasdasdasdasd dasdasdasds'),
(2, '2021-11-15 18:11:26', '2021-11-15 18:11:26', NULL, '4', 'testing sdadasd', '2', '[\"1\",\"2\"]', 'asdasdasdasdasd dasdasdasds'),
(3, '2021-11-15 18:13:27', '2021-11-15 18:13:27', NULL, '4', 'testing sdadasd', '2', '[\"1\",\"2\"]', 'asdasdasdasdasd dasdasdasds'),
(4, '2021-11-15 18:13:44', '2021-11-15 18:13:44', NULL, '4', 'testing sdadasd', '2', '[\"1\",\"2\"]', 'asdasdasdasdasd dasdasdasds'),
(5, '2021-11-16 14:55:25', '2021-11-16 14:55:25', NULL, '4', 'testing sdadasd', '3', '[\"1\",\"2\"]', 'asdasdasdasdasd dasdasdasds'),
(6, '2021-11-16 14:58:14', '2021-11-16 14:58:14', NULL, '4', 'testing sdadasd', '3', '[\"1\",\"2\"]', 'asdasdasdasdasd dasdasdasds'),
(7, '2021-11-18 15:36:26', '2021-11-18 15:36:26', NULL, '6', 'develop dashboard', '1', '[\"1\"]', 'testing'),
(8, '2021-11-18 15:43:34', '2021-11-18 15:43:34', NULL, '6', 'develop dashboard', '2', '[\"1\"]', 'testing'),
(9, '2021-12-03 23:20:07', '2021-12-03 23:20:07', NULL, '7', 'Logo design', '1', '[\"1\"]', 'Jaldi banana hai'),
(10, '2021-12-03 23:20:43', '2021-12-03 23:20:43', NULL, '7', 'Logo design done', '4', '[\"3\"]', 'Ban gaya'),
(11, '2022-01-09 19:21:18', '2022-01-09 19:21:18', NULL, '3', 'testing', '2', '[\"1\"]', 'testing snakiolkokopkopskjdnasd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0-active,1-banned',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `company_id`, `department_id`, `provider_id`, `provider`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@developer.com', '$2y$10$GB7gTe8V8VM/SnAHMgsx7ujZJJrsJ62HKViUYYrRJbEx29BCtsdHy', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-28 13:19:45', '2021-10-28 13:19:45', NULL),
(2, 'User', 'admin@ramzi.com', '$2y$10$F2BYBiCjWSI.ouOronoqQeJjZGQBjHumg1QSAkfj8MORpRQMBe7SW', NULL, NULL, NULL, NULL, 1, NULL, '2021-10-28 13:19:45', '2021-10-28 13:19:45', NULL),
(3, 'national', 'national@yopmail.com', '$2y$10$u9L0h1oQl7VGb8xYVXvAZeQX0myooYN5NZS2Dj64CP1HMDMFpqlPi', NULL, NULL, NULL, NULL, 0, NULL, '2021-10-28 14:50:41', '2021-10-29 19:15:09', NULL),
(4, 'zuhi', 'zuhi@yopmail.com', '$2y$10$e136xGbZYoLTOKRvhoAd2uuzGHg7YXy3rQtrwIotaSmiWLumfZkt.', 3, 1, NULL, NULL, 0, 'fJjzlJ96AwRjmxzpZeX6hsG8qDcInKbAkLRDMUddqIsUFV8OC9wj23iGAbFV', '2021-10-29 18:27:54', '2021-11-12 18:28:22', NULL),
(5, 'imdad ali . qr', 'imdad@truck.com', '$2y$10$Yse/HS2Ck3yjFxtTVjgtN.RHSLgsv.1Qx7.mvDCsy.hwlypY7dT4G', 3, 4, NULL, NULL, 0, NULL, '2021-10-29 18:39:11', '2021-10-29 18:39:11', NULL),
(6, 'aftab . ali', 'aftab@yopmail.com', '$2y$10$LBpVA73f/B1OI1Ywi2xOdej3qbjCER8Tj5LEDA4D4nXMZtiYFABay', 3, 1, NULL, NULL, 0, NULL, '2021-11-01 12:33:28', '2021-11-02 19:06:26', NULL),
(7, 'waqas', 'waqas@yopmail.com', '$2y$10$Tkspj17XfTTc0Bmd9N2se.CAgwLNAJx7sz4.GBnUQa/iHRWOdAAGG', 3, 2, NULL, NULL, 0, NULL, '2021-11-01 12:38:23', '2021-11-01 12:38:23', NULL),
(8, 'rashed', 'rashed@yopmail.com', '$2y$10$Pr1SDokmjCfhLxtsD9oTNu0s9R5SdQ7xD1goapIU4A0oJvuCGa7fO', 3, 2, NULL, NULL, 0, NULL, '2021-11-01 12:39:23', '2021-11-01 12:39:23', NULL),
(9, 'sam', 'sam@yopmail.com', '$2y$10$pLq0/7rkoe4ccb7mG1TsW./zg.GQQ7C1z6H5be3byTBXLJ4bcEKwu', 3, 1, NULL, NULL, 0, NULL, '2021-11-01 13:02:51', '2021-11-18 12:52:22', NULL),
(10, 'shareef', 'shareef@yopmail.com', '$2y$10$nvB5mY/MRRvVFW2utwVMnereQvvtw.7YjB0VCsIOgrw4Kg82Lnh9S', 3, 1, NULL, NULL, 0, NULL, '2021-11-01 13:21:48', '2021-11-01 13:21:48', NULL),
(11, 'ali', 'zuhi@yahoo.com', '$2y$10$Mvh9.SuqLpN/DFW.L/tPn.zGdhw4W2zX/TiZt2hbO/JtfD9Ahtb1q', 3, 4, NULL, NULL, 0, NULL, '2021-11-01 13:23:35', '2021-11-01 13:23:35', NULL),
(12, 'kc', 'ks@yopmail.com', '$2y$10$5lcQx6Da75N7O3LlgMIOxunAflOysRngcITGnLPiXEJJmxjpuZ0uC', 3, 4, NULL, NULL, 0, NULL, '2021-11-01 13:26:34', '2021-11-01 13:26:34', NULL),
(13, 'js', 'js@yopmail.com', '$2y$10$WXfR1UxrPBqij6Dp2xy0aORlHiRz7Qv6XEFhenmrqRUltLm3uwBqK', 3, 4, NULL, NULL, 0, NULL, '2021-11-01 13:29:11', '2021-11-01 13:29:11', NULL),
(14, 'asif', 'asif@yopmail.com', '$2y$10$dy1vL7dDEOg6d5XiLFeRYOSY6.bPf/RJ80GzU/KmAILSMnKm3PpoW', 3, 4, NULL, NULL, 0, NULL, '2021-11-01 13:33:13', '2021-11-01 13:33:13', NULL),
(15, 'walid', 'walid@yopmail.com', '$2y$10$WwS7jfw0sqrVX7O8Cok6behiQ.eqXk4KMbmm863QngECyFVRZPDzu', 3, 4, NULL, NULL, 0, NULL, '2021-11-01 13:34:54', '2021-11-01 13:34:54', NULL),
(16, 'waqas', 'waqas_khalid@yopmail.com', '$2y$10$OyvOdxqdVr6R/2ML/K6PIeHaHVp4SghHkQ6qbPXFMoh85gZPSqJhC', NULL, NULL, NULL, NULL, 0, NULL, '2021-11-12 19:18:15', '2021-11-16 14:31:18', NULL),
(17, 'Zk', 'zk@yopmail.com', '$2y$10$OcPQE1eDl444yWXXBZL7H./RJebP3VJAMHpenkHKoZcY51ry7oIge', 3, 4, NULL, NULL, 0, NULL, '2021-11-15 12:12:27', '2021-11-15 12:12:27', NULL),
(18, 'jojo', 'jojo@yahoo.com', '$2y$10$Wqdz8pdNMJi5b87u4rvyjO3bzNd0R/A3h9j496J92pjxuhswgj8wy', NULL, NULL, NULL, NULL, 1, NULL, '2021-11-16 12:54:55', '2021-11-16 14:31:30', NULL),
(19, 'oxford grammar', 'oxford@yopmail.com', '$2y$10$BHxdckggKA8MamEa.x693u5HxmJpyq9ih7mwESNcltzyC5Q5W7sAW', NULL, NULL, NULL, NULL, 0, NULL, '2021-11-18 13:05:24', '2021-11-18 13:06:13', NULL),
(20, 'john', 'john@yopmail.com', '$2y$10$ANPEapDPtMhCPkdUXc/1KOYgk284FNWr4OqS6zFQ73UPYg45tuweO', 19, 8, NULL, NULL, 0, NULL, '2021-11-18 13:30:25', '2021-11-18 16:10:27', NULL),
(21, 'kashan ali qureshi', 'kashan@yopmail.com', '$2y$10$7zgNwiEouadWTAWUhgCbte3PefnXtLWf4NWtix/3T2qsDfWbCYPK2', 19, 8, NULL, NULL, 0, NULL, '2021-11-18 13:39:26', '2021-11-18 13:39:26', NULL),
(22, 'Tafsol', 'tafsol@yopmail.com', '$2y$10$emc1oFt0JQh8t0sSSLIMW.tn/T/D1nb.XPENBvS7EgIo2ErpcsJHm', NULL, NULL, NULL, NULL, 0, NULL, '2021-12-03 23:30:00', '2021-12-03 23:31:22', NULL),
(23, 'Muhammad', 'mct@tafsol.com', '$2y$10$er3FDBuwG.yNr60agPkH6.XjnTd1BRvX0lTkt3Cj/y.O1TfTZaYdO', 22, 9, NULL, NULL, 0, NULL, '2021-12-03 23:39:06', '2021-12-03 23:39:06', NULL),
(24, 'Ramzi', 'ramzi123@mail.com', '$2y$10$v7Vfd0YjgvKgucOnhJZDPesbaqelL5BlIotmHy8Hrw8VwEmJ0yYdm', 3, 1, NULL, NULL, 0, NULL, '2022-01-18 03:20:03', '2022-01-18 03:20:03', NULL),
(25, 'Samosa', 'samosa@yopmail.com', '$2y$10$OE9mw.TgL6zAvC9fYIty2u5DiNQaC5sXjFxEbGpcoRT8xs7oD3jIW', NULL, NULL, NULL, NULL, 0, NULL, '2022-01-18 03:36:32', '2022-01-18 03:36:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_insights`
--

CREATE TABLE `user_insights` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_settings`
--
ALTER TABLE `common_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coworker_requests`
--
ALTER TABLE `coworker_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_chats`
--
ALTER TABLE `group_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_works`
--
ALTER TABLE `how_it_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_vieweds`
--
ALTER TABLE `message_vieweds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_assigneds`
--
ALTER TABLE `task_assigneds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_categories`
--
ALTER TABLE `task_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_details`
--
ALTER TABLE `task_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_insights`
--
ALTER TABLE `task_insights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_logs`
--
ALTER TABLE `task_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_insights`
--
ALTER TABLE `user_insights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `common_settings`
--
ALTER TABLE `common_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coworker_requests`
--
ALTER TABLE `coworker_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `group_chats`
--
ALTER TABLE `group_chats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `how_it_works`
--
ALTER TABLE `how_it_works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `message_vieweds`
--
ALTER TABLE `message_vieweds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `progres`
--
ALTER TABLE `progres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task_assigneds`
--
ALTER TABLE `task_assigneds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `task_categories`
--
ALTER TABLE `task_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task_details`
--
ALTER TABLE `task_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task_insights`
--
ALTER TABLE `task_insights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_logs`
--
ALTER TABLE `task_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_insights`
--
ALTER TABLE `user_insights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
