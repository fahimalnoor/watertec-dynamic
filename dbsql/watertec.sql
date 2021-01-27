-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 01:46 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watertec`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_status`, `created_at`, `updated_at`) VALUES
(1, 'Tap', 'Active', NULL, '2021-01-26 18:42:28'),
(2, 'Bidets', 'Active', NULL, NULL),
(3, 'Shower', 'Active', NULL, NULL),
(4, 'Others', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `logo_status`, `created_at`, `updated_at`) VALUES
(6, 'public/image/imageLogo/logo7d29.png', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_link`, `menu_status`, `created_at`, `updated_at`) VALUES
(1, 'About', 'http://localhost/watertec2/front/about', 'Active', NULL, '2020-11-20 13:35:10'),
(6, 'Technology', 'http://localhost/assignment/front/contact', 'Active', NULL, NULL),
(7, 'Media', 'http://localhost/assignment/front/contact', 'Active', NULL, NULL),
(9, 'Product', 'http://localhost/watertec2/front/products', 'Active', NULL, '2020-11-20 13:36:01'),
(10, 'Contact', 'http://localhost/assignment/front/contact', 'Active', NULL, NULL);

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
(4, '2020_03_03_112926_create_categories_table', 1),
(5, '2020_10_24_183121_create_products_table', 1),
(6, '2020_10_24_183434_create_contacts_table', 1),
(7, '2020_10_24_183533_create_logos_table', 1),
(8, '2020_10_24_183554_create_blogs_table', 1),
(9, '2020_11_01_182847_create_menus_table', 1),
(10, '2020_11_01_183437_create_submenus_table', 1),
(11, '2020_11_02_183430_create_sliders_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `under_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `under_cat`, `url`, `status`, `image`, `created_at`, `updated_at`) VALUES
(7, 'basin tap', 'Tap', 'http://localhost/watertec-dynamic/basin-tap', 'Active', 'public/image/imageProduct/BASIN-TAP.jpg', '2021-01-26 18:27:04', '2021-01-26 18:27:04'),
(8, 'bip tap', 'Tap', 'http://localhost/watertec-dynamic/bip-tap', 'Active', 'public/image/imageProduct/BIB-TAP.jpg', '2021-01-26 18:44:17', '2021-01-26 18:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `sec_name` varchar(100) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `sec_name`, `image`, `description`, `status`, `updated_at`) VALUES
(6, 'section_3', 'public/image/imageSection/img-13_27d06db9-016c-4037-aa0a-4ba1183bdffd_1920X15e5.jpg', '<h4><span style=\"background-color: #ba372a;\">Welcome To The Watertec!</span><br /><br />THE GLOBAL LEADER OF POLYMER WATER FITTINGS.</h4>\r\n<p>We deliver all kind of water supply fittings. Just check out which out you need.</p>', 'Active', '2021-01-26 12:19:38'),
(8, 'section_4', 'public/image/imageSection/17.jpg', '<h3><span style=\"background-color: #e03e2d;\">Wall Mount Toilet</span></h3>\r\n<h4><br /><span style=\"color: #ecf0f1;\">30% OFF</span></h4>', 'Active', '2021-01-26 12:29:46'),
(9, 'section_4', 'public/image/imageSection/19.jpg', '<h3><span style=\"background-color: #ba372a;\">GLOSSY WHITE VANITY!</span></h3>\r\n<p>&nbsp;</p>\r\n<h4><span style=\"color: #ecf0f1;\">50% OFF!</span></h4>', 'Active', '2021-01-26 12:33:29'),
(10, 'section_5', 'public/image/imageSection/Logo-4_250x250e553.png', NULL, 'Active', '2021-01-25 22:58:02'),
(11, 'section_5', 'public/image/imageSection/Logo-5_250x25029d0.png', NULL, 'Active', '2021-01-25 22:58:47'),
(12, 'section_6', 'public/image/imageSection/BASIN-TAP.jpg', '<h4><span style=\"color: #ecf0f1;\">Basin Tap</span></h4>', 'Active', '2021-01-26 12:41:00'),
(13, 'section_6', 'public/image/imageSection/BIB-TAP.jpg', '<p><span style=\"color: #ecf0f1;\">Bib Tap</span></p>', 'Active', '2021-01-26 12:52:11'),
(14, 'section_6', 'public/image/imageSection/BIDET-index.jpg', '<h3><span style=\"color: #ecf0f1;\">Bidet</span></h3>', 'Active', '2021-01-26 12:52:38'),
(15, 'section_7', 'public/image/imageSection/img-22_8f86d3d1-cdf6-401a-8fae-356058847be3_1920Xb42f.jpg', '<h2><span style=\"background-color: #ba372a;\">Great Collections!</span></h2>\r\n<h3><span style=\"background-color: #236fa1;\">Special Solution!</span></h3>\r\n<p><br />Fashion Undefined!</p>', 'Active', '2021-01-26 13:06:50'),
(16, 'section_7', 'public/image/imageSection/img-21_1920Xe297.jpg', '<h2><span style=\"background-color: #ba372a;\">Great Collections!</span></h2>\r\n<h3><span style=\"background-color: #236fa1;\">Special Solution!</span></h3>\r\n<p><br />Fashion Undefined!</p>', 'Active', '2021-01-26 14:54:29'),
(17, 'section_7', 'public/image/imageSection/img-20_1920X5a1e.jpg', '<h2><span style=\"background-color: #ba372a;\">Great Collections!</span></h2>\r\n<h3><span style=\"background-color: #236fa1;\">Special Solution!</span></h3>\r\n<p><br />Fashion Undefined!</p>', 'Active', '2021-01-26 14:51:42'),
(18, 'section_8', NULL, 'https://www.youtube.com/embed/7uqVctI21x0', 'Active', '2021-01-25 18:48:02'),
(21, 'section_9', 'public/image/imageSection/icon-2_9c205de7-333f-4b43-bdd0-38c1204ebf4e_1920X8f9c.png', '<p><span style=\"color: #ecf0f1;\">CALL SALES!</span><br /><br /><span style=\"color: #ecf0f1;\">+88 017 6666 5101-05</span></p>', 'Active', '2021-01-26 14:58:49'),
(22, 'section_9', 'public/image/imageSection/icon-3_c9ab47d1-e5df-487f-b7a6-13b2f51573af_1920X7034.png', '<p><span style=\"color: #ecf0f1;\">EMAIL</span><br /><br /><span style=\"color: #ecf0f1;\">watertecbd@gmail.com</span></p>', 'Active', '2021-01-26 15:02:26'),
(27, 'section_2', 'public/image/imageSection/kazumi.jpg', '<p><strong>Title: Kazumi</strong><br /><br />This is the description for kazumi</p>', 'Active', '2021-01-26 12:09:01'),
(28, 'section_2', 'public/image/imageSection/img-10_270x2702bf4.jpg', '<div><strong>Title: Roma</strong><br /><br />Description for Roma</div>', 'Active', '2021-01-26 12:08:30'),
(29, 'section_2', 'public/image/imageSection/img-11_270x270394f.jpg', '<p><span style=\"background-color: #e03e2d;\">Title: Mixer</span></p>\r\n<p>This is the description for the mixer tap</p>', 'Active', '2021-01-26 12:11:27'),
(30, 'section_9', 'public/image/imageSection/icon-1_0617992a-a889-4b38-9316-83fd79c4f651_1920Xac70.png', '<p><span style=\"color: #ecf0f1;\">CALL TODAY</span><br /><br /><span style=\"color: #ecf0f1;\">+ 88 017 6666 5100</span></p>', 'Active', '2021-01-26 15:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `description`, `code`, `created_at`, `updated_at`) VALUES
(8, 'public/image/imageSlider/slide1.jpg', 'Active', '<p>first slide</p>', '<div class=\"slick-list slider_style_2\">  \r\n        <img src=\"{{ $all_slide[\'image\'] }}\"  class=\"slide-img medium-down--hide\" alt=\"\" />\r\n<div class=\"slider-content slider-content-bg medium-down--hide\" style=\"top: 48%;\">\r\n  <div class=\"slide_left\" style=\"\">\r\n\r\n    \r\n    <h5 class=\"slide-text animated \"\r\n        style=\"display:inline-block;\r\n               \r\n               font-size: 20px;\r\n               \r\n               \r\n               color:#ffffff;\r\n                \r\n               \r\n               background:#e81a46;\r\n                \">\r\n      IT\'S HOW YOU LIVE\r\n    </h5>\r\n    \r\n\r\n    \r\n    <h2 class=\"slide-heading animated \"\r\n        style=\" \r\n               font-size: 45px;\r\n               \r\n               \r\n               color:#000;\r\n               \">\r\n      LOTS OF LUXURY                   \r\n    </h2>\r\n    \r\n    \r\n    <h4 class=\" slide-sub-heading-2 animated \"\r\n        style=\"\r\n               font-size: 45px;\r\n               \r\n               \r\n               color:#000;\r\n               \">\r\n      IN A LITTLE SPACE                   \r\n    </h4>\r\n    \r\n \r\n  \r\n     </div>\r\n</div>\r\n\r\n\r\n        <style> \r\n          .slider_style_2 .slide-offer-text span {color:#000!important;}\r\n           .slider_style_2 .btn:hover {color:#ffffff!important;background:#e81a46!important;}\r\n          @media screen and (min-width: 320px) and (max-width: 767px) {\r\n\r\n            .slider_style_2 .slider-content {background:rgba(255, 255, 255, 0.7);}\r\n          }\r\n        </style>\r\n      </div>', NULL, '2021-01-24 06:39:24'),
(9, 'public/image/imageSlider/slide2.jpg', 'Active', NULL, NULL, NULL, '2021-01-23 13:12:58'),
(13, 'public/image/imageSlider/3.jpg', 'Inactive', NULL, NULL, NULL, '2021-01-26 04:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `subcat_link` varchar(500) DEFAULT NULL,
  `subcat_status` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcat_name`, `cat_id`, `subcat_link`, `subcat_status`, `created_at`, `updated_at`, `description`) VALUES
(1, 'basin tap', 1, '', '', '2021-01-16 22:01:41', '2021-01-16 22:01:41', 'This is the subcategory named basin tap which is under the category of tap.'),
(2, 'Sink Tap', 1, NULL, 'Active', '2021-01-16 22:41:35', '2021-01-16 22:41:35', NULL),
(3, 'Sample tap', 1, NULL, 'Active', '2021-01-19 17:40:30', '2021-01-19 17:40:30', NULL),
(4, 'Sample tap 2', 1, NULL, 'Inactive', '2021-01-26 11:03:40', '2021-01-26 11:03:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `sub_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `sub_name`, `menu_id`, `sub_link`, `sub_status`, `created_at`, `updated_at`, `description`) VALUES
(6, 'About Watertec', 1, 'http://localhost/watertec-dynamic/front/about', 'Active', NULL, '2020-11-02 13:39:09', ''),
(7, 'Mission', 1, 'http://localhost/assignment/front/about', 'Active', NULL, '2020-11-02 13:39:26', ''),
(8, 'Vission', 1, 'http://localhost/assignment/front/about', 'Active', NULL, '2020-11-02 13:39:40', ''),
(9, 'Fusion', 6, 'http://localhost/assignment/front/collection', 'Active', NULL, '2020-11-02 13:49:21', ''),
(10, 'Top Down Shut Off', 6, 'http://localhost/assignment/front/collection', 'Active', NULL, '2020-11-02 13:49:39', ''),
(11, 'Award Giving', 7, 'http://localhost/assignment/front/contact', 'Active', NULL, NULL, ''),
(12, 'CSR', 7, 'http://localhost/assignment/front/contact', 'Active', NULL, NULL, ''),
(13, 'Meet The Plumber', 7, 'http://localhost/assignment/front/contact', 'Active', NULL, NULL, ''),
(14, 'All Media', 7, 'http://localhost/assignment/front/contact', 'Active', NULL, NULL, ''),
(15, 'Basin Tap', 9, 'http://localhost/assignment/front/products', 'Active', NULL, NULL, ''),
(16, 'Sink Tap', 9, 'http://localhost/assignment/front/products', 'Active', NULL, NULL, ''),
(17, 'Bidet', 9, 'http://localhost/assignment/front/products', 'Active', NULL, NULL, ''),
(18, 'Hand Bidet', 9, 'http://localhost/assignment/front/products', 'Active', NULL, NULL, '');

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
(1, 'fahim', 'fahimalnoor1@gmail.com', NULL, '$2y$10$K6XuOXpwEQFFMVgx9OOmSe3DbTzlchtgqiXAA66KAJyPxsFjZHJky', 'jXU7cV36jKr8gs7PlvsjZh8PvFMwL1oeReF6li8DZWjb93JHQ6G8cC1q3qpd', '2021-01-14 07:31:53', '2021-01-14 07:31:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
