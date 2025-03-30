-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2025 at 09:21 PM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `budget_range` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `budget_range`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Piyush', 'Kumawat', 'piyushkumawat90607@gmail.com', '100-200', 'hi sir', '2025-03-27 22:56:09', '2025-03-27 22:56:09');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test', 'piyushkumawat90607@gmail.com', 'test message', '2025-03-27 23:15:21', '2025-03-27 23:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_27_072615_add_role_to_users_table', 1),
(5, '2025_03_27_073809_add_user_type_to_users_table', 2),
(6, '2025_03_27_184943_create_contacts_table', 3),
(7, '2025_03_28_043831_create_f_a_q_s_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$Mu5SH4zHhdW6kPmY8GlP1.OZPNRzQxYe1sTxFIRCMxoFXDdT5WHjW', '2025-03-27 06:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `overview` text DEFAULT NULL,
  `project_challenge` text DEFAULT NULL,
  `design_research` text DEFAULT NULL,
  `design_approach` text DEFAULT NULL,
  `the_solutions` text DEFAULT NULL,
  `strategy` varchar(255) DEFAULT NULL,
  `project_type` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `created_at`, `updated_at`, `overview`, `project_challenge`, `design_research`, `design_approach`, `the_solutions`, `strategy`, `project_type`, `client`) VALUES
