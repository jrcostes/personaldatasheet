-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 12:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_07_27_023400_create_sheet_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sheets`
--

CREATE TABLE `sheets` (
  `id` int(10) UNSIGNED NOT NULL,
  `surname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstnameext` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `midname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placeofBirth` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `bloodType` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gsisno` bigint(20) DEFAULT NULL,
  `pagibigno` bigint(20) DEFAULT NULL,
  `philhealthno` bigint(20) DEFAULT NULL,
  `sssno` bigint(20) DEFAULT NULL,
  `tinno` bigint(20) DEFAULT NULL,
  `agencyemp` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizens` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential-house` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential-st` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential-sudv` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential-brgy` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential-city` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential-prv` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential-zip` int(11) DEFAULT NULL,
  `permanent-house` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent-st` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent-sudv` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent-brgy` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent-city` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent-prv` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent-zip` int(11) DEFAULT NULL,
  `telno` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobno` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spousesn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spousefn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spousenmext` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spousemn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouseocc` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouseemp` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouseempadd` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spousetel` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fathersn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fatherfn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fatherext` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fathermn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothersn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motherfn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motherext` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothermn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child0` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthchild0` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthchild1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthchild2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child3` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthchild3` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child4` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthchild4` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elemname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elemdeg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendancefrom` year(4) DEFAULT NULL,
  `attendanceto` year(4) DEFAULT NULL,
  `elemunitLevel` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeargradelem` year(4) DEFAULT NULL,
  `scholarshipelem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsdeg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendancefromhs` year(4) DEFAULT NULL,
  `attendancetohs` year(4) DEFAULT NULL,
  `hsunitLevel` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeargradhs` year(4) DEFAULT NULL,
  `scholarshiphs` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocdeg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendancefromvoc` year(4) DEFAULT NULL,
  `attendancetovoc` year(4) DEFAULT NULL,
  `vocunitLevel` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeargradvoc` year(4) DEFAULT NULL,
  `scholarshipvoc` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coldeg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendancefromcol` year(4) DEFAULT NULL,
  `attendancetocol` year(4) DEFAULT NULL,
  `colunitLevel` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeargradcol` year(4) DEFAULT NULL,
  `scholarshipcol` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gradname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graddeg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendancefromgrad` year(4) DEFAULT NULL,
  `attendancetograd` year(4) DEFAULT NULL,
  `gradunitLevel` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeargrad` year(4) DEFAULT NULL,
  `scholarshipgrad` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `sheets`
--
ALTER TABLE `sheets`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sheets`
--
ALTER TABLE `sheets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
