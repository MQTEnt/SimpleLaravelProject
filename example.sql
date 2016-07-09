-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2016 at 08:29 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.6.22-1+donate.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE IF NOT EXISTS `cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `des`, `created_at`, `updated_at`) VALUES
(6, 'Đồng hồ đeo tay', 'Đồng hồ đeo tay đẹp', '2016-06-02 20:12:44', '2016-06-02 20:31:03'),
(10, 'Áo', 'Áo thời trang', '2016-06-03 07:43:52', '2016-06-03 07:43:52'),
(11, 'Quần', 'Quần thời trang giá rẻ', '2016-06-03 22:44:26', '2016-06-03 22:44:26'),
(12, 'Mũ', 'Mũ phong cách', '2016-06-03 22:44:41', '2016-06-03 22:44:41'),
(13, 'Giầy', 'Giầy chất lượng cao', '2016-06-17 02:51:35', '2016-06-17 02:51:35'),
(14, 'Ví', 'Ví hàng hiệu', '2016-06-17 18:22:01', '2016-06-17 18:22:01');

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_15_140637_create_products_table', 1),
('2016_06_02_080350_create_cates_table', 2),
('2016_06_02_084533_create_cates_table', 3),
('2016_06_02_084716_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `products_cate_id_foreign` (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `des`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ cơ', 'Đồng hồ đẹp', 6, '2016-06-03 20:40:52', '2016-06-16 19:58:22'),
(2, 'Áo sơ mi', 'Áo sơ mi chất lượng cao', 10, '2016-06-03 20:42:22', '2016-06-03 20:42:22'),
(3, 'Áo Bò Sữa', 'Áo Bò Sữa mới nhất', 10, '2016-06-03 23:22:41', '2016-06-03 23:22:41'),
(4, 'Áo Bò Sữa 3', 'Áo Bò Sữa mới nhất', 10, '2016-06-03 23:23:36', '2016-06-16 20:04:00'),
(5, 'Áo Bò Sữa 2', 'Áo Bò Sữa mới nhất', 10, '2016-06-03 23:23:47', '2016-06-03 23:23:47'),
(6, 'Nón sơn', 'Nón sơn hàng hiệu', 12, '2016-06-03 23:25:15', '2016-06-03 23:25:15'),
(7, 'Áo T-Shirt', 'Áo T-Shirt', 10, '2016-06-16 20:00:35', '2016-06-16 20:00:35'),
(8, 'Quần ngố', 'Quần ngố', 11, '2016-06-16 20:01:29', '2016-06-16 20:01:29'),
(9, 'Quần bò', 'Quần bò', 11, '2016-06-16 20:01:42', '2016-06-16 20:03:13'),
(10, 'Quần vải', 'Quần vải', 11, '2016-06-16 20:01:53', '2016-06-16 20:01:53'),
(11, 'Mũ D&G', 'Mũ D&G', 12, '2016-06-16 20:02:22', '2016-06-16 20:02:22'),
(13, 'Mũ GUCCI', 'Mũ GUCCI', 12, '2016-06-16 23:01:15', '2016-06-16 23:01:15'),
(14, 'Quần vải thô', 'Quần vải thô', 11, '2016-06-16 23:01:29', '2016-06-16 23:01:29'),
(15, 'Giầy Convert', 'Giầy Convert', 13, '2016-06-17 02:52:08', '2016-06-17 02:52:08'),
(16, 'Giầy Thượng Đình', 'Giầy Thượng Đình', 13, '2016-06-17 02:52:34', '2016-06-17 02:52:34'),
(17, 'Ví da LV', 'Ví da LV đẳng cấp', 14, '2016-06-17 18:22:14', '2016-06-17 18:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'admin', 'admin@gmail.com', '$2y$10$Ik7HZnAGl2frvXKuir4deOTG9PM2X3cV3AYD31BlogeAuvi6GZCFq', 'ZtCtkxcsJK0ZyyGDOEVUfkMsjKYjQH1OIocKC29Z2eusb1PNmr2ILqdl9W25', '2016-06-17 02:44:25', '2016-06-17 18:22:58'),
(12, 'admin2', 'admin2@gmail.com', '$2y$10$mTpKdmQc/9RIMQLXPZo0wOKW9OblNGTxVDYyRf.u7.zUEpzVxgreS', 'WQTMcob234QAJGj0omoTsegXInWGhSjWeu9P4dtpKQSKgqNb8PG5PxG2JnwR', '2016-06-17 02:46:53', '2016-06-17 02:47:15');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
