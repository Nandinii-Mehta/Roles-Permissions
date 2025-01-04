-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2025 at 11:39 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('disha@gmail.com|127.0.0.1', 'i:3;', 1735966573),
('disha@gmail.com|127.0.0.1:timer', 'i:1735966573;', 1735966573),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:5:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:12:\"manage-users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:12:\"manage-roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:18:\"manage-permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"manage-posts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:14:\"view-dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";}}}', 1736052487);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enlv_items_master`
--

DROP TABLE IF EXISTS `enlv_items_master`;
CREATE TABLE IF NOT EXISTS `enlv_items_master` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_id` varchar(100) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `version` varchar(10) NOT NULL DEFAULT '0.0',
  `category` varchar(255) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `image_thumbnail_link` text,
  `license_update` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `enlv_items_master`
--

INSERT INTO `enlv_items_master` (`id`, `item_id`, `item_name`, `version`, `category`, `color`, `image_thumbnail_link`, `license_update`) VALUES
(1, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '1.2.3', 'RISE CRM', '#ffddbf', 'https://s3.envato.com/files/476469486/thumbnail.png', 0),
(2, '51329685', 'CC Avenue Payment Gateway Module for Perfex CRM', '1.0.0', 'PERFEX CRM', '#ffddbf', 'https://s3.envato.com/files/491664572/Thubnail.png', 0),
(3, '51358524', 'CC Avenue Payment Gateway Plugin for Rise CRM', '1.0.1', 'RISE CRM', '#fbc02d', 'https://s3.envato.com/files/491865412/Thumbnail.png', 0),
(4, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '1.0.2', 'PERFEX CRM', '#80baff', 'https://s3.envato.com/files/492924397/Thumbnail.png', 0),
(5, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '1.0.0', 'PERFEX CRM', '#fbc02d', 'https://s3.envato.com/files/493790504/Thumbnail.png', 0),
(6, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for RISE CRM', '1.0.2', 'RISE CRM', '#fbc02d', 'https://s3.envato.com/files/494308600/Thumbnail.png', 0),
(7, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', '1.0.1', 'RISE CRM', '#B3DFE9', 'https://s3.envato.com/files/497124059/Thumbnail.png', 0),
(8, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', '1.0.0', 'PERFEX CRM', '#82b440', 'https://s3.envato.com/files/504273770/thumbnail.png', 1),
(9, '53315437', 'WhatsBoost - WhatsApp Marketing, Bot & Chat Plugin for Rise CRM', '1.0.0', 'RISE CRM', '', '', 0),
(10, '54636335', 'WhatsBot REST API Module for Perfex CRM - Connect your WhatsBot with third party applications', '1.0.0', 'Perfex CRM', '', '', 0),
(11, '412451', 'item-1', '1.0.2', 'category 2', '#a71616', 'https://s3.envato.com/files/504273770/thumbnail.pn...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enlv_product_versions`
--

