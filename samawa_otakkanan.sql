-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2023 at 03:21 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samawa_otakkanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_vitaes`
--

CREATE TABLE `curriculum_vitaes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `essay` text COLLATE utf8mb4_unicode_ci,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_prep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_target` int(11) DEFAULT NULL,
  `family_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mahdzab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curriculum_vitaes`
--

INSERT INTO `curriculum_vitaes` (`id`, `user_id`, `description`, `essay`, `education`, `career`, `hobby`, `vission`, `mission`, `marital_status`, `marriage_prep`, `marriage_target`, `family_info`, `religion_status`, `mahdzab`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'ini esai', NULL, NULL, NULL, 'ini visi', 'ini misi', 'Lajang', 'Siap', 2025, NULL, 'Taat', 'Imam A', '2023-04-10 08:44:38', '2023-04-15 04:23:09'),
(2, 4, NULL, 'ini esai', NULL, NULL, NULL, 'ini visi', 'ini misi', 'Single', 'Siap', 2025, NULL, 'Taat', 'Imam A', '2023-04-15 08:29:03', '2023-07-17 21:32:28'),
(3, 5, NULL, 'essay', NULL, NULL, NULL, 'visi', 'misi', 'test', NULL, 10, NULL, NULL, NULL, '2023-07-10 06:17:23', '2023-07-10 09:17:25');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) UNSIGNED NOT NULL,
  `to` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `from`, `to`, `created_at`, `updated_at`) VALUES
(2, 4, 17, '2023-07-10 06:51:43', '2023-07-10 06:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `khitbahs`
--

CREATE TABLE `khitbahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) UNSIGNED NOT NULL,
  `to` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khitbahs`
--

INSERT INTO `khitbahs` (`id`, `from`, `to`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 4, 0, NULL, NULL),
(2, 2, 4, 0, NULL, NULL),
(3, 4, 6, 0, NULL, NULL),
(4, 4, 6, 0, NULL, NULL),
(5, 4, 6, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khitbah_schedules`
--

