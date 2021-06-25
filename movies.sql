-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 22, 2021 lúc 12:51 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `movies`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `casts`
--

DROP TABLE IF EXISTS `casts`;
CREATE TABLE IF NOT EXISTS `casts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `casts`
--

INSERT INTO `casts` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'vinh', 'images/casts/QnOXCqrCzAmZIPIoXeCzUrljaultlgF15jl6aUle.png', '2021-06-21 11:44:10', '2021-06-21 11:44:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cast_film`
--

DROP TABLE IF EXISTS `cast_film`;
CREATE TABLE IF NOT EXISTS `cast_film` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `cast_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cast_film_film_id_foreign` (`film_id`),
  KEY `cast_film_cast_id_foreign` (`cast_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sci-Fi & Fantasy', '2021-06-21 08:15:40', '2021-06-21 08:15:40'),
(2, 'Drama', '2021-06-21 08:16:04', '2021-06-21 08:16:04'),
(3, 'Action', '2021-06-21 10:01:08', '2021-06-21 10:01:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `nation_id` int(11) NOT NULL,
  `published` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `views` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imdb` decimal(8,2) NOT NULL DEFAULT 7.00,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `films_type_id_foreign` (`type_id`),
  KEY `films_nation_id_foreign` (`nation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `films`
--

INSERT INTO `films` (`id`, `name`, `original_name`, `description`, `status`, `director`, `actor`, `type_id`, `nation_id`, `published`, `views`, `image`, `imdb`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Loki (2021)', 'Loki (2021)', 'After stealing the Tesseract during the events of “Avengers: Endgame,” an alternate version of Loki is brought to the mysterious Time Variance Authority, a bureaucratic organization that exists outside of time and space and monitors the timeline. They give Loki a choice: face being erased from existence due to being a “time variant”or help fix the timeline and stop a greater threat.', 'Loki\'s time has come.', 'Michael Waldron', 'Sophia Di Martino', 1, 1, '2021-06-21 19:16:17', 233, 'images/films/bK2ENWhVi8yobuYJkHa4c5w6nVwwhsiE3MWQH4c0.jpg', '8.20', NULL, '2021-06-21 09:53:48', '2021-06-21 12:16:17'),
(6, 'Batman: The Long Halloween, Part One (2021)', 'Batman: The Long Halloween, Part One (2021)', 'A brutal murder on Halloween prompts Gotham\'s young vigilante, the Batman, to form a pact with Police Captain James Gordan and District Attorney Harvey Dent in order to take down The Roman, head of the notorious and powerful Falcone Crime Family. After more deaths occur on Thanksgiving and Christmas, it becomes clear that they\'re dealing with a serial killer - the identity of whom grows harder to discern with each conflicting clue.', 'Prepare for a year of holiday mayhem.', 'Chris Palmer', 'Bill Finger', 1, 1, '2021-06-21 17:00:00', 2323, 'images/films/6wvXOXuOPruoePpoqjFdyXCDGKY67XajxkCRsSGf.jpg', '7.00', NULL, '2021-06-21 10:06:56', '2021-06-21 10:06:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `films_categories`
--

DROP TABLE IF EXISTS `films_categories`;
CREATE TABLE IF NOT EXISTS `films_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `films_categories_film_id_foreign` (`film_id`),
  KEY `films_categories_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `films_categories`
--

INSERT INTO `films_categories` (`id`, `film_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 3, 1, NULL, NULL),
(6, 3, 2, NULL, NULL),
(7, 4, 1, NULL, NULL),
(8, 4, 2, NULL, NULL),
(9, 5, 1, NULL, NULL),
(10, 5, 2, NULL, NULL),
(11, 6, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_film_id_foreign` (`film_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `film_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 'images/relations/XB8R4BTmybbqMpVc2c57gcxvQabS0hM9IyyjYWPu.jpg', '2021-06-21 11:53:40', '2021-06-21 11:53:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link_trailers`
--

DROP TABLE IF EXISTS `link_trailers`;
CREATE TABLE IF NOT EXISTS `link_trailers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `link_trailers_film_id_foreign` (`film_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `link_trailers`
--

INSERT INTO `link_trailers` (`id`, `film_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 6, 'https://youtu.be/8qodAY3S7Dg?t=75', '2021-06-21 10:38:04', '2021-06-21 10:40:52'),
(2, 6, 'https://youtu.be/8qodAY3S7Dg', '2021-06-21 10:38:04', '2021-06-21 10:38:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_16_202912_create_films_table', 1),
(5, '2021_06_16_203553_create_categories_table', 1),
(6, '2021_06_18_133048_create_films_categories_table', 1),
(7, '2021_06_19_170912_create_types_table', 1),
(8, '2021_06_19_173834_create_nations_table', 1),
(9, '2021_06_20_150420_create_link_trailers_table', 1),
(10, '2021_06_20_181730_create_casts_table', 1),
(11, '2021_06_20_182105_create_cast_film_table', 1),
(12, '2021_06_20_224706_create_images_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nations`
--

DROP TABLE IF EXISTS `nations`;
CREATE TABLE IF NOT EXISTS `nations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nations_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nations`
--

INSERT INTO `nations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'U.S', '2021-06-21 08:18:46', '2021-06-21 08:18:46'),
(2, 'U.S,A', '2021-06-21 10:19:50', '2021-06-21 10:19:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
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
-- Cấu trúc bảng cho bảng `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Movi', '2021-06-21 08:17:56', '2021-06-21 10:23:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','watcher') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'watcher',
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `about`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 'admin', NULL, '$2y$10$nEkcxlOadK4EkQ1NSR1vCujHrAf/mseI6jWb8JXVjSwA29Q0t9eCu', NULL, '2021-06-21 08:10:18', '2021-06-21 08:10:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
