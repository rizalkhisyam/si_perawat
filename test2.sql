-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 11:21 AM
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
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Klien', '2023-06-22 15:34:45', '2023-06-22 15:34:45'),
(2, 'Praktik', '2023-06-22 15:56:41', NULL),
(3, 'Masyarakat', '2023-06-22 16:12:11', NULL),
(4, 'Teman Sejawat', '2023-06-22 16:15:35', NULL),
(5, 'Profesi', '2023-06-22 16:15:35', NULL);

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
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `pernyataan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kode_etiks`
--

INSERT INTO `kode_etiks` (`id`, `category_id`, `pernyataan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Perawat dalam memberikan pelayanan keperawatan menghargai harkat dan martabat manusia, keunikan klien, dan tidak terpengaruh oleh pertimbangan kebangsaan, kesukuan, warna kulit, umur, jenis kelamin, aliran politik dan agama yang dianut serta kedudukan sosial', '2023-06-22 15:39:20', '2023-06-22 15:41:33'),
(2, 1, 'Perawat dalam memberikan pelayanan keperawatan senantiasa memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama', '2023-06-22 15:39:20', '2023-06-23 08:47:54'),
(3, 1, 'Tanggung jawab utama perawat adalah kepada mereka yang membutuhkan asuhan keperawatan', '2023-06-22 15:40:24', '2023-06-24 17:58:14'),
(4, 1, 'Perawat wajib merahasiakan segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku', '2023-06-22 15:40:24', '2023-06-22 15:41:55'),
(5, 2, 'Perawat memelihara dan meningkatkan kompetensi dibidang keperawatan melalui belajar terus menerus', '2023-06-22 15:57:54', NULL),
(6, 2, 'Perawat senantiasa memelihara mutu pelayanan keperawatan yang tinggi disertai kejujuran profesional yang menerapkan pengetahuan serta keterampilan keperawatan sesuai dengan kebutuhan klien', '2023-06-22 15:57:54', NULL),
(7, 2, 'Perawat dalam membuat keputusan didasarkan pada informasi yang akurat dan mempertimbangkan kemampuan serta kualifikasi seseorang bila melakukan konsultasi, menerima delegasi dan memberikan delegasi kepada orang lain', '2023-06-22 15:58:24', NULL),
(8, 2, 'Perawat senantiasa menjunjung tinggi nama baik profesi keperawatan dengan selalu menunjukkan perilaku profesional', '2023-06-22 15:58:42', NULL),
(9, 3, 'Perawat mengemban tanggung jawab bersama masyarakat untuk memprakarsai dan mendukung berbagai kegiatan dalam memenuhi kebutuhan dan kesehatan masyarakat', '2023-06-22 16:12:32', NULL),
(10, 4, 'Perawat senantiasa memelihara hubungan baik dengan sesama perawat maupun dengan tenaga kesehatan lainnya dan dalam memelihara keserasian suasana lingkungan kerja maupun dalam mencapai tujuan pelayanan kesehatan secara menyeluruh', '2023-06-22 16:18:57', NULL),
(11, 4, 'Perawat bertindak melindungi klien dari tenaga kesehatan yang memberikan pelayanan kesehatan secara tidak kompeten, tidak etis dan ilegal', '2023-06-22 16:18:57', NULL),
(12, 5, 'Perawat mempunyai peran utama dalam menentukan standar pendidikan dan pelayanan keperawatan serta menerapkannya dalam kegiatan pelayanan dan pendidikan keperawatan', '2023-06-22 16:19:29', NULL),
(13, 5, 'Perawat berperan aktif dalam berbagai kegiatan pengembangan profesi keperawatan', '2023-06-22 16:26:56', NULL),
(14, 5, 'Perawat berpartisipasi aktif dalam upaya profesi untuk membangun dan memelihara kondisi kerja yang kondusif demi terwujudnya asuhan keperawatan yang bermutu tinggi', '2023-06-22 16:32:36', NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_13_101919_create_perawats_table', 1),
(6, '2022_11_15_082215_create_ruangans_table', 1),
(7, '2022_12_29_021754_create_pengukurans_table', 1),
(8, '2023_06_12_083413_create_categories_table', 1),
(9, '2023_06_12_084029_create_kode_etiks_table', 1),
(10, '2023_06_12_084515_create_sub_kode_etiks_table', 1),
(11, '2023_07_10_043514_update_perawats_table', 2),
(12, '2023_07_10_090448_update_pengukurans_table', 2),
(13, '2023_09_22_063428_create_rekomendasis_table', 3),
(14, '2023_10_09_041306_update_pengukurans_table_add_new_column_rekomendasi', 4);

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
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenjang_karir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `rekomendasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengukurans`
--

INSERT INTO `pengukurans` (`id`, `nama`, `nip`, `jenjang_karir`, `ruangan`, `id_perawat`, `id_user`, `id_ruangan`, `skor_1`, `skor_2`, `skor_3`, `skor_4`, `skor_5`, `total_skor`, `nilai_interval`, `nilai_perilaku`, `kategori_nilai`, `rekomendasi`, `created_at`, `updated_at`) VALUES
(3, 'Florence Nightingale', NULL, NULL, 'Irna 3 Bedah', 1, 2, 2, 0, 10, 2, 5, 6, 23, '38', 'D', 'Buruk', NULL, '2023-06-24 00:27:31', '2023-06-24 00:43:47'),
(4, 'Florence Nightingale', NULL, NULL, 'Irna 5 Obgyn dan Perina', 1, 2, 4, 15, 20, 6, 9, 10, 60, '100', 'A', 'Prima', NULL, '2023-06-24 00:39:15', '2023-06-24 00:40:55'),
(5, 'Florence Nightingale', NULL, NULL, 'NICU/PIC', 1, 1, 8, 15, 20, 6, 9, 10, 60, '100', 'A', 'Prima', NULL, '2023-06-24 17:59:35', '2023-06-24 18:01:38'),
(6, 'Florence Nightingale', NULL, NULL, 'ICU B51', 1, 3, 34, 9, 6, 6, 8, 10, 39, '65', 'C', 'Cukup', NULL, '2023-06-25 19:02:32', '2023-06-25 19:04:28'),
(7, 'Florence Nightingale', NULL, NULL, 'Irna 6 Medik', 1, 3, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-26 19:26:50', '2023-06-26 19:26:50'),
(8, 'Florence Nightingale', NULL, NULL, 'Poli ParuPoli THT', 1, 1, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-10 02:11:16', '2023-07-10 02:11:16'),
(9, 'Florence Nightingale', NULL, NULL, 'Poli Penyakit Dalam', 1, 1, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-10 02:20:49', '2023-07-10 02:20:49'),
(10, 'Florence Nightingale', '1987082820190320', 'Perawat Klinis', 'Poli Anak', 1, 1, 1, 0, 0, 6, 9, 5, 20, '33', 'D', 'Buruk', NULL, '2023-07-10 02:22:14', '2023-07-10 02:27:10'),
(11, 'Virginia Henderson', 'g72218060', 'Perawat Klinis', 'Poli Anak', 3, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-10 20:15:26', '2023-07-10 20:15:26'),
(12, 'Virginia Henderson', 'g72218060', 'Perawat Klinis', 'Poli Anak', 3, 1, 1, 15, 13, 5, 7, 10, 50, '83', 'B', 'Baik', NULL, '2023-07-10 20:15:48', '2023-07-10 20:18:04'),
(13, 'Florence Nightingale', '1987082820190320', 'Perawat Klinis', 'Ruang IGD', 1, 1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-02 21:28:50', '2023-08-02 21:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `perawats`
--

CREATE TABLE `perawats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `perawats` (`id`, `nip`, `nama`, `usia`, `jenis_kelamin`, `status_pendidikan`, `lama_bekerja`, `status`, `jenjang_karir`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1987082820190320', 'Florence Nightingale', '25', 'pria', 'Diploma 3 (D3)', '5 tahun', 'Pegawai Tetap', 'Perawat Klinis', '2023-06-22 08:11:57', '2023-07-10 02:11:03', NULL),
(3, 'g72218060', 'Virginia Henderson', '31', 'wanita', 'Ners', '5 tahun', 'Pegawai Tetap', 'Perawat Klinis', '2023-06-25 19:00:43', '2023-07-10 02:34:20', NULL);

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
-- Table structure for table `rekomendasis`
--

CREATE TABLE `rekomendasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekomendasis`
--

INSERT INTO `rekomendasis` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Pertahankan perilaku yang sudah dalam kategori  “Prima” ini dalam menjalankan tugas dan memberikan asuhan keperawatan sebagai perawat yang profesional', NULL, NULL),
(2, 'Pertahankan perilaku yang sudah masuk dalam kategori Baik ini dalam menjalankan tugas dan memberikan asuhan keperawatan sebagai perawat yang profesional dengan tetap memperhatikan hak dan kewajiban pasien dan perawat serta memberikan asuhan keperawatan sesuai dengan SPO yang berlaku', NULL, NULL),
(3, 'Beri masukan terkait pelanggaran etika keperawatan yang dilakukan serta meminta dan mengawasi perawat perawat yang dinilai untuk memperbaiki dan meningkatkan perilakunya agar menjadi lebih baik. Jika anda adalah perawat yang menerima amanah sebagai pengurus PPNI, maka dalam kategori CUKUP ini akan menerima pengarahan dari MKEK sesuai dengan tingkatannya', NULL, NULL),
(4, 'Perlu dilakukan penanganan dengan melaporkan meminta MKEK untuk menindaklanjuti dengan pembinaan dan penanganan pelanggaran etika keperawatan oleh MKEK. Jika anda adalah  perawat yang menerima amanah sebagai pengurus PPNI, maka dalam kategori BURUK ini akan ditindaklanjuti dengan pembinaan dan penanganan pelanggaran etika keperawatan oleh MKEK sesuai tingkatan dengan mengacu kepada peraturan organisasi tentang disiplin organisasi dan prosesnya mengacu kepada pedoman penyelesaian pertentangan masalah etika keperawatan', NULL, NULL);

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
(1, 'Poli Anak', NULL, NULL, '2023-06-22 08:12:09', '2023-06-22 08:12:09'),
(2, 'Irna 3 Bedah', NULL, NULL, '2023-06-24 00:17:04', '2023-06-24 00:17:04'),
(3, 'Irna 4 Pediatri', NULL, NULL, '2023-06-24 00:17:13', '2023-06-24 00:17:13'),
(4, 'Irna 5 Obgyn dan Perina', NULL, NULL, '2023-06-24 00:17:27', '2023-06-24 00:17:27'),
(5, 'Irna 6 Medik', NULL, NULL, '2023-06-24 00:17:34', '2023-06-24 00:17:34'),
(6, 'Irna 7 VIP/Umum', NULL, NULL, '2023-06-24 00:17:43', '2023-06-24 00:17:43'),
(7, 'ICU dan ICCU', NULL, NULL, '2023-06-24 00:17:51', '2023-06-24 00:17:51'),
(8, 'NICU/PIC', NULL, NULL, '2023-06-24 00:17:58', '2023-06-24 00:17:58'),
(9, 'STROKE Unit', NULL, NULL, '2023-06-24 00:18:05', '2023-06-24 00:18:05'),
(10, 'Ruang OK', NULL, NULL, '2023-06-24 00:18:15', '2023-06-24 00:18:15'),
(11, 'Ruang IGD', NULL, NULL, '2023-06-24 00:18:27', '2023-06-24 00:18:27'),
(12, 'Ruang VK', NULL, NULL, '2023-06-24 00:18:42', '2023-06-24 00:18:42'),
(13, 'Poli Bedah Umum', NULL, NULL, '2023-06-24 00:18:49', '2023-06-24 00:18:49'),
(14, 'Poli Jantung', NULL, NULL, '2023-06-24 00:18:55', '2023-06-24 00:18:55'),
(15, 'Poli Anak', NULL, NULL, '2023-06-24 00:19:01', '2023-06-24 00:19:01'),
(16, 'Poli Urolog', NULL, NULL, '2023-06-24 00:19:09', '2023-06-24 00:19:09'),
(17, 'Poli Saraf', NULL, NULL, '2023-06-24 00:19:17', '2023-06-24 00:19:17'),
(18, 'Poli Penyakit Dalam', NULL, NULL, '2023-06-24 00:19:22', '2023-06-24 00:19:22'),
(19, 'Poli ParuPoli THT', NULL, NULL, '2023-06-24 00:19:29', '2023-06-24 00:19:29'),
(20, 'Poli Mata', NULL, NULL, '2023-06-24 00:19:35', '2023-06-24 00:19:35'),
(21, 'Poli Kulit dan Kelamin', NULL, NULL, '2023-06-24 00:19:42', '2023-06-24 00:19:42'),
(22, 'Airlangga Aesthetic Center (AAC)', NULL, NULL, '2023-06-24 00:19:51', '2023-06-24 00:19:51'),
(23, 'Pengobatan Alternatif dan Komplementer', NULL, NULL, '2023-06-24 00:19:59', '2023-06-24 00:19:59'),
(24, 'Poli Gizi', NULL, NULL, '2023-06-24 00:20:05', '2023-06-24 00:20:05'),
(25, 'Poli Gigi', NULL, NULL, '2023-06-24 00:20:11', '2023-06-24 00:20:11'),
(26, 'Poli TB Dots', NULL, NULL, '2023-06-24 00:20:17', '2023-06-24 00:20:17'),
(27, 'Poli IHAN', NULL, NULL, '2023-06-24 00:20:25', '2023-06-24 00:20:25'),
(28, 'Poli Bedah Syaraf', NULL, NULL, '2023-06-24 00:20:30', '2023-06-24 00:20:30'),
(29, 'Poli Jiwa', NULL, NULL, '2023-06-24 00:20:37', '2023-06-24 00:20:37'),
(30, 'Poli Psikologi', NULL, NULL, '2023-06-24 00:20:42', '2023-06-24 00:20:42'),
(31, 'Poli Bedah TKV', NULL, NULL, '2023-06-24 00:20:48', '2023-06-24 00:20:48'),
(32, 'Poli Bedah Plastik', NULL, NULL, '2023-06-24 00:20:55', '2023-06-24 00:20:55'),
(33, 'Poli Orthopedi', NULL, NULL, '2023-06-24 00:21:00', '2023-06-24 00:21:00'),
(34, 'ICU B51', NULL, NULL, '2023-06-25 19:01:45', '2023-06-25 19:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kode_etiks`
--

CREATE TABLE `sub_kode_etiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_etik_id` bigint(20) UNSIGNED NOT NULL,
  `aktivitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kode_etiks`
--

INSERT INTO `sub_kode_etiks` (`id`, `kode_etik_id`, `aktivitas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Perawat wajib memperkenalkan diri kepada klien dan keluarganya pada setiap awal dan pamit pada akhir shift', '2023-06-22 15:42:26', '2023-06-23 08:54:58'),
(2, 1, 'Perawat wajib menjelaskan setiap intervensi keperawatan yang dilakukan pada klien', '2023-06-22 15:43:27', NULL),
(3, 1, 'Perawat dalam memberikan pelayanan keperawatan dilarang mencela adat kebiasaan dan keadaan khusus klien', '2023-06-22 15:43:27', NULL),
(4, 1, 'Perawat dalam memberikan pelayanan keperawatan dilarang membeda-bedakan pelayanan atas dasar kebangsaan, jenis kelamin, suku,agama, ras, antar golongan (SARA), kedudukan sosial serta tidak melakukan body shaming pada klien', '2023-06-22 15:44:02', '2023-06-25 18:56:34'),
(5, 2, 'Perawat pada awal bertemu klien, wajib menjelaskan bahwa mereka boleh menjalankan kegiatan yang terkait dengan budaya, adat dan agama', '2023-06-22 15:46:46', NULL),
(6, 2, 'Perawat dalam memberikan pelayanan harus memelihara suasana lingkungan yang menghormati nilai-nilai budaya, adat istiadat dan kelangsungan hidup beragama dan wajib mencari solusi yang akan berpihak pada klien bila terjadi konflik terkait nilai- nilai budaya, adat istiadat dan kelangsungan hidup beragama', '2023-06-22 15:46:46', NULL),
(7, 2, 'Perawat wajib membantu klien memenuhi kebutuhannya pada intervensi keperawatan sesuai dengan budaya, adat istiadat dan agama', '2023-06-22 15:48:41', NULL),
(8, 2, 'Perawat wajib mengikut sertakan klien secara terus menerus pada saat memberikan asuhan keperawatan', '2023-06-22 15:48:58', NULL),
(9, 3, 'Perawat wajib melaksanakan asuhan keperawatan sesuai dengan standar prosedur operasional (SPO)', '2023-06-22 15:50:45', NULL),
(10, 3, 'Perawat dalam melaksanakan intervensi keperawatan wajib sesuai dengan kompetensi yang dimilikinya', '2023-06-22 15:50:45', NULL),
(11, 3, 'Perawat wajib melaksanakan asuhan keperawatan secara tuntas dan tepat waktu', '2023-06-22 15:51:11', NULL),
(12, 3, 'Perawat dilarang melakukan serah terima bila tindakan keperawatan belum dilaksanakan sesuai dengan rencana yang telah dibuat, kecuali bila ada alasan yang dapat diterima', '2023-06-22 15:51:27', NULL),
(13, 3, 'Perawat wajib membuat dokumentasi asuhan keperawatan sesuai SPO', '2023-06-22 15:51:45', NULL),
(14, 4, 'Perawat dilarang membocorkan rahasia tentang segala sesuatu yang diketahui sehubungan dengan tugas yang dipercayakan kepadanya kecuali jika diperlukan oleh yang berwenang sesuai dengan ketentuan hukum yang berlaku', '2023-06-22 15:53:54', NULL),
(15, 4, 'Perawat tidak mendiskusikan klien di tempat umum', '2023-06-22 15:53:54', NULL),
(16, 5, 'Perawat harus berusaha untuk meningkatkan ilmu dan keterampilan sesuai dengan kemampuan', '2023-06-22 16:00:08', NULL),
(17, 5, 'Perawat melakukan praktik keperawatan berdasarkan praktik etik, legal dan peka budaya', '2023-06-22 16:00:08', NULL),
(18, 5, 'Perawat harus mengamalkan ilmu dan keterampilan yang dimiliki', '2023-06-22 16:01:24', NULL),
(19, 5, 'Perawat harus mempublikasi-kan ilmu dan keterampilan yang dimiliki baik dalam bentuk hasil penelitian maupun presentasi kasus', '2023-06-22 16:01:37', NULL),
(20, 6, 'Perawat wajib memelihara mutu pelayanan keperawatan seoptimal mungkin dengan mengikuti seminar/pelatihan/ workshop', '2023-06-22 16:03:15', NULL),
(21, 6, 'Perawat sebelum menerapkan pengetahuan dan keterampilan yang baru, wajib dievaluasi oleh perawat yang telah berkompeten', '2023-06-22 16:03:15', NULL),
(22, 6, 'Perawat dalam memberikan asuhan keperawatan wajib mengidentifikasi asuhan keperawatan yang tidak sesuai dengan nilai-nilai profesi keperawatan: estetika, nilai persamaan, altruisme, kebebasan, martabat manusia, keadilan dan kebenaran', '2023-06-22 16:03:59', NULL),
(23, 6, 'Perawat wajib menyampaikan kepada pimpinan, apabila menemukan pelayanan kesehatan yang tidak sesuai dengan nilai-nilai yang dianut atau tidak sesuai dengan standar mutu dan keselamatan untuk selanjutnya ditindak-lanjuti', '2023-06-22 16:04:16', NULL),
(24, 6, 'Perawat dalam memberikan intervensi keperawatan wajib merujuk pada standar yang dikeluarkan institusi pelayanan kesehatan', '2023-06-22 16:04:34', NULL),
(25, 6, 'Setiap teknologi keperawatan yang digunakan wajib diuji validitas (kehandalan) dan reliabilitas (keabsahan) oleh lembaga yang berwenang', '2023-06-22 16:04:49', NULL),
(26, 7, 'Perawat dalam membuat keputusan wajib didasarkan pada informasi yang akurat baik dari pasien maupun keluarga pasien', '2023-06-22 16:05:44', NULL),
(27, 7, 'Perawat memberikan delegasi kepada perawat profesi atau perawat vokasi sesuai dengan kompetensi yang diperlukan', '2023-06-22 16:05:44', NULL),
(28, 7, 'Perawat menjalankan tugas sesuai yang didelegasikan dan membuat laporan terkait', '2023-06-22 16:06:18', NULL),
(29, 7, 'Perawat dalam membuat keputusan atau memberi masukan wajib mempertimbangkan kemampuan serta kualifikasi seseorang (penerima konsul) bila melakukan konsultasi', '2023-06-22 16:06:27', NULL),
(30, 8, 'Perawat dilarang menyampaikan hal-hal yang terkait dengan kegiatan profesi keperawatan (asuhan keperawatan), kecuali ditugaskan oleh pejabat yang berwenang', '2023-06-22 16:07:32', NULL),
(31, 8, 'Perawat wajib menyelesaikan permasalahan terkait pelaksanaan tugas profesi keperawatan secara internal terlebih dahulu', '2023-06-22 16:07:32', NULL),
(32, 8, 'Penyelesaian masalah harus dipimpin oleh perawat penanggung jawab', '2023-06-22 16:07:53', NULL),
(33, 8, 'Perawat harus menjaga kesehatan jasmani dan rohani yang diperlukan untuk menampilkan sikap profesinya: jika tidak sehat dilarang memberikan asuhan keperawatan', '2023-06-22 16:08:08', NULL),
(34, 8, 'Memberikan informasi yang lengkap, jujur, benar dan mudah dimengerti mengenai intervensi keperawatan kepada klien dan keluarga sesuai batas kewenangannya, bersikap ramah dan menepati janji', '2023-06-22 16:08:43', NULL),
(35, 8, 'Dalam memberikan asuhan keperawatan, perawat wajib menjaga penampilan:\r\na. Menggunakan seragam dinas sesuai ketentuan, bersih dan rapi\r\nb. Menggunakan sepatu hitam dan kaus kaki\r\nc. Riasan (make up) dan aksesoris tidak berlebihan\r\nd. Menggunakan tanda pengenal (ID Card) saat berdinas\r\ne. Tidak bau badan dan penggunaan parfum tidak berlebihan\r\nf. Laki-laki: rambut rapi tidak menutupi telinga dan kerah baju, tidak dikuncir dan jika berjenggot tampak rapi. Perempuan : rambut diikat menggunakan cepol/hairnet warna hitam bagi yang tidak berhijab. Untuk yang berhijab, kerudung bersih, rapi dan tampak identitas.', '2023-06-22 16:08:52', NULL),
(36, 9, 'Perawat dibawah institusi tempat bekerja wajib melakukan kegiatan pengabdian masyarakat satu kali dalam setahun', '2023-06-22 16:12:50', NULL),
(37, 9, 'Perawat memperlihatkan perilaku hidup sehat di lingkungan ruang perawatan', '2023-06-22 16:12:50', NULL),
(38, 9, 'Perawat menciptakan suasana yang tenang dan bersih di ruang rawat', '2023-06-22 16:13:54', NULL),
(39, 9, 'Perawat memastikan fasilitas ruang rawat memadai dan berfungsi dengan baik', '2023-06-22 16:14:07', NULL),
(40, 9, 'Perawat wajib memberikan informasi pada klien dan keluarga tentang area cakupan pelayanan keperawatan yang diberikan dengan menggunakan media yang disepakati secara berkala', '2023-06-22 16:14:23', NULL),
(41, 9, 'Perawat wajib ikut berperan serta dalam mengembangkan teknologi keperawatan', '2023-06-22 16:14:38', NULL),
(42, 10, 'Perawat harus berdiskusi dengan sesama perawat membahas hal terkait dengan profesi secara berkala', '2023-06-22 16:21:39', NULL),
(43, 10, 'Dalam menyampaikan pendapat, Perawat harus menggunakan rujukan yang diakui kebenarannya', '2023-06-22 16:21:39', NULL),
(44, 10, 'Perawat wajib menghargai pendapat kolega', '2023-06-22 16:22:15', NULL),
(45, 10, 'Perawat menciptakan lingkungan kerja yang kondusif', '2023-06-22 16:22:59', NULL),
(46, 11, 'Perawat mempraktikan penyelesaian yang terjadi antar sejawat sesuai alur', '2023-06-22 16:23:15', NULL),
(47, 11, 'Perawat wajib memberikan perlindungan pada klien', '2023-06-22 16:23:15', NULL),
(48, 11, 'Perawat harus memahami alur untuk menyampaikan masalah bila terjadi pelayanan kesehatan yang tidak mengikuti kaidah etik', '2023-06-22 16:23:39', NULL),
(49, 11, 'Perawat menegur sejawat yang tidak kompeten, tidak etik dan tidak legal dan membina sejawat agar kompeten, etis dan legal', '2023-06-22 16:23:57', NULL),
(50, 11, 'Pimpinan Perawat wajib melindungi anggotanya dalam membahas dan mengemuka-kan pendapat', '2023-06-22 16:24:18', NULL),
(51, 12, 'Perawat wajib memberikan masukan dan sosialisasi kepada institusi pendidikan tentang kemajuan ilmu pengetahuan dan teknologi keperawatan dan menyusun standar yang dibutuhkan profesi pelayanan dan pendidikan', '2023-06-22 16:27:20', NULL),
(52, 12, 'Perawat wajib memfasilitasi kebutuhan belajar mahasiswa calon anggota profesi', '2023-06-22 16:27:20', NULL),
(53, 12, 'Perawat wajib tidak mencemarkan nama baik profesi dan simbol-simbol organisasi profesi di media apapun', '2023-06-22 16:31:10', NULL),
(54, 13, 'Perawat wajib melakukan kajian asuhan keperawatan yang diberikan secara terus menerus dibawah bimbingan perawat yang ditunjuk', '2023-06-22 16:31:23', NULL),
(55, 13, 'Perawat wajib membahas hasil kajian asuhan keperawatan dalam forum temu ilmiah perawat pada institusi terkait sekurang-kurangnya satu kali dalam satu tahun', '2023-06-22 16:31:23', NULL),
(56, 14, 'Perawat wajib menjalankan tugas profesinya dengan penuh tanggung jawab', '2023-06-22 16:32:56', NULL),
(57, 14, 'Perawat wajib menyampaikan asuhan keperawatan yang telah dilakukannya pada setiap serah terima', '2023-06-22 16:32:56', NULL),
(58, 14, 'Perawat aktif memberikan usulan terkait fasilitas yang memadai untuk kelancara asuhan keperawatan', '2023-06-22 16:33:18', NULL),
(59, 14, 'Perawat penanggung jawab wajib memastikan terlaksananya asuhan keperawatan yang diberikan oleh perawat pelaksana yang ada dibawah tanggung jawabnya', '2023-06-22 16:33:33', NULL),
(60, 14, 'Perawat penanggung jawab wajib menyampaikan perkembangan asuhan keperawatan kepada penanggung jawab perawatan yang lebih tinggi secara berkala', '2023-06-22 16:33:46', NULL);

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
(1, 'Admin', 'komiteetikrsua@gmail.com', NULL, '$2y$10$8p1CZmjFpnz/rpjRX4RNJuNbfz43zku0HR/VMyB/H1424hAS8m/pC', NULL, '2023-06-22 08:09:09', '2023-06-22 08:09:09'),
(2, 'test', 'test@test.com', NULL, '$2y$10$8p1CZmjFpnz/rpjRX4RNJuNbfz43zku0HR/VMyB/H1424hAS8m/pC', NULL, '2023-06-23 23:55:30', '2023-06-23 23:55:30'),
(3, 'Subkomite', 'ucoba9143@gmail.com', NULL, '$2y$10$qvFK2tJRjwNjQCAfaM9kq.KfQch0TFQyTGTSNIW/hOoTcLwWChnEe', NULL, '2023-06-25 18:58:54', '2023-06-25 18:58:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD KEY `kode_etiks_category_id_foreign` (`category_id`);

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
  ADD KEY `pengukurans_id_user_foreign` (`id_user`);

--
-- Indexes for table `perawats`
--
ALTER TABLE `perawats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perawats_nip_unique` (`nip`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rekomendasis`
--
ALTER TABLE `rekomendasis`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `sub_kode_etiks_kode_etik_id_foreign` (`kode_etik_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kode_etiks`
--
ALTER TABLE `kode_etiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengukurans`
--
ALTER TABLE `pengukurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `perawats`
--
ALTER TABLE `perawats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekomendasis`
--
ALTER TABLE `rekomendasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sub_kode_etiks`
--
ALTER TABLE `sub_kode_etiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kode_etiks`
--
ALTER TABLE `kode_etiks`
  ADD CONSTRAINT `kode_etiks_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengukurans`
--
ALTER TABLE `pengukurans`
  ADD CONSTRAINT `pengukurans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_kode_etiks`
--
ALTER TABLE `sub_kode_etiks`
  ADD CONSTRAINT `sub_kode_etiks_kode_etik_id_foreign` FOREIGN KEY (`kode_etik_id`) REFERENCES `kode_etiks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
