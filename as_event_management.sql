-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 12:57 PM
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
-- Database: `as_event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `booking_total` int(11) NOT NULL,
  `tax_total` int(11) NOT NULL,
  `shipping_total` int(11) NOT NULL,
  `booking_date` text NOT NULL,
  `booking_timestamp` text NOT NULL,
  `booking_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_address` text NOT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_method` text NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_amount` varchar(255) NOT NULL DEFAULT '0',
  `currency` varchar(255) NOT NULL DEFAULT 'BDT',
  `transaction_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `courier_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `booking_total`, `tax_total`, `shipping_total`, `booking_date`, `booking_timestamp`, `booking_status`, `delivery_address`, `delivery_status`, `payment_method`, `payment_status`, `payment_amount`, `currency`, `transaction_id`, `created_at`, `updated_at`, `courier_id`) VALUES
(1, 1, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'fghfhfghtegfd', 'Pending', 'cash', 'Pending', '0', 'BDT', NULL, '2024-04-28 02:39:12', '2024-04-28 02:39:12', 0),
(2, 1, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'fghfhfghtegfd', 'Pending', 'cash', 'Pending', '0', 'BDT', NULL, '2024-04-28 02:39:40', '2024-04-28 02:39:40', 0),
(3, 1, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'fsfdfas', 'Pending', 'online', 'Pending', '0', 'BDT', '662e0d7134f96', '2024-04-28 02:48:49', '2024-04-28 02:48:49', 0),
(4, 1, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'fsfdfas', 'Pending', 'online', 'Pending', '0', 'BDT', '662e10b726e94', '2024-04-28 03:02:47', '2024-04-28 03:02:47', 0),
(5, 1, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'ffhfdhdf', 'Pending', 'online', 'Pending', '0', 'BDT', '662e110512dd5', '2024-04-28 03:04:05', '2024-04-28 03:04:05', 0),
(6, 1, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'gdffgdf', 'Pending', 'online', 'Pending', '0', 'BDT', '662e11230ad67', '2024-04-28 03:04:35', '2024-04-28 03:04:35', 0),
(7, 1, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'gdffgdf', 'Pending', 'online', 'Pending', '0', 'BDT', '662e11411e5c7', '2024-04-28 03:05:05', '2024-04-28 03:05:05', 0),
(8, 1, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'Sunt ipsum voluptati', 'Pending', 'online', 'Pending', '0', 'BDT', '662e122015caa', '2024-04-28 03:08:48', '2024-04-28 03:08:48', 0),
(9, 2, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'Eum architecto quia', 'Pending', 'online', 'Pending', '0', 'BDT', '662e1382a6be4', '2024-04-28 03:14:42', '2024-04-28 03:14:42', 0),
(10, 3, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'Culpa quasi id null', 'Pending', 'online', 'Pending', '0', 'BDT', '662e1509c1b2e', '2024-04-28 03:21:13', '2024-04-28 03:21:13', 0),
(11, 4, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'hfdhdfhdf', 'Pending', 'cash', 'Pending', '0', 'BDT', NULL, '2024-04-28 03:29:55', '2024-04-28 03:29:55', 0),
(12, 4, 638, 83, 0, '2024-04-28', '1714262400', 'Processing', 'dsadas', 'Pending', 'online', 'Pending', '0', 'BDT', '662e172cbc646', '2024-04-28 03:30:20', '2024-04-28 03:30:20', 0),
(13, 5, 638, 83, 0, '2024-04-28', '1714262400', 'Processing', 'Tempora sunt sunt eo', 'Pending', 'online', 'Pending', '0', 'BDT', '662e1806bff03', '2024-04-28 03:33:58', '2024-04-28 03:33:58', 0),
(14, 6, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'Explicabo Explicabo', 'Pending', 'cash', 'Pending', '0', 'BDT', NULL, '2024-04-28 03:39:56', '2024-04-28 03:39:56', 0),
(15, 6, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'Explicabo Explicabo', 'Pending', 'cash', 'Pending', '0', 'BDT', NULL, '2024-04-28 03:40:58', '2024-04-28 03:40:58', 0),
(16, 7, 638, 83, 0, '2024-04-28', '1714262400', 'Processing', 'Ut velit in ipsa ut', 'Pending', 'online', 'Pending', '0', 'BDT', '662e1d3e99574', '2024-04-28 03:56:14', '2024-04-28 03:56:14', 0),
(17, 8, 638, 83, 0, '2024-04-28', '1714262400', 'Pending', 'Nostrum minima exped', 'Pending', 'cash', 'Pending', '0', 'BDT', NULL, '2024-04-28 03:57:43', '2024-04-28 03:57:43', 0),
(18, 9, 638, 83, 0, '2024-04-28', '1714262400', 'Processing', 'Necessitatibus commo', 'Pending', 'cash', 'Pending', '0', 'BDT', '662e1ef5a1e06', '2024-04-28 04:03:33', '2024-04-28 04:03:33', 0),
(19, 2, 638, 83, 0, '2024-04-28', '1714262400', 'Processing', 'Atque natus in sequi', 'Pending', 'cash', 'Pending', '128.00', 'BDT', '662e204cd17a0', '2024-04-28 04:09:16', '2024-04-28 04:09:16', 0),
(20, 10, 638, 83, 0, '2024-04-28', '2024-04-28', 'Processing', 'ssaf', 'Pending', 'cash', 'Pending', '128.00', 'BDT', '662e22cb94e6f', '2024-04-28 04:19:55', '2024-04-28 04:19:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `product_id`, `product_name`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Nigel Morse', '555', '1', '2024-04-28 02:39:40', '2024-04-28 02:39:40'),
(2, 3, 1, 'Nigel Morse', '555', '1', '2024-04-28 02:48:49', '2024-04-28 02:48:49'),
(3, 5, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:04:05', '2024-04-28 03:04:05'),
(4, 6, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:04:35', '2024-04-28 03:04:35'),
(5, 8, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:08:48', '2024-04-28 03:08:48'),
(6, 9, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:14:42', '2024-04-28 03:14:42'),
(7, 10, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:21:13', '2024-04-28 03:21:13'),
(8, 11, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:29:55', '2024-04-28 03:29:55'),
(9, 12, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:30:20', '2024-04-28 03:30:20'),
(10, 13, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:33:58', '2024-04-28 03:33:58'),
(11, 14, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:39:56', '2024-04-28 03:39:56'),
(12, 15, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:40:58', '2024-04-28 03:40:58'),
(13, 16, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:56:14', '2024-04-28 03:56:14'),
(14, 17, 1, 'Nigel Morse', '555', '1', '2024-04-28 03:57:43', '2024-04-28 03:57:43'),
(15, 18, 1, 'Nigel Morse', '555', '1', '2024-04-28 04:03:33', '2024-04-28 04:03:33'),
(16, 19, 1, 'Nigel Morse', '555', '1', '2024-04-28 04:09:16', '2024-04-28 04:09:16'),
(17, 20, 1, 'Nigel Morse', '555', '1', '2024-04-28 04:19:55', '2024-04-28 04:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'card',
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `s_price` int(11) DEFAULT NULL,
  `r_price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `featured_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `type`, `name`, `description`, `s_price`, `r_price`, `quantity`, `image`, `featured_status`, `created_at`, `updated_at`) VALUES
(1, 'card', 'Maile Lott', 'Deserunt id sint di', 281, 610, 115, 'upload/card-images/0e1a4c491c2e9608a772a10a7bef3321.jpg', 0, '2024-04-20 02:16:37', '2024-04-20 02:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `card_other_images`
--

CREATE TABLE `card_other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `card_other_images`
--

