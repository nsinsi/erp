-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 04:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(20) NOT NULL,
  `resource_id` int(20) NOT NULL DEFAULT 0,
  `name` varchar(500) NOT NULL DEFAULT '0',
  `url` varchar(500) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `resource_id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(2, 1, '0', 'public/attachments/1623506702.pdf', '2021-06-12 14:05:02', '2021-06-12 12:05:02'),
(3, 1, '0', 'public/attachments/1623506798.pdf', '2021-06-12 14:06:38', '2021-06-12 12:06:38'),
(4, 1, '0', 'public/attachments/1623506798.pdf', '2021-06-12 14:06:38', '2021-06-12 12:06:38'),
(5, 1, '0', 'public/attachments/1623506798.pdf', '2021-06-12 14:06:38', '2021-06-12 12:06:38'),
(6, 51, '0', 'public/attachments/1623506870.pdf', '2021-06-12 14:07:50', '2021-06-12 12:07:50'),
(7, 51, '0', 'public/attachments/1623506870.pdf', '2021-06-12 14:07:50', '2021-06-12 12:07:50'),
(8, 51, '0', 'public/attachments/1623506870.pdf', '2021-06-12 14:07:50', '2021-06-12 12:07:50'),
(9, 52, '0', 'public/attachments/Barriers20to20Internet20in20Africa20Internet20Society_0.pdf1623507761.pdf', '2021-06-12 14:22:41', '2021-06-12 12:22:41'),
(10, 52, '0', 'public/attachments/Global_Internet_Report_2014_0.pdf1623507761.pdf', '2021-06-12 14:22:41', '2021-06-12 12:22:41'),
(11, 52, '0', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-12 14:22:41', '2021-06-12 12:22:41'),
(12, 53, '0', 'public/attachments/Book2.xlsx', '2021-06-12 14:35:32', '2021-06-12 12:35:32'),
(13, 0, '0', '', '2021-06-12 15:48:12', '2021-06-12 15:48:12'),
(14, 55, 'SERVICE DETAILS-YONECO.docx', 'public/attachments/SERVICE DETAILS-YONECO.docx', '2021-06-12 17:48:41', '2021-06-12 15:48:41'),
(15, 55, 'smart agriculture proposal.docx', 'public/attachments/smart agriculture proposal.docx', '2021-06-12 17:48:42', '2021-06-12 15:48:42'),
(16, 55, 'Surveillance system(1).docx', 'public/attachments/Surveillance system(1).docx', '2021-06-12 17:48:42', '2021-06-12 15:48:42'),
(17, 56, 'John W. Creswell - Qualitative Inquiry and Research Design_ Choosing among Five Approaches, 2nd edition (2007).pdf', 'public/attachments/John W. Creswell - Qualitative Inquiry and Research Design_ Choosing among Five Approaches, 2nd edition (2007).pdf', '2021-06-13 15:27:50', '2021-06-13 13:27:50'),
(18, 56, 'Module4-PolicyFormulation.pdf', 'public/attachments/Module4-PolicyFormulation.pdf', '2021-06-13 15:27:50', '2021-06-13 13:27:50'),
(19, 56, 'mzuni_ict_policy.pdf', 'public/attachments/mzuni_ict_policy.pdf', '2021-06-13 15:27:50', '2021-06-13 13:27:50'),
(20, 57, 'LAN INSTALLATION.xlsx', 'public/attachments/LAN INSTALLATION.xlsx', '2021-06-13 15:40:39', '2021-06-13 13:40:39'),
(21, 58, 'LAN INSTALLATION.xlsx', 'public/attachments/LAN INSTALLATION.xlsx', '2021-06-13 15:41:15', '2021-06-13 13:41:15'),
(22, 59, 'LAN INSTALLATION.xlsx', 'public/attachments/LAN INSTALLATION.xlsx', '2021-06-13 15:42:59', '2021-06-13 13:42:59'),
(23, 60, 'LAN INSTALLATION.xlsx', 'public/attachments/LAN INSTALLATION.xlsx', '2021-06-13 15:43:57', '2021-06-13 13:43:57'),
(24, 61, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 15:48:08', '2021-06-13 13:48:08'),
(25, 62, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 15:49:40', '2021-06-13 13:49:40'),
(26, 63, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 15:51:25', '2021-06-13 13:51:25'),
(27, 64, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 15:58:48', '2021-06-13 13:58:48'),
(28, 65, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 16:01:27', '2021-06-13 14:01:27'),
(29, 66, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 16:03:13', '2021-06-13 14:03:13'),
(30, 67, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 16:03:37', '2021-06-13 14:03:37'),
(31, 68, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 16:05:51', '2021-06-13 14:05:51'),
(32, 69, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 16:06:36', '2021-06-13 14:06:36'),
(33, 70, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 16:08:15', '2021-06-13 14:08:15'),
(34, 71, 'history_internet_africa.pdf1623507761.pdf', 'public/attachments/history_internet_africa.pdf1623507761.pdf', '2021-06-13 16:08:33', '2021-06-13 14:08:33'),
(35, 72, 'requisition(5).pdf', 'public/attachments/requisition(5).pdf', '2021-06-13 18:29:02', '2021-06-13 16:29:02'),
(36, 72, 'requisition(7).pdf', 'public/attachments/requisition(7).pdf', '2021-06-13 18:29:02', '2021-06-13 16:29:02'),
(37, 73, 'requisition(4).pdf', 'public/attachments/requisition(4).pdf', '2021-06-13 18:44:00', '2021-06-13 16:44:00'),
(38, 73, 'requisition(6).pdf', 'public/attachments/requisition(6).pdf', '2021-06-13 18:44:00', '2021-06-13 16:44:00'),
(39, 74, 'requisition(3).pdf', 'public/attachments/requisition(3).pdf', '2021-06-14 10:45:57', '2021-06-14 08:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `budgetlines`
--

CREATE TABLE `budgetlines` (
  `id` int(20) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `budgetlines`
--

INSERT INTO `budgetlines` (`id`, `name`, `project_id`, `code`) VALUES
(1, 'administration', 1, '1.2.1'),
(2, 'vehicle maintenance', 1, '1.0.0'),
(3, 'Orientention', 2, '1.2.3');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'ICT'),
(2, 'Helpline'),
(3, 'Radio'),
(4, 'Finance'),
(5, 'Programs');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `districtmanager_id` bigint(20) NOT NULL,
  `supportmanager_id` bigint(20) NOT NULL,
  `seniormanager_id` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `districtmanager_id`, `supportmanager_id`, `seniormanager_id`, `updated_at`, `created_at`) VALUES
(1, 'Dedza', 1, 2, 5, NULL, NULL),
(2, 'Dowa', 1, 2, 5, NULL, NULL),
(3, 'Kasungu', 1, 2, 5, NULL, NULL),
(4, 'Lilongwe', 1, 2, 5, NULL, NULL),
(5, 'Mchinji', 1, 2, 5, NULL, NULL),
(6, 'Nkhotakota', 1, 2, 5, NULL, NULL),
(7, 'Ntcheu', 1, 2, 5, NULL, NULL),
(8, 'Ntchisi', 1, 2, 5, NULL, NULL),
(9, 'Salima', 1, 2, 5, NULL, NULL),
(10, 'Chitipa', 1, 2, 5, NULL, NULL),
(11, 'Karonga', 1, 2, 5, NULL, NULL),
(12, 'Likoma', 1, 2, 5, NULL, NULL),
(13, 'Mzimba', 1, 2, 5, NULL, NULL),
(14, 'Nkhata Bay', 1, 2, 5, NULL, NULL),
(15, 'Rumphi', 1, 2, 5, NULL, NULL),
(16, 'Balaka', 1, 2, 5, NULL, NULL),
(17, 'Blantyre', 1, 2, 5, NULL, NULL),
(18, 'Chikhwawa', 1, 2, 5, NULL, NULL),
(19, 'Chiradzulu', 1, 2, 5, NULL, NULL),
(20, 'Machinga', 1, 2, 5, NULL, NULL),
(21, 'Mangochi', 1, 2, 5, NULL, NULL),
(22, 'Mulanje', 1, 2, 5, NULL, NULL),
(23, 'Mwanza', 1, 2, 5, NULL, NULL),
(24, 'Nsanje', 1, 2, 5, NULL, NULL),
(25, 'Thyolo', 1, 2, 5, NULL, NULL),
(26, 'Phalombe', 1, 2, 5, NULL, NULL),
(27, 'Zomba', 1, 2, 5, NULL, NULL),
(28, 'Neno', 1, 2, 5, '2021-07-19 05:49:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `district_user`
--

CREATE TABLE `district_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district_user`
--

INSERT INTO `district_user` (`id`, `user_id`, `district_id`) VALUES
(11, 1, 1),
(12, 1, 2),
(13, 1, 3),
(14, 1, 4),
(15, 1, 5),
(16, 1, 6),
(17, 1, 7),
(18, 1, 8),
(19, 1, 9),
(20, 1, 10),
(21, 1, 11),
(22, 1, 12),
(23, 1, 13),
(24, 1, 14),
(25, 1, 15),
(26, 1, 16),
(27, 1, 17),
(28, 1, 18),
(29, 1, 19),
(30, 1, 20),
(31, 1, 21),
(32, 1, 22),
(33, 1, 23),
(34, 1, 24),
(35, 1, 25),
(36, 1, 26),
(37, 1, 27),
(38, 1, 28),
(39, 3, 1),
(42, 2, 1),
(43, 2, 2),
(44, 2, 3),
(45, 2, 15),
(46, 4, 1),
(128, 5, 1),
(129, 5, 2),
(130, 5, 3),
(131, 5, 4),
(132, 5, 5),
(133, 5, 6),
(134, 5, 7),
(135, 5, 8),
(136, 5, 9),
(137, 5, 10),
(138, 5, 11),
(139, 5, 12),
(140, 5, 13),
(141, 5, 14),
(142, 5, 15),
(143, 5, 16),
(144, 5, 17),
(145, 5, 18),
(146, 5, 19),
(147, 5, 20),
(148, 5, 21),
(149, 5, 22),
(150, 5, 23),
(151, 5, 24),
(152, 5, 25),
(153, 5, 26),
(154, 5, 27),
(155, 5, 28),
(156, 6, 1),
(157, 6, 2),
(158, 6, 3),
(159, 6, 4),
(160, 6, 5),
(161, 6, 6),
(162, 6, 7),
(163, 6, 8),
(164, 6, 9),
(165, 6, 10),
(166, 6, 11),
(167, 6, 12),
(168, 6, 13),
(169, 6, 14),
(170, 6, 15),
(171, 6, 16),
(172, 6, 17),
(173, 6, 18),
(174, 6, 19),
(175, 6, 20),
(176, 6, 21),
(177, 6, 22),
(178, 6, 23),
(179, 6, 24),
(180, 6, 25),
(181, 6, 26),
(182, 6, 27),
(183, 6, 28),
(184, 10, 21);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(10) UNSIGNED NOT NULL,
  `furniture_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_procured` date NOT NULL,
  `estimate_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty_value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_procured` int(11) NOT NULL,
  `estimate_value` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `hardware_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` int(11) NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`id`, `date_procured`, `estimate_value`, `quatity`, `hardware_type`, `model`, `project_name`, `serial_number`, `supplier`, `warranty`, `created_at`, `updated_at`) VALUES
(1, 2021, 30, 2, 'Keyboard', 'dell', 'apa', 77889890, 'yoneco', 2, NULL, NULL),
(2, 2021, 30, 5, 'Audio Processor', 'dell', 'tithetse', 27635362, 'officenet', 1, NULL, NULL),
(3, 2021, 20, 1, 'Transmitter', 'dell', 'wfp', 192837363, 'officenet', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemable_id` int(11) NOT NULL,
  `itemable_type` enum('Software,Hardware,Furniture,Stationary,Vehicle') COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty` int(11) NOT NULL,
  `year_of_make` int(11) NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_purchase`