CREATE TABLE `khitbah_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `khitbah_id` bigint(20) UNSIGNED NOT NULL,
  `ustadz_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khitbah_schedules`
--

INSERT INTO `khitbah_schedules` (`id`, `khitbah_id`, `ustadz_id`, `guardian_name`, `guardian_phone`, `notes`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'fidisa', '099999999', 'coba', '0000-00-00', '00:00:00', '2023-07-10 07:55:00', '2023-07-10 07:55:00'),
(2, 2, NULL, 'fidisa', '099999999', 'coba', '0000-00-00', '00:00:00', '2023-07-10 08:53:49', '2023-07-10 08:53:49'),
(3, 3, NULL, 'fidisa', '099999999', 'coba', '2023-03-21', '12:03:00', '2023-07-27 07:25:32', '2023-07-27 07:25:32'),
(4, 4, 1, 'rizki', '085731544494', 'coba', '2023-03-21', '12:03:00', '2023-07-27 07:26:24', '2023-07-27 07:26:24'),
(5, 5, NULL, 'Toyota', '08123456789', 'test', '2023-03-21', '12:03:00', '2023-07-27 17:01:25', '2023-07-27 17:01:25');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_27_114107_create_curriculum_vitaes_table', 1),
(6, '2023_03_27_114650_create_favorites_table', 1),
(7, '2023_03_27_114837_create_photos_table', 1),
(8, '2023_03_27_115159_create_ustadzs_table', 1),
(9, '2023_03_27_115301_create_khitbahs_table', 1),
(10, '2023_03_27_115454_create_khitbah_schedules_table', 1),
(11, '2023_03_27_121853_create_varifications_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Random.jpg', NULL, NULL),
(2, 3, 'Random.jpg', NULL, NULL),
(3, 4, 'Random.jpg', NULL, NULL),
(4, 4, 'gambar 2.png', '2023-07-17 21:30:51', '2023-07-17 21:30:51'),
(5, 4, 'peb.jpeg', '2023-07-17 21:30:51', '2023-07-17 21:30:51'),
(6, 4, 'pens.jpg', '2023-07-17 21:30:51', '2023-07-17 21:30:51'),
(8, 4, 'peb.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bornday` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `bornday`, `gender`, `province`, `city`, `phone`, `email`, `email_verified_at`, `password`, `is_verified`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fidisa Anindya', '2002-10-01', 'Perempuan', 'Jawa Timur', 'Surabaya', '089521441520', 'fidisanindya@gmail.com', NULL, '$2y$10$Y/k6Cs08aMfVDEqZx.zxk.qn7bzBLshwUjpLVotKrCviMoSlBwkLq', 0, 1, NULL, NULL, NULL),
(2, 'Santi', '2023-04-13', 'Laki-laki', 'Jawa Timur', 'Sidoarjo', '08123456789', 'santi@gmail.com', NULL, '$2y$10$Y/k6Cs08aMfVDEqZx.zxk.qn7bzBLshwUjpLVotKrCviMoSlBwkLq', 0, 1, NULL, '2022-10-07 19:14:52', '2022-10-07 19:14:53'),
(3, 'Fidisa Anindyaaaaa', '2002-10-01', 'Perempuan', 'Jawa Timur', 'Surabaya', '089521441520', 'fidisanindyaaaaaaaa@gmail.com', NULL, '$2y$10$iBedLRtgtxznD9.h/BHTlOnvlTnoJMBrNTvwbEGBIB4GmsJYfRdCW', 0, 1, NULL, NULL, NULL),
(4, 'Santi Sans', '2002-05-13', 'Perempuan', 'Jawa Timur', 'Surabaya', '089521441520', 'santi1@gmail.com', NULL, '$2y$10$/UnldwxPm5O.ygr9A3eHh.qYBIFWiwLekYfqUM9/sBXmOZD7fEorC', 0, 1, NULL, NULL, '2023-07-17 21:32:28'),
(5, 'testing', '2023-10-15', 'male', 'jawa timur', 'surabaya', '87654321', 'tes@gmail.com', NULL, '$2y$10$dAvBCLuCAM9aoBu0gTCOFugLqS2sLSpCy12Msi4hwjfoMyrGaA8yC', 0, 1, NULL, NULL, NULL),
(6, 'testing', '2023-10-15', 'male', 'jawa timur', 'surabaya', '87654321', 'tess@gmail.com', NULL, '$2y$10$i.dn4CiVo9jKhto..6QOyOmJDpW8aDLvhLCs8wjZw95wzqz9LtkYq', 0, 1, NULL, NULL, NULL),
(7, 'Santi', '2002-10-01', 'Perempuan', 'Jawa Timur', 'Surabaya', '089521441520', 'santi1234@gmail.com', NULL, '$2y$10$Zdfd29vbfu1nvQHSgTyIpOJ4IW3YdVqqFgR0RPx.ePYQj3LfToJQS', 0, 1, NULL, NULL, NULL),
(8, 'testing3', '2023-10-15', 'male', 'jawa timur', 'surabaya', '87654321', 'tes3@gmail.com', NULL, '$2y$10$/xkFvmn44A5FrWbY2vS3k.d6MjGyGm48uCfbH2DfeY/sLXjIAgqxq', 0, 1, NULL, NULL, NULL),
(9, 'testing4', '2023-10-15', 'male', 'jawa timur', 'surabaya', '87654321', 'tes4@gmail.com', NULL, '$2y$10$cBa.kaQMXuLM1MTeODGQYuj/Jq4YmDpPtfKOnTG4.cZuHpi7pvq62', 0, 1, NULL, NULL, NULL),
(10, 'coba1', '2002-05-03', 'Perempuan', 'Jawa Timur', 'Surabaya', '085731544494', 'coba@gmail.com', NULL, '$2y$10$WHkRzqfkmjtH6F434Z0w1uYr1eCDZsz2G5psr99HyrutH.LVNX2Yi', 0, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ustadzs`
--

CREATE TABLE `ustadzs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varifications`
--

CREATE TABLE `varifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `face_with_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bornplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bornday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urban_village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varifications`
--

INSERT INTO `varifications` (`id`, `user_id`, `ktp`, `face_with_ktp`, `bornplace`, `bornday`, `gender`, `marital_status`, `address`, `rt`, `rw`, `province`, `city`, `subdistrict`, `urban_village`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 20, '0987654321000', 'aqyun rista', 'sidoarjo', '2002-10-03', 'Perempuan', 'Single', 'Jl. Krian', '02', '03', 'Jawa Timur', 'Sidoarjo', 'Krian', 'Krian', '62251', '2023-07-10 00:46:39', '2023-07-10 01:09:51'),
(2, 4, '352422520605052', '/tmp/phpty8X9Z', 'sidoarjo', '2002-10-03', 'Perempuan', 'Single', 'Jl. Krian', '02', '03', 'Jawa Timur', 'Sidoarjo', 'Krian', 'Krian', '62251', '2023-07-10 08:52:02', '2023-07-17 22:04:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curriculum_vitaes`
--
ALTER TABLE `curriculum_vitaes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khitbahs`
--
ALTER TABLE `khitbahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khitbah_schedules`
--
ALTER TABLE `khitbah_schedules`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `ustadzs`
--
ALTER TABLE `ustadzs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varifications`
--
ALTER TABLE `varifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curriculum_vitaes`
--
ALTER TABLE `curriculum_vitaes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `khitbahs`
--
ALTER TABLE `khitbahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khitbah_schedules`
--
ALTER TABLE `khitbah_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ustadzs`
--
ALTER TABLE `ustadzs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varifications`
--
ALTER TABLE `varifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
