-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 04:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webidrendb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `video_id`, `user_id`, `text`, `likes`, `created_at`, `updated_at`) VALUES
(1, 6, 52, 'Testing', 0, '2019-09-13 03:19:01', '2019-09-13 03:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `koneksis`
--

CREATE TABLE `koneksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_unit_pengelola_jaringan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kepala_unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomer_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penanggung_jawab_jaringan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_asn` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_ip` varchar(19) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penyedia_jasa_internet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp_pic` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandwidth_internet` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyedia_jasa_internet_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pic_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_hp_pic_2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bandwidth_internet_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `koneksis`
--

INSERT INTO `koneksis` (`id`, `user_id`, `nama_unit_pengelola_jaringan`, `nama_kepala_unit`, `email`, `nomer_hp`, `nama_penanggung_jawab_jaringan`, `nomor_asn`, `alamat_ip`, `nama_penyedia_jasa_internet`, `nama_pic`, `nomor_hp_pic`, `bandwidth_internet`, `nama_penyedia_jasa_internet_2`, `nama_pic_2`, `nomor_hp_pic_2`, `bandwidth_internet_2`, `file_path`, `verified`, `created_at`, `updated_at`) VALUES
(2, 53, 'Nama namaaa', 'Budi siasaan', 'juliustjai20@gmail.com', '123123123', 'penaww wwwwwasd', 'Julius', '127.0.0.1', 'Indihome', 'Julius', '012324123', '1MBps', 'Rewae', 'ertyukcv', 'Julius', '5 mb', 'surat/UYkEQn41dwQgaSMKpAxQJZenN2wRMrh70cv9ociW.jpeg', '2019-07-29 08:33:27', '2019-07-29 03:12:08', '2019-07-29 08:33:27'),
(3, 53, 'Lorem', 'Lorem', 'Lorem@Lorem.com', '01234213', 'Lorem', 'Lorem', NULL, 'Lorem', 'Lorem', '012341234123', '1MBps', NULL, NULL, NULL, NULL, 'surat/MHIpxfJdnhNND1uCK9RJdEc1Ee4Pa9lqM3BstVu7.jpeg', '2019-11-09 20:59:42', '2019-07-29 03:35:34', '2019-11-09 20:59:42'),
(4, 53, 'Lorem', 'Lorem', 'Lorem@Lorem.com', '01234213', 'Lorem', 'Lorem', NULL, 'Lorem', 'Lorem', '012341234123', '1MBps', NULL, NULL, NULL, NULL, 'surat/vMWcgFLjQk36OqAAdc60U7zhdDSJT6b5VDFz2Fiy.jpeg', '2019-11-09 21:20:45', '2019-07-29 03:36:54', '2019-11-09 21:20:45'),
(5, 54, 'Jundi', 'Jundi', 'frans.zhafran@gmail.com', '081319197413', 'ga tau', '082222222222', '222.222.222', 'Lupa', '123', '08222222222', '2', 'Telkom', 'Sarun', '082222222222', '2', 'surat/JQdEJTgygwEzKncPO2ykw4UYYpeQ21mQU7egqBs3.png', NULL, '2019-11-09 20:42:45', '2019-11-09 20:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_11_100340_create_universities_table', 1),
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_06_22_074629_create_koneksis_table', 1),
(16, '2019_06_23_094319_create_researches_table', 1),
(17, '2019_08_04_044649_create_videos_table', 2),
(18, '2019_08_08_060146_create_comments_table', 3),
(19, '2019_08_10_060850_create_playlists_table', 4),
(20, '2019_08_11_095031_create_playlist_videos_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `user_id`, `judul`, `desc`, `created_at`, `updated_at`) VALUES
(4, 53, 'test back 2', 'test back 2', '2019-08-11 05:44:10', '2019-08-11 05:44:10'),
(5, 53, 'test back 2', 'test back 2', '2019-08-11 05:44:20', '2019-08-11 05:44:20'),
(6, 53, 'test new tab', 'new tab lorem', '2019-08-11 19:34:22', '2019-08-11 19:34:22'),
(7, 53, 'Test session', 'session test', '2019-08-11 19:59:01', '2019-08-11 19:59:01'),
(8, 53, 'Test session 2', 'session 2 test', '2019-08-11 20:02:55', '2019-08-11 20:02:55'),
(9, 53, 'TEst session 3', 'session 3 test', '2019-08-11 20:03:25', '2019-08-11 20:03:25'),
(10, 52, 'testUser Playlist', 'This is testUser 1 Playlist', '2019-08-16 05:42:34', '2019-08-16 05:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_videos`
--

CREATE TABLE `playlist_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `playlist_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlist_videos`
--

INSERT INTO `playlist_videos` (`id`, `playlist_id`, `video_id`, `created_at`, `updated_at`) VALUES
(3, 10, 6, '2019-08-16 05:56:53', '2019-08-16 05:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `request_admin_instansi`
--

CREATE TABLE `request_admin_instansi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `requested_at` datetime NOT NULL,
  `verified_at` datetime DEFAULT NULL,
  `data` varchar(800) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `researches`
--

CREATE TABLE `researches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstrak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `researches`
--

INSERT INTO `researches` (`id`, `created_at`, `updated_at`, `user_id`, `judul`, `abstrak`, `kategori`, `file_path`) VALUES
(1, '2019-07-29 23:10:32', '2019-07-29 23:10:32', 53, 'Lorem', 'f', 'Kota cerdas,Kota cerdas', 'research/zqQOXid7cK7A9RbEH1lV6WDYUM3qJZmzQ0Bl2cLL.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

-- CREATE TABLE `universities` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `kode_pt` int(11) NOT NULL,
--   `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   `instansi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `views` int(11) NOT NULL DEFAULT 0,
--   `provinsi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   `kategori` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
--   `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

-- INSERT INTO `universities` (`id`, `kode_pt`, `logo`, `instansi`, `views`, `provinsi`, `kategori`, `status`) VALUES
-- (1, 103157, NULL, 'Sekolah Tinggi Ilmu Kesehatan Keluarga Bunda Jambi', 0, 'Prop. Jambi', 'Swasta', 'Aktif'),
-- (2, 1001, NULL, 'Universitas Gadjah Mada', 0, 'Prop. D.I. Yogyakarta', 'Negeri', 'Aktif'),
-- (3, 1002, NULL, 'Universitas Indonesia', 0, 'Prop. D.K.I. Jakarta', 'Negeri', 'Aktif'),


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `peran` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otoritas` int(11) NOT NULL DEFAULT 4,
  `views` int(11) NOT NULL DEFAULT 0,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone_number`, `instansi_id`, `peran`, `otoritas`, `views`, `profile_picture`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Wafi', 'Wafi', '081231880402', 66, '1', 4, 0, NULL, 'wafiroyyan@gmail.com', NULL, '$2y$10$0CXzfU9J.bt4Je0N8QK64eREOtQ0L3OrCJXe6bpk2Fz7NiRL5T.ru', NULL, '2019-06-24 18:48:44', '2019-06-24 18:48:44'),
(4, 'Achmad Basuki', 'abazh', '+628123074522', 1863, '2', 4, 0, NULL, 'abazh@ub.ac.id', NULL, '$2y$10$tJiF9FLgqCX0dGD1keUC9u5OPtCBhFEnRS2TSTMKtW36ewrury2km', NULL, '2019-06-24 18:55:58', '2019-06-24 18:55:58'),
(5, 'M Adhi Prasnowo', 'prasnowoadhi', '081233893531', 2250, '2', 4, 0, NULL, 'prasnowoadhi@dosen.umaha.ac.id', NULL, '$2y$10$li/lqABhbwFZfh4b37iSDuMmIjfjswGSPqgNrqoZf0YMycrpDvETG', NULL, '2019-06-24 19:05:00', '2019-06-24 19:05:00'),
(6, 'Adam Mukharil Bachtiar', 'adambachtiar', '081318920636', 1138, '2', 4, 0, NULL, 'adam@email.unikom.ac.id', NULL, '$2y$10$L.w5rFp4ovlYtF1DXfIyve6nFIo/JX/.8HRm5Y2gPB/xaHRhc6c6e', NULL, '2019-06-24 19:28:09', '2019-06-24 19:28:09'),
(7, 'anang tjahjono', 'anang', '0811370853', 97, '2', 4, 0, NULL, 'anang.tj@pens.ac.id', NULL, '$2y$10$PRu6v5r9Mt2A7PU5SHQSRuuZdJ3vnHQ7NLicCVECuXGEio7yUQR0O', NULL, '2019-06-24 19:37:22', '2019-06-24 19:37:22'),
(8, 'Erwin Putera Permana', 'erwinpp', '082131069500', 2236, '2', 4, 0, NULL, 'erwinp@unpkediri.ac.id', NULL, '$2y$10$QtUixEgpR8jP3asRs0fXjeuDlr0t7QccJsxh5mbXbAW.WDpoodNTO', NULL, '2019-06-24 19:38:45', '2019-06-24 19:38:45'),
(9, 'Herman Yuliandoko', 'Herman.Yuliandoko', '081334436478', 114, '2', 4, 0, NULL, 'herman.yuliandoko@poliwangi.ac.id', NULL, '$2y$10$neya9qOIUGm2xbafLwnlo.zAtq/wq.Trj/xPExy.h3r4vMY5RwM2K', NULL, '2019-06-24 19:53:40', '2019-06-24 19:53:40'),
(10, 'purnomo setyo', 'setyo', '08179562951', 9, '2', 4, 0, NULL, 'setyo@live.undip.ac.id', NULL, '$2y$10$ItEWcDc1yhZ2pDrXThifZ.E//uETzimer2gfjP8I8pIYMh4VOFMxO', NULL, '2019-06-24 20:06:08', '2019-06-24 20:06:08'),
(11, 'Khairul Anam', 'khairul@unej.ac.id', '082245500024', 26, '2', 4, 0, NULL, 'khairul@unej.ac.id', NULL, '$2y$10$2XDl29GlZha3d.SopLORv.d8M4PjpJom4qYp8Pw60bv9/O4.RD4IK', NULL, '2019-06-24 21:33:12', '2019-06-24 21:33:12'),
(12, 'Sandha Soemantri', 'Sandha', '085645031966', 2178, '2', 4, 0, NULL, 'sandha.pendmat@fkip.um-surabaya.ac.id', NULL, '$2y$10$0RXl2AN4qWL.sSmtbMIDteLAsRZ8SqvTuJIyDgM1HpuYo3SnLff6G', NULL, '2019-06-25 00:08:15', '2019-06-25 00:08:15'),
(13, 'endah hendarwati', 'endah', '087834905532', 2178, '2', 4, 0, NULL, 'endah.hendarwati@fkip.um-surabaya.ac.id', NULL, '$2y$10$SUpspv7fMtBfP3vXBhEl0.spvWaEsrnmuR8hqWt5zK3aioNx9Sbeu', NULL, '2019-06-25 00:13:09', '2019-06-25 00:13:09'),
(14, 'hendra setiawan', 'hendra_setiawan', '085723568868', 1682, '2', 4, 0, NULL, 'hendra.setiawan@uii.ac.id', NULL, '$2y$10$JxaPJL.E.Ga9RkAAqe3BiuNZLPjgUz/bSv8e/V4tEZDdEEI/6y2TO', NULL, '2019-06-25 00:17:04', '2019-06-25 00:17:04'),
(15, 'widi aribowo', 'w1ed1e2', '0811307761', 40, '2', 4, 0, NULL, 'widiaribowo@unesa.ac.id', NULL, '$2y$10$KJ5PPhJLYYkp7xKNLaEcKu2f8mXPF8H.iJ7HkA/IQa2MTA7PuAyxC', NULL, '2019-06-25 05:24:11', '2019-06-25 05:24:11'),
(16, 'Purwanto', 'wants', '081249218114', 2267, '1', 4, 0, NULL, 'pwt9478@gmail.com', NULL, '$2y$10$ESxgTrOFWmzCcVSnE1bEDe6QeEWkrh5XX1FiEiwFoW6o7RzLjLs32', NULL, '2019-06-25 22:14:08', '2019-06-25 22:14:08'),
(17, 'Renta Dwi Ardhana MBA', 'kangmasrenta', '+6285292187000', 762, '2', 4, 0, NULL, 'rentadwiardhana@gmail.com', NULL, '$2y$10$hTAhhIb/qbs62sEz1WhVUO4J./ISBSxZktrHvirzulIFXDTh5.5x2', NULL, '2019-06-26 08:41:27', '2019-06-26 08:41:27'),
(18, 'Edy Kurniawan', 'kurniawardana@gmail.com', '08125952084', 2209, '2', 4, 0, NULL, 'kurniawardana@gmail.com', NULL, '$2y$10$IfpwAr9/F4J8VLhYgJEDxeuxJ.joaoRE4/rkWnQl//hOADSJOFDOG', NULL, '2019-06-26 20:32:14', '2019-06-26 20:32:14'),
(19, 'sukardi', 'sukardioto', '082348671344', 25, '2', 4, 0, NULL, 'sukardioto@gmail.com', NULL, '$2y$10$jAhVajFcKLcR52mVU.EGFuO1UOyjBLRXMnaXYD9Yz2.r1r2FPH.bK', NULL, '2019-06-26 20:42:09', '2019-06-26 20:42:09'),
(20, 'lisda fitriana masitoh', 'lisda', '081386076052', 1144, '2', 4, 0, NULL, 'lisda.masitoh@gmail.com', NULL, '$2y$10$6zwzJNhWvXAGG/WmW1jRXuU7IxoLAIo9ujfHZ6usPEf4r6nIyLS/S', NULL, '2019-06-27 05:38:04', '2019-06-27 05:38:04'),
(21, 'STEFANUS ENGGAR P', 'stefanus.enggar', '081234000872', 1168, '3', 4, 0, NULL, 'stefanus_enggar@telkom.co.id', NULL, '$2y$10$9ED2QXVc79vI9r3ag9IopetI3tE3Ck73bzKnzpZ6JyF0Ipo5aVOZC', NULL, '2019-06-27 21:14:03', '2019-06-27 21:14:03'),
(22, 'SUKIRNO', 'sukirno1', '081215312000', 39, '2', 4, 0, NULL, 'sukirno@uny.ac.id', NULL, '$2y$10$Re57XObmlis04RC0sIur.e/1Ncn5q3I10mvNS1NdqMmm3u9Gz.Toy', NULL, '2019-06-29 19:34:00', '2019-06-29 19:34:00'),
(23, 'Tri Rochmadi', 'treesaro', '082136953088', 1700, '2', 4, 0, NULL, 'trirochmadi@almaata.ac.id', NULL, '$2y$10$KpqO99fD6juFKRizlz84ne6mupzNNHgaXT.jy5s4X686Rk5y8mD0S', NULL, '2019-06-30 02:46:29', '2019-06-30 02:46:29'),
(24, 'yamato', 'yamato', '08128469870', 769, '2', 4, 0, NULL, 'ymt010@yahoo.co.id', NULL, '$2y$10$mzJHSxu2RFn6xvNwJaJh3.kzk992ATZT07sPIQXScLqJ78CNpcvh2', NULL, '2019-07-01 22:14:56', '2019-07-01 22:14:56'),
(25, 'Fransiskus Xaverius Manggau', 'manggau', '0811484477', 52, '1', 4, 0, NULL, 'fransiskus@unmus.ac.id', NULL, '$2y$10$1psd/e6ALbv/OCgAUlUgCOm.pSaSKffc7tvzkuT4oPRDWii/lga1O', NULL, '2019-07-02 04:56:10', '2019-07-02 04:56:10'),
(26, 'Ganjar Setyo Widodo', 'ganjar0904', '085649660414', 2192, '2', 4, 0, NULL, 'ganjarsetyow@unisma.ac.id', NULL, '$2y$10$wQkzVh0MbIwGuZRumXXzjOn2pPdlmP0Vkg0APi60lgwM4ZvY3EduO', NULL, '2019-07-02 17:27:35', '2019-07-02 17:27:35'),
(27, 'Ubaid Al Faruq', 'Ubaid', '081329989829', 1144, '2', 4, 0, NULL, 'ubaidalfaruq@unpam.ac.id', NULL, '$2y$10$P6fiX5oz4Leq8pHpQlotQ.fFXYQzMnwPUgcuDUZfGrjj.LJ38QgEW', NULL, '2019-07-02 20:00:02', '2019-07-02 20:00:02'),
(28, 'Yosafat Lambang Prasetyadi', 'yosafatlp', '085645565039', 3, '1', 4, 0, NULL, 'yosafat.lambang@ui.ac.id', NULL, '$2y$10$t8tsoUNAi.bd/MrJcZf7LuLU7h17k/gKn/fKE1Ms5hj7WpdnRQDvu', NULL, '2019-07-03 07:57:07', '2019-07-03 07:57:07'),
(29, 'Gilang Primayoga', 'aa_gil', '081230328946', 2255, '3', 4, 0, NULL, 'gilang@unipma.ac.id', NULL, '$2y$10$a/wq78.YW.xMJGO8Uy0y3OyFCFoeQGzoX11BZ2qsP.MnyoiMtq77O', NULL, '2019-07-03 20:40:48', '2019-07-03 20:40:48'),
(30, 'Sigit Adinugroho', 'sigitadinu', '08888888888', 20, '2', 4, 0, NULL, 'sigit.adinu@ub.ac.id', NULL, '$2y$10$8j3ZNoUHEiw56lXVUYNLSe1ejhPWKsGJ4fK3R1MQ8MuAr/NXF.d5q', NULL, '2019-07-04 19:41:37', '2019-07-04 19:41:37'),
(31, 'Rohmat Sarman', 'rsarman', '081285315986', 1120, '2', 4, 0, NULL, 'rohmatsarman@unpas.ac.id', NULL, '$2y$10$wjHSVkFSxCC3ZJyi43jemuPtjSCRAEj/YxSiA2doneYPMPIs4zC9e', NULL, '2019-07-05 18:37:32', '2019-07-05 18:37:32'),
(32, 'Utik Bidayati', 'UtikE', '08175421993', 1693, '2', 4, 0, NULL, 'utik.bidayati@mgm.uad.ac.id', NULL, '$2y$10$.thotlSr6qOUE4gM67VudeLSKOpVLeXDBj44hq8sb56a5D10IM60S', NULL, '2019-07-06 17:24:41', '2019-07-06 17:24:41'),
(33, 'Ivan', 'Weismann', '085397648667', 2838, '2', 4, 0, NULL, 'ivanweismann@yahoo.com', NULL, '$2y$10$JME47/Nz8UgxaWt0K6JkYO31xbiMCAKOtxwHf3EbnsZzXK/hraVVG', NULL, '2019-07-07 23:57:25', '2019-07-07 23:57:25'),
(34, 'Aza raissa', 'Aza123', '081373191902', 3, '1', 4, 0, NULL, 'kolbighosa2@gmail.com', NULL, '$2y$10$sFRfx2HjXxhJeYGdGHaNU.A6TmflEBqa5wx3KAbAFX8KLPcgjH.rm', NULL, '2019-07-08 06:13:40', '2019-07-08 06:13:40'),
(35, 'Shafwan', 'Shafwan', '087886906218', 1, '3', 4, 0, NULL, 'aerith31904@gmail.com', NULL, '$2y$10$tHf0rwfpcnMk915YDQKDBOdfYz93hbf4ctyyV/VM9/CsK1aHbApIi', NULL, '2019-07-08 06:57:43', '2019-07-08 06:57:43'),
(36, 'Elin Panca Saputra', 'panca', '085776996462', 766, '2', 4, 0, NULL, 'elinpancasaputra@gmail.com', NULL, '$2y$10$3MlqpigT63qODi3y7AkxY.pHJfHdMfLTAckHAXJDtr7.7CG5ICgEy', NULL, '2019-07-08 20:29:46', '2019-07-08 20:29:46'),
(37, 'Puguh Wahyu Prasetyo', 'puguh.prasetyo@pmat.uad.ac.id', '08562911051', 1693, '2', 4, 0, NULL, 'puguh.prasetyo@pmat.uad.ac.id', NULL, '$2y$10$v/aX44kvOaaMj3DadA20DeDkbeilx9zKtXQgyGdRssw2st60g89MC', NULL, '2019-07-10 04:51:22', '2019-07-10 04:51:22'),
(38, 'Rezagi Meilano', 'Meilano19', '085382674426', 3471, '2', 4, 0, NULL, 'rezagimeilano7@gmail.com', NULL, '$2y$10$iolDMtajZgBx5pMwfMAoguNKH4A9CxMSnmPoXRPHTCv3DHckUYGUy', NULL, '2019-07-11 19:45:16', '2019-07-11 19:45:16'),
(39, 'fachreza abdul ghifari', 'fachreza', '088210286332', 38, '1', 4, 0, NULL, 'fabdulghifari40@gmail.com', NULL, '$2y$10$as8kDRNVNSqcUHNRe/XlKuXvAe15FzkOlwPzVN0w4sG.0nMy5kZNy', NULL, '2019-07-12 00:55:18', '2019-07-12 00:55:18'),
(40, 'Sudrajat Harris Abdulloh', 'harrisabdulloh', '085795200067', 83, '2', 4, 0, NULL, 'harris.abdulloh@polban.ac.id', NULL, '$2y$10$6FFw2M7FA.hSgjW7v9hgD.JPRZR6rU0dmZG8I5AVn7ObqOR73ALNK', NULL, '2019-07-12 02:15:03', '2019-07-12 02:15:03'),
(41, 'Supriyanto', 'Supriyanto', '08998960864', 1320, '2', 4, 0, NULL, 'supriyanto_stie@yahoo.com', NULL, '$2y$10$uiNrjFINIcOrvUOOjPItt.LvdWckcmFfLaxqrq.U5/hCCNS4sgn1O', NULL, '2019-07-12 21:01:00', '2019-07-12 21:01:00'),
(42, 'Harsono', 'harsono', '085643699779', 5295, '3', 4, 0, NULL, 'harsono@poltekkesjogja.ac.id', NULL, '$2y$10$bCrXe3PYV3Zl.2G94/00Ke8sqKim9y7BHddd2/HV.EYD1TYhtUe/e', NULL, '2019-07-15 00:39:25', '2019-07-15 00:39:25'),
(43, 'YANI PUSPITASARI', 'PIPIT', '083869988333', 5295, '3', 4, 0, NULL, 'yanie.pipit@gmail.com', NULL, '$2y$10$r7jL5sLF42hOgBIke8D4be8DmdPAC1Xt1wQuvaguPNLe5OCCNr5oq', NULL, '2019-07-15 00:40:37', '2019-07-15 00:40:37'),
(44, 'isram', '095009', '081242241667', 3169, '2', 4, 0, NULL, 'isramlana@gmail.com', NULL, '$2y$10$YsMEjSrbhOBOYRNiPGAWV.6JDRXXJo/dVFMjQHM5Zis7YAfAJm5Gq', NULL, '2019-07-15 08:40:27', '2019-07-15 08:40:27'),
(45, 'Agus Trimanto', 'agustrimanto', '082322421400', 2086, '3', 4, 0, NULL, 'agustrimanto2@gmail.com', NULL, '$2y$10$gjACv.r8DmLB48TySoTwl.fn/Dtf4MmB7.VNPFZMhKvdQV6yjAfq.', NULL, '2019-07-15 14:44:58', '2019-07-15 14:44:58'),
(46, 'Ika Agustina', 'Ika0308', '087729473507', 1074, '2', 4, 0, NULL, 'ikaagustina@ikifa.ac', NULL, '$2y$10$qfLvOM050t072sWvKd8jveXoXOmsLvQEC.//e87Z0glBzOR.rlq16', NULL, '2019-07-15 19:34:11', '2019-07-15 19:34:11'),
(47, 'Endang Djuana', 'edjuana', '02156632328428', 720, '2', 4, 0, NULL, 'edjuana@trisakti.ac.id', NULL, '$2y$10$oOeev2gXWIHaqld6Okxfh.KPYc2fWVSseeNepn8eR1WJspbHTVcMC', NULL, '2019-07-18 01:27:18', '2019-07-18 01:27:18'),
(48, 'Diah Asta Putri', 'diah.asta', '+6281393818141', 1693, '2', 4, 0, NULL, 'diah.putri@bio.uad.ac.id', NULL, '$2y$10$I./qBR.0F3RWfK2ghXrAKe60nT26LXbc/.zmrtuEvXVKKfRdbRrNC', NULL, '2019-07-18 02:15:04', '2019-07-18 02:15:04'),
(49, 'Ahmad Rio Adriansyah', 'Arasy', '081573954126', 1447, '2', 4, 0, NULL, 'arasy@nurulfikri.ac.id', NULL, '$2y$10$c6rTY8gTyZ9L425U/I9eYuQ/LA04pmIy/R2EIXWCRh9sf7UJTVd1.', NULL, '2019-07-18 02:42:53', '2019-07-18 02:42:53'),
(50, 'Andi nur bau massepe', 'massepe', '08114103334', 6, '2', 4, 0, NULL, 'massepe@gmail.com', NULL, '$2y$10$2IyeiYFvDZeZu5HdD8XZ2.1jpAZRLKH5KBIpnvtZ69yxGXe9YRntq', NULL, '2019-07-18 19:55:55', '2019-07-18 19:55:55'),
(51, 'Julius', 'juliuschai', '089604058768', 66, '1', 4, 0, NULL, 'juliustjai20@gmail.com', NULL, '$2y$10$KaR4vQR5G9CjOJnjUC.rcux.kmrpBnjIKBkJ26MsB7yo1NnL94UQm', NULL, '2019-07-19 21:15:56', '2019-07-23 01:21:31'),
(52, NULL, 'testUser', NULL, NULL, '4', 4, 0, NULL, 'testUser@testUser.com', NULL, '$2y$10$BxH/cwU5pystGPyny9En/e0a2iOnj95mND1xB2qHiENNiJbzeM5ku', NULL, '2019-07-24 20:11:04', '2019-07-24 20:11:04'),
(53, 'Julius', 'testUser2', '89604058768', 66, '4', 4, 34, 'g60U32msaYkfo5VRfhvmz5pUjgZrEJ8cP2HhOUOP.jpeg', 'testUser2@testUser2.com', NULL, '$2y$10$Yr6tv8KAJps5XW5bPJTWK.C8pNa8zFqDgxUhmW3goZxuvcLFZkn02', NULL, '2019-07-24 20:11:54', '2019-09-27 17:32:37'),
(54, 'Zhafran', 'franszhafran', '081319197413', 3445, '1', 4, 0, 'h476KfZmnGqKj2dIg2LB8QhjziJzAwoRCGJuQqcS.png', 'frans.zhafran@gmail.com', NULL, '$2y$10$Q21ZrL6AFsvFHnsdwT83uuNgoUxj/A9cCvYpxpknJzlwhp3wwVPdu', NULL, '2019-11-09 02:05:36', '2019-11-09 20:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `kategori` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `user_id`, `judul`, `desc`, `views`, `kategori`, `thumbnail`, `file_path`, `created_at`, `updated_at`) VALUES
(6, 53, 'Test 2', 'test2deascwasdwadasdwads', 108, 'IoT, Jaringan, Lorem, kategori custom1, kat 2, kat tiga', '', 'xB6KM7PhSUfVa7FrtGxbglSVII2iHlQZ53UngsLj.mp4', '2019-08-07 21:24:14', '2019-09-27 17:32:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_video_id_foreign` (`video_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `koneksis`
--
ALTER TABLE `koneksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `koneksis_user_id_foreign` (`user_id`);

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
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `playlists_user_id_foreign` (`user_id`);

--
-- Indexes for table `playlist_videos`
--
ALTER TABLE `playlist_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `playlist_videos_playlist_id_foreign` (`playlist_id`);

--
-- Indexes for table `request_admin_instansi`
--
ALTER TABLE `request_admin_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researches`
--
ALTER TABLE `researches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `researches_user_id_foreign` (`user_id`);

--
-- Indexes for table `universities`
--
-- ALTER TABLE `universities`
--   ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_instansi_foreign` (`instansi_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `koneksis`
--
ALTER TABLE `koneksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `playlist_videos`
--
ALTER TABLE `playlist_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_admin_instansi`
--
ALTER TABLE `request_admin_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `researches`
--
ALTER TABLE `researches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `universities`
--
-- ALTER TABLE `universities`
--   MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5388;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koneksis`
--
ALTER TABLE `koneksis`
  ADD CONSTRAINT `koneksis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `playlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `playlist_videos`
--
ALTER TABLE `playlist_videos`
  ADD CONSTRAINT `playlist_videos_playlist_id_foreign` FOREIGN KEY (`playlist_id`) REFERENCES `playlists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `researches`
--
ALTER TABLE `researches`
  ADD CONSTRAINT `researches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_instansi_foreign` FOREIGN KEY (`instansi_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
