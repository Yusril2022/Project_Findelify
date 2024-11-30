-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 01:15 PM
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
-- Database: `sosial_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`) VALUES
(1, 1, 1, 'ada yang liat?', '2024-10-28 13:53:04'),
(2, 1, 2, 'Aku liat di rumah saya!', '2024-10-28 13:54:16'),
(3, 2, 3, 'aku ada !\r\n', '2024-10-28 13:56:03'),
(4, 2, 3, 'mana?', '2024-10-28 13:56:14'),
(5, 2, 3, 'loh', '2024-10-28 13:56:35'),
(6, 1, 3, 'coba liat', '2024-10-28 13:57:14'),
(7, 1, 3, 'yig', '2024-10-28 14:00:45'),
(8, 1, 3, 'coba lihat dong', '2024-10-28 14:17:22'),
(9, 1, 2, 'tapi bohong', '2024-10-28 14:18:59'),
(10, 1, 1, 'sok bohong kitu', '2024-10-28 14:29:49'),
(11, 1, 2, 'ahhhh', '2024-10-28 08:33:42'),
(12, 1, 2, 'masa', '2024-10-28 15:39:04'),
(13, 4, 2, 'ada yang tahu?', '2024-10-28 15:39:23'),
(14, 1, 1, 'beneran ari kamu ', '2024-10-28 15:48:49'),
(15, 1, 3, 'anjay mabar', '2024-10-28 15:49:41'),
(16, 1, 3, 'gas ah', '2024-10-28 16:39:21'),
(17, 1, 1, 'aya diwarung🤣', '2024-10-28 16:40:35'),
(18, 4, 1, 'info info', '2024-11-01 12:56:08'),
(19, 6, 2, 'ada', '2024-11-01 13:16:00'),
(20, 6, 3, 'mana', '2024-11-01 13:16:20'),
(21, 7, 3, 'Hp si yusril', '2024-11-02 13:05:18'),
(22, 7, 1, 'mana euy ', '2024-11-02 13:06:07'),
(23, 4, 1, 'parah orang hilang🥲', '2024-11-02 13:07:48'),
(24, 4, 2, 'wkwk🙏🙏🙏', '2024-11-02 13:09:04'),
(25, 4, 3, 'bjir 🤣🤣🤣🤣🤣🤣', '2024-11-02 13:10:02'),
(26, 1, 1, 'halo ges\r\n', '2024-11-04 12:18:40'),
(27, 5, 1, 'sold out', '2024-11-08 12:47:25'),
(28, 8, 1, 'Aku tau', '2024-11-23 13:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-10-28-151328', 'App\\Database\\Migrations\\AddLocationContactToPosts', 'default', 'App', 1730128440, 1),
(2, '2024-11-02-091950', 'App\\Database\\Migrations\\AddIsFoundToPosts', 'default', 'App', 1730539313, 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `is_found` tinyint(1) DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `location`, `contact`, `is_found`, `image`, `created_at`) VALUES
(1, 1, 'Dompet', 'Hilang dirumah', 'Perumnas', '0998223834', 1, '1730123568_16309c48ba9d215ecb80.webp', '2024-10-28 13:52:48'),
(2, 3, 'Kucing', 'Kucing oren', 'pasar baru', '08871177227', 0, '1730123736_b941b51691e6faf4dbd6.jpeg', '2024-10-28 13:55:36'),
(3, 3, 'kucing belang', 'kucing 3', 'WC', '08338788477', 1, '1730124589_080822baea292ce42d89.jpeg', '2024-10-28 14:09:49'),
(4, 2, 'Orang', 'Nama Yusril', 'Tasikmalaya', '081802112956', 1, '1730128679_a0d49a7916a6d400c27b.jpg', '2024-10-28 15:17:59'),
(5, 1, 'Anjing', 'Anjing mini cihuahua', 'Tidak diketahui', '0818022342212', 1, '1730465662_ba93013f1321533225fd.jpg', '2024-11-01 12:54:22'),
(6, 2, 'Warga', 'nnnnnn', 'Horizon', '0818022342212', 1, '1730466950_e9ca64dc984ef8c4cd49.jpg', '2024-11-01 13:15:50'),
(7, 3, 'Iphone', 'Hp Iphone xr warna kuning, seperti nya hilang di daerah cikampek', 'Cikampek', '089122786282', 1, '1730552697_607ef625cd2a340b8759.jpg', '2024-11-02 13:04:57'),
(8, 1, 'Iphone', 'Iphone 13 pro max , warna ungu dengan casing seperti itu', 'Ramayana', '089128452218', 1, '1731109110_4acf0a0c0feb623921df.jpg', '2024-11-08 23:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'yusril', '$2y$10$.eO52cIokqeUefPnWPyNLen8uUCQbEV4/jHqx65LVyCNARX8EzUhi'),
(2, 'aulia', '$2y$10$s6hCNb83txzU9vZVCgA15uOQvNvfnNUGdl7T3v6JFU9SoSUZytiby'),
(3, 'muklis', '$2y$10$48u2yFkekiJ9vC4f/vVu.ui2yPBWAzcJblOixmAafyEV4Dmgm/WmC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