--

CREATE TABLE `item_purchase` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `cost` int(11) NOT NULL,
  `warranty_value` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_release`
--

CREATE TABLE `item_release` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `release_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2020_09_21_144209_create_district_table', 1),
(68, '2014_10_12_100000_create_password_resets_table', 2),
(69, '2019_08_19_000000_create_failed_jobs_table', 2),
(70, '2020_09_21_134840_create_department_table', 2),
(71, '2020_09_21_144230_create_users_table', 2),
(72, '2020_09_21_144245_create_district_user_table', 2),
(73, '2020_09_21_144930_create_project_table', 2),
(74, '2020_09_21_145031_create_supplier_table', 2),
(75, '2020_09_21_145111_create_vendor_table', 2),
(76, '2020_09_21_150136_create_type_table', 2),
(77, '2020_09_21_150742_create_item_table', 2),
(78, '2020_09_21_152216_create_purchase_table', 2),
(79, '2020_09_21_161434_create_item_purchase_table', 2),
(80, '2020_09_21_161502_create_release_table', 2),
(81, '2020_09_21_161536_create_item_release_table', 2),
(82, '2020_09_22_061054_create_hardware_table', 2),
(83, '2020_09_22_061110_create_software_table', 2),
(84, '2020_09_22_061136_create_furniture_table', 2),
(85, '2020_09_22_061207_create_vehicle_table', 2),
(86, '2020_09_22_061248_create_stationary_table', 2),
(87, '2020_09_22_064334_create_stores_table', 2),
(88, '2021_03_26_080113_create_products_table', 2),
(89, '2021_03_30_140749_create_permission_tables', 2),
(90, '2021_04_15_120731_create_users_permissions_table', 2),
(91, '2021_04_15_121057_create_users_roles_table', 2),
(92, '2021_04_15_121232_create_roles_permissions_table', 2),
(93, '2021_04_15_121232_create_roles_permissions_table', 2),
(101, '2021_04_29_070358_create_activity_table', 3),
(102, '2021_04_29_074825_create_requisition_table', 3),
(103, '2021_04_29_075756_create_budget_line_table', 3),
(104, '2021_04_29_084930_create_attachment_table', 3),
(106, '2021_04_29_102959_create_budgetable_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 10),
(6, 'App\\Models\\User', 5),
(7, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payabletos`
--

CREATE TABLE `payabletos` (
  `id` int(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `account_number` int(20) NOT NULL,
  `bank_details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payabletos`
--

INSERT INTO `payabletos` (`id`, `full_name`, `account_number`, `bank_details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Moses Msukwa', 189386407, 'Nation', NULL, NULL, NULL),
(2, 'Electronics 4 U', 286392, 'FDH', NULL, NULL, NULL),
(3, 'chinsinsi chakanika', 948568, 'chinsinsi chakanika', '2021-09-13 04:09:04', '2021-09-13 04:09:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create-user', 'web', '2021-04-23 12:11:43', '2021-04-23 12:11:43'),
(2, 'edit-user', 'web', '2021-04-23 12:11:44', '2021-04-23 12:11:44'),
(3, 'delete-user', 'web', '2021-04-23 12:11:44', '2021-04-23 12:11:44'),
(4, 'update-user', 'web', '2021-04-23 12:11:44', '2021-04-23 12:11:44'),
(5, 'list-user', 'web', '2021-04-23 12:11:49', '2021-04-23 12:11:49'),
(6, 'view stores item', 'web', '2021-04-23 12:11:50', '2021-04-23 12:11:50'),
(7, 'view personal history', 'web', '2021-04-23 12:11:50', '2021-04-23 12:11:50'),
(8, 'list-item', 'web', '2021-04-23 12:11:50', '2021-04-23 12:11:50'),
(9, 'add-item', 'web', '2021-04-23 12:12:03', '2021-04-23 12:12:03'),
(10, 'edit-item', 'web', '2021-04-23 12:12:03', '2021-04-23 12:12:03'),
(11, 'delete-item', 'web', '2021-04-23 12:12:03', '2021-04-23 12:12:03'),
(12, 'list-requisition', 'web', '2021-04-23 12:12:03', '2021-04-23 12:12:03'),
(13, 'create-requisition', 'web', '2021-04-23 12:12:04', '2021-04-23 12:12:04'),
(14, 'recommend-requisition', 'web', '2021-04-23 12:12:04', '2021-04-23 12:12:04'),
(15, 'endorse-requisition', 'web', '2021-04-23 12:12:04', '2021-04-23 12:12:04'),
(16, 'approve-requisition', 'web', '2021-04-23 12:12:04', '2021-04-23 12:12:04'),
(18, 'role-edit', 'web', '2021-05-10 22:00:00', '2021-05-10 22:00:00'),
(19, 'role-create', 'web', '2021-05-11 08:00:00', '2021-05-11 08:00:00'),
(20, 'role-delete', 'web', '2021-05-11 08:00:00', '2021-05-11 08:00:00'),
(21, 'role-list', 'web', '2021-05-11 08:00:00', '2021-05-11 08:00:00'),
(22, 'prepare-requisition', 'web', '2021-05-11 08:00:00', '2021-05-10 22:00:00'),
(23, 'collect-cheque', 'web', '2021-05-11 08:00:00', '2021-05-11 08:00:00'),
(24, 'print-requisition', 'web', '2021-05-11 08:02:04', '2021-05-11 08:02:04'),
(25, 'deny', 'web', '2021-05-11 08:02:04', '2021-05-11 08:02:04'),
(26, 'district-create', 'web', '2021-06-19 09:34:51', '2021-06-19 09:34:51'),
(27, 'check-cheque', 'web', '2021-07-19 07:25:16', '2021-07-19 07:25:16'),
(28, 'authorize-cheque', 'web', '2021-07-19 07:25:16', '2021-07-19 07:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` bigint(20) NOT NULL,
  `status_id` int(11) NOT NULL,
  `requisition_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `status_id`, `requisition_id`, `user_id`, `date`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 50, 1, '2021-06-13 13:19:29', 'For an activity in Mangochi', '2021-06-13 15:42:40', '2021-06-13 15:42:54'),
(3, 1, 71, 4, '2021-06-13 16:08:34', 'progress', '2021-06-13 14:08:34', '2021-06-13 14:08:34'),
(4, 2, 71, 2, '2021-06-13 16:46:33', 'recommended', '2021-06-13 14:46:33', '2021-06-13 14:46:33'),
(5, 2, 70, 2, '2021-06-13 17:05:32', 'recommended', '2021-06-13 15:05:32', '2021-06-13 15:05:32'),
(6, 3, 71, 1, '2021-06-13 17:08:19', 'endorsed', '2021-06-13 15:08:19', '2021-06-13 15:08:19'),
(7, 2, 69, 2, '2021-06-13 17:20:38', 'reommend', '2021-06-13 15:20:38', '2021-06-13 15:20:38'),
(8, 2, 68, 2, '2021-06-13 17:30:18', 'Recommended', '2021-06-13 15:30:18', '2021-06-13 15:30:18'),
(9, 2, 67, 2, '2021-06-13 17:35:13', 'recommended', '2021-06-13 15:35:13', '2021-06-13 15:35:13'),
(10, 2, 66, 2, '2021-06-13 17:41:32', 'recommend', '2021-06-13 15:41:32', '2021-06-13 15:41:32'),
(11, 2, 65, 2, '2021-06-13 17:44:49', 'reccommended', '2021-06-13 15:44:49', '2021-06-13 15:44:49'),
(12, 2, 64, 2, '2021-06-13 17:47:44', 'recommend', '2021-06-13 15:47:44', '2021-06-13 15:47:44'),
(13, 2, 63, 2, '2021-06-13 17:50:31', 'recommend', '2021-06-13 15:50:31', '2021-06-13 15:50:31'),
(14, 2, 62, 2, '2021-06-13 17:55:27', 'recommended', '2021-06-13 15:55:27', '2021-06-13 15:55:27'),
(15, 2, 60, 2, '2021-06-13 18:04:53', 'Recommended', '2021-06-13 16:04:53', '2021-06-13 16:04:53'),
(16, 3, 60, 1, '2021-06-13 18:11:05', 'This has been endorsed', '2021-06-13 16:11:05', '2021-06-13 16:11:05'),
(17, 4, 71, 5, '2021-06-13 18:15:13', 'Approved', '2021-06-13 16:15:13', '2021-06-13 16:15:13'),
(18, 4, 60, 5, '2021-06-13 18:19:37', 'approve', '2021-06-13 16:19:37', '2021-06-13 16:19:37'),
(19, 1, 72, 4, '2021-06-13 18:29:02', 'For procurement of project laptopss.', '2021-06-13 16:29:02', '2021-06-13 16:29:02'),
(20, 1, 73, 6, '2021-06-13 18:44:00', 'testea@yoneco.orgea@yoneco.orgea@yoneco.orgea@yoneco.org', '2021-06-13 16:44:00', '2021-06-13 16:44:00'),
(21, 1, 74, 1, '2021-06-14 10:45:57', 'vehicle hire', '2021-06-14 08:45:57', '2021-06-14 08:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_id` int(11) NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `project_brief` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `donor_id`, `code`, `project_brief`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'YFM', 1, 'YO/YFM/2030', 'YONECOFM is a communication entitiy for YONECO.', NULL, NULL, NULL),
(2, 'CFRM', 2, 'WFP/YONECO/01/2021', 'Complaint Feedback and response mechanism.', NULL, NULL, NULL),
(3, 'Child protection', 11, '09746', 'Violence against children knows no boundaries. It happens in every country, and in the places children should be most protected', '2021-09-13 04:06:01', '2021-09-13 04:06:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `dn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `chaque_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `release`
--

CREATE TABLE `release` (
  `id` int(10) UNSIGNED NOT NULL,
  `requesting_offials` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorised_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `released_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requisitions`
--

CREATE TABLE `requisitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `budgetline_id` int(20) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `purpose` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payableto_id` int(20) NOT NULL,
  `type` enum('payment','fuel') COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requisitions`
--

INSERT INTO `requisitions` (`id`, `user_id`, `budgetline_id`, `amount`, `purpose`, `payableto_id`, `type`, `memo_id`, `start_date`, `end_date`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 1000, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, 'payment', NULL, NULL, NULL, 1, '2021-05-06 13:54:10', '2021-05-06 13:54:10'),
(29, 1, 2, 100000, 'The purpsoe', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-06 11:52:13', '2021-06-06 11:52:13'),
(30, 1, 2, 100000, 'The purpsoe', 2, 'payment', NULL, '2021-06-07', '2021-06-10', 1, '2021-06-06 11:53:58', '2021-06-06 11:53:58'),
(31, 1, 3, 33003, 'the purposethe purposethe purposethe purposethe purposethe purpose', 1, 'payment', NULL, '2021-06-10', '2021-06-15', 1, '2021-06-12 10:48:06', '2021-06-12 10:48:06'),
(32, 1, 3, 33003, 'the purposethe purposethe purposethe purposethe purposethe purpose', 1, 'payment', NULL, '2021-06-10', '2021-06-15', 1, '2021-06-12 10:50:28', '2021-06-12 10:50:28'),
(33, 1, 1, 68900, 'this is the purpose.', 2, 'payment', NULL, '2021-06-08', '2021-06-22', 1, '2021-06-12 10:54:42', '2021-06-12 10:54:42'),
(34, 1, 1, 50000, 'this this this', 2, 'payment', NULL, '2021-06-08', '2021-06-14', 1, '2021-06-12 10:59:33', '2021-06-12 10:59:33'),
(35, NULL, NULL, 50000, 'this this this', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:00:54', '2021-06-12 11:00:54'),
(36, NULL, NULL, 50000, 'this this this', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:02:04', '2021-06-12 11:02:04'),
(37, NULL, NULL, 50000, 'this is it this is it this is it', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:02:49', '2021-06-12 11:02:49'),
(38, NULL, NULL, 50000, 'this is it this is it this is it', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:03:31', '2021-06-12 11:03:31'),
(39, NULL, NULL, 67788, 'this this', 1, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:04:04', '2021-06-12 11:04:04'),
(40, NULL, NULL, 84994, 'this is it.', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:06:35', '2021-06-12 11:06:35'),
(41, NULL, NULL, 84994, 'this is it.', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:07:03', '2021-06-12 11:07:03'),
(42, NULL, NULL, 84994, 'this is it.', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:07:13', '2021-06-12 11:07:13'),
(43, NULL, NULL, 84994, 'this is it.', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:09:03', '2021-06-12 11:09:03'),
(44, NULL, NULL, 73883, 'this is this is', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:26:46', '2021-06-12 11:26:46'),
(45, NULL, NULL, 73883, 'thisthis this this', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:35:19', '2021-06-12 11:35:19'),
(46, NULL, NULL, 244467, 'this this this this  this this', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:49:51', '2021-06-12 11:49:51'),
(47, NULL, NULL, 244467, 'this this this this  this this', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 11:59:39', '2021-06-12 11:59:39'),
(48, NULL, NULL, 244467, 'this this this this  this this', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 12:02:01', '2021-06-12 12:02:01'),
(49, NULL, NULL, 244467, 'this this this this  this this', 2, 'payment', NULL, NULL, NULL, 1, '2021-06-12 12:05:02', '2021-06-12 12:05:02'),
(50, 1, 1, 244467, 'this this this this  this this', 2, 'payment', NULL, '2021-06-15', '2021-06-15', 1, '2021-06-12 12:06:37', '2021-06-12 12:06:37'),
(51, 1, 1, 244467, 'this this this this  this this', 2, 'payment', NULL, '2021-06-15', '2021-06-15', 1, '2021-06-12 12:07:50', '2021-06-12 12:07:50'),
(52, 1, 3, 647883, 'this this this this this', 1, 'payment', NULL, '2021-06-11', '2021-06-16', 1, '2021-06-12 12:22:40', '2021-06-12 12:22:40'),
(53, 1, 1, 5262772, 'this is the purpose.', 1, 'payment', NULL, '2021-06-17', '2021-06-09', 1, '2021-06-12 12:35:32', '2021-06-12 12:35:32'),
(54, 1, 3, 69000, 'Distance learning graduate degree programs for working adults - More information', 2, 'payment', NULL, '2021-06-10', '2021-06-15', 1, '2021-06-12 15:48:12', '2021-06-12 15:48:12'),
(55, 1, 3, 69000, 'Distance learning graduate degree programs for working adults - More information', 2, 'payment', NULL, '2021-06-10', '2021-06-15', 1, '2021-06-12 15:48:41', '2021-06-12 15:48:41'),
(56, 4, 3, 59000, 'I am Kingsley Okpara, a Python and PHP Fullstack Web developer and tech writer, I also have extensive knowledge and experience with JavaScript while working on', 2, 'payment', NULL, '2021-06-15', '2021-06-18', 1, '2021-06-13 13:27:49', '2021-06-13 13:27:49'),
(57, 4, 1, 53838, 'Hello devs, How are you doing? I am going to be showing you a little trick on how to implement delete confirmation using bootstrap modal.', 1, 'payment', NULL, '2021-06-09', '2021-06-22', 1, '2021-06-13 13:40:38', '2021-06-13 13:40:39'),
(58, 4, 1, 53838, 'Hello devs, How are you doing? I am going to be showing you a little trick on how to implement delete confirmation using bootstrap modal.', 1, 'payment', NULL, '2021-06-09', '2021-06-22', 1, '2021-06-13 13:41:14', '2021-06-13 13:41:15'),
(59, 4, 1, 53838, 'Hello devs, How are you doing? I am going to be showing you a little trick on how to implement delete confirmation using bootstrap modal.', 1, 'payment', NULL, '2021-06-09', '2021-06-22', 1, '2021-06-13 13:42:59', '2021-06-13 13:42:59'),
(60, 4, 1, 53838, 'Hello devs, How are you doing? I am going to be showing you a little trick on how to implement delete confirmation using bootstrap modal.', 1, 'payment', NULL, '2021-06-09', '2021-06-22', 4, '2021-06-13 13:43:57', '2021-06-13 16:19:37'),
(61, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 1, '2021-06-13 13:48:08', '2021-06-13 13:48:08'),
(62, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 13:49:40', '2021-06-13 15:55:27'),
(63, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 13:51:24', '2021-06-13 15:50:31'),
(64, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 13:58:48', '2021-06-13 15:47:44'),
(65, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 14:01:27', '2021-06-13 15:44:49'),
(66, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 14:03:12', '2021-06-13 15:41:32'),
(67, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 14:03:37', '2021-06-13 15:35:13'),
(68, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 14:05:51', '2021-06-13 15:30:18'),
(69, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 14:06:36', '2021-06-13 15:20:38'),
(70, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 2, '2021-06-13 14:08:15', '2021-06-13 15:05:32'),
(71, 4, 1, 58848, 'progress', 1, 'payment', NULL, '2021-06-16', '2021-06-15', 4, '2021-06-13 14:08:33', '2021-06-13 16:15:13'),
(72, 4, 1, 1000000, 'For procurement of project laptopss.', 2, 'payment', NULL, '2021-06-15', '2021-06-24', 1, '2021-06-13 16:29:01', '2021-06-13 16:29:01'),
(73, 6, 3, 38899, 'testea@yoneco.orgea@yoneco.orgea@yoneco.orgea@yoneco.org', 2, 'payment', NULL, '2021-06-08', '2021-06-15', 1, '2021-06-13 16:44:00', '2021-06-13 16:44:00'),
(74, 1, 2, 63839, 'vehicle hire', 2, 'payment', NULL, '2021-06-08', '2021-06-22', 1, '2021-06-14 08:45:56', '2021-06-14 08:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'web', '2021-04-23 12:11:43', '2021-06-19 11:29:41'),
(2, 'Project Officer', 'web', '2021-04-23 12:11:49', '2021-06-19 11:29:17'),
(3, 'Program Support Manager', 'web', '2021-04-23 12:12:03', '2021-06-19 11:28:58'),
(4, 'Senior manager', 'web', '2021-04-23 12:12:03', '2021-06-19 11:28:44'),
(5, 'Accountant', 'web', '2021-05-08 04:34:28', '2021-05-08 04:34:28'),
(6, 'Executive Assistant', 'web', '2021-06-13 16:12:38', '2021-06-19 11:28:27'),
(7, 'Executive Director', 'web', '2021-06-13 16:41:48', '2021-06-19 11:27:54'),
(8, 'Section Head', 'web', '2021-06-19 11:34:55', '2021-06-19 11:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 4),
(6, 1),
(7, 1),
(8, 1),
(8, 4),
(8, 5),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(12, 5),
(12, 7),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(13, 5),
(13, 6),
(13, 8),
(14, 1),
(14, 3),
(14, 4),
(15, 1),
(15, 4),
(16, 1),
(16, 4),
(16, 7),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(22, 5),
(23, 1),
(23, 2),
(23, 3),
(23, 4),
(23, 5),
(23, 6),
(23, 8),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(24, 5),
(24, 6),
(24, 7),
(24, 8),
(25, 1),
(25, 3),
(25, 4),
(25, 7),
(26, 1),
(27, 4),
(28, 4),
(28, 7);

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_procured` int(11) NOT NULL,
  `estimate_value` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `software_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `license_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `date_procured`, `estimate_value`, `quatity`, `project_name`, `software_type`, `version`, `license_type`, `seat_number`, `created_at`, `updated_at`) VALUES
(1, 2021, 20, 1, 'tithe', 'microsoft', 21341, 'errfg', 32, NULL, NULL),
(2, 2021, 45, 1, 'tithetse', 'microsoft', 4, 'ggg', 43, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `id` int(10) UNSIGNED NOT NULL,
  `stationary_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `items` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `p/unit` int(11) NOT NULL,
  `chq_number` int(11) NOT NULL,
  `estimated_value` int(11) NOT NULL,
  `date_procured` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `description`) VALUES
(1, 'Created', 'Made by Officer'),
(2, 'Recommended', 'Recommended by Program Support Manager or Section Head'),
(3, 'Endorsed', 'Endorsed by Senior Manager.'),
(4, 'Approved', 'Approved by Senior Manager or Executive Director'),
(5, 'Allocate', 'Allocated by Finance Manager'),
(6, 'Cheque-written', 'Written by Finance Officer or Finance Assistant'),
(7, 'Cheque-checked', 'Checked by Finance Manager'),
(8, 'Cheque-authorized', 'Cheque Authorised by ED or Senior Manager'),
(9, 'Collected', 'Collected by Officer'),
(10, 'Denied', 'Denied by Program support manager or Senior Manager or Executive Director');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` int(11) NOT NULL DEFAULT 1,
  `distict` int(11) NOT NULL DEFAULT 1,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `department`, `distict`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 'Admin', 'admin@yoneco.org', 0, 0, 'Administrator', NULL, '$2y$10$KPQad6LLAKsxffqd36NCxeSytdKpfr0hJcXd1LMeKxsUEqi3CRRjm', NULL, '2021-04-23 12:11:35', '2021-05-08 08:07:02', NULL),
(2, 'PSM', 'PSM', 'psm@yoneco.org', 1, 1, 'Program Support Manager', NULL, '$2y$10$a0ipKEPqJhJ6bzcW3zcjOu3/A6nwhrxiVx60JQvZnH.qYEUVTLs0G', NULL, '2021-05-07 06:33:40', '2021-05-08 12:14:46', NULL),
(3, 'Project', 'Officer', 'projectofficer@yoneco.org', 1, 1, 'Project Officer', NULL, '$2y$10$RakD6vGOAsLjvgk2q6e9..isZ/.H46/ogOgWt/8Q.hhEVBhVQEcq.', NULL, '2021-05-07 07:11:13', '2021-05-08 11:59:07', NULL),
(4, 'Mussa', 'Masina', 'mussa@yoneco.org', 1, 1, 'Project Of', NULL, '$2y$10$Dy.pLS8bz1TPEETOL9.6COFBnIa8xopFy8RuvCWDHeC.BNNBl4KOq', NULL, '2021-05-08 07:32:37', '2021-05-08 12:38:59', NULL),
(5, 'Senio', 'Senio', 'sm@yoneco.com', 1, 1, 'Senior manager', NULL, '$2y$10$qI7nmRDKp9xhCepScWSmd.bypqNbUwmZ0P/5f2q5u8tS06h31a9ni', NULL, '2021-05-09 13:37:31', '2021-06-13 16:14:27', NULL),
(6, 'Esnart', 'Jere', 'ea@yoneco.org', 1, 1, '', NULL, '$2y$10$KPQad6LLAKsxffqd36NCxeSytdKpfr0hJcXd1LMeKxsUEqi3CRRjm', 'KhaMdqyqug4iQIY3kvit2KOsGISm6KNQw4MMlyHO2MDh5FISzf1uKKYVDjlv', '2021-06-13 18:32:11', '2021-06-13 18:32:12', NULL),
(7, 'comfort', 'liwambano', 'comfortliwambano@yoneco.org', 1, 1, 'Administrator', NULL, '1234', '1234', NULL, NULL, NULL),
(10, 'chinsinsi', 'chakanika', 'chinsinsichakanika@yoneco.org', 1, 1, 'Program Support Manager', NULL, '$2y$10$RBAn7jaP7tnNYqMQ65APD.f9yVMbHhoUMobj7sgQ/jdxxdfkmk1Jy', NULL, '2021-09-11 12:37:12', '2021-09-11 12:37:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gear_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_make` int(11) NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_number` int(11) NOT NULL,
  `plate_number` int(11) NOT NULL,
  `asset_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_procured` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD KEY `id` (`id`);

--
-- Indexes for table `budgetlines`
--
ALTER TABLE `budgetlines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `budget_line_project_id_foreign` (`project_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_user`
--
ALTER TABLE `district_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_user_district_id_foreign` (`district_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_vendor_id_foreign` (`vendor_id`),
  ADD KEY `item_type_id_foreign` (`type_id`);

--
-- Indexes for table `item_purchase`
--
ALTER TABLE `item_purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_purchase_purchase_id_foreign` (`purchase_id`),
  ADD KEY `item_purchase_item_id_foreign` (`item_id`);

--
-- Indexes for table `item_release`
--
ALTER TABLE `item_release`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_release_item_id_foreign` (`item_id`),
  ADD KEY `item_release_release_id_foreign` (`release_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payabletos`
--
ALTER TABLE `payabletos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_progress_status` (`status_id`),
  ADD KEY `FK_progress_requisitions` (`requisition_id`),
  ADD KEY `FK_progress_users` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_supplier_id_foreign` (`supplier_id`),
  ADD KEY `purchase_project_id_foreign` (`project_id`);

--
-- Indexes for table `release`
--
ALTER TABLE `release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisitions`
--
ALTER TABLE `requisitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requisition_user_id_foreign` (`user_id`),
  ADD KEY `FK_requisitions_budget_lines` (`budgetline_id`),
  ADD KEY `FK_requisitions_payabletos` (`payableto_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stationary_chq_number_unique` (`chq_number`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `budgetlines`
--
ALTER TABLE `budgetlines`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `district_user`
--
ALTER TABLE `district_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_purchase`
--
ALTER TABLE `item_purchase`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_release`
--
ALTER TABLE `item_release`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `payabletos`
--
ALTER TABLE `payabletos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `release`
--
ALTER TABLE `release`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requisitions`
--
ALTER TABLE `requisitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stationary`
--
ALTER TABLE `stationary`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budgetlines`
--
ALTER TABLE `budgetlines`
  ADD CONSTRAINT `budget_line_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district_user`
--
ALTER TABLE `district_user`
  ADD CONSTRAINT `district_user_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_purchase`
--
ALTER TABLE `item_purchase`
  ADD CONSTRAINT `item_purchase_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_purchase_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_release`
--
ALTER TABLE `item_release`
  ADD CONSTRAINT `item_release_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_release_release_id_foreign` FOREIGN KEY (`release_id`) REFERENCES `release` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `FK_progress_requisitions` FOREIGN KEY (`requisition_id`) REFERENCES `requisitions` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_progress_status` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_progress_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requisitions`
--
ALTER TABLE `requisitions`
  ADD CONSTRAINT `FK_requisitions_budget_lines` FOREIGN KEY (`budgetline_id`) REFERENCES `budgetlines` (`id`),
  ADD CONSTRAINT `FK_requisitions_payabletos` FOREIGN KEY (`payableto_id`) REFERENCES `payabletos` (`id`),
  ADD CONSTRAINT `FK_requisitions_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
