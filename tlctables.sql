-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2018 at 04:12 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tlctables`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_16_141600_laratrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(2, 'read-users', 'Read Users', 'Read Users', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(3, 'update-users', 'Update Users', 'Update Users', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2018-04-16 20:44:42', '2018-04-16 20:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(10, 6),
(10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(2, 'administrator', 'Administrator', 'Administrator', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(3, 'editor', 'Editor', 'Editor', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(4, 'author', 'Author', 'Author', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(5, 'contributor', 'Contributor', 'Contributor', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(6, 'supporter', 'Supporter', 'Supporter', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(7, 'subscriber', 'Subscriber', 'Subscriber', '2018-04-16 20:44:42', '2018-04-16 20:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(4, 4, 'App\\User'),
(5, 5, 'App\\User'),
(6, 6, 'App\\User'),
(7, 7, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', '$2y$10$3TeY0iYOTfNjBuAAyjZ8QexM.nKdX7T6Lhe2NTL9vIXwxeqSjebg6', '5uWSXJu4X7No8F3ZSM0WwtBwt72y77PP2aruWZfIdSCDOkck2RqxFshV8INr', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(2, 'Administrator', 'administrator@app.com', '$2y$10$g9DCFyVhqQ4FH.HRftzj2udIuxvaPGENqT7KI3sFMACSIPu3wGjU2', NULL, '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(3, 'Editor', 'editor@app.com', '$2y$10$GGn.FrobVN5gnvHB9tXJPO1D92t8p3dCI2fohoPUn1oMJ4IvwiHvG', 'JwoY0SCEwupfTfi6IFkKsqr2mmo9TkNVf2eVIcFponYvAcO3FNwwFGZgPcoQ', '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(4, 'Author', 'author@app.com', '$2y$10$OJnwYll/wK/iTcbm4yd/JesqHNdi6Ab0zlGpsPs.9JZZjy5GzBVyy', NULL, '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(5, 'Contributor', 'contributor@app.com', '$2y$10$/Zd256ljqf.iVS.yfloov.9t1nUYCyZ9ZgAgw870nAdRO8sTqvyhC', NULL, '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(6, 'Supporter', 'supporter@app.com', '$2y$10$Z.qs8JBCJ7oS9k2A6911FeutYN.qSEgQxbvnBOvF1ok7mbwy0NPXq', NULL, '2018-04-16 20:44:42', '2018-04-16 20:44:42'),
(7, 'Subscriber', 'subscriber@app.com', '$2y$10$ViZ0pIXdrpYwpCBZuZUKmexJtX92f5ZD8ELQIur3F/J8MGscOwTRG', NULL, '2018-04-16 20:44:42', '2018-04-16 20:44:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