INSERT INTO `card_other_images` (`id`, `card_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/otherImage-images/0c26c0c4d1eefcce20dd92ace91b7572.jpeg', '2024-04-20 02:16:37', '2024-04-20 02:16:37'),
(2, 1, 'upload/otherImage-images/0d54b612.jpeg', '2024-04-20 02:16:37', '2024-04-20 02:16:37'),
(3, 1, 'upload/otherImage-images/0e1a4c491c2e9608a772a10a7bef3321.jpg', '2024-04-20 02:16:37', '2024-04-20 02:16:37'),
(4, 1, 'upload/otherImage-images/0e8f67020926d28dabed4603a4db2d6b.jpg', '2024-04-20 02:16:37', '2024-04-20 02:16:37'),
(5, 1, 'upload/otherImage-images/0ec88b3b78d22055a18765b03a5c49c5.jpg', '2024-04-20 02:16:37', '2024-04-20 02:16:37'),
(6, 1, 'upload/otherImage-images/0f603670c36c7e21aad781d8864138c5.jpg', '2024-04-20 02:16:37', '2024-04-20 02:16:37'),
(7, 1, 'upload/otherImage-images/1a2c065a26c6698d7a816dddc59141f9.jpg', '2024-04-20 02:16:37', '2024-04-20 02:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `nid`, `address`, `date_of_birth`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Xavier Davis', 'nidi@mailinator.com', '+1 (494) 304-8691', '$2y$12$bapEozrp/RkZrLyOTcn06uiUJsySB4jr7T0JbHRaA02O2n.hjbYDy', NULL, NULL, NULL, NULL, '2024-04-28 01:41:02', '2024-04-28 01:41:02'),
(2, 'Jennifer Tyler', 'cevim@mailinator.com', '25', '$2y$12$Q8Dnjh0AbrP6uQHRuECYyOwt/pf7A9UePKSSROe04ocrz2BoaAAjO', NULL, NULL, NULL, NULL, '2024-04-28 03:14:42', '2024-04-28 03:14:42'),
(3, 'Jena Cooley', 'lovefo@mailinator.com', '45', '$2y$12$1kDFeV5LXv0nHevIxHINMeoDmbCA8pkNEKXi7pxsexjvTOp.1S756', NULL, NULL, NULL, NULL, '2024-04-28 03:21:13', '2024-04-28 03:21:13'),
(4, 'Rowan Travis', 'fatunupum@mailinator.com', '01749912520', '$2y$12$vCRO5YQlxeR5crJo/1vgCO7pzZ9zPQhfxgj3toqm2fV6VvFoQoi6y', NULL, NULL, NULL, NULL, '2024-04-28 03:27:19', '2024-04-28 03:27:19'),
(5, 'Kay Cooke', 'caqilifiq@mailinator.com', '53', '$2y$12$IdDWQg.wO95T9fqoYejmU.8DK/9TJLmyCn9mb3SeM4MGjtb8s198K', NULL, NULL, NULL, NULL, '2024-04-28 03:33:58', '2024-04-28 03:33:58'),
(6, 'Sandra Love', 'fepe@mailinator.com', '40', '$2y$12$XYNKmyDwctq2HOliftyOC./p83Swn4hLKCcGS49G2GcRWDzagEY96', NULL, NULL, NULL, NULL, '2024-04-28 03:39:56', '2024-04-28 03:39:56'),
(7, 'Hannah Buckner', 'syvy@mailinator.com', '69', '$2y$12$NArbCfxeTPVzPA.s14DU2Ohcs7TZUVrHOnLUhz2xSFVNhqFVy3v7e', NULL, NULL, NULL, NULL, '2024-04-28 03:56:14', '2024-04-28 03:56:14'),
(8, 'Aristotle Olson', 'kyzan@mailinator.com', '54', '$2y$12$Ygbmsc9ezldL8x02bGhF4.BTg1WVQLKk0PuW2b3eNK1r8.c1iSadu', NULL, NULL, NULL, NULL, '2024-04-28 03:57:42', '2024-04-28 03:57:42'),
(9, 'Linus Oconnor', 'xexoga@mailinator.com', '94', '$2y$12$MqC94t0jPPY5riXI8M51TOeKM0VI3u9yVh3NSgHvUBl7aNkxJt3zK', NULL, NULL, NULL, NULL, '2024-04-28 04:03:33', '2024-04-28 04:03:33'),
(10, 'Azalia Cochran', 'keqyjoki@mailinator.com', '+1 (316) 111-3178', '$2y$12$Cn9cqDB0LCZwqs.PSFepfOMYiCmH5pMdETSn0yoSg7EOlXltqMdua', NULL, NULL, NULL, NULL, '2024-04-28 04:10:07', '2024-04-28 04:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `decorations`
--

CREATE TABLE `decorations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'decoration',
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `s_price` int(11) DEFAULT NULL,
  `r_price` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `featured_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'food',
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `s_price` int(11) DEFAULT NULL,
  `r_price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `featured_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_other_images`
--

CREATE TABLE `food_other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(23, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2024_03_05_155535_create_sessions_table', 1),
(27, '2024_03_09_102658_create_photographers_table', 1),
(28, '2024_03_10_073001_create_venues_table', 1),
(29, '2024_03_10_141723_create_decorations_table', 1),
(30, '2024_03_10_151245_create_cards_table', 1),
(31, '2024_03_19_142632_create_other_images_table', 1),
(32, '2024_03_19_182614_create_card_other_images_table', 1),
(33, '2024_03_21_151446_create_venue_other_images_table', 1),
(34, '2024_03_21_151513_create_photographer_other_images_table', 1),
(35, '2024_04_02_194404_create_customers_table', 1),
(36, '2024_04_02_194933_create_bookings_table', 1),
(37, '2024_04_02_195009_create_booking_details_table', 1),
(38, '2024_04_09_175245_add_courier_id_column_to_bookings_table', 1),
(39, '2024_04_10_075531_create_food_table', 1),
(40, '2024_04_13_065107_create_food_other_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_images`
--

CREATE TABLE `other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `decoration_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'photo',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `s_price` int(11) DEFAULT NULL,
  `r_price` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `featured_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`id`, `type`, `name`, `email`, `mobile`, `address`, `description`, `s_price`, `r_price`, `image`, `featured_status`, `created_at`, `updated_at`) VALUES
(1, 'photo', 'Nigel Morse', 'zeqaguvub@mailinator.com', 'Qui sequi doloribus', NULL, 'Velit alias et fugia', 555, NULL, 'upload/photographer-images/otdr.png', 0, '2024-04-27 23:23:53', '2024-04-27 23:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `photographer_other_images`
--

CREATE TABLE `photographer_other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photographer_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographer_other_images`
--

INSERT INTO `photographer_other_images` (`id`, `photographer_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/otherImage-images/olt.png', '2024-04-27 23:23:53', '2024-04-27 23:23:53'),
(2, 1, 'upload/otherImage-images/otdr.png', '2024-04-27 23:23:53', '2024-04-27 23:23:53'),
(3, 1, 'upload/otherImage-images/patch.png', '2024-04-27 23:23:53', '2024-04-27 23:23:53'),
(4, 1, 'upload/otherImage-images/power.png', '2024-04-27 23:23:53', '2024-04-27 23:23:53'),
(5, 1, 'upload/otherImage-images/sfp.png', '2024-04-27 23:23:53', '2024-04-27 23:23:53'),
(6, 1, 'upload/otherImage-images/w70.png', '2024-04-27 23:23:53', '2024-04-27 23:23:53'),
(7, 1, 'upload/otherImage-images/w80.png', '2024-04-27 23:23:53', '2024-04-27 23:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3jwHSifwDQd33QNNZ2r0lZHT4NuD8JqiT1Jr9gRk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQ1lPMk5JWkVZTlpWRkE3M0l6dUxWTkVhelN0MDVHazJqYXBwM1Z1NyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714296707),
('8rdSWE6iMZA6bfI15QACPq4VaYTjLcnmPr3Y5Mxp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMEt3YUdJekJ2QkhnMGk0VlhUaEJPNmtzVTRxMUloY0FVd2gwM1d6NSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714296695),
('9tixVAdiubdIE6ESSt5VNvFhBHmnOH1E9GBdOuSC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTzVQeVZhMmNjWHJEUGYxdHN4NFVqZER6R0w4VFZ6bk0wMmp2OThxeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6ODp7czo1OiJyb3dJZCI7czozMjoiMmIxMmVkY2VhNTk3MWY2ZWQwZjMwN2UyMDMyMjY5YjgiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiTmlnZWwgTW9yc2UiO3M6NToicHJpY2UiO2Q6NTU1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MzU6InVwbG9hZC9waG90b2dyYXBoZXItaW1hZ2VzL290ZHIucG5nIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO30=', 1714298249),
('a0PcfIJ3ixtMiOxq2p58lsQa0M7WNWCv48SisraA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRTRtbm1KZ0NZSDRqcm1WOVhxRnF3c0w3d0RCbkhxRlIxajFlOUNiNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6ODp7czo1OiJyb3dJZCI7czozMjoiMmIxMmVkY2VhNTk3MWY2ZWQwZjMwN2UyMDMyMjY5YjgiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiTmlnZWwgTW9yc2UiO3M6NToicHJpY2UiO2Q6NTU1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MzU6InVwbG9hZC9waG90b2dyYXBoZXItaW1hZ2VzL290ZHIucG5nIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO30=', 1714298165),
('AHAAzv4RA3i9eAg1wKfpBCrPHN70pnhJiabkOhIW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToxMTp7czo2OiJfdG9rZW4iO3M6NDA6IlZwNktRTmRBaGM0ekhMR081VUdKV2pvTVpTdXZTN1hsUVBLOHQ4R2QiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY2hlY2tvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJEZuMDFpNnFsdi9XbEJwQURzTUE2ak94VEF4N1lTSDQ1SC83Z05pTWduQmY1SFFwclMvTjM2IjtzOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiIyYjEyZWRjZWE1OTcxZjZlZDBmMzA3ZTIwMzIyNjliOCI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjg6e3M6NToicm93SWQiO3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtzOjI6ImlkIjtpOjE7czozOiJxdHkiO2k6MTtzOjQ6Im5hbWUiO3M6MTE6Ik5pZ2VsIE1vcnNlIjtzOjU6InByaWNlIjtkOjU1NTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjU6ImltYWdlIjtzOjM1OiJ1cGxvYWQvcGhvdG9ncmFwaGVyLWltYWdlcy9vdGRyLnBuZyI7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7TjtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AdGF4UmF0ZSI7aToxNTt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fXM6MTE6Im9yZGVyX3RvdGFsIjtkOjYzODtzOjk6InRheF90b3RhbCI7ZDo4MztzOjE0OiJzaGlwcGluZ190b3RhbCI7ZDoxMDA7czoxMToiY3VzdG9tZXJfaWQiO2k6MTtzOjEzOiJjdXN0b21lcl9uYW1lIjtzOjEyOiJYYXZpZXIgRGF2aXMiO30=', 1714295316),
('CUxCsdEewSwfDFqxvmutQ06Z9WCKuxVxxdzeWCoa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMzdUMU9LMDFoMWRhOTl3aTV2Y1ZmbGFzTEtiYjZnOXhGZTVkSFJrQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714297779),
('df8aUJSA6mxoVZXUDaZ6SJ6J5j8MPRkscv08INZv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiM0ROV3Q5UEQ2QkF6U3FQM0tNdjk4QlJUZ0VKcFczNldYS2RzYXlKdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6ODp7czo1OiJyb3dJZCI7czozMjoiMmIxMmVkY2VhNTk3MWY2ZWQwZjMwN2UyMDMyMjY5YjgiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiTmlnZWwgTW9yc2UiO3M6NToicHJpY2UiO2Q6NTU1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MzU6InVwbG9hZC9waG90b2dyYXBoZXItaW1hZ2VzL290ZHIucG5nIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO30=', 1714298949),
('ErBvWwGjXVP91ADeqSsWMxAI6dRlDil5ij9oy3Xs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiazlSVFFSVVNYS3R0aTBxemNVZmtFaWljWFhsdG5hbjRxcGZYM3R0TCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714296654),
('GXcFrJYgPKWJ13fQxZkpmzZfO5rGm7OGiNkaOYSi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicjNRWXRtZjFJMFN0UUViNXZkb1k2c0lHVUhseXRpeVdxaEFDdTdpbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6ODp7czo1OiJyb3dJZCI7czozMjoiMmIxMmVkY2VhNTk3MWY2ZWQwZjMwN2UyMDMyMjY5YjgiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiTmlnZWwgTW9yc2UiO3M6NToicHJpY2UiO2Q6NTU1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MzU6InVwbG9hZC9waG90b2dyYXBoZXItaW1hZ2VzL290ZHIucG5nIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO30=', 1714296822),
('kDWxXTOJF8MzVuRFdGpe0x6vJNfn5VxRgOPp6fQS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoielBjeW9zR284M2kyRG9qbm0yY2dFTXByeHdxTXhpWlhCMjh2Y0tibSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6MTE6ImN1c3RvbWVyX2lkIjtpOjEwO3M6MTM6ImN1c3RvbWVyX25hbWUiO3M6MTQ6IkF6YWxpYSBDb2NocmFuIjtzOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiIyYjEyZWRjZWE1OTcxZjZlZDBmMzA3ZTIwMzIyNjliOCI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjg6e3M6NToicm93SWQiO3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtzOjI6ImlkIjtpOjE7czozOiJxdHkiO2k6MTtzOjQ6Im5hbWUiO3M6MTE6Ik5pZ2VsIE1vcnNlIjtzOjU6InByaWNlIjtkOjU1NTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjU6ImltYWdlIjtzOjM1OiJ1cGxvYWQvcGhvdG9ncmFwaGVyLWltYWdlcy9vdGRyLnBuZyI7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7TjtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AdGF4UmF0ZSI7aToxNTt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fXM6MTE6Im9yZGVyX3RvdGFsIjtkOjYzODtzOjk6InRheF90b3RhbCI7ZDo4Mzt9', 1714299585),
('NLG2rHsiWep4Adkg2N6XD9phV3KxrFMzRmyYPUwt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWGNLUUNZdndOMmJjUTlId0E5NFI2a25uNjhuWVluQnptRUxTRk9zMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714298627),
('R0xONzQRvXoeOv16U2bHlcAje6Hm5LbNlkAKMk0r', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoicFNxc0xPajZ3U0Q4MzE0N2Z2UDFNMXk3S1U5ejJybmhBTkZSV2NxNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6ODp7czo1OiJyb3dJZCI7czozMjoiMmIxMmVkY2VhNTk3MWY2ZWQwZjMwN2UyMDMyMjY5YjgiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiTmlnZWwgTW9yc2UiO3M6NToicHJpY2UiO2Q6NTU1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MzU6InVwbG9hZC9waG90b2dyYXBoZXItaW1hZ2VzL290ZHIucG5nIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO3M6MTE6ImN1c3RvbWVyX2lkIjtpOjQ7czoxMzoiY3VzdG9tZXJfbmFtZSI7czoxMjoiUm93YW4gVHJhdmlzIjt9', 1714296610),
('Sj0TNkK2K3gzdj7fuhf671byupJ8nKDLokTrC9yZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOWdJTUJlTTVMSUNia2lSYk8ycDhUZ1ZVMzNuTmMwYVh6d2dJQlJsOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY2hlY2tvdXQiO31zOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiIyYjEyZWRjZWE1OTcxZjZlZDBmMzA3ZTIwMzIyNjliOCI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjg6e3M6NToicm93SWQiO3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtzOjI6ImlkIjtpOjE7czozOiJxdHkiO2k6MTtzOjQ6Im5hbWUiO3M6MTE6Ik5pZ2VsIE1vcnNlIjtzOjU6InByaWNlIjtkOjU1NTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjU6ImltYWdlIjtzOjM1OiJ1cGxvYWQvcGhvdG9ncmFwaGVyLWltYWdlcy9vdGRyLnBuZyI7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7TjtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AdGF4UmF0ZSI7aToxNTt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fX0=', 1714295659),
('TjomJE21IsgIyfkHdll3E4sYi1E6fVEOLJl5W7jf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZTJVb1UxRVozaFdlN2NFdUhBNzFTTDFES21GWkhRRHJRajF2MFpJbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6ODp7czo1OiJyb3dJZCI7czozMjoiMmIxMmVkY2VhNTk3MWY2ZWQwZjMwN2UyMDMyMjY5YjgiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiTmlnZWwgTW9yc2UiO3M6NToicHJpY2UiO2Q6NTU1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MzU6InVwbG9hZC9waG90b2dyYXBoZXItaW1hZ2VzL290ZHIucG5nIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO30=', 1714296059),
('UGfVDvkCzVLntCJsfZ55jbHhjsNHg3lItdT128K7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidndYbU81TlFBRDJONXozczNDUGtVaDhSWlBxczhMQlBQQ2twaWpuUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714298280),
('uVVFKEer7hQdpFql1pFKV3QnrUjYQqp8XjUoP12O', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYmFPYUxza3VhTHBES1VScHhFWWZVa2Z6SEJjU2ZKUTBLTUMzQ3ZHciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6ODp7czo1OiJyb3dJZCI7czozMjoiMmIxMmVkY2VhNTk3MWY2ZWQwZjMwN2UyMDMyMjY5YjgiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiTmlnZWwgTW9yc2UiO3M6NToicHJpY2UiO2Q6NTU1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MzU6InVwbG9hZC9waG90b2dyYXBoZXItaW1hZ2VzL290ZHIucG5nIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO30=', 1714297183),
('Vv2aVV6YbIRMk3ksEc92vMuZJ63Bk19KM9ZMRxuw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMUFNeUNzMlZ3V0dVckZGTVZvRk1yRnlVNWdCTktLdVBXa1pMV21QMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6ODp7czo1OiJyb3dJZCI7czozMjoiMmIxMmVkY2VhNTk3MWY2ZWQwZjMwN2UyMDMyMjY5YjgiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiTmlnZWwgTW9yc2UiO3M6NToicHJpY2UiO2Q6NTU1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6MzU6InVwbG9hZC9waG90b2dyYXBoZXItaW1hZ2VzL290ZHIucG5nIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjE1O319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoxMToib3JkZXJfdG90YWwiO2Q6NjM4O3M6OToidGF4X3RvdGFsIjtkOjgzO30=', 1714298605),
('YhVy8ImFLzzOx2Y2MWeHfl4k0saItWQ61ULtmfRj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUEo5MjEzOUxqdGpyMjg1alRCSVFJc0hvb2p0N0w5dzk5TXpnYnhFcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714295344),
('YR3b9PPdCr5Lin3kKpjrYajnltBfBN1XyCKCpYjH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTmFqVmtvU1dmcFJHTWFYSlJCUG1FeVdQQURsejBPTGJ0TXZ4MmhobiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9waG90b2dyYXBoZXItZGV0YWlsLzEiO31zOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiIyYjEyZWRjZWE1OTcxZjZlZDBmMzA3ZTIwMzIyNjliOCI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjg6e3M6NToicm93SWQiO3M6MzI6IjJiMTJlZGNlYTU5NzFmNmVkMGYzMDdlMjAzMjI2OWI4IjtzOjI6ImlkIjtpOjE7czozOiJxdHkiO2k6MjE7czo0OiJuYW1lIjtzOjExOiJOaWdlbCBNb3JzZSI7czo1OiJwcmljZSI7ZDo1NTU7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7czo1OiJpbWFnZSI7czozNToidXBsb2FkL3Bob3RvZ3JhcGhlci1pbWFnZXMvb3Rkci5wbmciO31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO047czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAHRheFJhdGUiO2k6MTU7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX19', 1714300909);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Robin Larsen', 'dopaqibaha@mailinator.com', NULL, '$2y$12$Fn01i6qlv/WlBpADsMA6jOxTAx7YSH45H/7gNiMgnBf5HQprS/N36', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-20 02:15:32', '2024-04-20 02:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'venue',
  `name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `s_price` int(11) DEFAULT NULL,
  `r_price` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `featured_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venue_other_images`
--

CREATE TABLE `venue_other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_other_images`
--
ALTER TABLE `card_other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `customers_nid_unique` (`nid`);

--
-- Indexes for table `decorations`
--
ALTER TABLE `decorations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_other_images`
--
ALTER TABLE `food_other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_images`
--
ALTER TABLE `other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photographers_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `photographers_email_unique` (`email`);

--
-- Indexes for table `photographer_other_images`
--
ALTER TABLE `photographer_other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue_other_images`
--
ALTER TABLE `venue_other_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card_other_images`
--
ALTER TABLE `card_other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `decorations`
--
ALTER TABLE `decorations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_other_images`
--
ALTER TABLE `food_other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `other_images`
--
ALTER TABLE `other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photographer_other_images`
--
ALTER TABLE `photographer_other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venue_other_images`
--
ALTER TABLE `venue_other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
