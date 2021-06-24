-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 10:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `text`, `image`, `created_at`, `updated_at`) VALUES
(7, 'While shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows, you can also quickly add or remove a shadow with our box-shadow utility classes. Includes support for .shadow-none and three default sizes (which have associated variables to match)', 'post_img/20210624070708.png', '2021-06-24 00:33:58', '2021-06-24 01:37:08'),
(8, 'While shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows, you can also quickly add or remove a shadow with our box-shadow utility classes. Includes support for .shadow-none and three default sizes (which have associated variables to match).', 'post_img/20210624060408.png', '2021-06-24 00:34:08', '2021-06-24 00:34:08'),
(9, 'While shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows, you can also quickly add or remove a shadow with our box-shadow utility classes. Includes support for .shadow-none and three default sizes (which have associated variables to match).', 'post_img/20210624060416.png', '2021-06-24 00:34:16', '2021-06-24 00:34:16'),
(10, 'While shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows, you can also quickly add or remove a shadow with our box-shadow utility classes. Includes support for .shadow-none and three default sizes (which have associated variables to match).', 'post_img/20210624060424.png', '2021-06-24 00:34:24', '2021-06-24 00:34:24'),
(11, 'While shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows, you can also quickly add or remove a shadow with our box-shadow utility classes. Includes support for .shadow-none and three default sizes (which have associated variables to match).', 'post_img/20210624060434.png', '2021-06-24 00:34:34', '2021-06-24 00:34:34'),
(12, 'While shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows, you can also quickly add or remove a shadow with our box-shadow utility classes. Includes support for .shadow-none and three default sizes (which have associated variables to match).\r\nWhile shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows, you can also quickly add or remove a shadow with our box-shadow utility classes. Includes support for .shadow-none and three default sizes (which have associated variables to match).', 'post_img/20210624060501.png', '2021-06-24 00:35:01', '2021-06-24 00:35:01');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_23_184534_create__datas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('t@gmail.com', '$2y$10$jtLryO7nWqJKycPV6IzxLuP/zX82N9j8a7SVR2hZc.bM0xgXXlcfi', '2021-06-24 00:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tilesh Deshmukh', 't@gmail.com', NULL, '$2y$10$lZL9W.xv8Hhg6/YtACVcCuF97hCsXLUWO31YzVd7sjiIpfHpOrk0.', NULL, '2021-06-23 07:21:02', '2021-06-23 07:21:02'),
(2, 'AJay Garde', 'a@gamil.com', NULL, '$2y$10$D19/D1.nkrNwj8Z19Bs9Z.1jtxkKBCTm4mak9fHrJHgHXju6XUmJy', NULL, '2021-06-24 00:20:59', '2021-06-24 00:20:59'),
(3, 'Sumit deshmukh', 's@gmail.com', NULL, '$2y$10$yB8yvLSGvnA4p0y9KXOhW..8xmBf5LTyQK6EMDkDHwTdOxBAhRnoC', NULL, '2021-06-24 01:35:24', '2021-06-24 01:35:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
