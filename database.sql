-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2024 at 05:12 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagram`
--
CREATE DATABASE IF NOT EXISTS `instagram`;
USE `instagram`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  `parent_id` int DEFAULT NULL,
  `text` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_users_id_foreign` (`user_id`),
  KEY `comments_posts_id_foreign` (`post_id`),
  KEY `comments_comments_id_foreign` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 96, 16, NULL, 'نظر 1', '2019-04-04 09:53:52', '2019-04-04 09:53:52'),
(2, 93, 26, NULL, 'تصاویر زیبایی است', '2019-04-09 09:16:24', '2019-04-09 09:16:24'),
(3, 93, 16, NULL, 'جمشید', '2019-04-18 16:46:12', '2019-04-18 16:46:12'),
(4, 93, 29, NULL, 'زیباست', '2019-04-19 13:34:20', '2019-04-19 13:34:20'),
(5, 93, 29, NULL, 'زیباست', '2019-04-19 13:34:56', '2019-04-19 13:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

DROP TABLE IF EXISTS `filters`;
CREATE TABLE IF NOT EXISTS `filters` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`id`, `name`) VALUES
(1, '1977'),
(2, 'aden'),
(3, 'amaro'),
(4, 'ashby'),
(5, 'brannan'),
(6, 'brooklyn'),
(7, 'charmes'),
(8, 'clarendon'),
(9, 'crema'),
(10, 'dogpatch'),
(11, 'earlybird'),
(12, 'gingham'),
(13, 'ginza'),
(14, 'hefe'),
(15, 'helena'),
(16, 'hudson'),
(17, 'inkwell'),
(18, 'kelvin'),
(19, 'juno'),
(20, 'lark'),
(21, 'lofi'),
(22, 'ludwig'),
(23, 'maven'),
(24, 'mayfair'),
(25, 'moon'),
(26, 'nashville'),
(27, 'perpetua'),
(28, 'poprocket'),
(29, 'reyes'),
(30, 'rise'),
(31, 'sierra'),
(32, 'skyline'),
(33, 'slumber'),
(34, 'stinson'),
(35, 'sutro'),
(36, 'toaster'),
(37, 'valencia'),
(38, 'vesper'),
(39, 'walden'),
(40, 'willow'),
(41, 'xpro-ii');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

