-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2019 at 12:53 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.3.6

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
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `peran` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `phone_number`, `instansi_id`, `peran`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Wafi', 'Wafi', '081231880402', 66, '1', 'wafiroyyan@gmail.com', NULL, '$2y$10$0CXzfU9J.bt4Je0N8QK64eREOtQ0L3OrCJXe6bpk2Fz7NiRL5T.ru', NULL, '2019-06-24 18:48:44', '2019-06-24 18:48:44'),
(4, 'Achmad Basuki', 'abazh', '+628123074522', 1863, '2', 'abazh@ub.ac.id', NULL, '$2y$10$tJiF9FLgqCX0dGD1keUC9u5OPtCBhFEnRS2TSTMKtW36ewrury2km', NULL, '2019-06-24 18:55:58', '2019-06-24 18:55:58'),
(5, 'M Adhi Prasnowo', 'prasnowoadhi', '081233893531', 2250, '2', 'prasnowoadhi@dosen.umaha.ac.id', NULL, '$2y$10$li/lqABhbwFZfh4b37iSDuMmIjfjswGSPqgNrqoZf0YMycrpDvETG', NULL, '2019-06-24 19:05:00', '2019-06-24 19:05:00'),
(6, 'Adam Mukharil Bachtiar', 'adambachtiar', '081318920636', 1138, '2', 'adam@email.unikom.ac.id', NULL, '$2y$10$L.w5rFp4ovlYtF1DXfIyve6nFIo/JX/.8HRm5Y2gPB/xaHRhc6c6e', NULL, '2019-06-24 19:28:09', '2019-06-24 19:28:09'),
(7, 'anang tjahjono', 'anang', '0811370853', 97, '2', 'anang.tj@pens.ac.id', NULL, '$2y$10$PRu6v5r9Mt2A7PU5SHQSRuuZdJ3vnHQ7NLicCVECuXGEio7yUQR0O', NULL, '2019-06-24 19:37:22', '2019-06-24 19:37:22'),
(8, 'Erwin Putera Permana', 'erwinpp', '082131069500', 2236, '2', 'erwinp@unpkediri.ac.id', NULL, '$2y$10$QtUixEgpR8jP3asRs0fXjeuDlr0t7QccJsxh5mbXbAW.WDpoodNTO', NULL, '2019-06-24 19:38:45', '2019-06-24 19:38:45'),
(9, 'Herman Yuliandoko', 'Herman.Yuliandoko', '081334436478', 114, '2', 'herman.yuliandoko@poliwangi.ac.id', NULL, '$2y$10$neya9qOIUGm2xbafLwnlo.zAtq/wq.Trj/xPExy.h3r4vMY5RwM2K', NULL, '2019-06-24 19:53:40', '2019-06-24 19:53:40'),
(10, 'purnomo setyo', 'setyo', '08179562951', 9, '2', 'setyo@live.undip.ac.id', NULL, '$2y$10$ItEWcDc1yhZ2pDrXThifZ.E//uETzimer2gfjP8I8pIYMh4VOFMxO', NULL, '2019-06-24 20:06:08', '2019-06-24 20:06:08'),
(11, 'Khairul Anam', 'khairul@unej.ac.id', '082245500024', 26, '2', 'khairul@unej.ac.id', NULL, '$2y$10$2XDl29GlZha3d.SopLORv.d8M4PjpJom4qYp8Pw60bv9/O4.RD4IK', NULL, '2019-06-24 21:33:12', '2019-06-24 21:33:12'),
(12, 'Sandha Soemantri', 'Sandha', '085645031966', 2178, '2', 'sandha.pendmat@fkip.um-surabaya.ac.id', NULL, '$2y$10$0RXl2AN4qWL.sSmtbMIDteLAsRZ8SqvTuJIyDgM1HpuYo3SnLff6G', NULL, '2019-06-25 00:08:15', '2019-06-25 00:08:15'),
(13, 'endah hendarwati', 'endah', '087834905532', 2178, '2', 'endah.hendarwati@fkip.um-surabaya.ac.id', NULL, '$2y$10$SUpspv7fMtBfP3vXBhEl0.spvWaEsrnmuR8hqWt5zK3aioNx9Sbeu', NULL, '2019-06-25 00:13:09', '2019-06-25 00:13:09'),
(14, 'hendra setiawan', 'hendra_setiawan', '085723568868', 1682, '2', 'hendra.setiawan@uii.ac.id', NULL, '$2y$10$JxaPJL.E.Ga9RkAAqe3BiuNZLPjgUz/bSv8e/V4tEZDdEEI/6y2TO', NULL, '2019-06-25 00:17:04', '2019-06-25 00:17:04'),
(15, 'widi aribowo', 'w1ed1e2', '0811307761', 40, '2', 'widiaribowo@unesa.ac.id', NULL, '$2y$10$KJ5PPhJLYYkp7xKNLaEcKu2f8mXPF8H.iJ7HkA/IQa2MTA7PuAyxC', NULL, '2019-06-25 05:24:11', '2019-06-25 05:24:11'),
(16, 'Purwanto', 'wants', '081249218114', 2267, '1', 'pwt9478@gmail.com', NULL, '$2y$10$ESxgTrOFWmzCcVSnE1bEDe6QeEWkrh5XX1FiEiwFoW6o7RzLjLs32', NULL, '2019-06-25 22:14:08', '2019-06-25 22:14:08'),
(17, 'Renta Dwi Ardhana MBA', 'kangmasrenta', '+6285292187000', 762, '2', 'rentadwiardhana@gmail.com', NULL, '$2y$10$hTAhhIb/qbs62sEz1WhVUO4J./ISBSxZktrHvirzulIFXDTh5.5x2', NULL, '2019-06-26 08:41:27', '2019-06-26 08:41:27'),
(18, 'Edy Kurniawan', 'kurniawardana@gmail.com', '08125952084', 2209, '2', 'kurniawardana@gmail.com', NULL, '$2y$10$IfpwAr9/F4J8VLhYgJEDxeuxJ.joaoRE4/rkWnQl//hOADSJOFDOG', NULL, '2019-06-26 20:32:14', '2019-06-26 20:32:14'),
(19, 'sukardi', 'sukardioto', '082348671344', 25, '2', 'sukardioto@gmail.com', NULL, '$2y$10$jAhVajFcKLcR52mVU.EGFuO1UOyjBLRXMnaXYD9Yz2.r1r2FPH.bK', NULL, '2019-06-26 20:42:09', '2019-06-26 20:42:09'),
(20, 'lisda fitriana masitoh', 'lisda', '081386076052', 1144, '2', 'lisda.masitoh@gmail.com', NULL, '$2y$10$6zwzJNhWvXAGG/WmW1jRXuU7IxoLAIo9ujfHZ6usPEf4r6nIyLS/S', NULL, '2019-06-27 05:38:04', '2019-06-27 05:38:04'),
(21, 'STEFANUS ENGGAR P', 'stefanus.enggar', '081234000872', 1168, '3', 'stefanus_enggar@telkom.co.id', NULL, '$2y$10$9ED2QXVc79vI9r3ag9IopetI3tE3Ck73bzKnzpZ6JyF0Ipo5aVOZC', NULL, '2019-06-27 21:14:03', '2019-06-27 21:14:03'),
(22, 'SUKIRNO', 'sukirno1', '081215312000', 39, '2', 'sukirno@uny.ac.id', NULL, '$2y$10$Re57XObmlis04RC0sIur.e/1Ncn5q3I10mvNS1NdqMmm3u9Gz.Toy', NULL, '2019-06-29 19:34:00', '2019-06-29 19:34:00'),
(23, 'Tri Rochmadi', 'treesaro', '082136953088', 1700, '2', 'trirochmadi@almaata.ac.id', NULL, '$2y$10$KpqO99fD6juFKRizlz84ne6mupzNNHgaXT.jy5s4X686Rk5y8mD0S', NULL, '2019-06-30 02:46:29', '2019-06-30 02:46:29'),
(24, 'yamato', 'yamato', '08128469870', 769, '2', 'ymt010@yahoo.co.id', NULL, '$2y$10$mzJHSxu2RFn6xvNwJaJh3.kzk992ATZT07sPIQXScLqJ78CNpcvh2', NULL, '2019-07-01 22:14:56', '2019-07-01 22:14:56'),
(25, 'Fransiskus Xaverius Manggau', 'manggau', '0811484477', 52, '2', 'fransiskus@unmus.ac.id', NULL, '$2y$10$1psd/e6ALbv/OCgAUlUgCOm.pSaSKffc7tvzkuT4oPRDWii/lga1O', NULL, '2019-07-02 04:56:10', '2019-07-02 04:56:10'),
(26, 'Ganjar Setyo Widodo', 'ganjar0904', '085649660414', 2192, '2', 'ganjarsetyow@unisma.ac.id', NULL, '$2y$10$wQkzVh0MbIwGuZRumXXzjOn2pPdlmP0Vkg0APi60lgwM4ZvY3EduO', NULL, '2019-07-02 17:27:35', '2019-07-02 17:27:35'),
(27, 'Ubaid Al Faruq', 'Ubaid', '081329989829', 1144, '2', 'ubaidalfaruq@unpam.ac.id', NULL, '$2y$10$P6fiX5oz4Leq8pHpQlotQ.fFXYQzMnwPUgcuDUZfGrjj.LJ38QgEW', NULL, '2019-07-02 20:00:02', '2019-07-02 20:00:02'),
(28, 'Yosafat Lambang Prasetyadi', 'yosafatlp', '085645565039', 3, '1', 'yosafat.lambang@ui.ac.id', NULL, '$2y$10$t8tsoUNAi.bd/MrJcZf7LuLU7h17k/gKn/fKE1Ms5hj7WpdnRQDvu', NULL, '2019-07-03 07:57:07', '2019-07-03 07:57:07'),
(29, 'Gilang Primayoga', 'aa_gil', '081230328946', 2255, '3', 'gilang@unipma.ac.id', NULL, '$2y$10$a/wq78.YW.xMJGO8Uy0y3OyFCFoeQGzoX11BZ2qsP.MnyoiMtq77O', NULL, '2019-07-03 20:40:48', '2019-07-03 20:40:48'),
(30, 'Sigit Adinugroho', 'sigitadinu', '08888888888', 20, '2', 'sigit.adinu@ub.ac.id', NULL, '$2y$10$8j3ZNoUHEiw56lXVUYNLSe1ejhPWKsGJ4fK3R1MQ8MuAr/NXF.d5q', NULL, '2019-07-04 19:41:37', '2019-07-04 19:41:37'),
(31, 'Rohmat Sarman', 'rsarman', '081285315986', 1120, '2', 'rohmatsarman@unpas.ac.id', NULL, '$2y$10$wjHSVkFSxCC3ZJyi43jemuPtjSCRAEj/YxSiA2doneYPMPIs4zC9e', NULL, '2019-07-05 18:37:32', '2019-07-05 18:37:32'),
(32, 'Utik Bidayati', 'UtikE', '08175421993', 1693, '2', 'utik.bidayati@mgm.uad.ac.id', NULL, '$2y$10$.thotlSr6qOUE4gM67VudeLSKOpVLeXDBj44hq8sb56a5D10IM60S', NULL, '2019-07-06 17:24:41', '2019-07-06 17:24:41'),
(33, 'Ivan', 'Weismann', '085397648667', 2838, '2', 'ivanweismann@yahoo.com', NULL, '$2y$10$JME47/Nz8UgxaWt0K6JkYO31xbiMCAKOtxwHf3EbnsZzXK/hraVVG', NULL, '2019-07-07 23:57:25', '2019-07-07 23:57:25'),
(34, 'Aza raissa', 'Aza123', '081373191902', 3, '1', 'kolbighosa2@gmail.com', NULL, '$2y$10$sFRfx2HjXxhJeYGdGHaNU.A6TmflEBqa5wx3KAbAFX8KLPcgjH.rm', NULL, '2019-07-08 06:13:40', '2019-07-08 06:13:40'),
(35, 'Shafwan', 'Shafwan', '087886906218', 1, '3', 'aerith31904@gmail.com', NULL, '$2y$10$tHf0rwfpcnMk915YDQKDBOdfYz93hbf4ctyyV/VM9/CsK1aHbApIi', NULL, '2019-07-08 06:57:43', '2019-07-08 06:57:43'),
(36, 'Elin Panca Saputra', 'panca', '085776996462', 766, '2', 'elinpancasaputra@gmail.com', NULL, '$2y$10$3MlqpigT63qODi3y7AkxY.pHJfHdMfLTAckHAXJDtr7.7CG5ICgEy', NULL, '2019-07-08 20:29:46', '2019-07-08 20:29:46'),
(37, 'Puguh Wahyu Prasetyo', 'puguh.prasetyo@pmat.uad.ac.id', '08562911051', 1693, '2', 'puguh.prasetyo@pmat.uad.ac.id', NULL, '$2y$10$v/aX44kvOaaMj3DadA20DeDkbeilx9zKtXQgyGdRssw2st60g89MC', NULL, '2019-07-10 04:51:22', '2019-07-10 04:51:22'),
(38, 'Rezagi Meilano', 'Meilano19', '085382674426', 3471, '2', 'rezagimeilano7@gmail.com', NULL, '$2y$10$iolDMtajZgBx5pMwfMAoguNKH4A9CxMSnmPoXRPHTCv3DHckUYGUy', NULL, '2019-07-11 19:45:16', '2019-07-11 19:45:16'),
(39, 'fachreza abdul ghifari', 'fachreza', '088210286332', 38, '1', 'fabdulghifari40@gmail.com', NULL, '$2y$10$as8kDRNVNSqcUHNRe/XlKuXvAe15FzkOlwPzVN0w4sG.0nMy5kZNy', NULL, '2019-07-12 00:55:18', '2019-07-12 00:55:18'),
(40, 'Sudrajat Harris Abdulloh', 'harrisabdulloh', '085795200067', 83, '2', 'harris.abdulloh@polban.ac.id', NULL, '$2y$10$6FFw2M7FA.hSgjW7v9hgD.JPRZR6rU0dmZG8I5AVn7ObqOR73ALNK', NULL, '2019-07-12 02:15:03', '2019-07-12 02:15:03'),
(41, 'Supriyanto', 'Supriyanto', '08998960864', 1320, '2', 'supriyanto_stie@yahoo.com', NULL, '$2y$10$uiNrjFINIcOrvUOOjPItt.LvdWckcmFfLaxqrq.U5/hCCNS4sgn1O', NULL, '2019-07-12 21:01:00', '2019-07-12 21:01:00'),
(42, 'Harsono', 'harsono', '085643699779', 5295, '3', 'harsono@poltekkesjogja.ac.id', NULL, '$2y$10$bCrXe3PYV3Zl.2G94/00Ke8sqKim9y7BHddd2/HV.EYD1TYhtUe/e', NULL, '2019-07-15 00:39:25', '2019-07-15 00:39:25'),
(43, 'YANI PUSPITASARI', 'PIPIT', '083869988333', 5295, '3', 'yanie.pipit@gmail.com', NULL, '$2y$10$r7jL5sLF42hOgBIke8D4be8DmdPAC1Xt1wQuvaguPNLe5OCCNr5oq', NULL, '2019-07-15 00:40:37', '2019-07-15 00:40:37'),
(44, 'isram', '095009', '081242241667', 3169, '2', 'isramlana@gmail.com', NULL, '$2y$10$YsMEjSrbhOBOYRNiPGAWV.6JDRXXJo/dVFMjQHM5Zis7YAfAJm5Gq', NULL, '2019-07-15 08:40:27', '2019-07-15 08:40:27'),
(45, 'Agus Trimanto', 'agustrimanto', '082322421400', 2086, '3', 'agustrimanto2@gmail.com', NULL, '$2y$10$gjACv.r8DmLB48TySoTwl.fn/Dtf4MmB7.VNPFZMhKvdQV6yjAfq.', NULL, '2019-07-15 14:44:58', '2019-07-15 14:44:58'),
(46, 'Ika Agustina', 'Ika0308', '087729473507', 1074, '2', 'ikaagustina@ikifa.ac', NULL, '$2y$10$qfLvOM050t072sWvKd8jveXoXOmsLvQEC.//e87Z0glBzOR.rlq16', NULL, '2019-07-15 19:34:11', '2019-07-15 19:34:11'),
(47, 'Endang Djuana', 'edjuana', '02156632328428', 720, '2', 'edjuana@trisakti.ac.id', NULL, '$2y$10$oOeev2gXWIHaqld6Okxfh.KPYc2fWVSseeNepn8eR1WJspbHTVcMC', NULL, '2019-07-18 01:27:18', '2019-07-18 01:27:18'),
(48, 'Diah Asta Putri', 'diah.asta', '+6281393818141', 1693, '2', 'diah.putri@bio.uad.ac.id', NULL, '$2y$10$I./qBR.0F3RWfK2ghXrAKe60nT26LXbc/.zmrtuEvXVKKfRdbRrNC', NULL, '2019-07-18 02:15:04', '2019-07-18 02:15:04'),
(49, 'Ahmad Rio Adriansyah', 'Arasy', '081573954126', 1447, '2', 'arasy@nurulfikri.ac.id', NULL, '$2y$10$c6rTY8gTyZ9L425U/I9eYuQ/LA04pmIy/R2EIXWCRh9sf7UJTVd1.', NULL, '2019-07-18 02:42:53', '2019-07-18 02:42:53'),
(50, 'Andi nur bau massepe', 'massepe', '08114103334', 6, '2', 'massepe@gmail.com', NULL, '$2y$10$2IyeiYFvDZeZu5HdD8XZ2.1jpAZRLKH5KBIpnvtZ69yxGXe9YRntq', NULL, '2019-07-18 19:55:55', '2019-07-18 19:55:55'),
(51, 'Julius', 'juliuschai', '089604058768', 66, '4', 'juliustjai20@gmail.com', NULL, '$2y$10$KaR4vQR5G9CjOJnjUC.rcux.kmrpBnjIKBkJ26MsB7yo1NnL94UQm', NULL, '2019-07-19 21:15:56', '2019-07-19 21:15:56'),
(52, NULL, 'Imartoyo', NULL, NULL, '2', 'imartoyo@yahoo.com', NULL, '$2y$10$Dj98E88dZyIh1G6sjyuJSOHKtleKMxl/noPwjy1GotAvWd.KUjUSG', NULL, '2019-07-23 17:42:58', '2019-07-23 17:42:58'),
(53, NULL, 'YUDI DARMA', NULL, NULL, '2', 'yudidarma@ikippgriptk.ac.id', NULL, '$2y$10$sGjpKizbKZdP1XfmIS/RLucUj0Qxj6BlTSCI7P8DeGfnjUzx4q5Gi', NULL, '2019-07-23 19:44:23', '2019-07-23 19:44:23'),
(54, NULL, 'Risna Rahmawati', NULL, NULL, '1', 'risnarahmawati@student.ub.ac.id', NULL, '$2y$10$281ojUV3zllqK.CZY/6F9OzzQsEwlb/17rX1g8XHKcc.bEWOu4Sdq', NULL, '2019-07-23 21:30:13', '2019-07-23 21:30:13'),
(55, NULL, 'BayyinahNH', NULL, NULL, '2', 'bayyinah.nh@trilogi.ac.id', NULL, '$2y$10$Fetx56iaYY6T01U1s9ntAethB.Q4XgiEOG.gc13YkmBbkaO6z0/Ca', NULL, '2019-07-23 22:32:26', '2019-07-23 22:32:26'),
(56, NULL, 'norma8', NULL, NULL, '1', 'untukcv@gmail.com', NULL, '$2y$10$tdLaTEQZ/M0CO3e.Jm/zCeZ2Wn4trppYjFFu3UWCJ54qf.h/ep0qy', NULL, '2019-07-23 23:15:44', '2019-07-23 23:15:44'),
(57, NULL, 'evankarina', NULL, NULL, '2', 'kelana.eva@gmail.com', NULL, '$2y$10$/55hbSYRPZ5A6wsDKqC2JOjnSws4U9M4Wic5ZBRC3Q.3Mi8Hy/wgC', NULL, '2019-07-24 19:41:57', '2019-07-24 19:41:57'),
(58, NULL, 'Rahmat Widia Sembiring', NULL, NULL, '2', 'rahmatws@gmail.com', NULL, '$2y$10$VR/rjY99D9bDHydbnHrR/OJxXtk6cU8CoOPTKMp3Dy9UpEEjTYiWe', NULL, '2019-07-25 02:55:52', '2019-07-25 02:55:52'),
(59, NULL, 'aruybiznet', NULL, NULL, '2', 'nurahmadruyani@gmail.com', NULL, '$2y$10$SoaGFzrnLnWpcpAyKuLQr.acQ2KiXN5Ms9sND0cq24UUPCkBZ8b2S', NULL, '2019-07-25 19:08:16', '2019-07-25 19:08:16'),
(60, NULL, 'farhan', NULL, NULL, '3', 'farhan@stiekesatuan.ac.id', NULL, '$2y$10$VUupeDnOqna7378k9l5JzeJW7sfjXzV4W44gHUQBUpy.SKc7NDXf.', NULL, '2019-07-25 20:17:48', '2019-07-25 20:17:48'),
(61, NULL, 'Muhardi', NULL, NULL, '2', 'muhardihasanuddin@gmail.com', NULL, '$2y$10$y9RCJgoNPpJl7Ry75JiKQOdh82.LmI6e2ErmQNKgQXqGinTnI5z6K', NULL, '2019-07-26 20:42:11', '2019-07-26 20:42:11'),
(62, NULL, 'freddymanullang', NULL, NULL, '3', 'freddy.manullang@yahoo.com', NULL, '$2y$10$77OJU0sRCkq/j/.lnP.AIeQtIBXsLyj3llT66nbvboavW2sWkYau2', NULL, '2019-07-28 21:39:49', '2019-07-28 21:39:49'),
(63, NULL, 'muhammadainul66@gmail.com', NULL, NULL, '1', 'muhammadainul66@gmail.com', NULL, '$2y$10$GyMdUDbT.CZeRyOGEkQeOe0NYciNKI90TRPRoaGvNjMcCXV6oXljK', NULL, '2019-07-28 22:02:56', '2019-07-28 22:02:56'),
(64, 'Juwita Moreen Toar', 'juitareen', '081340025692', NULL, '2', 'juitareen@gmail.com', NULL, '$2y$10$todY55/sgxEcT3a38QTUaepy27L5uVrlG.SkUrcXdGaMbiW7.Rtxq', NULL, '2019-07-29 01:04:43', '2019-07-29 01:08:42'),
(65, 'Agung Nugraha Eka Saputra', 'agungnugraha.id', '085228438203', NULL, '3', 'agungnugraha.id@gmail.com', NULL, '$2y$10$G7Fg/nzR3VcdN3mPs6tsCe.GmTO2XB36gZcrc4KK3IPi7WduPNUiC', NULL, '2019-07-30 20:23:08', '2019-07-30 20:24:10'),
(66, NULL, 'dityack', NULL, NULL, '2', 'aditya.nurrochman22@gmail.com', NULL, '$2y$10$4J4jx5n7PISPoIUAzCXuQ.BJ/VgDVP1HjmkrAklltvZ6ox0a9zZz2', NULL, '2019-07-30 23:59:12', '2019-07-30 23:59:12'),
(67, NULL, 'faldi', NULL, NULL, '1', 'rifaldi20006@gmail.com', NULL, '$2y$10$Xlm3dg6prrWx3O6h5h/MpOG7d1CoDH7pPg15FSIBd2uXRrM9LJgTy', NULL, '2019-07-31 20:52:35', '2019-07-31 20:52:35'),
(68, NULL, 'suprayogi1203', NULL, NULL, '2', 'cecepsuprayogi@staff.gunadarma.ac.id', NULL, '$2y$10$l/AeuLNweWnW38HM.W0W9OPi9fzlyanphvWiz0eJEiAlyEQsCzH9i', NULL, '2019-08-02 02:50:14', '2019-08-02 02:50:14'),
(69, 'Faidul Adzim', 'fadzim', '081241956198', 2764, '2', 'faidul.adzim@unismuh.ac.id', NULL, '$2y$10$LvCUfw7prjk5It74YkWYaeEU8cwhTlFv25bZd3iwskAiKPoqCfzt6', NULL, '2019-08-02 07:55:16', '2019-08-02 07:56:17'),
(70, 'Abdullah Muhazir', 'muhazir', '08126428710', 168, '2', 'muhazir@gmail.com', NULL, '$2y$10$TSp8jfeourPjO9f9DGWBGuDYx6FwDsEoRvEtC5FyuY3QMoPQg5Xnq', NULL, '2019-08-05 06:59:21', '2019-08-05 07:01:09'),
(71, NULL, 'alan', NULL, NULL, '3', 'alan@ub.ac.id', NULL, '$2y$10$UEMsWx.kHt/gkNQknqhJMuJ41eGKz4Fps6fkzk/3Oi5zg6EjWDGnu', NULL, '2019-08-06 00:17:14', '2019-08-06 00:17:14'),
(72, NULL, 'aries_harry', NULL, NULL, '1', 'ariesharry3@gmail.com', NULL, '$2y$10$3DWa7l0t6Wzm0h7.cpS2i.XWCcLWaoX7CZkt74ZNdL2klDdFfciLS', NULL, '2019-08-06 06:56:46', '2019-08-06 06:56:46'),
(73, 'Fajrin', 'fajrin', '82387512013', 3205, '1', 'fajrin@itp.ac.id', NULL, '$2y$10$dAXoDJZPkS4ux0j4464/r.836PwOkwd9/YOE8DWz/i0KEw9RvhdAC', NULL, '2019-08-07 20:23:54', '2019-08-07 20:25:07'),
(74, 'Moch. Sholeh, ST., MT.', 'Moch. Sholeh, ST., MT.', '081233049080', 102, '2', 'moch.sholeh@polinema.ac.id', NULL, '$2y$10$bOLVlZ1n.ScjYteITFLXC.bPZafetg8J/S7YT/amDFg96SOvbOpW.', NULL, '2019-08-07 22:13:18', '2019-08-07 22:16:27'),
(75, NULL, 'DewaEka', NULL, NULL, '2', 'dewaeka14@gmail.com', NULL, '$2y$10$4kYHBhYYX/1k/ETvgD/Cj.v6hwwb77Mc/zPZfWJsVMhmJGdB1JuI2', NULL, '2019-08-08 00:26:43', '2019-08-08 00:26:43'),
(76, NULL, 'mhsantosa', NULL, NULL, '2', 'mhsantosa@undiksha.ac.id', NULL, '$2y$10$WTaDedlEEsukXRfxRMTDIuUDvQsegocKfuTu4N/igjff7/Nkzwyv6', NULL, '2019-08-08 00:32:32', '2019-08-08 00:32:32'),
(77, NULL, 'suartini', NULL, NULL, '2', 'suartini@gmail.com', NULL, '$2y$10$9qRgGnJbqtINFovdyz6RIO6NphCheUvwiPI1EomQuk2YUucARAQZW', NULL, '2019-08-08 00:36:23', '2019-08-08 00:36:23'),
(78, NULL, 'satya_hermawan84', NULL, NULL, '2', 'satya.hermawan@undiksha.ac.id', NULL, '$2y$10$ozr75mEmtc/47Z3e8zbLDuMt0sg7y4/4CbNao5s3sxSVcVehcSfU.', NULL, '2019-08-08 00:39:50', '2019-08-08 00:39:50'),
(79, 'Widya Pratiwi, S.E., M.Si., Ak. CA', 'WidyaPratiwi', '08117456911', 3270, '2', 'upiktambihitambana617@gmail.com', NULL, '$2y$10$/qjJxeSLK0TxmAL.uHDsS.IryTibv0XC3Oo8wATmjj8VZSZK7srxq', NULL, '2019-08-09 21:42:39', '2019-08-09 21:45:24'),
(80, NULL, 'surya', NULL, NULL, '3', 'alwazys.surya45@gmail.com', NULL, '$2y$10$4mcWi1ADYfegJW8RR09uzOG2eTC6AliV0bawsTbRMsVktpEh22SMi', NULL, '2019-08-10 16:37:43', '2019-08-10 16:37:43'),
(81, NULL, 'shokhirul imam', NULL, NULL, '2', 'shokhirul_imam@polije.ac.id', NULL, '$2y$10$YkUY4Vnw2FLjhj60O913vOWWYbPhbSRIWs1RTD0LRwtuZ8CBjPQ2u', NULL, '2019-08-12 01:25:38', '2019-08-12 01:25:38'),
(82, NULL, 'Maliki97', NULL, NULL, '1', 'muhammadmaliki797@gmail.com', NULL, '$2y$10$Z.os0JNRjz5kjj3k9geImO1wx9Kp5ZVAyCbrJB2Om42.naIFOVfHq', NULL, '2019-08-12 11:29:29', '2019-08-12 11:29:29'),
(83, 'herry Djainal', 'herry djainal', '082191914147', 3683, '2', 'herrydjainal01@gmail.com', NULL, '$2y$10$I0D1uBP8xx4VdOFdGmqf6.f8G2oFFBWoxwYwKMFrh2PvAstGPsugS', NULL, '2019-08-13 02:00:12', '2019-08-13 02:02:39'),
(84, NULL, 'hartoto', NULL, NULL, '2', 'hartoto@unm.ac.id', NULL, '$2y$10$kA0KMeaQMUGMN6lz.fI1pO07rCWuZFL6xGYlC5274lKz6ep9zSTzy', NULL, '2019-08-14 07:59:31', '2019-08-14 07:59:31'),
(85, NULL, 'Avesliper', NULL, NULL, '3', 'avesters@yandex.ru', NULL, '$2y$10$xKR/Kj17GZaZbiHlNKjvKuXHZ4XLCvKAkb91K8OK8H3YHhn55bp22', NULL, '2019-08-14 12:51:38', '2019-08-14 12:51:38'),
(86, NULL, 'rawittea', NULL, NULL, '3', 'rasmono.wira@gmail.com', NULL, '$2y$10$2USJQwJYM4Y9o1L33bYPs.0hqo2ylpR4WGyKjn7FefXBG8c2lTK6K', NULL, '2019-08-15 01:44:11', '2019-08-15 01:44:11'),
(87, 'Susanto', 'Susanto2001', '+6285799922206', 1840, '2', 'susanto.unikal@gmail.com', NULL, '$2y$10$HgFTXY0EQIz6bOSRKC2p/eLqVTsSKaPz8hGvVXhMK4RrobwuRRyi2', NULL, '2019-08-15 02:31:07', '2019-08-15 02:35:36'),
(88, NULL, 'Manto', NULL, NULL, '3', 'manto7luga@gmail.com', NULL, '$2y$10$PPrJr3jWAr5AdzvWiCRsUed5ZxZNeUJ5uNBA2v9ka6/RDwmfvl.BW', NULL, '2019-08-15 02:53:27', '2019-08-15 02:53:27'),
(89, NULL, 'sfuady', NULL, NULL, '2', 'sfuady@unja.ac.id', NULL, '$2y$10$BuJ.rTVoiPcMOmE4t3drG.XjLTdEhD9tGGVDanWGUIRcu0/jP4NpG', NULL, '2019-08-17 03:09:15', '2019-08-17 03:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_instansi_id_foreign` FOREIGN KEY (`instansi_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