(12, 'Bautlr', 'Bautlr is a USA-focused jewelry e-commerce platform that provides high-quality jewelry products with a seamless online shopping experience.', '2025-03-28 09:25:12', '2025-03-30 13:35:40', 'Bautlr is designed to offer a premium and user-friendly shopping experience for jewelry enthusiasts. The platform includes a secure payment gateway, easy navigation, and mobile responsiveness.', 'Optimizing the admin panel for scalability, enhancing frontend UI, and implementing strong SEO strategies for better visibility.', 'Conducted research on competitor platforms, customer shopping behavior, and UI/UX trends to design an intuitive e-commerce experience.', 'Used Laravel for backend development, MySQL for database management, and Bootstrap, HTML, CSS, and JavaScript for frontend improvements. Ensured SEO-friendly architecture.', 'Developed a scalable and feature-rich admin panel, improved frontend design for better user engagement, and implemented on-page SEO techniques for improved rankings.', 'E-commerce Development & SEO Optimization', 'Jewelry E-commerce Websites (USA Focused)', 'USA-based E-commerce Businesses'),
(15, 'PandBImports', 'PandBImports is a specialized e-commerce platform offering a variety of jewelry products, with a strong focus on the USA market.', '2025-03-30 12:19:23', '2025-03-30 13:36:49', 'PandBImports provides an extensive range of jewelry products with an optimized shopping experience, secure transactions, and mobile responsiveness.', 'Developing an efficient admin panel, implementing responsive frontend designs, and ensuring high SEO rankings.', 'Analyzed industry trends, customer expectations, and SEO best practices to create a high-performing e-commerce website.', 'Implemented Laravel for the backend, MySQL for data handling, and Bootstrap along with HTML, CSS, and JavaScript for frontend development. Integrated SEO optimization for improved search rankings.', 'Built a powerful admin panel for easy management, improved website design for a seamless user experience, and implemented advanced SEO strategies.', 'E-commerce Development & SEO Optimization', 'Jewelry E-commerce Websites (USA Focused)', 'USA-based E-commerce Businesses'),
(16, 'Telegram Bot (Unitrade Coin System)', 'A Telegram Bot developed for an automated Coin Distribution System, enabling seamless transactions and user engagement.', '2025-03-30 12:21:54', '2025-03-30 13:37:14', 'This bot automates the coin distribution process in the Unitrade ecosystem, ensuring smooth allocation of coins to users, parents, and ancestors based on a structured hierarchy.', 'Designing an optimized multi-level coin distribution system, ensuring secure transactions, and integrating the bot with the Unitrade platform\'s frontend.', 'Studied existing coin distribution mechanisms, analyzed Telegram bot functionalities, and implemented best practices for secure and efficient transactions.', 'Developed the bot using Node.js with MySQL for backend storage. Implemented a multi-level referral-based coin distribution system. Created RESTful APIs for smooth communication between the bot and frontend.', 'Designed and deployed a fully functional Telegram bot that automates coin distribution, provides real-time transaction updates, and integrates seamlessly with the Unitrade platform.', 'Blockchain & Coin Distribution Automation', 'Telegram-based Coin Distribution System', 'Unitrade Coin System'),
(17, 'Vostro Market\'s (USDT Coin Distribution Project)', 'A Laravel-based USDT Coin Distribution System, ensuring secure and efficient transactions for users.', '2025-03-30 12:22:57', '2025-03-30 13:37:49', 'Developed a USDT-based coin distribution system that automates transactions and maintains user balance securely.', 'Handling secure USDT transactions, integrating Laravel with MySQL, and ensuring accurate distribution logic.', 'Researched USDT transaction workflows, Laravel security best practices, and optimal database management techniques.', 'Implemented coin distribution logic using Laravel and MySQL, developed a scalable backend, and optimized database performance.', 'Delivered a robust Laravel-based coin distribution system with secure transactions, real-time balance updates, and user-friendly UI.', 'Cryptocurrency Transaction & Coin Management', 'USDT Coin Distribution System', 'Vostro Market'),
(18, 'Matrimonial Website (Core PHP Project)', 'A fully functional matrimonial portal developed using Core PHP and MySQL for user matchmaking.', '2025-03-30 12:23:38', '2025-03-30 13:38:13', 'Designed a platform where users can register, create profiles, search for partners, and communicate securely.', 'Developing an efficient search system, managing user profiles securely, and ensuring smooth user interactions.', 'Analyzed existing matrimonial platforms, studied user preferences, and implemented a database-driven matching algorithm.', 'Built user registration, profile management, and search filters using Core PHP and MySQL with a responsive frontend.', 'Created a user-friendly and scalable matrimonial website with advanced search and profile management features.', 'User Engagement & Profile Matching', 'Matrimonial Portal', 'Private Client'),
(19, 'E-commerce Website Enhancements', 'Performance and feature enhancements for multiple e-commerce websites to improve scalability and security.', '2025-03-30 12:24:31', '2025-03-30 13:38:39', 'Optimized backend performance, enhanced security, and integrated new features to improve user experience.', 'Improving query performance, ensuring secure authentication, and integrating new features without downtime.', 'Studied e-commerce security protocols, database optimization techniques, and customer behavior patterns.', 'Refactored Laravel backend, optimized database queries, improved authentication security, and integrated new features.', 'Delivered a more scalable, secure, and feature-rich e-commerce system with improved backend performance.', 'Performance Optimization & Security Enhancement', 'E-commerce Website Performance Upgrade', 'Multiple E-commerce Businesses');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_type` enum('banner','center','other') NOT NULL DEFAULT 'other'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `image_url`, `created_at`, `updated_at`, `image_type`) VALUES
(13, 12, '1743356999_p2.jpg', '2025-03-30 12:19:59', '2025-03-30 12:19:59', 'other'),
(14, 15, '1743357022_p3.jpg', '2025-03-30 12:20:22', '2025-03-30 12:20:22', 'other'),
(15, 16, '1743357115_p10.jpg', '2025-03-30 12:21:55', '2025-03-30 12:21:55', 'other'),
(16, 18, '1743357218_p8.jpg', '2025-03-30 12:23:38', '2025-03-30 12:23:38', 'other'),
(17, 17, '1743357228_p7.jpg', '2025-03-30 12:23:48', '2025-03-30 12:23:48', 'other'),
(18, 19, '1743357272_p4.jpg', '2025-03-30 12:24:32', '2025-03-30 12:24:32', 'other'),
(21, 12, '1743359830_banner_p7.jpg', '2025-03-30 13:07:10', '2025-03-30 13:07:10', 'banner'),
(22, 12, '1743360299_center_p6.jpg', '2025-03-30 13:14:59', '2025-03-30 13:14:59', 'center'),
(23, 15, '1743361774_banner_p8.jpg', '2025-03-30 13:39:34', '2025-03-30 13:39:34', 'banner'),
(24, 15, '1743361774_center_p9.jpg', '2025-03-30 13:39:34', '2025-03-30 13:39:34', 'center'),
(25, 16, '1743361793_banner_1743359830_banner_p7.jpg', '2025-03-30 13:39:53', '2025-03-30 13:39:53', 'banner'),
(26, 16, '1743361793_center_pd.jpg', '2025-03-30 13:39:53', '2025-03-30 13:39:53', 'center'),
(27, 17, '1743361812_banner_p6.jpg', '2025-03-30 13:40:12', '2025-03-30 13:40:12', 'banner'),
(28, 17, '1743361812_center_pp9.jpg', '2025-03-30 13:40:12', '2025-03-30 13:40:12', 'center'),
(29, 18, '1743361829_banner_1743361793_center_pd.jpg', '2025-03-30 13:40:29', '2025-03-30 13:40:29', 'banner'),
(30, 18, '1743361829_center_p4.jpg', '2025-03-30 13:40:29', '2025-03-30 13:40:29', 'center'),
(31, 19, '1743361847_banner_p11.jpg', '2025-03-30 13:40:47', '2025-03-30 13:40:47', 'banner'),
(32, 19, '1743361847_center_1743361812_center_pp9.jpg', '2025-03-30 13:40:47', '2025-03-30 13:40:47', 'center');

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
('SgvHNKhsY6s4UV1RVdDvdVaWDte7K83PWHX60Y38', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNmpFVmpmY3lPSjZuZWtWMmVZc2puZFdZaTRRdzBHdVNxT3A4cXVCZCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHJvamVjdHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1743362350);

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
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$ZQa.b27IdVfY.yxYC1T5me1iJBgyKwrO1B.m0jSgLZvqW5fuYmM8y', 'admin', NULL, '2025-03-27 02:08:47', '2025-03-27 02:08:47', 'user'),
(2, 'Piyush kumawat', 'piyushkumawat90607@gmail.com', NULL, '$2y$12$DFR1jhJxHfv2NAH05SSioO8RRR.4RYsAXbS2heD9phdCmufaVrEKa', 'user', NULL, '2025-03-27 06:30:28', '2025-03-27 06:30:28', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_images_ibfk_1` (`project_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
