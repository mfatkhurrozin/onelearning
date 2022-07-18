-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 02:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'super user'),
(2, 'guru', 'mentor'),
(3, 'siswa', 'pelajar');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 3),
(3, 4),
(3, 5),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@gmail.com', 2, '2021-12-27 09:44:53', 1),
(2, '::1', 'admin@gmail.com', 2, '2021-12-27 09:48:16', 1),
(3, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-27 09:52:20', 1),
(4, '::1', 'rahadian@gmail.com', 4, '2021-12-27 09:54:19', 1),
(5, '::1', 'admin@gmail.com', 2, '2021-12-27 10:33:27', 1),
(6, '::1', 'admin@gmail.com', 2, '2021-12-27 10:34:23', 1),
(7, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-27 10:42:27', 1),
(8, '::1', 'admin', NULL, '2021-12-27 21:53:44', 0),
(9, '::1', 'admin@gmail.com', 2, '2021-12-27 21:53:49', 1),
(10, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-27 21:54:02', 1),
(11, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-28 02:44:21', 1),
(12, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-28 03:07:15', 1),
(13, '::1', 'rahadian@gmail.com', 4, '2021-12-28 03:07:40', 1),
(14, '::1', 'admin@gmail.com', 2, '2021-12-28 03:08:26', 1),
(15, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-29 20:37:17', 1),
(16, '::1', 'nizar@gmail.com', 5, '2021-12-29 22:14:09', 1),
(17, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-29 22:14:23', 1),
(18, '::1', 'guru', NULL, '2021-12-30 07:53:12', 0),
(19, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-30 07:53:19', 1),
(20, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-30 08:03:55', 1),
(21, '::1', 'nizar@gmail.com', 5, '2021-12-30 08:27:12', 1),
(22, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-30 09:05:10', 1),
(23, '::1', 'admin@gmail.com', 2, '2021-12-30 21:40:56', 1),
(24, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-30 21:41:19', 1),
(25, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-31 19:40:44', 1),
(26, '::1', 'nizar@gmail.com', 5, '2021-12-31 20:01:04', 1),
(27, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-31 20:03:42', 1),
(28, '::1', 'nizar@gmail.com', 5, '2021-12-31 20:04:16', 1),
(29, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-31 20:49:14', 1),
(30, '::1', 'nizar@gmail.com', 5, '2021-12-31 20:50:01', 1),
(31, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-31 20:54:08', 1),
(32, '::1', 'nizar@gmail.com', 5, '2021-12-31 21:30:42', 1),
(33, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-31 21:31:40', 1),
(34, '::1', 'fatkhurrozin@gmail.com', 3, '2021-12-31 23:14:50', 1),
(35, '::1', 'nizar@gmail.com', 5, '2022-01-01 00:41:00', 1),
(36, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 00:42:22', 1),
(37, '::1', 'nizar@gmail.com', 5, '2022-01-01 01:10:36', 1),
(38, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 01:17:20', 1),
(39, '::1', 'admin', NULL, '2022-01-01 01:28:08', 0),
(40, '::1', 'admin@gmail.com', 2, '2022-01-01 01:28:13', 1),
(41, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 01:29:05', 1),
(42, '::1', 'nizar@gmail.com', 5, '2022-01-01 01:48:53', 1),
(43, '::1', 'nizar@gmail.com', 5, '2022-01-01 02:34:09', 1),
(44, '::1', 'guru', NULL, '2022-01-01 19:07:50', 0),
(45, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 19:07:59', 1),
(46, '::1', 'nizar@gmail.com', 5, '2022-01-01 19:24:17', 1),
(47, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 19:26:07', 1),
(48, '::1', 'nizar@gmail.com', 5, '2022-01-01 19:50:29', 1),
(49, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 20:13:26', 1),
(50, '::1', 'nizar@gmail.com', 5, '2022-01-01 20:22:44', 1),
(51, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 20:38:05', 1),
(52, '::1', 'nizar@gmail.com', 5, '2022-01-01 20:56:58', 1),
(53, '::1', 'rahadian@gmail.com', 4, '2022-01-01 22:05:16', 1),
(54, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 22:06:06', 1),
(55, '::1', 'nizar@gmail.com', 5, '2022-01-01 22:07:15', 1),
(56, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 22:08:52', 1),
(57, '::1', 'nizar@gmail.com', 5, '2022-01-01 22:31:57', 1),
(58, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 22:38:44', 1),
(59, '::1', 'rahadian@gmail.com', 4, '2022-01-01 22:41:41', 1),
(60, '::1', 'rahadian@gmail.com', 4, '2022-01-01 23:00:40', 1),
(61, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-01 23:02:17', 1),
(62, '::1', 'rahadian@gmail.com', 4, '2022-01-01 23:02:40', 1),
(63, '::1', 'nizar@gmail.com', 5, '2022-01-02 02:14:04', 1),
(64, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-02 02:14:27', 1),
(65, '::1', 'nizar@gmail.com', 5, '2022-01-02 02:14:54', 1),
(66, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-02 02:16:18', 1),
(67, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-02 02:51:32', 1),
(68, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-02 02:52:09', 1),
(69, '::1', 'admin@gmail.com', 2, '2022-01-02 03:15:12', 1),
(70, '::1', 'rahadian@gmail.com', 4, '2022-01-02 03:16:51', 1),
(71, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-02 03:21:14', 1),
(72, '::1', 'rahadian@gmail.com', 4, '2022-01-02 03:38:23', 1),
(73, '::1', 'admin@gmail.com', 2, '2022-01-02 03:53:47', 1),
(74, '::1', 'nizar@gmail.com', 5, '2022-01-02 03:55:04', 1),
(75, '::1', 'fakhur', NULL, '2022-01-02 03:57:15', 0),
(76, '::1', 'fatkhur@gmail.com', 6, '2022-01-02 03:57:25', 1),
(77, '::1', 'fatkhurrozin@gmail.com', 3, '2022-01-02 03:59:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'managing all users'),
(2, 'post-tugas', 'menambahkan tugas'),
(3, 'submit-tugas', 'mengirimkan tugas');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `no_siswa` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `file_siswa` varchar(50) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `no_siswa`, `nama`, `file_siswa`, `id_tugas`, `id_user`) VALUES
(1, '20.240.0095', 'rahad', '20240.0095-Pertemuan 1.docx', 1, 4),
(2, '20.240.0095', 'rahad', '20240.0095-Pertemuan 4.docx', 4, 4),
(3, '20.240.0095', 'rahad', '20240.0095-Pertemuan 6.docx', 8, 4),
(4, '20.240.0094', 'nizar', '20240.0094-Pertemuan 1.docx', 1, 5),
(5, '20.240.0094', 'nizar', '20240.0094-Pertemuan 2.docx', 2, 5),
(6, '20.240.0094', 'nizar', '20240.0094-Pertemuan 3.docx', 3, 5),
(7, '20.240.0094', 'nizar', '20240.0094-Pertemuan 5.docx', 5, 5),
(8, '20.240.0004', 'fatkhur', '20240.0004-Pertemuan 1.docx', 1, 6),
(9, '20.240.0004', 'fatkhur', '20240.0004-Pertemuan 2.docx', 2, 6),
(10, '20.240.0004', 'fatkhur', '20240.0004-Pertemuan 3.docx', 3, 6),
(11, '20.240.0004', 'fatkhur', '20240.0004-Pertemuan 4.docx', 4, 6),
(12, '20.240.0004', 'fatkhur', '20240.0004-Pertemuan 5.docx', 5, 6),
(13, '20.240.0004', 'fatkhur', '20240.0004-Pertemuan 6.docx', 8, 6),
(14, '20.240.0004', 'fatkhur', '20240.0004-Pertemuan 7.docx', 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `judul`, `deskripsi`, `file`) VALUES
(1, 'Materi Pertemuan 1', 'Silahkan Dipelajari', '1 Konsep OOP Dalam PHP.docx'),
(2, 'Materi Pertemuan 2', 'Silahkan Dipelajari', '2 Mengenal Framework.docx'),
(3, 'Materi Pertemuan 3', 'Silahkan Dipelajari', '3 Konsep MVC & View Pada CodeIgniter 4.docx'),
(4, 'Materi Pertemuan 4', 'Silahkan Dipelajari', '4 Model Dan Controller Pada CI-4.docx'),
(5, 'Materi Pertemuan 5', 'Silahkan Dipelajari', '5 Insert Data dan Notifikasi Pada CI-4 (1).docx'),
(8, 'Materi Pertemuan 6', 'Silahkan Dipelajari', '6 Validasi Pada CI-4.docx'),
(9, 'Materi Pertemuan 7', 'Silahkan Dipelajari', '7 Hapus & Edit Data Pada CI-4.docx');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1640619709, 1),
(2, '2021-12-27-182138', 'App\\Database\\Migrations\\Anggota', 'default', 'App', 1640629851, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `judul`, `deskripsi`, `file`, `tanggal`) VALUES
(1, 'Tugas Pertemuan 1', 'Silahkan Dikerjakan dalam bentuk pdf', 'Tugas Pertemuan 1.docx', '2022-01-04 16:34:00'),
(2, 'Tugas Pertemuan 2', 'Silahkan Dikerjakan dalam bentuk pdf', 'Tugas Pertemuan 2.docx', '2022-01-27 16:34:00'),
(3, 'Tugas Pertemuan 3', 'Silahkan Dikerjakan dalam bentuk pdf', 'Tugas Pertemuan 3.docx', '2022-01-19 16:35:00'),
(4, 'Tugas Pertemuan 4', 'Silahkan Dikerjakan dalam bentuk pdf', 'Tugas Pertemuan 4.docx', '2022-01-22 16:35:00'),
(5, 'Tugas Pertemuan 5', 'Silahkan Dikerjakan dalam bentuk pdf', 'Tugas Pertemuan 5.docx', '2022-01-28 16:35:00'),
(8, 'Tugas Pertemuan 6', 'Silahkan Dikerjakan dalam bentuk pdf', 'Tugas Pertemuan 6.docx', '2022-01-28 16:37:00'),
(9, 'Tugas Pertemuan 7', 'Silahkan Dikerjakan dalam bentuk pdf', 'Tugas Pertemuan 7.docx', '2022-01-22 16:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'admin@gmail.com', 'admin', NULL, 'default.svg', '$2y$10$PSvXi5g5/KrbI6O22lltMecv8MqSQDiai4/NBcfglq.vpr4onJaAO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-27 09:44:43', '2021-12-27 09:44:43', NULL),
(3, 'fatkhurrozin@gmail.com', 'rozin', NULL, 'default.svg', '$2y$10$DpytWGBLaB3IxnT664NfVulXV.38Rl.XX0HGlBKc8RjuXX7gMA4ou', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-27 09:46:06', '2021-12-27 09:46:06', NULL),
(4, 'rahadian@gmail.com', 'rahad', NULL, 'default.svg', '$2y$10$mGbrrkzrkIldX1WVx8zNoeiw8GOCLlqkHQgG4c76n03PLnVe1xXtm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-27 09:54:05', '2021-12-27 09:54:05', NULL),
(5, 'nizar@gmail.com', 'nizar', NULL, 'default.svg', '$2y$10$ok7K7HDknPcF3cXonS39Ie7MGZdoph9WfN2WtGvfprnd68Q60yROq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-27 10:34:15', '2021-12-27 10:34:15', NULL),
(6, 'fatkhur@gmail.com', 'fatkhur', NULL, 'default.svg', '$2y$10$YCFJu1Uz4e4j4MJig0PHXeLCjoUh8YrSaag0YipfIclevzkmlFBya', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-02 03:57:01', '2022-01-02 03:57:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tugas` (`id_tugas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