DROP TABLE IF EXISTS `enlv_product_versions`;
CREATE TABLE IF NOT EXISTS `enlv_product_versions` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `vid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `version` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `release_date` date NOT NULL,
  `summary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `changelog` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `main_file` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sql_file` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vid` (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enlv_product_versions`
--

INSERT INTO `enlv_product_versions` (`id`, `vid`, `pid`, `version`, `release_date`, `summary`, `changelog`, `main_file`, `sql_file`, `status`, `created_at`, `updated_at`) VALUES
(3, 'ff016d2dc8cb3a7e6d07', '51504146', '1.2.0', '2024-12-30', 'Latest 1.2.0 Released ', '<ul>\n<li><strong>Improvement :&nbsp;</strong>Added support for Perfex CRM 3.2.1.</li>\n<li><strong>Added: One-click auto-updater&nbsp;</strong>feature across all modules to notify you within the CRM when a new update is available. Note :&nbsp;<em>If you encounter a white screen issue during module activation, simply refresh the page, and it will resolve automatically.</em></li>\n</ul>', '1735732718_upload.zip', NULL, 1, '2025-01-01 11:58:37', '2025-01-01 11:58:37'),
(4, '3249da017f8cab9f7d0e', '53052338', '2.0.3', '2025-01-02', 'New update 2.0.3', '<p>Note: Users are encouraged to update to the latest version to access these new features and improvements</p>', '1735800652_whatsbot.zip', NULL, 1, '2025-01-02 04:24:08', '2025-01-02 06:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `enlv_purchase_code_verifier`
--

DROP TABLE IF EXISTS `enlv_purchase_code_verifier`;
CREATE TABLE IF NOT EXISTS `enlv_purchase_code_verifier` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_id` varchar(100) NOT NULL,
  `item_name` text NOT NULL,
  `purchase_code` varchar(255) NOT NULL,
  `installed_version` varchar(10) NOT NULL DEFAULT '0.0',
  `purchase_time` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `activated_domain` varchar(255) NOT NULL,
  `license` varchar(100) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `ip` varchar(18) NOT NULL,
  `os` varchar(100) NOT NULL,
  `purchase_count` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `hash` varchar(32) DEFAULT NULL,
  `decryption_key` text,
  `last_validate_request` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `enlv_purchase_code_verifier`
--

INSERT INTO `enlv_purchase_code_verifier` (`id`, `item_id`, `item_name`, `purchase_code`, `installed_version`, `purchase_time`, `buyer`, `activated_domain`, `license`, `user_agent`, `ip`, `os`, `purchase_count`, `status`, `hash`, `decryption_key`, `last_validate_request`) VALUES
(5, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '3983eb96-ba03-4783-998a-659daa1bfaad', '0.0', '2023-10-14T03:02:34+11:00', 'wmotag7', 'https://webg7.com.br/', 'Regular License', 'Edge 117.0.2045.60', '2804:431:c7cf:e0e9', 'Windows 10', 1, 0, NULL, NULL, '2024-09-09 15:13:55'),
(14, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'ea73df41-5671-41df-b5f0-f85e96ad7bcd', '0.0', '2023-10-16T19:52:29+11:00', 'SDM9180', 'https://office.s-networks.io/', 'Regular License', 'Chrome 119.0.0.0', '81.83.24.148', 'Windows 10', 1, 0, NULL, NULL, '2024-06-11 07:52:49'),
(16, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '302a0dc4-a3f6-4b12-b7c4-523530f97355', '0.0', '2023-11-21T20:34:32+11:00', 'duanegblodgett', 'https://workplace.inbound.pk/', 'Regular License', 'Chrome 119.0.0.0', '182.186.106.6', 'Windows 10', 1, 0, NULL, NULL, '2024-09-10 12:09:01'),
(17, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '98a2e690-b0c2-48d6-9ec7-7a17229306ff', '1.2.1', '2023-12-04T04:55:59+11:00', 'essa_alfan', 'https://portal.signature-es.com/', 'Regular License', 'Chrome 119.0.0.0', '110.226.124.205', 'Windows 10', 1, 0, NULL, NULL, '2024-09-07 16:19:16'),
(18, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'f0006888-f39d-4b2e-a17f-af72d73e7a77', '1.2.2', '2023-12-05T20:14:17+11:00', 'pumpun', 'https://cloud.pumpun.com/', 'Regular License', 'Chrome 119.0.0.0', '77.26.218.215', 'Mac OS X', 1, 0, NULL, NULL, '2024-07-01 09:51:00'),
(22, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'dbc339ed-bc68-4d9b-9a8a-4c1e884f187b', '0.0', '2023-12-11T08:39:17+11:00', 'pilly74', 'https://portail.web-operis.be/', 'Regular License', 'Chrome 120.0.0.0', '178.51.184.194', 'Windows 10', 1, 0, NULL, NULL, '2024-09-04 06:47:48'),
(23, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'a831648a-91e5-4fc5-abfb-8ddf3ab2539d', '1.2.2', '2023-12-15T05:23:43+11:00', 'rockmiguel86', 'https://area.mpdigitalsuite.com/', 'Regular License', 'Chrome 120.0.0.0', '84.33.95.245', 'Windows 10', 1, 0, NULL, NULL, '2024-07-03 14:58:02'),
(24, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '7458c741-0652-4602-9bef-5864620e07cc', '0.0', '2023-12-29T13:04:14+11:00', 'npbdev', 'https://npbdev.work/', 'Regular License', 'Chrome 120.0.0.0', '73.60.42.66', 'Windows 10', 1, 0, NULL, NULL, '2024-09-05 02:22:46'),
(25, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'a2955e17-f621-4714-9f44-3e1a1f497ac3', '1.2.0', '2024-01-02T18:57:03+11:00', 'karlstatt', 'https://concepte-ideen.cloud/', 'Regular License', 'Firefox 121.0', '91.57.104.48', 'Windows 10', 1, 0, NULL, NULL, '2024-01-18 09:21:35'),
(26, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'f4eaf575-f1b1-49b9-b610-c823d480f0a2', '1.2.0', '2024-01-05T09:40:40+11:00', 'fayzanre', 'https://projets.novemsolution.com/', 'Regular License', 'Chrome 120.0.0.0', '140.228.21.53', 'Windows 10', 1, 0, NULL, NULL, '2024-03-19 07:53:51'),
(27, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '60696e1e-fef5-421d-8970-2b677a3e6ce2', '1.2.2', '2024-01-23T05:17:51+11:00', 'difadi', 'https://proyectos.difadi.com/', 'Regular License', 'Chrome 120.0.0.0', '213.177.214.14', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-05 20:30:02'),
(28, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '7a93cf3a-fb7f-4869-98b0-45e49c4c3d2d', '1.2.0', '2024-01-24T22:10:58+11:00', 'DarrenMorton', 'https://crm.agentsaperture.co.uk/', 'Regular License', 'Chrome 120.0.0.0', '77.97.172.22', 'Mac OS X', 1, 0, NULL, NULL, '2024-03-14 10:22:42'),
(29, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '14cb3a58-33e5-42db-9dca-13cbd06dab36', '1.2.0', '2024-02-03T03:01:14+11:00', 'Kingston_27', 'https://www.demo.avioapp.com/', 'Regular License', 'Chrome 121.0.0.0', '185.17.164.239', 'Windows 10', 1, 0, NULL, NULL, '2024-02-09 16:10:16'),
(30, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '1efb1517-b2a0-45a4-9511-2822a0fcfb84', '1.2.0', '2024-02-17T19:35:35+11:00', 'Roms09', 'https://app.rg-conception.fr/', 'Regular License', 'Firefox 122.0', '2a01:cb15:816b:1f0', 'Windows 10', 1, 0, NULL, NULL, '2024-03-02 08:45:18'),
(32, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'aad794e2-3d5a-4f95-9d90-b851c2040285', '1.2.0', '2024-02-29T09:45:23+11:00', 'dbtechio', 'http://10.0.0.11/', 'Regular License', 'Chrome 122.0.0.0', '192.168.89.70', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(33, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'eaf3f458-69c6-4220-a8c6-9c7023a82f2b', '1.2.1', '2024-03-06T01:23:00+11:00', 'Ecommerce-Donhauser', 'https://rise.forst-eibenstein.com/', 'Regular License', 'Chrome 122.0.0.0', '84.147.169.73', 'Windows 10', 1, 0, NULL, NULL, NULL),
(34, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '05c2f9d1-36a5-4c42-83b3-47a99d79f464', '1.2.1', '2024-03-06T04:41:28+11:00', 'lafriquequiose', 'https://back-office.lafriquequiose.com/', 'Regular License', 'Edge 122.0.0.0', '196.127.80.206', 'Windows 10', 1, 0, NULL, NULL, NULL),
(35, '51329685', 'CC Avenue Payment Gateway Module for Perfex CRM', '10c96936-45b0-4aa3-9fd9-986438f99e92', '0.0', '2024-03-17T17:51:32+11:00', 'KHBorad', 'http://perfex.local/perfex_cc_avenue/', 'Regular License', 'Chrome 122.0.0.0', '127.0.0.1', 'Windows 10', 1, 0, NULL, NULL, '2024-08-12 09:35:50'),
(37, '51329685', 'CC Avenue Payment Gateway Module for Perfex CRM', 'f4278c19-93ec-4057-90bf-3e25b23575a7', '1.0.0', '2024-03-22T23:39:18+11:00', 'nejd3', 'https://www.account.axiomaticwebsolutions.com/', 'Regular License', 'Chrome 122.0.0.0', '171.76.14.4', 'Windows 10', 1, 0, NULL, NULL, NULL),
(38, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '1f8fa956-0834-4f1b-9f22-e802bd0cad63', '1.2.2', '2024-03-27T03:33:30+11:00', 'growunity', 'https://team.growunity.ch/', 'Regular License', 'Chrome 123.0.0.0', '110.226.30.248', 'Windows 10', 1, 0, NULL, NULL, '2024-07-03 20:20:06'),
(41, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', 'ea376839-9368-4872-8802-792b38218de8', '1.0.0', '2024-03-28T07:25:48+11:00', 'Skytrackgr', 'https://crm.skytrack.org/', 'Regular License', 'Chrome 123.0.0.0', '185.183.185.61', 'Windows 10', 1, 0, NULL, NULL, '2024-09-10 09:58:11'),
(42, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '4c2f9739-055a-4b3a-926f-67902d76e62a', '1.0.2', '2024-03-29T03:54:46+11:00', 'sbuj', 'https://crm.3esuite.com/', 'Regular License', 'Chrome 122.0.0.0', '209.23.188.18', 'Windows 10', 1, 0, NULL, NULL, '2024-09-06 13:37:04'),
(45, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '1c71beec-e19c-4084-8207-06395ff902cd', '1.0.2', '2024-03-29T04:38:07+11:00', 'Gleyder10', 'https://crm.mghomecare.com/', 'Regular License', 'Chrome 123.0.0.0', '108.216.57.191', 'Mac OS X', 1, 0, NULL, NULL, '2024-06-28 16:13:18'),
(46, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '81a6635f-6bf6-4bb9-acb1-ee8ba228395f', '1.0.2', '2024-03-30T02:53:40+11:00', 'tommyphamhan', 'https://portal.nganha.net/', 'Regular License', 'Chrome 123.0.0.0', '42.114.170.57', 'Windows 10', 1, 0, NULL, NULL, '2024-08-30 09:47:05'),
(47, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', 'afa3396b-bfd9-4175-8eaf-87d2ac5bb98e', '1.0.2', '2024-03-29T22:27:36+11:00', 'MNSSOCIAL', 'https://app.mns.marketing/', 'Regular License', 'Chrome 123.0.0.0', '200.96.216.194', 'Mac OS X', 1, 0, NULL, NULL, '2024-07-17 12:40:54'),
(48, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '1cc7032f-dfbb-40e7-a966-66cc72750b53', '1.0.2', '2024-04-02T17:05:08+11:00', 'haroldnicky', 'https://crm.expatman.us/', 'Regular License', 'Chrome 123.0.0.0', '197.157.211.161', 'Android', 1, 0, NULL, NULL, '2024-09-10 06:16:46'),
(49, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', 'cc3f2cef-3cc4-408c-affa-9af8d7cb06c8', '1.0.2', '2024-04-03T07:49:13+11:00', 'vanun', 'https://dbsteamwork.com/', 'Regular License', 'Safari 605.1.15', '10.252.0.1', 'Mac OS X', 1, 0, NULL, NULL, '2024-08-13 21:06:03'),
(51, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '66839615-46c4-41f2-a5ad-df2a8dc06e88', '1.0.0', '2024-04-05T03:46:06+11:00', 'shahab98', 'https://panel.dubaifarda.com/', 'Regular License', 'Chrome 123.0.0.0', '91.132.48.79', 'Windows 10', 1, 0, NULL, NULL, NULL),
(52, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '68f3273c-916a-4b42-8003-a16d1b761c89', '1.0.1', '2024-04-05T05:46:51+11:00', 'TeddyCHACHA', 'https://tedmaster.agency/crm/', 'Regular License', 'Safari 605.1.15', '2001:4278:70:e931:', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-06 11:42:07'),
(53, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '1c58beff-61bc-415f-9363-818a1a99180e', '1.0.1', '2024-04-05T21:28:46+11:00', 'ashiagroupsarl', 'https://ashiagroup.com/crm/', 'Regular License', 'Safari 605.1.15', '41.82.171.228', 'Mac OS X', 1, 0, NULL, NULL, '2024-05-25 02:37:01'),
(54, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '133fc67e-f350-4b21-8649-cec28b05a857', '1.0.1', '2024-04-04T03:02:35+11:00', 'nicokiko', 'https://clients.air2sun.fr/', 'Regular License', 'Chrome 123.0.0.0', '88.166.39.99', 'Windows 10', 1, 0, NULL, NULL, '2024-09-06 14:29:53'),
(55, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'e48df2b8-18df-4911-8667-8f82d1afb68b', '1.0.0', '2024-04-05T20:09:48+11:00', 'Glennbrien', 'https://version2.surepaint.com.au/', 'Regular License', 'Chrome 123.0.0.0', '59.95.102.155', 'Windows 10', 3, 0, NULL, NULL, '2024-09-08 18:00:07'),
(56, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '522e0fdb-8796-49ed-97b7-464d7a9d81bd', '1.0.1', '2024-04-06T22:41:28+11:00', 'Senougroup', 'https://pubrek.com/TedMasterCRMdemo/', 'Regular License', 'Safari 605.1.15', '2001:4278:80:519:5', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-08 19:48:58'),
(59, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'fcd48e8c-d4b0-4737-b1d6-7f1559b49fe8', '1.0.0', '2024-04-05T20:09:47+11:00', 'Glennbrien', 'https://fl.cijagani.in/surepaint-v2/', 'Regular License', 'Chrome 123.0.0.0', '59.95.102.155', 'Windows 10', 3, 0, NULL, NULL, '2024-04-26 09:31:16'),
(61, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '78805fbf-9837-4e0b-8c0e-b18c35a34c52', '1.3.0', '2023-10-13T03:07:36+11:00', 'alpha-2001', 'https://risemodules.corbitaltech.dev/', 'Regular License', 'Chrome 123.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, '2024-11-26 10:15:34'),
(62, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '5225fd83-bb87-4cc2-a8eb-1645a463686c', '1.0.1', '2024-04-12T00:24:44+10:00', 'tedmasterorg', 'https://oplafrica.com/crm/', 'Regular License', 'Safari 605.1.15', '41.82.168.238', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-05 15:38:44'),
(63, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', 'a6abca73-28a9-4e82-85a1-2ce2656dd6a5', '0.0', '2024-04-09T18:03:15+10:00', 'serverchief123', 'https://nerrieportaal.nl/', 'Regular License', 'Chrome 123.0.0.0', '62.45.100.154', 'Mac OS X', 1, 0, NULL, NULL, '2024-07-04 09:09:04'),
(66, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', 'fe56a799-58b6-4fbd-8e31-067903bf7f45', '1.0.2', '2024-04-14T03:31:59+10:00', 'infobizcoltd', 'https://casherp.com/', 'Regular License', 'Chrome 123.0.0.0', '197.218.235.122', 'Windows 10', 1, 0, NULL, NULL, NULL),
(67, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '3fb842a4-5d7c-4dfc-99fa-6569c3098a70', '1.2.1', '2024-04-14T07:33:40+10:00', 'mgeet', 'https://s.spinearch.com/', 'Regular License', 'Chrome 123.0.0.0', '85.102.124.83', 'Windows 10', 1, 0, NULL, NULL, '2024-09-04 06:10:01'),
(68, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', 'cb605b20-54a8-4917-bf20-1276120a0c52', '1.0.2', '2024-04-17T13:45:40+10:00', 'her_princelouie', 'https://connect.pmconsulting.ph/', 'Regular License', 'Chrome 123.0.0.0', '192.168.1.1', 'Windows 10', 1, 0, NULL, NULL, '2024-05-15 09:33:43'),
(69, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', '930df635-eb1b-4374-9885-3c3b46f4fc72', '0.0', '2024-04-19T04:44:20+10:00', 'liviocarvalhomachado', 'https://crm.rm4.com.br/', 'Regular License', 'Chrome 123.0.0.0', '191.52.252.26', 'Mac OS X', 1, 0, NULL, NULL, '2024-05-10 12:48:45'),
(70, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'c706d032-10bc-4a7d-b025-4e204dbe5089', '1.2.2', '2024-04-19T22:11:41+10:00', 'liviocarvalhomachado', 'https://crm.rm4.com.br/', 'Regular License', 'Chrome 123.0.0.0', '191.52.252.26', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(71, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '6a78fc88-c8c5-4c1d-afcb-f37d02904835', '1.0.2', '2024-04-20T00:33:05+10:00', 'Paul_Bartelings', 'https://crm.kinderopvangsupport.nl/', 'Regular License', 'Chrome 102.0.5005.167', '31.21.227.26, 172.', 'Mac OS X', 1, 0, NULL, NULL, '2024-08-09 20:02:10'),
(72, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '46d34aad-e6d0-4bb5-a120-e8763c1d42ad', '1.0.2', '2024-04-23T08:31:08+10:00', 'dineshparajuli', 'https://crm.futureselect.com.au/', 'Regular License', 'Chrome 123.0.0.0', '202.172.120.69', 'Windows 10', 1, 0, NULL, NULL, '2024-09-09 22:53:05'),
(73, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '0de107c4-f7a2-4a27-9227-87187a8fcc11', '1.2.3', '2024-04-26T04:43:20+10:00', 'paknab', 'https://crm.visualiz.ch/', 'Regular License', 'Firefox 125.0', '2a05:dcc0:13:6f00:', 'Mac OS X', 1, 0, NULL, NULL, '2024-06-29 16:15:02'),
(74, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', 'f649ad6d-f41b-4a39-b51e-d10bfa988420', '1.0.2', '2024-04-27T17:23:30+10:00', 'vivekk983', 'https://crm.jayshardagroup.com/', 'Regular License', 'Chrome 124.0.0.0', '152.58.60.108', 'Windows 10', 1, 0, NULL, NULL, '2024-09-10 07:45:38'),
(75, '48619366', 'Flexible Backup & Restore Module For RISE CRM', 'fe6842bc-cc26-4144-b835-cf400631cf29', '1.2.1', '2024-04-27T19:52:24+10:00', 'taskewsol', 'https://app.taskew.com/', 'Regular License', 'Chrome 124.0.0.0', '73.201.100.215', 'Mac OS X', 1, 0, NULL, NULL, '2024-05-18 10:14:31'),
(76, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', 'c88cb423-ec55-413b-8e17-2c269672d47e', '0.0', '2024-04-27T18:39:03+10:00', 'janchat', 'https://gosec.nl/', 'Regular License', 'Chrome 124.0.0.0', '59.95.102.155', 'Windows 10', 1, 0, NULL, NULL, '2024-07-02 20:00:05'),
(77, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', 'e0ff6735-caa9-4ad8-b7ff-5e90c77286f6', '1.0.2', '2024-04-27T08:24:36+10:00', 'wantabit', 'https://app.fancycrm.com/', 'Regular License', 'Chrome 124.0.0.0', '108.53.127.233', 'Android', 1, 0, NULL, NULL, '2024-08-26 03:57:04'),
(78, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'dc8a0948-0996-4139-8aba-fa4ee6467e02', '1.0.0', '2024-04-29T07:02:04+10:00', 'pixelperfectinteractive', 'https://genesis.pixelperfect.co.za/', 'Regular License', 'Chrome 124.0.0.0', '152.110.48.227', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-05 23:23:32'),
(79, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', '839fc99c-ece0-4f46-9341-f1edd7017246', '0.0', '2024-05-01T06:06:20+10:00', 'intelligent_machine', 'https://projects.the-intelligent-machine.com/', 'Regular License', 'Safari 605.1.15', '2a09:bac2:bdd6:15e', 'Mac OS X', 1, 0, NULL, NULL, '2024-06-30 23:11:02'),
(80, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', '0983c51e-ff36-485e-b3aa-c8439fb67c23', '0.0', '2024-04-09T17:58:40+10:00', 'alpha-2001', 'https://risemodules.corbitaltech.dev/', 'Regular License', 'Chrome 124.0.0.0', '171.50.186.236', 'Windows 10', 1, 0, NULL, NULL, '2024-08-31 16:06:37'),
(81, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '0089e5cc-345a-454e-be26-6eab5bf77d2e', '1.0.0', '2024-05-03T08:27:19+10:00', 'luismatosluna', 'https://crm.malla.agency/', 'Regular License', 'Chrome 124.0.0.0', '186.7.237.240', 'Windows 10', 1, 0, NULL, NULL, NULL),
(82, '51358524', 'CC Avenue Payment Gateway Plugin for Rise CRM', 'bd225cb1-fec7-477d-a635-f8df0315d418', '1.0', '2024-03-28T15:23:32+11:00', 'dgrpatel2002', 'http://rise.local/logtracker/', 'Regular License', 'Chrome 124.0.0.0', '::1', 'Windows 10', 1, 0, NULL, NULL, NULL),
(86, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', '0161358c-16fb-423e-b1cf-e2ddd38f1791', '0.0', '2024-05-05T22:14:28+10:00', 'it-hm', 'https://crm.naildeli.com/', 'Regular License', 'Chrome 124.0.0.0', '113.173.147.159', 'Windows 10', 1, 0, NULL, NULL, '2024-06-03 16:45:02'),
(87, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', '2dbf95ee-ab51-40e8-844f-9e0bc6cecb8e', '0.0', '2024-05-05T22:14:27+10:00', 'it-hm', 'https://crm.naildeli.com/', 'Regular License', 'Chrome 124.0.0.0', '113.173.147.159', 'Windows 10', 1, 0, NULL, NULL, '2024-06-02 16:01:10'),
(88, '48619366', 'Flexible Backup & Restore Module For RISE CRM', '607575b7-5980-491d-8435-77030111505e', '1.2.1', '2024-03-16T16:53:04+11:00', 'abhisinha', 'http://localhost/rise/', 'Regular License', 'Chrome 124.0.0.0', '::1', 'Windows 10', 1, 0, NULL, NULL, NULL),
(89, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', '66a546ce-9ecb-4706-8930-6e1823f63d71', '0.0', '2024-05-06T19:58:58+10:00', 'janchat', 'https://gosec.nl/', 'Regular License', 'Chrome 124.0.0.0', '178.212.32.117', 'Windows 10', 1, 0, NULL, NULL, '2024-07-01 12:50:04'),
(90, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '9a92b7e2-bbee-45b8-a142-86f53947abbc', '1.0.2', '2024-05-09T05:26:08+10:00', 'Foxter', 'https://specialistaccesstechnicians.co.uk/sat/', 'Regular License', 'Chrome 124.0.0.0', '86.130.128.109', 'Windows 10', 1, 0, NULL, NULL, '2024-09-04 19:45:06'),
(91, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '9396ba21-1be4-4db0-9c61-c1005c7886cc', '1.0.2', '2024-05-09T20:18:50+10:00', 'themostfoolliberalistjekyll', 'https://crm.staynorth.jp/', 'Regular License', 'Chrome 124.0.0.0', '133.32.183.145', 'Windows 10', 1, 0, NULL, NULL, '2024-09-05 22:01:04'),
(92, '51358524', 'CC Avenue Payment Gateway Plugin for Rise CRM', '0a7b6a18-87cf-4e34-bf28-48ac83a4ab97', '0.0', '2024-05-11T06:09:58+10:00', 'robisonfb', 'https://painel.sevenclick.com.br/', 'Regular License', 'Chrome 124.0.0.0', '191.191.51.170', 'Mac OS X', 1, 0, NULL, NULL, '2024-05-21 12:12:42'),
(93, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '7e3c41bf-8384-4e1d-bf9b-6bf2e2d72359', '1.0.0', '2024-05-13T03:06:37+10:00', 'digitalizeLab', 'https://crm.jll.sa/', 'Regular License', 'Chrome 124.0.0.0', '2.89.143.226', 'Windows 10', 1, 0, NULL, NULL, '2024-09-08 19:30:05'),
(94, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '8354801e-4a58-4c13-b358-dd4f549b4394', '1.0.2', '2024-05-13T05:52:02+10:00', 'EniyFox', 'https://the-cryptofox-learning.com/tcfl-foxy-crmanagers/', 'Regular License', 'Chrome 124.0.0.0', '37.66.149.126', 'Windows 10', 1, 0, NULL, NULL, '2024-08-11 22:00:07'),
(95, '48619366', 'Flexible Backup & Restore Module for Rise CRM', '4b66f014-ef38-45c0-96cf-557655f02c86', '1.2.1', '2024-03-21T05:44:58+11:00', 'XieBen', 'https://yihaa.work/', 'Regular License', 'Chrome 125.0.0.0', '59.95.102.155', 'Windows 10', 1, 0, NULL, NULL, '2024-09-09 12:08:13'),
(96, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', 'f54849f5-039a-496b-b66e-2691052b5def', '0.0', '2024-04-16T20:05:19+10:00', 'XieBen', 'https://yihaa.work/', 'Regular License', 'Chrome 124.0.0.0', '59.95.102.155', 'Windows 10', 1, 0, NULL, NULL, '2024-09-09 08:28:08'),
(97, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', 'a0afa3a9-98e4-415d-a4fb-e95aa16d0993', '0.0', '2024-05-13T18:09:11+10:00', 'XieBen', 'https://yihaa.work/', 'Regular License', 'Chrome 124.0.0.0', '59.95.102.155', 'Windows 10', 1, 0, NULL, NULL, '2024-09-09 11:13:34'),
(98, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '3ddacdbd-6831-401f-a3b1-5ea8a2124dab', '1.0.2', '2024-04-29T07:02:03+10:00', 'pixelperfectinteractive', 'https://websitedev.pixelperfectinteractive.com/', 'Regular License', 'Chrome 124.0.0.0', '152.110.48.227', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(99, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '88a78e51-d9fd-4be0-9f2d-ae9cc1a4aa3f', '1.0.0', '2024-05-17T00:58:12+10:00', 'Tomasnh', 'https://elekipo.com/', 'Regular License', 'Chrome 124.0.0.0', '42.115.248.106', 'Windows 10', 1, 0, NULL, NULL, NULL),
(100, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '936bc2a5-17a5-4cea-9da0-73a2b190c5d6', '1.0.0', '2024-05-18T02:40:15+10:00', 'SangiShop', 'https://crm.icagency.it/', 'Regular License', 'Chrome 124.0.0.0', '37.183.216.119', 'Windows 10', 1, 0, NULL, NULL, '2024-09-06 18:29:07'),
(101, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', 'c217d780-d569-4cb6-81ad-fdd4b14b331f', '0.0', '2024-05-18T20:37:25+10:00', 'dminfo2', 'https://erp.oksgem.ru/', 'Regular License', 'Safari 605.1.15', '171.5.2.235', 'Mac OS X', 1, 0, NULL, NULL, '2024-06-29 12:12:03'),
(102, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', '6883e81e-1ca6-4144-869a-82f1c0f3829e', '0.0', '2024-05-18T20:37:25+10:00', 'dminfo2', 'https://erp.oksgem.ru/', 'Regular License', 'Safari 605.1.15', '171.5.2.235', 'Mac OS X', 1, 0, NULL, NULL, '2024-06-29 12:13:06'),
(103, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', 'ee61412b-a1cc-4d7f-97eb-b9dc084a2378', '0.0', '2024-05-20T03:29:34+10:00', 'intelligent_machine', 'https://projects.the-intelligent-machine.com/', 'Regular License', 'Safari 605.1.15', '184.92.232.48', 'Mac OS X', 1, 0, NULL, NULL, '2024-07-01 14:21:02'),
(104, '51329685', 'CC Avenue Payment Gateway Module for Perfex CRM', '0c6a0fbe-4628-467a-afcf-9738eef056a0', '0.0', '2024-05-21T09:20:01+10:00', 'sreekanthk', 'https://crm.cybrosinfotech.com/', 'Regular License', 'Chrome 124.0.0.0', '37.245.140.147', 'Windows 10', 1, 0, NULL, NULL, '2024-09-05 08:13:48'),
(105, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '53811113-a309-44aa-9450-ccd4324e1b5a', '1.0.0', '2024-05-04T23:42:53+10:00', 'crisguilherme', 'https://tecresolve.com.br/', 'Regular License', 'Chrome 124.0.0.0', '190.52.74.231', 'Windows 10', 1, 0, NULL, NULL, '2024-09-11 01:48:04'),
(106, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '61d6c325-6633-4d07-9ae5-24174a928b9b', '1.0.0', '2024-05-22T18:34:30+10:00', 'sosialoka', 'https://club.sosialoka.id/', 'Regular License', 'Safari 605.1.15', '103.101.231.128', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-05 04:26:05'),
(107, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '83b389f6-ab24-4db0-993a-941caf7801d4', '1.0.0', '2024-05-22T21:32:20+10:00', 'WpDroid', 'https://office.weapzy.com/', 'Regular License', 'Chrome 125.0.0.0', '217.65.141.13', 'Windows 10', 1, 0, NULL, NULL, '2024-09-04 11:49:04'),
(111, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', '6f7cef91-2604-46e3-8f1f-34f6cb570601', '0.0', '2024-05-25T07:45:33+10:00', 'serverchief123', 'https://nerrieportaal.nl/', 'Regular License', 'Chrome 125.0.0.0', '62.45.101.216', 'Mac OS X', 1, 0, NULL, NULL, '2024-07-04 08:35:05'),
(112, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '36c28281-035e-42bb-a8dc-92a7587ed1f7', '1.0.0', '2024-05-28T15:36:53+10:00', 'SAM078', 'https://academio.org/', 'Regular License', 'Firefox 126.0', '43.229.88.193', 'Windows 10', 1, 0, NULL, NULL, NULL),
(113, '48619366', 'Flexible Backup & Restore Module for Rise CRM', 'f6af3168-843d-4f1f-a261-8c41ff95c2a8', '1.2.2', '2024-06-02T11:42:24+10:00', 'aliconok1', 'https://groupsira.cl/crm/', 'Regular License', 'Chrome 125.0.0.0', '138.84.33.11', 'Mac OS X', 1, 0, NULL, NULL, '2024-06-30 01:57:54'),
(114, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'd518cc7c-56c8-4afb-a126-05120083fa48', '1.0.0', '2024-05-22T02:57:10+10:00', 'cto42', 'https://dpomax.com/app/', 'Regular License', 'Chrome 125.0.0.0', '189.6.9.169', 'Mac OS X', 1, 0, NULL, NULL, '2024-06-23 20:41:06'),
(116, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', '96d07c21-1526-4cb7-9b5e-23cae53994db', '0.0', '2024-06-03T18:54:16+10:00', 'SDM9180', 'https://office.s-networks.io/', 'Regular License', 'Chrome 125.0.0.0', '206.0.74.134', 'Windows 10', 1, 0, NULL, NULL, '2024-06-10 12:28:34'),
(117, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'cee408e0-4262-4bb8-8a81-35ab7a2be258', '1.0.0', '2024-06-04T00:52:11+10:00', 'nhaidang2808', 'https://crm.gugotech.com/', 'Regular License', 'Chrome 124.0.0.0', '172.24.0.1', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-04 02:53:28'),
(118, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', 'cd06a446-5eeb-4613-9a8e-448fe8960134', '0.0', '2024-06-03T18:54:16+10:00', 'SDM9180', 'https://office.s-networks.io/', 'Regular License', 'Chrome 125.0.0.0', '81.83.24.148', 'Windows 10', 1, 0, NULL, NULL, '2024-06-11 06:35:07'),
(119, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '73dc52d5-9366-4578-811d-f7152527a3ef', '1.0.0', '2024-06-05T21:56:14+10:00', 'JayOscar', 'https://aa-moscow.ru/', 'Regular License', 'Chrome 122.0.0.0', '185.194.34.254', 'Windows 10', 1, 0, NULL, NULL, '2024-09-04 17:20:19'),
(120, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '6314c80f-f0a8-480a-859a-cf9989b77aee', '1.0.0', '2024-06-10T19:38:26+10:00', 'developmentnetworksandmore', 'https://testing.centraly-sa.com/', 'Regular License', 'Chrome 125.0.0.0', '41.129.149.126', 'Windows 10', 1, 0, NULL, NULL, '2024-08-06 21:38:55'),
(121, '48619366', 'Flexible Backup & Restore Module for Rise CRM', '988acf97-078c-4167-a45d-53246540ff73', '1.2.2', '2024-06-13T10:14:46+10:00', 'benhenslin', 'https://members.annualwildgamefeed.org/', 'Regular License', 'Chrome 125.0.0.0', '216.9.26.209', 'Windows 10', 1, 0, NULL, NULL, '2024-06-27 06:41:24'),
(122, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '2803ce7f-ae4e-454b-9a83-a5b2b0be68ee', '1.0.2', '2024-06-14T09:08:01+10:00', 'aburton207', 'https://mealsandmore.net/', 'Regular License', 'Chrome 126.0.0.0', '134.41.94.172', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-06 01:22:25'),
(123, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '43033a7b-0403-40cb-b185-1c5fef9f78ae', '1.0.0', '2024-04-04T01:09:04+11:00', 'poojakalola', 'http://perfex.local/whatsappmarketing/', 'Regular License', 'Chrome 125.0.0.0', '127.0.0.1', 'Windows 10', 1, 0, NULL, NULL, NULL),
(124, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '16c0909b-9199-42b7-9413-56c60ba1ebb9', '1.0.0', '2024-06-21T14:30:38+10:00', 'rsabas', 'https://test-crm.facturafacil.com.pa/', 'Regular License', 'Firefox 127.0', '190.103.31.194', 'Linux', 1, 0, NULL, NULL, '2024-09-06 14:15:05'),
(125, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'c61eebdd-58f3-4769-a8a1-ac7c84b036bf', '1.0.0', '2024-06-22T00:53:23+10:00', 'designwebuk', 'https://crm.fortymileswest.co.uk/', 'Regular License', 'Chrome 126.0.0.0', '82.8.193.9', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-06 17:45:03'),
(126, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '4ac4e674-ce6a-4ec3-94a0-11bd400c1141', '1.0.0', '2024-06-20T03:37:07+10:00', 'shongpon', 'https://my.mipble.com/', 'Regular License', 'Chrome 126.0.0.0', '1.20.173.42', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-07 06:45:11'),
(127, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', 'ff7b959f-a2ac-4ecd-90f2-47eaf9d120c1', '0.0', '2024-06-26T20:50:08+10:00', 'fanidhar', 'https://work.iinnside.in/', 'Regular License', 'Chrome 126.0.0.0', '115.246.255.106', 'Windows 10', 1, 0, NULL, NULL, '2024-07-03 14:30:02'),
(128, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', '3fa960e4-8b92-4a4b-b088-b474f6946fb7', '1.0.2', '2024-06-11T08:32:02+10:00', 'niltonsaint', 'https://phsworkpool.co.za/', 'Regular License', 'Chrome 126.0.0.0', '105.245.56.70', 'Windows 10', 1, 0, NULL, NULL, NULL),
(129, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', 'cd4ebe41-bda8-45c4-b86a-a3bb7b9ca0c8', '1.0.0', '2024-06-29T21:09:32+10:00', 'SkywayGe', 'https://new.bo.ge/', 'Regular License', 'Chrome 126.0.0.0', '91.151.136.78', 'Windows 10', 1, 0, NULL, NULL, NULL),
(133, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', '74d874c3-494d-46ac-8f2e-33bee3a25836', '1.0.0', '2024-07-01T00:59:30+10:00', 'Online_Shmonline', 'https://www.velo.firefly-crm.co.il/', 'Regular License', 'Chrome 126.0.0.0', '85.130.151.160', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(134, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', '51c43fc6-b54c-4a57-b358-b43b57b24cc9', '1.0.0', '2024-06-30T01:05:39+10:00', 'cto42', 'https://dpomax.pro/', 'Regular License', 'Chrome 126.0.0.0', '189.6.9.169', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(135, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', 'c8d2ad0b-abf3-4997-ad4b-ff6d9af0d9b1', '1.0.0', '2024-07-01T19:04:46+10:00', 'cityhanau', 'https://kunden.parkvision.de/', 'Regular License', 'Firefox 127.0', '82.198.71.35', 'Windows 10', 1, 0, NULL, NULL, NULL),
(136, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', '35f798d8-f966-4e7b-817a-12e6feba480d', '1.0.0', '2024-07-02T06:10:03+10:00', 'demeritrious', 'https://ironhandcrm.com/', 'Regular License', 'Chrome 126.0.0.0', '189.203.29.62', 'Windows 10', 1, 0, NULL, NULL, NULL),
(137, '48619366', 'Flexible Backup & Restore Module for Rise CRM', '4e7a9051-fcf9-43de-8027-f22470bc883a', '1.2.3', '2024-07-02T17:09:24+10:00', 'tehling', 'https://pm.die-mainagentur.de/', 'Regular License', 'Chrome 126.0.0.0', '178.203.220.201', 'Windows 10', 1, 0, NULL, NULL, NULL),
(138, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', '76266122-756e-42f5-938c-b5d9a61dbb80', '1.0.0', '2024-07-02T18:01:25+10:00', 'technicalnext', 'https://quickbizcrm.com/', 'Regular License', 'Chrome 124.0.0.0', '122.161.52.72, 172', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(139, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', '7dce1842-528c-4351-94e9-d5dfdba5a2d9', '1.0.0', '2024-07-02T19:00:07+10:00', 'manikoshay', 'https://evfimwpdestek.com/', 'Regular License', 'Chrome 126.0.0.0', '37.154.101.212', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(140, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', 'f914da58-af66-4988-a0bb-b9f65b249430', '1.0.0', '2024-07-01T13:30:47+10:00', 'leandror25', 'https://hml.lnets.me/', 'Regular License', 'Chrome 126.0.0.0', '187.78.139.200', 'Windows 10', 1, 0, NULL, NULL, NULL),
(141, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', '45595020-4319-478a-9484-b9fb379e2367', '1.0.2', '2024-06-19T23:40:20+10:00', 'phveiga', 'https://utils.harko.app/', 'Regular License', 'Firefox 127.0', '177.12.17.37', 'Windows 10', 1, 0, NULL, NULL, NULL),
(143, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', 'eb7599ff-e98e-4fa6-900c-673d98b1e993', '1.0.0', '2024-07-04T21:04:18+10:00', 'tutshm', 'https://crm.cakrasoft.com/', 'Regular License', 'Chrome 126.0.0.0', '180.254.225.62', 'Windows 10', 1, 0, NULL, NULL, NULL),
(144, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '400fb119-d895-4ce0-bc52-1df668503a0a', '1.0.0', '2024-07-06T00:39:24+10:00', 'bitcodeit', 'https://app.btrust.ae/', 'Regular License', 'Chrome 126.0.0.0', '149.88.104.14', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-06 14:51:03'),
(147, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'c46926c0-44e5-4b11-96db-ba8014c860cc', '1.0.0', '2024-07-11T22:02:11+10:00', 'pedronunonunes', 'https://crm.nuntiusone.com/', 'Regular License', 'Chrome 126.0.0.0', '154.118.218.89', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(148, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'ce41bb47-756f-42f0-9606-a24cd7602c78', '1.0.0', '2024-07-13T16:00:20+10:00', 'BquadInteractive', 'https://customerportal.mips.mu/', 'Regular License', 'Chrome 126.0.0.0', '102.113.43.123', 'Windows 10', 1, 0, NULL, NULL, '2024-08-04 07:03:04'),
(149, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', '4a4354c8-b9fc-45b3-8e79-ac18f20a0c4e', '1.0.1', '2024-07-13T16:00:20+10:00', 'BquadInteractive', 'https://customerportal.mips.mu/', 'Regular License', 'Chrome 126.0.0.0', '102.113.43.123', 'Windows 10', 1, 0, NULL, NULL, NULL),
(150, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '87b8c813-7433-4718-96c7-2b774674ea36', '1.0.2', '2024-07-22T17:39:47+10:00', 'kanjenong', 'https://crm.gikstaging.com/', 'Regular License', 'Chrome 126.0.0.0', '182.253.124.170', 'Mac OS X', 1, 0, NULL, NULL, '2024-09-06 05:58:04'),
(151, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '3d5750bd-0279-4c97-8129-5ca1f8cf5c0b', '1.0.2', '2024-07-28T03:24:26+10:00', 'vonova', 'https://crm.computerbutler.de/', 'Regular License', 'Chrome 127.0.0.0', '89.12.153.254', 'Windows 10', 1, 0, NULL, NULL, NULL),
(152, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', '91f46980-2c45-426e-a0b8-f0391b8fd99a', '1.1.0', '2024-07-28T03:24:27+10:00', 'vonova', 'https://crm.computerbutler.de/', 'Regular License', 'Chrome 127.0.0.0', '89.12.153.254', 'Windows 10', 1, 0, NULL, NULL, NULL),
(153, '51504146', 'BannerCraft - Dynamic Banner Management Module for Perfex CRM', '62a5e622-b63b-43ee-a505-c62a030135ef', '1.0.2', '2024-08-07T21:00:43+10:00', 'Zaabi', 'https://crm.bhdoman.com/', 'Regular License', 'Chrome 127.0.0.0', '178.20.22.8', 'Windows 10', 1, 0, NULL, NULL, NULL),
(154, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', 'f8c0a0e8-94f3-47fa-9cce-bf5225b4ed9e', '1.1.0', '2024-08-07T21:00:44+10:00', 'Zaabi', 'https://crm.bhdoman.com/', 'Regular License', 'Chrome 127.0.0.0', '178.20.22.8', 'Windows 10', 1, 0, NULL, NULL, NULL),
(155, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '5da949de-1273-4e70-a117-462b773a9106', '1.0.0', '2024-08-15T12:30:44+10:00', 'lobo686181', 'https://recoveryoffice.crmparaempresa.com/', 'Regular License', 'Chrome 127.0.0.0', '38.180.33.84,38.18', 'Windows 10', 1, 0, NULL, NULL, '2024-09-07 03:54:51'),
(156, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '03699dbd-d31c-4f54-8b60-76a5aeaad7e5', '1.0.0', '2024-08-25T00:17:58+10:00', 'Taius', 'https://devapp.studiopro.uk/', 'Regular License', 'Firefox 129.0', '92.40.110.152', 'Mac OS X', 1, 0, NULL, NULL, NULL),
(163, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', 'c2eef192-cde0-4511-9bc1-15626ea7e9f9', '1.0.0', '2024-09-13T04:40:54+10:00', 'prestigelogistics', 'https://morlandwilson.com/crm/', 'Regular License', 'Safari 604.1', '216.10.217.31', 'iOS', 1, 1, NULL, NULL, '2024-12-30 13:51:04'),
(164, '48619366', 'Flexible Backup & Restore Module for Rise CRM', 'defa48d5-69f7-45af-ab85-ca3914ec23ad', '1.3.0', '2023-10-14T18:42:13+11:00', 'KHBorad', 'https://risemodules.corbitaltech.dev/', 'Regular License', 'Chrome 128.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, '2024-12-03 10:20:01'),
(165, '53315437', 'WhatsBoost - WhatsApp Marketing, Bot & Chat Plugin for Rise CRM', 'b735170a-296f-4bc8-b3b8-3851a6104d3c', '1.0.0', '2024-07-12T22:28:36+10:00', 'dgrpatel2002', 'https://risemodules.corbitaltech.dev/', 'Regular License', 'Chrome 128.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, NULL),
(167, '51695755', 'RiseLogger - The Powerful Log Tracking Plugin for Rise CRM', 'fa9fae64-5be8-4728-a7d1-545c280ab5a1', '1.0.2', '2024-04-09T18:06:19+10:00', 'dgrpatel2002', 'https://risemodules.corbitaltech.dev/', 'Regular License', 'Chrome 129.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, NULL),
(169, '51504146', 'BannerCraft - Dynamic Banner Management & News Ticker Module for Perfex CRM', '82f0d986-e1af-4379-b843-30dcc4e82497', '1.0.1', '2024-10-02T18:53:02+10:00', 'TeddyCHACHA', 'https://tedmaster.agency/crm/', 'Regular License', 'Safari 605.1.15', '2a09:bac3:5536:ebe', 'Mac OS X', 2, 1, NULL, NULL, '2024-12-11 11:04:20'),
(170, '51624054', 'LogTracker - The Powerful Log Tracking Module for Perfex CRM', '5b53915c-f80e-4853-92bd-34e195652a54', '1.0.0', '2024-04-05T20:08:41+11:00', 'Glennbrien', 'https://routines.corbitaltechnologies.com/', 'Regular License', 'Chrome 129.0.0.0', '59.95.102.155, 172', 'Windows 10', 3, 1, NULL, NULL, '2025-01-01 10:40:03'),
(178, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', 'a2a27df0-c443-4191-be16-778c2b550fae', '1.1.1', '2024-10-18T22:45:30+11:00', 'thekiranpatil', 'http://saasmodule.local/admin/banner', 'Extended License', 'Chrome 130.0.0.0', '::1', 'Windows 10', 1, 1, NULL, NULL, NULL),
(179, '53052338', 'WhatsBot - WhatsApp Marketing, Bot & Chat Module for Perfex CRM', 'a2a27df0-c443-4191-be16-778c2b550fae', '1.1.1', '2024-10-18T22:45:30+11:00', 'thekiranpatil', 'http://tenant1.saasmodule.local/admin/banner', 'Extended License', 'Chrome 130.0.0.0', '::1', 'Windows 10', 1, 1, NULL, NULL, NULL),
(182, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', '0bc1530c-6be6-429c-b805-ae0edf30bd3f', '1.2.0', '2024-05-04T22:16:38+10:00', 'poojakalola', 'https://plugintesting.corbitaltechnologies.com/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, '2024-12-27 03:50:35'),
(184, '54636335', 'WhatsBot REST API Module for Perfex CRM - Connect your WhatsBot with third party applications', '8838ceb2-52e1-42d8-95f1-86049619c264', '1.0.0', '2024-10-03T01:08:38+10:00', 'spotsmultimedia', 'http://perfex.local/perfex_whatsbotapi/', 'Regular License', 'Chrome 131.0.0.0', '127.0.0.1', 'Windows 10', 1, 1, NULL, NULL, NULL),
(185, '54636335', 'WhatsBot REST API Module for Perfex CRM - Connect your WhatsBot with third party applications', '2c296597-9c61-41a5-a5ce-767da4cfc5f9', '1.0.1', '2024-10-02T13:37:04+10:00', 'poojakalola', 'https://moduletesting.corbitaltechnologies.com/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155, 162', 'Windows 10', 1, 1, NULL, NULL, NULL),
(186, '53315437', 'WhatsBoost - WhatsApp Marketing, Bot & Chat Plugin for Rise CRM', 'b735170a-296f-4bc8-b3b8-3851a6104d3c	', '1.1.0', '2024-07-12T22:28:36+10:00', 'dgrpatel2002', 'http://rise.local/rise_whatsappmarketing/', 'Regular License', 'Chrome 131.0.0.0', '127.0.0.1', 'Windows 10', 1, 1, NULL, NULL, NULL),
(187, '53315437', 'WhatsBoost - WhatsApp Marketing, Bot & Chat Plugin for Rise CRM', '8d0d4c1f-151c-410d-b34f-244988714a46', '1.2.0', '2024-12-01T09:48:38+11:00', 'gilmarb4', 'https://plugintesting.corbitaltechnologies.com/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, NULL),
(188, '53052338', 'WhatsBot - WhatsApp Marketing, Bot, Chat & AI Personal Assistant Module for Perfex CRM', 'c48b1426-9992-4bc0-8ebb-939cb8d7063b', '2.0.0', '2024-06-30T02:26:40+10:00', 'pmganatra17', 'https://fl.cijagani.in/leave-test/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, NULL),
(189, '53315437', 'WhatsBoost - WhatsApp Marketing, Bot & Chat Plugin for Rise CRM', '3df4c155-8584-4889-b70d-876556b6b643', '1.2.0', '2024-11-21T13:07:32+11:00', 'raviv0526601900', 'https://plugintesting.corbitaltechnologies.com/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, '2024-12-25 11:58:36'),
(190, '53052338', 'WhatsBot - WhatsApp Marketing, Bot, Chat & AI Personal Assistant Module for Perfex CRM', 'a2a27df0-c443-4191-be16-778c2b550fae', '2.0.0', '2024-10-18T22:45:30+11:00', 'thekiranpatil', 'http://perfex.local/whatsbot/', 'Extended License', 'Chrome 131.0.0.0', '::1', 'Windows 10', 1, 1, NULL, NULL, '2024-12-27 12:46:12'),
(191, '53315437', 'WhatsBoost - WhatsApp Marketing, Bot & Chat Plugin for Rise CRM', '3df4c155-8584-4889-b70d-876556b6b643	', '1.2.0', '2024-11-21T13:07:32+11:00', 'raviv0526601900', 'https://risemodules.cijagani.in/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, NULL),
(192, '53052338', 'WhatsBot - WhatsApp Marketing, Bot, Chat & AI Personal Assistant Module for Perfex CRM', 'fd5aa605-fe2e-4cfc-859c-d06acdf0b75a ', '2.0.1', '2024-09-01T00:59:55+10:00', 'kuarco', 'http://perfexcrm.local/whatsappmarketing/', 'Regular License', 'Chrome 131.0.0.0', '127.0.0.1', 'Windows 10', 2, 1, NULL, NULL, '2024-12-27 10:14:37'),
(194, '53052338', 'WhatsBot - WhatsApp Marketing, Bot, Chat & AI Personal Assistant Module for Perfex CRM', '88c83208-a317-40fe-bdd6-69b165435338', '2.0.1', '2024-08-04T18:56:21+10:00', 'aalmansoor', 'https://moduletesting.corbitaltechnologies.com/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 3, 1, NULL, NULL, '2024-12-31 08:10:04'),
(195, '51329685', 'CC Avenue Payment Gateway Module for Perfex CRM', '59ff8074-2986-4825-b716-238149c9cae5', '0.0', '2024-12-25T04:17:11+11:00', 'gbtechcorp', 'https://gbtc.salespush.in/', 'Regular License', 'Chrome 131.0.0.0', '27.5.163.14', 'Windows 10', 1, 1, NULL, NULL, '2025-01-01 04:32:03'),
(196, '53315437', 'WhatsBoost - WhatsApp Marketing, Bot & Chat Plugin for Rise CRM', 'ab94ebde-7565-4060-9a8d-59da3c5b0053	', '1.2.0', '2024-07-13T16:34:15+10:00', 'patanivatsal', 'https://risemodules.cijagani.in/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, NULL),
(197, '53315437', 'WhatsBoost - WhatsApp Marketing, Bot & Chat Plugin for Rise CRM', 'ab94ebde-7565-4060-9a8d-59da3c5b0053', '1.2.0', '2024-07-13T16:34:15+10:00', 'patanivatsal', 'http://rise.local/sample/', 'Regular License', 'Chrome 131.0.0.0', '::1', 'Windows 10', 1, 1, NULL, NULL, NULL),
(199, '51504146', 'BannerCraft - Dynamic Banner Management & News Ticker Module for Perfex CRM', 'b32f90b1-40d0-4b7f-9ee0-d60045cf5728', '1.1.1', '2024-03-28T15:23:32+11:00', 'dgrpatel2002', 'https://moduletesting.corbitaltechnologies.com/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, NULL),
(200, '53052338', 'WhatsBot - WhatsApp Marketing, Bot, Chat & AI Personal Assistant Module for Perfex CRM', '7a0d1d96-eb06-4498-a6a9-731c4929321f', '2.0.2', '2024-07-01T17:22:14+10:00', 'dgrpatel2002', 'http://fl.local/perfex_running_projects/perfex_whatsapp_campaigning/admin', 'Regular License', 'Chrome 131.0.0.0', '127.0.0.1', 'Windows 10', 1, 1, NULL, NULL, NULL),
(201, '52088244', 'SmartBanners - Dynamic Banner Management Plugin for Rise CRM', '703bad40-8d46-4f1a-8b7a-a986dce62d93', '1.2.0', '2024-05-21T19:56:41+10:00', 'dgrpatel2002', 'https://plugintesting.corbitaltechnologies.com/', 'Regular License', 'Chrome 131.0.0.0', '59.95.102.155', 'Windows 10', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_01_081537_create_permission_tables', 1),
(5, '2025_01_01_113909_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage-users', 'web', '2025-01-02 22:55:17', '2025-01-03 22:42:27'),
(2, 'manage-roles', 'web', '2025-01-02 22:55:21', '2025-01-03 22:42:33'),
(3, 'manage-permissions', 'web', '2025-01-02 22:55:27', '2025-01-03 22:42:37'),
(4, 'manage-posts', 'web', '2025-01-02 22:55:32', '2025-01-03 22:42:43'),
(5, 'view-dashboard', 'web', '2025-01-03 23:17:56', '2025-01-03 23:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-01-02 22:55:02', '2025-01-02 22:55:02'),
(2, 'user', 'web', '2025-01-02 22:55:07', '2025-01-02 22:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
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
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('F4aiy1fRtnFf41RzUTGMPwMnnFVFaNA0RUHjH5Rh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienlNODdXa0ViN0xDdlBoSlFKQ3J6b3hlQkZSM0RRUmhVbkJxRjVOQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1735964044),
('rQBQ1y09nHiGPQwnUYhOsmmF6zDyRBKgyLrLmHpZ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiR1lISlZXWFR1MnNNRzYyR0doNElzMDJzd2RzN1ZsNHQ4WmtYSjBLYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pdGVtcyI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1735970935);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nandini', 'nandini@gmail.com', NULL, '$2y$12$sqZC7CJWeseZbmicwmTVY.bx1o2CamOJt4UmUxGS/dhbN7xAx12Wq', NULL, '2025-01-02 22:53:19', '2025-01-02 22:53:19'),
(2, 'user', 'user1@gmail.com', NULL, '$2y$12$SAekqhpYUyWNId9kaFE4QO3uf1Yl6.0YGiRTnpx7GBabcaeW2M.7.', NULL, '2025-01-02 22:58:13', '2025-01-02 22:58:13'),
(3, 'disha', 'disha@gmail.com', NULL, '$2y$12$t.LZV6j8uMydVBbX62FKoeptqnS3C3.t3.k704hTZopEvDr8qiIf.', NULL, '2025-01-02 23:02:40', '2025-01-02 23:02:40');

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
