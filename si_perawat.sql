-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 11:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_perawat`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Klien', '2023-05-05 07:31:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kode_etiks`
--

CREATE TABLE `kode_etiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `pernyataan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kode_etiks`
--

INSERT INTO `kode_etiks` (`id`, `id_category`, `pernyataan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Perawat dalam memberikan pelayanan keperawatan menghargai harkat dan martabat manusia, keunikan klien, dan tidak terpengaruh oleh pertimbangan kebangsaan, kesukuan, warna kulit, umur, jenis kelamin, aliran politik dan agama yang dianut serta kedudukan sosial', '2023-05-05 07:31:21', NULL),
(2, 1, 'Perawat dalam memberikan pelayanan keperawatan senantiasa memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama', '2023-05-05 07:37:21', NULL),
(3, 1, 'Tanggung jawab utama perawat adalah kepada mereka yang membutuhkan asuhan keperawatan', '2023-05-05 07:38:12', NULL),
(4, 1, 'Perawat wajib merahasiakan segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku', '2023-05-05 08:01:21', NULL);

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2022_11_13_101919_create_perawats_table', 1),
(13, '2022_11_15_082215_create_ruangans_table', 1),
(14, '2022_12_29_021754_create_pengukurans_table', 1),
(21, '2023_05_04_081918_create_categorys_table', 2),
(22, '2023_05_04_081926_create_kode_etiks_table', 2),
(23, '2023_05_04_081934_create_sub_kode_etiks_table', 2);

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
-- Table structure for table `pengukurans`
--

CREATE TABLE `pengukurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_perawat` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_ruangan` bigint(20) UNSIGNED NOT NULL,
  `skor_1` int(11) DEFAULT NULL,
  `skor_2` int(11) DEFAULT NULL,
  `skor_3` int(11) DEFAULT NULL,
  `skor_4` int(11) DEFAULT NULL,
  `skor_5` int(11) DEFAULT NULL,
  `total_skor` int(11) DEFAULT NULL,
  `nilai_interval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_perilaku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_nilai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengukurans`
--

INSERT INTO `pengukurans` (`id`, `nama`, `ruangan`, `id_perawat`, `id_user`, `id_ruangan`, `skor_1`, `skor_2`, `skor_3`, `skor_4`, `skor_5`, `total_skor`, `nilai_interval`, `nilai_perilaku`, `kategori_nilai`, `created_at`, `updated_at`) VALUES
(1, 'Ranti Marina', 'Poli Gigi', 2, 1, 1, 22, 15, 5, 9, 11, 62, '100', 'A', 'Prima', '2023-04-17 23:17:54', '2023-04-17 23:48:37'),
(2, 'Toldi toldu', 'Ruang MOT', 1, 1, 3, 6, 2, 1, 5, 6, 20, '32', 'D', 'Buruk', '2023-04-18 01:14:10', '2023-04-18 01:15:17'),
(3, 'Toldi toldu', 'Poli Gigi', 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-18 01:44:47', '2023-04-18 01:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `perawats`
--

CREATE TABLE `perawats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_bekerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang_karir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perawats`
--

INSERT INTO `perawats` (`id`, `nama`, `usia`, `jenis_kelamin`, `status_pendidikan`, `lama_bekerja`, `status`, `jenjang_karir`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Toldi toldu', '25', 'pria', 'Doctor', '5 tahun', 'Magang', 'Perawat Pendidik', '2023-04-17 22:16:40', '2023-04-17 22:16:40', NULL),
(2, 'Ranti Marina', '25', 'wanita', 'Magister', '5 tahun', 'Pegawai Tetap', 'Perawat Manajer', '2023-04-17 22:17:01', '2023-04-17 22:17:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruangans`
--

CREATE TABLE `ruangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gedung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daya_tampung` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruangans`
--

INSERT INTO `ruangans` (`id`, `nama_ruangan`, `nama_gedung`, `daya_tampung`, `created_at`, `updated_at`) VALUES
(1, 'Poli Gigi', NULL, NULL, '2023-04-17 23:17:19', '2023-04-17 23:17:19'),
(2, 'Poli Anak', NULL, NULL, '2023-04-17 23:17:23', '2023-04-17 23:17:23'),
(3, 'Ruang MOT', NULL, NULL, '2023-04-18 01:13:32', '2023-04-18 01:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kode_etiks`
--

CREATE TABLE `sub_kode_etiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kode_etik` bigint(20) UNSIGNED NOT NULL,
  `aktivitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kode_etiks`
--

