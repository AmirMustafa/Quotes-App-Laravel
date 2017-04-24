-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 03:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `author_log`
--

CREATE TABLE IF NOT EXISTS `author_log` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `author_log`
--

INSERT INTO `author_log` (`id`, `created_at`, `updated_at`, `author`) VALUES
(1, '2017-04-23 04:29:57', '2017-04-23 04:29:57', 'CulpaBachhan'),
(2, '2017-04-24 07:12:42', '2017-04-24 07:12:42', 'Albert Einstein');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_04_18_134925_create_authors_table', 1),
('2017_04_18_134937_create_quotes_table', 1),
('2017_04_23_023213_create_quote_logs_table', 2),
('2017_04_23_085004_create_author_logs_table', 3),
('2017_04_23_133516_create_admins_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quote` text COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote_log`
--

CREATE TABLE IF NOT EXISTS `quote_log` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quote_log`
--

INSERT INTO `quote_log` (`id`, `created_at`, `updated_at`, `author`) VALUES
(1, '2017-04-22 23:26:02', '2017-04-22 23:26:02', 'Medge Chaney'),
(2, '2017-04-23 00:11:47', '2017-04-23 00:11:47', 'Voluptatem ipsam'),
(3, '2017-04-23 00:16:19', '2017-04-23 00:16:19', 'Voluptatibu'),
(4, '2017-04-23 00:18:59', '2017-04-23 00:18:59', 'Assumenda doloremqu'),
(5, '2017-04-23 01:57:53', '2017-04-23 01:57:53', 'France India'),
(6, '2017-04-23 01:58:52', '2017-04-23 01:58:52', 'France India'),
(7, '2017-04-23 04:29:39', '2017-04-23 04:29:39', 'CulpaBachhan'),
(8, '2017-04-24 07:10:17', '2017-04-24 07:10:17', 'Albert Einstein'),
(9, '2017-04-24 07:15:59', '2017-04-24 07:15:59', 'Albert Einstein'),
(10, '2017-04-24 07:16:53', '2017-04-24 07:16:53', 'Amir Mustafa'),
(11, '2017-04-24 07:17:24', '2017-04-24 07:17:24', 'Amir Mustafa'),
(12, '2017-04-24 07:18:55', '2017-04-24 07:18:55', 'Brendon Urie'),
(13, '2017-04-24 07:19:57', '2017-04-24 07:19:57', 'Amir Mustafa'),
(14, '2017-04-24 07:20:48', '2017-04-24 07:20:48', 'Amir Mustafa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `account` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `account`, `email`, `password`, `status`, `created_at`, `modified_at`, `gender`) VALUES
(13, 'Kendallfff', 'None', 'hibafepedai@hotmail.com', 'Pa$$w0rd!wewewew', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(19, 'David Dash', 'None', 'mybudun@gmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Male'),
(21, 'Amir Mustafa', 'None', 'amirengg15@gmail.com', '123456', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Male'),
(22, 'Lars House', 'Personal', 'joriqu@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Male'),
(23, 'Lareina Holland', 'Company', 'lefuzuw@gmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(24, 'Gabriel Bright', 'Personal', 'qafogyqiw@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(25, 'Kennan Mueller', 'Personal', 'kodo@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(26, 'Jemima Bradford', 'Company', 'gijewy@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(27, 'Castor Anthony', 'Company', 'xitupod@yahoo.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(28, 'Scott Alvarado', 'Company', 'gutu@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_log`
--
ALTER TABLE `author_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_log`
--
ALTER TABLE `quote_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `author_log`
--
ALTER TABLE `author_log`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `quote_log`
--
ALTER TABLE `quote_log`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
