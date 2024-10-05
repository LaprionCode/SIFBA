-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 06:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anaks`
--

CREATE TABLE `anaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rtrw` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `ppks` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kasus` text NOT NULL,
  `kebutuhan` varchar(255) NOT NULL,
  `hidup_layak` varchar(255) DEFAULT NULL,
  `perawatan` varchar(255) DEFAULT NULL,
  `dukungan_keluarga` varchar(255) DEFAULT NULL,
  `terapi` varchar(255) DEFAULT NULL,
  `pelatihan` varchar(255) DEFAULT NULL,
  `kewirausahaan` varchar(255) DEFAULT NULL,
  `aksesibilitas` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `bantuan` date DEFAULT NULL,
  `petugas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anaks`
--

INSERT INTO `anaks` (`id`, `nama`, `nik`, `kk`, `birth_date`, `kelamin`, `agama`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `rtrw`, `alamat`, `ktp`, `ppks`, `kategori`, `kasus`, `kebutuhan`, `hidup_layak`, `perawatan`, `dukungan_keluarga`, `terapi`, `pelatihan`, `kewirausahaan`, `aksesibilitas`, `foto`, `bantuan`, `petugas`, `created_at`, `updated_at`) VALUES
(112243, 'Anindita keisha Azzahra', '1471074707180001', '1471071904180002', '2018-07-07', 'Laki-Laki', 'Islam', 'RIAU', 'PEKANBARU', 'Bukit Raya', 'Simpang Tiga', '002/004', 'Jl Tengku bey Gg Jati blok A No. 8 RT 2 RW 4', 'public/ktp/MTNDCCyDgMpl3wMw2FexCuoSMAmQ7PponM0PUxR3.png', 'public/ppks/bHqn2JuKcSBDKYC1KWuTXPuELooxRr7SabiOc5Av.png', 'Disabilitas', 'Anindita keisha Azzahra klaster Disabilitas Fisik sehat mobilitas sendiriSecara fisik sehat, tidak bisa mendengar karena kena firus sewaktu', '[\"Aksesibilitas\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/foto/BogpwakxNgARCKSXjSce1kCJ39j97nxpR6SfBJbC.png', '2024-01-12', 'Suyono', '2024-06-10 00:43:01', '2024-06-10 00:43:01'),
(112244, 'Robayani', '1471035101690001', '1471032409070009', '1969-01-11', 'Perempuan', 'Islam', 'RIAU', 'PEKANBARU', 'Sail', 'sukamulyo', 'Sukamulyo RT. 004 RW. 006', 'Jalan Hangtuah  Kp. Kelapa Nomor 6', 'public/ktp/czTdkV6yUeGwPy0uOIL9KgjMFeN6XGY71d5BK0U0.png', 'public/ppks/kaAVbzP55iuEGIdTXtr5FV91J4g4mRdG7deSUu1j.png', 'Disabilitas', 'Robayani klaster Disabilitas Penyandang Disabilitas FisikTidak ada PPKS membutuhkan komponen Layanan Nutrisi, Penambahan Daya Tahan Tubuh', '[\"Aksesibilitas\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/foto/nDwR164avoTViXF0oLbs32Ew5ikzSNiMh6oguIG4.png', '2024-01-12', 'Rakhmat Ariyanto', '2024-06-10 00:46:24', '2024-06-10 00:46:24'),
(112245, 'FATIMAH', '1403017112480108', '1403013012070079', '1948-12-31', 'Perempuan', 'Islam', 'RIAU', 'BENGKALIS', 'BENGKALIS', 'Kuala Alam', 'RT 010 RE 005', 'Gg. Nelayan', 'public/ktp/c5ZH3H1JoHpZTLFAW8bO0VAE5GhmQWrmWQ7ah0w2.png', 'public/ppks/3ZBweyACIfSOMS4RAou0sWzbBVdDFwlse2fCgDpf.png', 'Lansia', 'FATIMAH klaster Lansia Mengalami sakit seperti asam urat dan kolesterol. Tidak bisa berjalan karena kaki sakitKondisi kaki sakit tidak bisa berjalan', '[\"Hidup Layak\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/foto/gVtBBrfqU0tXw7GlFK4cMvNIQO66tGInbt0vscOz.png', '2024-03-04', 'Ekagrata Henja Angora', '2024-06-10 00:50:29', '2024-06-10 00:50:29'),
(112246, 'Asmah', '1403025103430001', '1403020312070009', '1943-03-11', 'Laki-Laki', 'Islam', 'RIAU', 'BENGKALIS', 'Bantan', 'Selat Baru', 'RT 003 RW 005', 'Jl. Soekarno Hatta', 'public/ktp/S3DeEb8cRmVGem47blOtQnpJgECh4CGDi2g56n3p.png', 'public/ppks/SEghZHfe2pucjcAu9bagUmAwi5VhW8YiOq0Fm8FP.png', 'Lansia', 'Asmah  klaster Lansia PPKS mengalami sakit komplikasi dan tidak bisa berjalan sudh 4 Thun,hari² hanya dikasur baring dan dudukPPKS', '[\"Hidup Layak\",\"Aksesibilitas\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/foto/gwXPwPPwRIC8U4jbLedDKehLcJrTsaRlb5F7dTHf.png', '2024-03-04', 'Ekagrata Henja Angora', '2024-06-10 01:00:39', '2024-06-10 01:00:39'),
(112247, 'Ariyo putra alif', '1304042711140001', '1304040508140001', '2014-11-27', 'Laki-Laki', 'Islam', 'SUMATERA BARAT', 'TANAH DATAR', 'Lima kaum', 'Parambahan', '0000', 'Jorong tigo batua', 'public/ktp/BHv4SGHBx61pMTAGDBGY5PUBsal58iDPqwy8Np5c.png', 'public/ppks/DDXn1wHxbTKEY7g0SYEmdavPV5TrAtZ1P0vVd7cb.png', 'Anak', 'Ariyo putra alif klaster Anak SehatKorban bencana galodo PPKS membutuhkan komponen Layanan NutrisiPenguatan Kapabilitas dan Tanggungjawab SosialKonseling Keluarga rekomendasi  Layak', '[\"Pemenuhan Hidup Layak\",\"Dukungan Keluarga\"]', '{\"uraian\":\"2000\",\"nominal\":\"2000\"}', '{\"uraian\":null,\"nominal\":null}', '{\"uraian\":null,\"nominal\":null}', '{\"uraian\":null,\"nominal\":null}', '{\"uraian\":null,\"nominal\":null}', '{\"uraian\":null,\"nominal\":null}', '{\"uraian\":null,\"nominal\":null}', 'public/foto/EaQqBhnJqpl3rWYGr6K16CbpmnAtiyKcMWOH5mI6.png', '2024-05-25', 'Abdul Latif', '2024-07-06 04:42:53', '2024-07-06 04:42:53');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_29_071156_create_m_a_i_n_s_table', 1),
(6, '2024_04_30_025447_create_anaks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_a_i_n_s`
--

CREATE TABLE `m_a_i_n_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jod', '232323', NULL, 'Petugas Asesmen', '$2y$12$sJJG0yucSSbgDJbAh6kBlOoqnEIAZRcSulPTGs.6CpZJkb.8h7eGS', NULL, '2024-07-02 23:58:38', '2024-07-02 23:58:38'),
(2, 'bela', '212121', NULL, 'Petugas Asesmen', '$2y$12$Hn8feqB/t1oEXHw5Wu1REOiFVdKJ370vc/L6GI6L7mg1yYRPZ5oZ.', NULL, '2024-07-04 00:19:09', '2024-07-04 00:19:09'),
(3, 'admin', '202020', NULL, 'Staf Keuangan', '$2y$12$OwhosQPLn3GypZgTiVVReuSuNSpbA93EnSf7wBS671g1b1v6gmPAC', NULL, '2024-07-04 00:20:08', '2024-07-04 00:20:08'),
(4, 'admin1', '20', NULL, 'Petugas Asesmen', '$2y$12$k6/j5.zU7CWUH46OW8FwVOP8u2JVUdgy5PKB/xIWdJzpHEdn9cjB2', NULL, '2024-07-04 00:21:39', '2024-07-04 00:21:39'),
(6, 'admin2', '21', NULL, 'Petugas Asesmen', '$2y$12$eR5f0/BJAmZg7wsU0XeKz.zhzVJ/YQ2Qna4sWjcVwA3jOJtslkcL2', NULL, '2024-07-04 00:25:27', '2024-07-04 00:25:27'),
(7, 'admin3', '22', NULL, 'Petugas Asesmen', '$2y$12$f7giJGiOBDNYLaQ.9tJoGugQhZo1y5Lw7ptFyXhvZaULaDJn1dtCG', NULL, '2024-07-04 00:26:04', '2024-07-04 00:26:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anaks`
--
ALTER TABLE `anaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_a_i_n_s`
--
ALTER TABLE `m_a_i_n_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anaks`
--
ALTER TABLE `anaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112248;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_a_i_n_s`
--
ALTER TABLE `m_a_i_n_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