INSERT INTO `sub_kode_etiks` (`id`, `id_kode_etik`, `aktivitas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Perawat wajib memperkenalkan diri kepada klien dan keluarganya pada setiap awal dan pamit pada akhir shift', '2023-05-05 08:03:17', NULL),
(2, 1, 'Perawat wajib menjelaskan setiap intervensi keperawatan yang dilakukan pada klien', '2023-05-05 08:03:49', NULL),
(3, 1, 'Perawat dalam memberikan pelayanan keperawatan dilarang mencela adat kebiasaan dan keadaan khusus klien', '2023-05-05 08:04:17', NULL),
(4, 1, 'Perawat dalam memberikan pelayanan keperawatan dilarang membeda-bedakan pelayanan atas dasar kebangsaan, kesukuan, warna kulit, umur, jenis kelamin, aliran politik dan agama yang dianut serta kedudukan sosial pada klien', '2023-05-05 08:04:17', NULL),
(5, 2, 'Perawat pada awal bertemu klien, wajib menjelaskan bahwa mereka boleh menjalankan kegiatan yang terkait dengan budaya, adat dan agama', '2023-05-05 08:40:09', NULL),
(6, 2, 'Perawat dalam memberikan pelayanan harus memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama dan wajib mencari solusi yang akan berpihak pada klien bila terjadi konflik terkait nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama', '2023-05-05 08:40:22', NULL),
(7, 2, 'Perawat wajib membantu klien memenuhi kebutuhannya pada intervensi keperawatan sesuai dengan budaya, adat istiadat dan agama', '2023-05-05 08:40:27', NULL),
(8, 2, 'Perawat wajib mengikut sertakan klien secara terus menerus pada saat memberikan asuhan keperawatan', '2023-05-05 08:40:27', NULL),
(9, 3, 'Perawat dalam melaksanakan intervensi keperawatan wajib sesuai dengan kompetensi yang dimilikinya', '2023-05-05 08:42:00', NULL),
(10, 3, 'Perawat wajib melaksanakan asuhan keperawatan secara tuntas dan tepat waktu', '2023-05-05 08:41:35', NULL),
(11, 3, 'Perawat dilarang melakukan serah terima bila tindakan keperawatan belum dilaksanakan sesuai dengan rencana yang telah dibuat, kecuali bila ada alasan yang dapat diterima', '2023-05-05 08:41:53', NULL),
(12, 3, 'Perawat wajib membuat dokumentasi asuhan keperawatan sesuai dengan kaidah yang berlaku', '2023-05-05 08:41:53', NULL),
(13, 4, 'Perawat dilarang membocorkan rahasia tentang segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku', '2023-05-05 08:52:29', NULL);

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
(1, 'joyboy', 'rkhisyam00@gmail.com', NULL, '$2y$10$6NHoqj31bOrXLzEAJNwVQuWNOlxI3ixarFQP5zYIEYU5jamuGEWs2', NULL, '2023-04-17 22:07:57', '2023-04-17 22:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kode_etiks`
--
ALTER TABLE `kode_etiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_etiks_id_category_foreign` (`id_category`);

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
-- Indexes for table `pengukurans`
--
ALTER TABLE `pengukurans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengukurans_id_perawat_foreign` (`id_perawat`),
  ADD KEY `pengukurans_id_user_foreign` (`id_user`),
  ADD KEY `pengukurans_id_ruangan_foreign` (`id_ruangan`);

--
-- Indexes for table `perawats`
--
ALTER TABLE `perawats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_kode_etiks`
--
ALTER TABLE `sub_kode_etiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_kode_etiks_id_kode_etik_foreign` (`id_kode_etik`);

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
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kode_etiks`
--
ALTER TABLE `kode_etiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengukurans`
--
ALTER TABLE `pengukurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perawats`
--
ALTER TABLE `perawats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_kode_etiks`
--
ALTER TABLE `sub_kode_etiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kode_etiks`
--
ALTER TABLE `kode_etiks`
  ADD CONSTRAINT `kode_etiks_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categorys` (`id`);

--
-- Constraints for table `pengukurans`
--
ALTER TABLE `pengukurans`
  ADD CONSTRAINT `pengukurans_id_perawat_foreign` FOREIGN KEY (`id_perawat`) REFERENCES `perawats` (`id`),
  ADD CONSTRAINT `pengukurans_id_ruangan_foreign` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangans` (`id`),
  ADD CONSTRAINT `pengukurans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_kode_etiks`
--
ALTER TABLE `sub_kode_etiks`
  ADD CONSTRAINT `sub_kode_etiks_id_kode_etik_foreign` FOREIGN KEY (`id_kode_etik`) REFERENCES `kode_etiks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