DROP TABLE IF EXISTS `followers`;
CREATE TABLE IF NOT EXISTS `followers` (
  `user_id` int NOT NULL,
  `followed_id` int NOT NULL,
  `accept` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`followed_id`),
  KEY `followed_users_id_foreign` (`followed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`user_id`, `followed_id`, `accept`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2024-02-24 06:59:37', '2024-02-24 06:59:37'),
(1, 5, 1, '2024-02-24 07:04:51', '2024-02-24 07:04:51'),
(3, 4, 0, '2024-02-24 06:59:23', '2024-02-24 06:59:23'),
(3, 5, 0, '2024-04-27 06:52:12', '2024-04-27 06:52:12'),
(4, 1, 0, '2024-02-24 07:01:24', '2024-02-24 07:01:24'),
(5, 1, 0, '2024-02-24 07:01:31', '2024-02-24 07:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`post_id`),
  KEY `likes_postss_id_foreign` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(3, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `actor_id` int NOT NULL,
  `data` json NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_users_id_foreign` (`user_id`),
  KEY `actor_notifications_users_id_foreign` (`actor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `actor_id`, `data`, `type`, `status`, `created_at`, `updated_at`) VALUES
(22, 95, 96, '{\"text\": \"محمد رضا گلزار درخواست دوستی با شما را دارد. \"}', 'followRequest', 1, '2019-03-29 23:37:00', '2019-04-09 08:52:58'),
(23, 95, 93, '{\"text\": \"مجتبی ملک فر درخواست دوستی با شما را دارد. \"}', 'followRequest', 1, '2019-03-30 00:21:16', '2019-04-09 08:52:58'),
(24, 93, 96, '{\"text\": \"محمد رضا گلزار درخواست دوستی با شما را دارد. \"}', 'followRequest', 1, '2019-04-01 08:24:04', '2019-04-11 10:13:09'),
(25, 96, 93, '{\"text\": \"مجتبی ملک فر درخواست دوستی با شما را دارد. \"}', 'followRequest', 1, '2019-04-04 09:52:45', '2019-04-09 08:55:16'),
(26, 93, 96, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"16\\\",\\\"user_id\\\":\\\"93\\\",\\\"filter_id\\\":\\\"3\\\",\\\"description\\\":\\\"\\\\u067e\\\\u0633\\\\u062a \\\\u0639\\\\u06a9\\\\u0633\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.041839001552553359.JPEG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-03-14 22:49:19\\\",\\\"updated_at\\\":\\\"2019-03-14 12:19:19\\\"}}\", \"text\": \"محمد رضا گلزار برای پست شما کامنت نوشت. \"}', 'comment', 1, '2019-04-04 09:53:52', '2019-04-11 10:13:09'),
(27, 93, 96, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"16\\\",\\\"user_id\\\":\\\"93\\\",\\\"filter_id\\\":\\\"3\\\",\\\"description\\\":\\\"\\\\u067e\\\\u0633\\\\u062a \\\\u0639\\\\u06a9\\\\u0633\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.041839001552553359.JPEG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-03-14 22:49:19\\\",\\\"updated_at\\\":\\\"2019-03-14 12:19:19\\\"}}\", \"text\": \"محمد رضا گلزار پست شما را لایک کرد. \"}', 'like', 1, '2019-04-04 09:53:57', '2019-04-11 10:13:09'),
(28, 96, 100, '{\"text\": \"حمید سلمانی درخواست دوستی با شما را دارد. \"}', 'followRequest', 1, '2019-04-09 08:43:10', '2019-04-09 08:55:16'),
(29, 95, 100, '{\"text\": \"حمید سلمانی درخواست دوستی با شما را دارد. \"}', 'followRequest', 1, '2019-04-09 08:52:28', '2019-04-09 08:52:58'),
(30, 96, 100, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"26\\\",\\\"user_id\\\":\\\"96\\\",\\\"filter_id\\\":\\\"8\\\",\\\"description\\\":\\\"\\\\u067e\\\\u0633\\\\u062a \\\\u062c\\\\u062f\\\\u06cc\\\\u062f 2\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.305799001554800697.PNG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-04-09 13:34:57\\\",\\\"updated_at\\\":\\\"2019-04-09 13:34:57\\\"}}\", \"text\": \"حمید سلمانی پست شما را لایک کرد. \"}', 'like', 0, '2019-04-09 09:06:28', '2019-04-09 09:06:28'),
(31, 96, 93, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"26\\\",\\\"user_id\\\":\\\"96\\\",\\\"filter_id\\\":\\\"8\\\",\\\"description\\\":\\\"\\\\u067e\\\\u0633\\\\u062a \\\\u062c\\\\u062f\\\\u06cc\\\\u062f 2\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.305799001554800697.PNG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-04-09 13:34:57\\\",\\\"updated_at\\\":\\\"2019-04-09 13:34:57\\\"}}\", \"text\": \"مجتبی ملک فر پست شما را لایک کرد. \"}', 'like', 0, '2019-04-09 09:07:19', '2019-04-09 09:07:19'),
(32, 96, 93, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"26\\\",\\\"user_id\\\":\\\"96\\\",\\\"filter_id\\\":\\\"8\\\",\\\"description\\\":\\\"\\\\u067e\\\\u0633\\\\u062a \\\\u062c\\\\u062f\\\\u06cc\\\\u062f 2\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.305799001554800697.PNG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-04-09 13:34:57\\\",\\\"updated_at\\\":\\\"2019-04-09 13:34:57\\\"}}\", \"text\": \"مجتبی ملک فر برای پست شما کامنت نوشت. \"}', 'comment', 0, '2019-04-09 09:16:24', '2019-04-09 09:16:24'),
(33, 100, 100, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"28\\\",\\\"user_id\\\":\\\"100\\\",\\\"filter_id\\\":\\\"7\\\",\\\"description\\\":\\\"\\\\u062d\\\\u0645\\\\u06cc\\\\u062f \\\\u06af\\\\u0648\\\\u062f\\\\u0631\\\\u0632\\\\u06cc\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.522542001554977039.JPG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-04-11 14:33:59\\\",\\\"updated_at\\\":\\\"2019-04-11 14:33:59\\\"}}\", \"text\": \"حمید گودرزی پست شما را لایک کرد. \"}', 'like', 1, '2019-04-12 08:35:56', '2019-04-12 08:48:10'),
(34, 93, 93, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"27\\\",\\\"user_id\\\":\\\"93\\\",\\\"filter_id\\\":\\\"8\\\",\\\"description\\\":\\\"\\\\u067e\\\\u0633\\\\u062a \\\\u062c\\\\u062f\\\\u06cc\\\\u062f 2\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.415371001554821236.PNG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-04-09 19:17:16\\\",\\\"updated_at\\\":\\\"2019-04-09 19:17:16\\\"}}\", \"text\": \"مجتبی ملک فر پست شما را لایک کرد. \"}', 'like', 0, '2019-04-18 16:09:33', '2019-04-18 16:09:33'),
(35, 93, 93, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"20\\\",\\\"user_id\\\":\\\"93\\\",\\\"filter_id\\\":\\\"6\\\",\\\"description\\\":\\\"\\\\u062f\\\\u0648\\\\u0633\\\\u062a\\\\u0627\\\\u0646\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.995287001552563511.JPEG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-03-15 01:38:32\\\",\\\"updated_at\\\":\\\"2019-03-14 15:08:32\\\"}}\", \"text\": \"مجتبی ملک فر پست شما را لایک کرد. \"}', 'like', 0, '2019-04-18 16:12:46', '2019-04-18 16:12:46'),
(36, 93, 93, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"20\\\",\\\"user_id\\\":\\\"93\\\",\\\"filter_id\\\":\\\"6\\\",\\\"description\\\":\\\"\\\\u062f\\\\u0648\\\\u0633\\\\u062a\\\\u0627\\\\u0646\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.995287001552563511.JPEG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-03-15 01:38:32\\\",\\\"updated_at\\\":\\\"2019-03-14 15:08:32\\\"}}\", \"text\": \"مجتبی ملک فر پست شما را لایک کرد. \"}', 'like', 0, '2019-04-18 16:15:08', '2019-04-18 16:15:08'),
(37, 93, 93, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"20\\\",\\\"user_id\\\":\\\"93\\\",\\\"filter_id\\\":\\\"6\\\",\\\"description\\\":\\\"\\\\u062f\\\\u0648\\\\u0633\\\\u062a\\\\u0627\\\\u0646\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.995287001552563511.JPEG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-03-15 01:38:32\\\",\\\"updated_at\\\":\\\"2019-03-14 15:08:32\\\"}}\", \"text\": \"مجتبی ملک فر پست شما را لایک کرد. \"}', 'like', 0, '2019-04-18 16:16:22', '2019-04-18 16:16:22'),
(38, 93, 93, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"19\\\",\\\"user_id\\\":\\\"93\\\",\\\"filter_id\\\":\\\"17\\\",\\\"description\\\":\\\"\\\\u067e\\\\u0633\\\\u062a \\\\u062a\\\\u0633\\\\u062a\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.722949001552563277.JPG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-03-15 01:34:37\\\",\\\"updated_at\\\":\\\"2019-03-14 15:04:37\\\"}}\", \"text\": \"مجتبی ملک فر پست شما را لایک کرد. \"}', 'like', 0, '2019-04-18 16:16:35', '2019-04-18 16:16:35'),
(39, 93, 93, '{\"post\": \"{\\\"timestamp\\\":true,\\\"fields\\\":{\\\"id\\\":\\\"16\\\",\\\"user_id\\\":\\\"93\\\",\\\"filter_id\\\":\\\"3\\\",\\\"description\\\":\\\"\\\\u067e\\\\u0633\\\\u062a \\\\u0639\\\\u06a9\\\\u0633\\\",\\\"file\\\":\\\"view\\\\/uploads\\\\/images\\\\/posts\\\\/0.041839001552553359.JPEG\\\",\\\"type\\\":\\\"image\\\",\\\"created_at\\\":\\\"2019-03-14 22:49:19\\\",\\\"updated_at\\\":\\\"2019-03-14 12:19:19\\\"}}\", \"text\": \"مجتبی ملک فر برای پست شما کامنت نوشت. \"}', 'comment', 0, '2019-04-18 16:46:12', '2019-04-18 16:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `filter_id` int NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `file` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_users_id_foreign` (`user_id`),
  KEY `posts_filters_id_foreign` (`filter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `filter_id`, `description`, `file`, `type`, `created_at`, `updated_at`) VALUES
(16, 1, 3, 'پست عکس', 'view/uploads/images/posts/0.041839001552553359.JPEG', 'image', '2019-03-14 19:19:19', '2019-03-14 12:19:19'),
(19, 5, 17, 'پست تست', 'view/uploads/images/posts/0.722949001552563277.JPG', 'image', '2019-03-14 22:04:37', '2019-03-14 15:04:37'),
(20, 3, 6, 'دوستان', 'view/uploads/images/posts/0.995287001552563511.JPEG', 'image', '2019-03-14 22:08:32', '2019-03-14 15:08:32'),
(23, 4, 9, 'پست علوی زاده', 'view/uploads/images/posts/0.214039001553086312.JPG', 'image', '2019-03-20 23:21:52', '2019-03-20 16:21:52'),
(25, 1, 12, 'پست محمد', 'view/uploads/images/posts/0.993303001554796093.PNG', 'image', '2019-04-09 07:48:14', '2019-04-09 12:18:14'),
(26, 4, 8, 'پست جدید 2', 'view/uploads/images/posts/0.305799001554800697.PNG', 'image', '2019-04-09 09:04:57', '2019-04-09 13:34:57'),
(28, 5, 7, 'حمید گودرزی', 'view/uploads/images/posts/0.522542001554977039.JPG', 'image', '2019-04-11 10:03:59', '2019-04-11 14:33:59'),
(29, 3, 3, 'بلیبل', 'view/uploads/images/posts/0.691289001555680813.JPG', 'image', '2019-04-19 13:33:33', '2019-04-19 18:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `family` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `picture` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `bio` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `website` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `account_type` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `username`, `phone`, `password`, `picture`, `bio`, `website`, `account_type`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'alavi', 'ali', '09', '123456', 'view/uploads/images/users/0.039683001554977158.JPG', 'no bio', 'test.test', 'private', '2024-02-24 06:57:29', '2024-02-24 06:57:29'),
(3, 'hamid', 'hamidi', 'hamid', '091', '123456', 'view/uploads/images/users/0.057052001555682879.JPG', 'no bio', 'test.test', 'public', '2024-02-24 06:58:05', '2024-02-24 06:58:05'),
(4, 'reza', 'hamidi', 'reza', '091', '123456', 'view/uploads/images/users/0.846760001553331283.JPG', 'no bio', 'test.test', 'public', '2024-02-24 07:00:54', '2024-02-24 07:00:54'),
(5, 'mohammad', 'hamidi', 'javad', '091', '123456', 'view/uploads/images/users/0.708475001553185698.JPG', 'no bio', 'test.test', 'public', '2024-02-24 07:01:09', '2024-02-24 07:01:09');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_comments_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_posts_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followed_users_id_foreign` FOREIGN KEY (`followed_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `followers_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_postss_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `actor_notifications_users_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_filters_id_foreign` FOREIGN KEY (`filter_id`) REFERENCES `filters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
